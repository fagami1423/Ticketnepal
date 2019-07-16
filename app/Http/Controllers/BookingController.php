<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Passenger;
use App\Booking;
use Auth;

class BookingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){
        return view('frontend.checkout.checkout');
    }

    public function storeBooking(Request $request,Passenger $passenger, Booking $booking){
        $data = $request->all();
        
        $this->validate($request,[
            'name' => 'required|max:120',
            'contact' => 'required|min:10|numeric',
            'boarding_point' => 'required',
            'email'=>'required|email'
        ]);

        $passenger->user_id=auth()->user()->id;
        $passenger->name=$data['name'];
        $passenger->contact=$data['contact'];
        $passenger->email=$data['email'];
        $passenger->boarding_point=$data['boarding_point'];
        $passenger->departure_date=$data['departure_date'];
        if($passenger->save()){
            $booking->user_id=$passenger->user_id;
            $booking->passenger_id=$passenger->id;
            $booking->bus_id=$data['bus_id'];
            $booking->departure_date=$data['departure_date'];
            $booking->seat_occupied=$data['seat_occupied'];
            $booking->total_price=$data['total_price'];
            $booking->total_seats=$data['no_of_seats'];
            $booking->save();

            return view('frontend.checkout.checkout',compact('data'))->with('message','do payment checkout here');
        }
        else {
            return back()->withErrors('some error occured');
        }
    }
   



}
