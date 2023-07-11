<?php

namespace App\Http\Controllers;

use App\Models\Items;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $total = 0;
        $productInCart = [];

        $productInSession = $request->session()->get('products');
        if ($productInSession) {
          $productInCart = Product::findMany(array_keys($productInSession));
          $total = Product::sumPricesByQuantities($productInCart, $productInSession);
        }

        $viewData = [
          'title' => 'Product Cart - Online Store',
          'subtitle' => 'Product Cart',
          'total' => $total,
          'products' => $productInCart
        ];
        return view('cart.index')->with('viewData', $viewData);
    }

    public function add(Request $request, $id): \Illuminate\Http\RedirectResponse
    {
      $products = $request->session()->get('products');
      $products[$id] = $request->input('quantity');
      $request->session()->put('products', $products);

      return redirect()->route('products.index');
    }

    public function delete(Request $request): \Illuminate\Http\RedirectResponse
    {
      $request->session()->forget('products');
      return back();
    }

    public function purchase(Request $request): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\Contracts\Foundation\Application
    {
      $productInSession = $request->session()->get('products');
      if ($productInSession) {
        $userId = Auth::user()->getId();
        $order = new Order();
        $order->setUserId($userId);
        $order->setTotal(0);
        $order->save();

        $total = 0;
        $productInCart = Product::findMany(array_keys($productInSession));
        foreach ($productInCart as $product) {
          $quantity = $productInSession[$product->getId()];
          $items = new Items();
          $items->setPrice($product->getPrice());
          $items->setProductId($product->getId());
          $items->setOrderId($product->getId());
          $items->save();
          $total = $total + ($product->getPrice() * $quantity);
        }
        $order->setTotal($total);
        $order->save();

        $newBalance = Auth::user()->getBalance() - $total;
        Auth::user()->setBalance($newBalance);
        Auth::user()->save();

        $request->session()->forget('products');

        $viewData = [
          'title' => 'Purchase Order | Online Store',
          'subtitle' => 'Purchase Order',
          'order' => $order,
        ];
        return view('cart.purchase')->with('viewData', $viewData);
      } else {
        return redirect()->route('cart.index');
      }
    }
}
