<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminProductController extends Controller
{
    public function index()
    {
        $viewData = [
        'title' => 'Admin Page - Product - Online Store',
        'products' => Product::all(),
        ];

        return view('dashboard.products.index')->with('viewData', $viewData);
    }

    public function store(Request $request)
    {
        (new \App\Models\Product)->validate($request);

        $newProduct = new Product();
        $newProduct->setName($request->input('name'));
        $newProduct->setDescription($request->input('description'));
        $newProduct->setPrice($request->input('price'));
        $newProduct->setImage('game.png');
        $newProduct->save();

        /*$creationData = $request->only(['name', 'description', 'price']);
        $creationData['image'] = strtolower($creationData['name']);
        Product::create($creationData);*/

        if ($request->hasFile('image')) {
          $imageName = strtolower($newProduct->getName().".".$request->file('image')->extension());
          Storage::disk('public')->put(
            $imageName,
            file_get_contents($request->file('image')->getRealPath())
          );
          $newProduct->setImage($imageName);
          $newProduct->save();
        }

        return back();
    }

    public function delete($id) {
      Product::deleted($id);
      return back();
    }

    public function edit($id) {
      $viewData = [
        'title' => 'Admin Page - Edit Product - Online Store',
        'product' => Product::findOrFail($id)
      ];
      return view('dashboard.products.edit')->with('viewData', $viewData);
    }

    public function update(Request $request, $id) {
      Product::validate($request);

      $product = Product::findOrFail($id);
      $product->setName($request->input('name'));
      $product->setDescription($request->input('description'));
      $product->setPrice($request->input('price'));

      if ($request->hasFile('image')) {
        $imageName = strtolower($product->getName().".".$request->file('image')->extension());
        Storage::disk('public')->put(
          $imageName,
          file_get_contents($request->file('image')->getRealPath())
        );
        $product->setImage($imageName);
      }
      $product->save();
      return redirect()->route('admin.products.index');
    }
}
