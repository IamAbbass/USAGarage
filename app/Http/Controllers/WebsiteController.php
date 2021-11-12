<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\GarageService;
use \App\Models\ShopCategory;
use \App\Models\Product;

class WebsiteController extends Controller
{
    public function welcome(){
        $GarageServices = GarageService::all();
        return view('welcome',['GarageServices'=>$GarageServices]);
    }
    public function services(){
        $GarageServices = GarageService::all();
        return view('services',['GarageServices'=>$GarageServices]);
    }
    public function shop(){
        if(request('c')){
            $category_id = request('c');
            $title = ShopCategory::findOrFail($category_id);
            $title = $title->name;

            $products = Product::where('category_id',$category_id)->get();
        }else{
            $title = 'Shop';
            $products = Product::all();
        }
        $ShopCategories = ShopCategory::orderBy('name')->get(); 


        return view('shop',[
            'title' => $title,
            'ShopCategories' => $ShopCategories,       
            'products'  => $products,     
        ]);
    }
    public function about(){
        $GarageServices = GarageService::all();
        return view('about',['GarageServices'=>$GarageServices]);
    }
    public function contact(){
        return view('contact');
    }
    public function quote(){
        $GarageServices = GarageService::all();
        return view('quote',['GarageServices'=>$GarageServices]);
    }
    public function cart(){
        return view('cart');
    }
    public function checkout(){
        return view('checkout');
    }

    public function product(){

        $product_id = request('p');
        $product = Product::findOrFail($product_id);

        return view('product',['product'=>$product]);
    }
}
