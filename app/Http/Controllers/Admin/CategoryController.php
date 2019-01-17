<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class CategoryController extends Controller
{
    public function category(){
        $category = Category::all();
        return view('admin.category.index',compact('category'));
    }
    public function Create(){
        return view('admin.category.create');
    }

    public function saveCategory(Request $request){
        $this->validate($request,[
            'name'=>'required'
        ]);

        $category = new Category();
        $category->name = $request->name;
        $category->slug = str_slug($request->name);
        $category->save();

        return Redirect::to('/admin/category')->with('Message','Category Add Successfully');
    }

    public function editCategory($id){
        $category = Category::find($id);
        return view('admin.category.edit',compact('category'));
    }

    public function updateCategory(Request $request,$id){
        $this->validate($request,[
            'name'=>'required'
        ]);

        $category = Category::find($id);
        $category->name = $request->name;
        $category->slug = str_slug($request->name);
        $category->save();

        return Redirect::to('/admin/category')->with('Message','Category Update Successfully');
    }
    public function deleteCategory($id){
        $category = Category::find($id);
        $category->delete();
        return Redirect::to('/admin/category')->with('Message','Category Delete Successfully');
    }

}
