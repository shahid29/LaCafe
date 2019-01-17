<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Item;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class ItemController extends Controller
{
    public function item(){
        $item = Item::all();
        return view('admin.item.index',compact('item'));
    }

    public function Create(){
        $item = Category::all();
       return view('admin.item.create',compact('item'));

    }
    public function saveItem(Request $request){
        $this->validate($request,[
            'name'=>'required',
            'category_id'=>'required',
            'description'=>'required',
            'price'=>'required',
            'image'=>'required | mimes:jpg,png,jpeg',
        ]);

        $image = $request->file('image');
        $slug = str_slug($request->name);
        if (isset($image)){
            $date = Carbon::now()->toDateString();
            $name = $slug.'-'.uniqid().'.'.$image->getClientOriginalExtension();
            $image->move('public/uploads/images',$name);
        }else{
            $name = 'default.png';
        }
        $item = new Item();
        $item->name = $request->name;
        $item->category_id = $request->category_id;
        $item->description = $request->description;
        $item->price = $request->price;
        $item->image =  $name;
        $item->save();

        return Redirect::to('admin/item')->with('Message','Item Add Successully');
    }
}
