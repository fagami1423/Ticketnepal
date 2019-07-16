<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cartalyst\Stripe\Laravel\Facades\Stripe;
use Cartalyst\Stripe\Exception\CardErrorException;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendInvoice;
use DB;

class CheckoutController extends Controller
{
    public function index(){
        return view('frontend.bookings.booking');
    }
    function getDetails(){
        $data = DB::table('passengers')->where('passengers.user_id',auth()->user()->id)
                    ->leftJoin('bookings','passengers.id','=','bookings.passenger_id')
                    ->leftJoin('buses','buses.id','=','bookings.bus_id')
                    ->orderBy('bookings.id','DESC')
                    ->limit(1)
                    ->get();
        return $data;       
    }

    public function store(Request $request){        
        try {
            $this->validate($request,[
                'email'=>'required|email',
                
            ]);
            $payment = Stripe::charges()->create([
                'amount' => $request->total_price / 100,
                'currency' => 'USD',
                'source' => $request->stripeToken,
                'description' => 'Bus Ticket Payment',
                'receipt_email' => $request->email,
                'metadata' => [
                
                ],
            ]);
            if($payment){                
                $datas = $this->getDetails();
                foreach($datas as $dat){
                    $data=$dat;  
                }
                Mail::send(new SendInvoice($data));               
            }
        return view('frontend.message')->with(['message'=>'Thank you! Your payment has been successfully accepted!']);
        } catch (CardErrorException $e) {
            return back()->withErrors('Error! ' . $e->getMessage());
        }
    }
}

