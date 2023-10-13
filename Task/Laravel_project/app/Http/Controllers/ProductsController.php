<?php

namespace App\Http\Controllers;

use App\Models\products;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    //   echo "hello";
    // dd("hello");
    $products=  products::all();
  
    return view('viewall',compact("products"));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('addproduct');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request,  products  $products)
    {
        // dd($request->all());
        $products->name = $request->name;
        $products->price = $request->price;
        $products->quantity = $request->quantity;
        $products->save();
        return redirect('/product');
    }

    /**
     * Display the specified resource.
     */
    public function show(products $products)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id,products $products)
    {
        $editproduct = products::find($id);
        return view("editproduct",compact("editproduct"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id,Request $request, products $products)
    {
        $updateproduct = products::find($id);
        // dd($updateproduct);
        $updateproduct->name = $request->name;
        $updateproduct->price = $request->price;
        $updateproduct->quantity = $request->quantity;
        $updateproduct->save();
        return redirect("product");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id,products $products)
    {
        $productdelete = products::find($id);
       $productdelete->delete();
       return redirect("product");
    }
}
