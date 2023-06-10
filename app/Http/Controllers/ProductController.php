<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function product(){
        $categories = Category::all();
        return view('product', compact('categories'));
    }
    function productAdd(Request $request){
        $product = new Product();
        $product->product_name = $request->product_name;
        $product->author = $request->author;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->description = $request->description;
        $product->category_id = $request->category_id;
        $product->rating = $request->rating;
        if ($request->hasFile('photo')) {
            $destination = 'uploads/products/' . $product->profile_photo;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('photo');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('uploads/products/', $filename);
            $product->photo = $filename;
        }
        $product->save();
        return redirect(route('all-productAndCategory'));
    }

    function edit_product($id){
        $categories = Category::all();
        $product = Product::find($id);
        return view('edit.productedit', compact('product', 'categories'));
    }
    function update_product(Request $request){
        $id = $request->id;
        $product = Product::find($id);
        $product->product_name = $request->product_name;
        $product->author = $request->author;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->description = $request->description;
        $product->category_id = $request->category_id;
        $product->rating = $request->rating;
        if ($request->hasFile('photo')) {
            $destination = 'uploads/products/' . $product->profile_photo;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('photo');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('uploads/products/', $filename);
            $product->photo = $filename;
        }
        $product->save();
        return redirect(route('all-productAndCategory'));
    }
    function delete($id){
        $product = Product::find($id);
        $product->delete();
        return redirect(route('all-productAndCategory'));
    }
}
