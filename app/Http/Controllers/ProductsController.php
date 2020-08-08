<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Product;
use App\Cart;
use App\Customer;

class ProductsController extends Controller
{

    public function index()
    {
      $products = Product::all();
      

     return view('products')->with('products',$products);   
    }

  /*
  *
  *@param id $id

  */


    public function cart(int $id )

    {

      $product = Product::where('id',$id)->firstOrFail();
      return view('cart')->with('product',$product);

    }

    public function ordered(Request $request)
    {
      $this->validate($request,[
        'name' => 'required',
        'phone' => 'required',
        'postcode' => 'required',
        'address' => 'required',
        'email' => 'required',
        
    ]);

   $customer = new Customer;
   $customer->name = $request->input('name');
   $customer->phone = $request->input('phone');
   $customer->postcode = $request->input('postcode');
   $customer->address = $request->input('address');
   $customer->email = $request->input('email');
   $customer->cc = $request->input('cc');

   $customer->save();
    
   return redirect('/')->with('success','ご注文を受け付けました');

    }

   
}
