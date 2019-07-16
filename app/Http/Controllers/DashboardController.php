<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Bus;
use App\Operator;
use App\Admin;
use App\User;
use App\Booking;
use App\Passenger;
use DB;
use App\Http\Controllers\Traits\CrudTrait;

class DashboardController extends Controller
{
    use CrudTrait;

    protected $classmodel;
    protected $redirect;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    protected $views=[];
    public function __construct()
    {
        $this->middleware('auth:admin');
       
    }
    public function index(){
        $user = User::all();
        $admin = Admin::all();
        $bookings = Booking::all();
        return view('backend.home')->with(['user'=>$user,'admin'=>$admin,'bookings'=>$bookings]);
    }

    public function adminIndex(){
        $results = Admin::all();

        return view('backend.users.admin')->with('results',$results);
    }

    public function passengerIndex(){
        $results = Passenger::all();

        return view('backend.passenger')->with('results',$results);
    }

    public function bookingIndex(){
        
        $results = DB::table('passengers')->join('bookings','passengers.id','=','bookings.passenger_id')->get();
    
        return view('backend.booking')->with('results',$results);
    }

    public function userIndex(){
        $results = User::all();
        return view('backend.users.user')->with('results',$results);
    }

    public function destroyAdmin($id, Admin $admin){
        $admin = $admin->find($id);
        $admin->delete($id);
        return redirect()->back()->with('message','the record was deleted successfully');
    }

    public function destroyUser($id, User $user){
        $user = $user->find($id);
        $user->delete($id);
        return redirect()->back()->with('message','the record was deleted successfully');
    }

    public function destroyPassenger($id, Passenger $passenger){
        $passenger = $passenger->find($id);
        $passenger->delete($id);
        return redirect()->back()->with('message','the record was deleted successfully');
    }

    public function destroyBooking($id, Booking $booking){
        $booking = $booking->find($id);
        $booking->delete($id);
        return redirect()->back()->with('message','the record was deleted successfully');
    }


}
