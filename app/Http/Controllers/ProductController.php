<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
  /*public static array $products = [
    ['id'=>'1', 'name'=>'TV', 'description'=>'Best TV', 'img'=>'tv.webp', 'price'=>'2,000,000'],
    ['id'=>'2', 'name'=>'Laptop', 'description'=>'Laptop DELL', 'img'=>'laptop.jpg', 'price'=>'12,000,000'],
    ['id'=>'3', 'name'=>'Table', 'description'=>'Food Table', 'img'=>'table.png', 'price'=>'1,800,000'],
    ['id'=>'4', 'name'=>'Iphone', 'description'=>'Best Brand Smartphone Iphone', 'img'=>'iphone.webp', 'price'=>'15,000,000'],
  ];*/

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $viewData = [
        'title' => 'Product - Online Store',
        'subtitle' => 'List of Products',
        'products' => Product::all(),
        ];
        $product = DB::table('products')->paginate(6);

        return view('products.index', ['product', $product])->with('viewData', $viewData);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $product = Product::findOrFail($id);
        $viewData = [
          'title' => $product->getName() . " - Online Store",
          'subtitle' => $product->getName() . " - Product Information",
          'product' => $product,
        ];
        return view('products.show')->with('viewdata', $viewData);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
