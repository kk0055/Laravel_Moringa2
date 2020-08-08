<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Cart;

class PagesController extends Controller
{
    public function getHome()
    {
     return view('home');   
    }
    public function getAbout()
    {
     return view('about');   
    }
    public function getContact()
    {
     return view('contact');   
    }
    
    public function cart(Request $request)
    {
         $products = Product::all();

         $carts = new Cart;

     
          
     
     return view('cart')->with('products',$products);   
    }
}
