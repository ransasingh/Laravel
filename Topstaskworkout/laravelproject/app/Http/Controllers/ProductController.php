<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(product $product)
    {
        // $test="testing";
  
        $productsList = DB::table('product')->get();
      
        return view("productlist", compact('productsList')); 
        // dd($allproduct);
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
    public function store(Request $request,product $product)
    {
  
        // dd($request);
        // dd($request->all());
        $product->product_title = $request->product_title;
        $product->product_name = $request->product_name;
        dd($product);
    }
    

    /**
     * Display the specified resource.
     */
    public function show(product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, product $product)
    {
   
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id,product $product)
    {
        $productById = $product::find($id);
        $productById->delete();
        return redirect('/product')->with('success', 'Task deleted successfully');
    }
   
}
