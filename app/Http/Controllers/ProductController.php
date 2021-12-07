<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ShopCategory;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $products = Product::all();
        return view('dashboard/products/list',[
            'products' => $products,
        ]);        
    }
    
    public function create()
    {
        $categories = ShopCategory::all();
        return view('dashboard/products/create',[
            'categories' => $categories,
        ]); 
    }
    
    public function store(Request $request)
    {
        $file = $request->file('image');
        $destinationPath    = 'uploads/'; // upload path
        $upload             = time().".".$file->getClientOriginalExtension();
        $file->move($destinationPath, $upload);

        Product::create([
            'category_id'   => request('category_id'),
            'title'         => request('title'),
            'image'         => $upload,
            'brand'         => request('brand'),
            'note'          => request('note'),
            'years'         => request('years'),
            'price'         => request('price'),
            'in_stock'      => (request('in_stock') == "true"),
        ]);

        session()->flash('success','Product Successfully Added!');
        return redirect('/home/product');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
