<?php

namespace App\Http\Controllers\Admin;

use App\Slider;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class SliderController extends Controller
{
    public function slider(){
        $sliders = Slider::all();
        return view('admin.slider.index',compact('sliders'));
    }

    public function Create(){
        return view('admin.slider.create');
    }

    public function saveSlider(Request $request){
        $this->validate($request,[
            'title'=>'required',
            'sub_title'=>'required',
            'image'=>'required | mimes:jpg,png,jif,jpeg',
        ]);

        $image = $request->file('image');
       $slug = str_slug($request->title);
       if (isset($image)){
            $date = Carbon::now()->toDateString();
            $name = $slug.'-'.$date.'-'.uniqid().'.'.$image->getClientOriginalExtension();
            $image->move('public/uploads/images',$name);
       }else{
        $name = 'default.png';
       }
       $slider = new Slider();
       $slider->title = $request->title;
       $slider->sub_title = $request->sub_title;
       $slider->image = $name;
       $slider->save();

       return Redirect::to('admin/slider')->with('Message','Slider Add Successully');
    }

    public function editSlider($id){
        $slider = Slider::find($id);
        return view('admin.slider.edit',compact('slider'));


    }

    public function updateSlider(Request $request,$id){
        $this->validate($request,[
            'title'=>'required',
            'sub_title'=>'required',
            'image'=>' mimes:jpg,png,jif,jpeg',
        ]);
        $slider = Slider::find($id);
        $image = $request->file('image');
        $slug = str_slug($request->title);
        if (isset($image)){
            $date = Carbon::now()->toDateString();
            $name = $slug.'-'.$date.'-'.uniqid().'.'.$image->getClientOriginalExtension();
            $image->move('public/uploads/images',$name);
        }else{
            $name = $slider->image;
        }
        $slider->title = $request->title;
        $slider->sub_title = $request->sub_title;
        $slider->image = $name;
        $slider->save();

        return Redirect::to('admin/slider')->with('Message','Slider Update Successully');

    }

    public function deleteSlider($id){

        $slider = Slider::find($id);
        if (file_exists('public/uploads/image/'.$slider->image)){
            unlink('public/uploads/images/'.$slider->image);
        }
        $slider->delete();
        return Redirect::to('admin/slider')->with('Message','Slider Deleted Successully');
    }
}
