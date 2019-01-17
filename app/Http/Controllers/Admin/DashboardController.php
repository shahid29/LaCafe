<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Contact;
use App\Item;
use App\Reservation;
use App\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index(){
        $category = Category::all();
        $item = Item::all();
        $slider = Slider::all();
        $message = Contact::all();
        $w_reservation = Reservation::where('status',0)->get();
        $c_reservation = Reservation::where('status',1)->get();
        return view('admin.dashboard',compact('category','item','slider','message','w_reservation','c_reservation'));
    }
}
