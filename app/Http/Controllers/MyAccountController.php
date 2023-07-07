<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MyAccountController extends Controller
{
    public function orders(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
      $viewData = [
        'title' => 'My Orders - Online Store',
        'subtitle' => 'My Orders',
        'orders' => Order::with(['items.product'])->where('user_id', Auth::user()->getId())->get(),
      ];
      return view('myaccount.orders')->with('viewData', $viewData);
    }
}
