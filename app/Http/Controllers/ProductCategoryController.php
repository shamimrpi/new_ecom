<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class ProductCategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('admin.categories.index',compact('categories'));
    }
    public function create(){
    	return view('admin.categories.create');
    }


     public function store(Request $request)
    {

        $this->validate($request,[
            'name'=> 'required'
        ]);
        $category = new Category();
        $category->name =$request->name;
        $category->save();
        return redirect()->route('product.category')->with('message','Category Created Successfully');
    }
    public function edit($id){
    	$category = Category::find($id);
    	return view('admin.categories.edit',compact('category'));

    }
    public function update(Request $request,$id){
    	
    }
}
