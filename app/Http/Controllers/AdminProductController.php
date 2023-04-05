<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class AdminProductController extends Controller
{
    public function index()
    {
        $viewData = [
        'title' => 'Admin Page - Product - Online Store',
        'products' => Product::all(),
        ];

        return view('dashboard.home.products')->with('viewData', $viewData);
    }
}
