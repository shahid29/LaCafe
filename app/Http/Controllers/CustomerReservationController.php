<?php

namespace App\Http\Controllers;

use App\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CustomerReservationController extends Controller
{
    public function reservation(Request $request){
        $this->validate($request,[
            'name'=>'required',
            'phone'=>'required',
            'email'=>'required',
            'date_time'=>'required',
            'message'=>'required',
        ]);
        $reservation = new Reservation();
        $reservation->name =    $request->name;
        $reservation->phone =    $request->phone;
        $reservation->email =    $request->email;
        $reservation->date_time =    $request->date_time;
        $reservation->message =    $request->message;
        $reservation->status =    false;
        $reservation->save();

        return Redirect::to('/')->with('Message','Your Reservation Request Send Successfully');
    }
}
