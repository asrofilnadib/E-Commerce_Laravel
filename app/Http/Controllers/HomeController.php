<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $viewData = [
        'title' => 'Home Page - Online Store'
        ];
        return view('home.index')->with("viewData", $viewData);
    }

    public function about()
    {
        $viewData = [
        'title' => 'About us - Online Store',
        'subtitle' => 'About Us',
        'description' => 'This is an about page...',
        'author' => 'Developed by : Asrofil Nadib',
        ];
        return view('home.about')->with('viewData', $viewData);
    }
}
