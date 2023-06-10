<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class PorductsAndCategoriesController extends Controller
{
    function productAndCategory(){
        $products = Product::all();
        $categories = Category::all();
        $forswipers = Product::latest()->take(5)->get();
        return view('allproduct', compact('products', 'categories', 'forswipers'));
    }
}
