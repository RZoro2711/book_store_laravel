<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    function home()
    {
        if (Auth::check()) {
            // $products = Product::all();
            $forswipers = Product::latest()->take(5)->get();
            $products = Product::all();

            return view('home', compact('products', 'forswipers'));
        }
        return redirect(route('login'))->with('fail', 'Customer should login first!');
    }
    function search(Request $request){
        $forswipers = Product::latest()->take(5)->get();

        $searchText = $_GET['query'];

        $products = Product::where('product_name', 'like', '%'.$searchText.'%')
            ->orWhereHas('category', function ($query) use ($searchText) {
                $query->where('category_name', 'like', '%'.$searchText.'%');
            })
            ->get();

        return view('home', compact('products', 'forswipers'));
    }

    function detail($id){
        $product = Product::find($id);
        return view('detail', compact('product'));
    }
}
