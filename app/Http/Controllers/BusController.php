<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class BusController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    protected $data=[];

    public function __construct()
    {
        $this->middleware('auth')->except(['searchBuses','index']);
    }

    public function index(){
        return view('frontend.buses.bus');
    }
    public function searchBuses(Request $request){
        $this->validate($request,[
            'from'=>'required',
            'to'=>'required',
            'departure_date'=>'required|date|after:today',
            'shift'=>'required'
        ]);
        $searches = $request->all();       
        $cond=[];
        $departure_date=$searches['departure_date'];
                
        foreach ($searches as $keyy => $par) {
            if ($par != '') {
                $cond[$keyy] = $par;
            }
        }    
       if(count($cond)>=1){
           if(isset($cond['from']) || isset($cond['to']) || isset($cond['date'])|| isset($cond['shift']) ){
               $buses = DB::table('operators')->leftJoin('buses','operators.id',"=",'buses.operator_id')
                         ->where('buses.boarding_point','LIKE','%'.$cond['from'].'%')
                        ->orWhere('buses.destination','LIKE','%'.$cond['to'].'%')
                        ->orWhere('buses.shift', $cond['from'])->get();
                   
                return view('frontend.buses.bus')->with(['buses'=>$buses,'message'=>'your searched items are below','empty'=>'No Data Found','departure_date'=>$departure_date]);
           }
          
       }
       else{
        return view('frontend.buses.bus')->with('error_message','no data found');
       }
    }

    public function createPassengers(Request $request){
        $data = $request->all();
      
        $seats = $data['seat'];
        $no_of_seats=count($seats);
        $buses = DB::table('buses')->where('buses.id',$data['bus_id'])->get();
        foreach($buses as $bus){
            $total_price = $no_of_seats*($bus->ticket_price);
        }   
        $seat_occupied = implode(',',$seats);
       
        return view('frontend.bookings.booking')->with(['message'=>'enter the details of passenger','no_of_seats'=>$no_of_seats,'seat_occupied'=>$seat_occupied, 'total_price'=>$total_price,'bus_id'=>$data['bus_id'],'departure_date'=>$data['departure_date']]); 
    }   
}
