<?php

namespace App\Http\Controllers;
use App\Models\Home;
use App\Models\product;
use App\Models\Category;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //return view('home');
        $products = Product::all();
        $categories = Category::all();
        return view('home.index', compact('products','categories'));
    }
}
