<?php

namespace App\Http\Controllers\Admin;

use App\Notifications\ReservationConfirmed;
use App\Reservation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Redirect;

class ReservationController extends Controller
{
    public function reservation(){
        $reservation = Reservation::all();
        return view('admin.reservation.index',compact('reservation'));
    }
    public function checkReservation($id){
        $reservation = Reservation::find($id);
        $reservation->status=1;
        $reservation->save();
        Notification::route('mail', $reservation->email)
            ->notify(new ReservationConfirmed());
        return Redirect::to('/admin/reservation')->with('Message','Reservation Confirm');
    }
    public function confirmReservation(){
        $reservation = Reservation::all();
        return view('admin.reservation.reservation_confirm',compact('reservation'));
    }
    public function deleteReservation($id){
        $reservation = Reservation::find($id);
        $reservation->delete();
        return Redirect::to('/admin/confirm_reservation')->with('Message','Reservation Deleted Successfully');
    }
}
