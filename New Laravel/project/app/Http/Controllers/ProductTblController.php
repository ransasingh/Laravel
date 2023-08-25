<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB
use DB;

class ProductTblController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Product $Product)
    {
        // echo "Called from prod Controller index";
        // \DB::connection()->enableQueryLog();
        DB::connection()->enableQueryLog();

        // $users = DB::table('users')->get();
        // $results = DB::select('select * from users where id = ?', [1]);
        // $allProducts = Product::all();
        $allProducts = $Product::all();
        return view("showallprod",compact('allProducts'));
        // $queries = DB::getQueryLog();
        // dd($allProducts);
        // dd($queries);



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
    public function store(Request $request,Product $Product)
    {
        // echo "<pre>";
        // print_r($request);
        // dd($request);
        $Product->title =$request->title; 
        $Product->description =$request->description; 
        $Product->price =$request->price; 
        $Product->product_image ="default.jpg"; 
        $Insert= $Product->save(); 
        return redirect("product");
        // dd($Insert);
        // dd($request->all());
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $Product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $Product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $Product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $Product)
    {
        //
    }
}
