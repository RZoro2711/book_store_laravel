<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    function category(Request $request){
        $category = new Category();
        $category->category_name = $request->category_name;
        $category->save();
        return redirect()->back();
        // return redirect(route('product-add'));
    }
    function edit_category($id){
        $category = Category::find($id);
        return view('edit.categoryedit', compact('category'));
    }
    function delete($id){
        $category = Category::find($id);
        $category->delete();
        return redirect(route('all-productAndCategory'));
    }
    function update_category(Request $request){
        $id = request()->id;
        $category = Category::find($id);
        $category->category_name = $request->category_name;
        $category->save();
        return redirect(route('all-productAndCategory'));
        // return redirect(route('product-add'));
    }

}
