<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use PDF;
use Carbon\Carbon;

class InvoiceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
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

    public function getInvoice()
    {
     $pdf = \App::make('dompdf.wrapper');
     $pdf->loadHTML($this->bookingToHtml());
     return $pdf->stream();
    }
    public function bookingToHtml(){

        $ticket_data = $this->getDetails();
        $date = Carbon::now()->toDateTimeString();
      
    
    
     foreach($ticket_data as $ticket)
     {
        $invoice = '
        <style>
            .details > div {
                height: 180px;
                float:left;
                width: 33.33%;
                padding: 2px;
            }
            .details::after {
                content: "";
                clear: both;
                display: table;
              
            }
            .table{

            }
           
        </style>
        <div class="row">
        <h1 align="center">Ticket Nepal</h1>
        <h2 align="center">Kalanki, Kathmandu</h2>
        </div>
        <div class="details">
            <div>
            <h4>Name: '.$ticket->name.'</h4> 
            <h4>From: '.$ticket->boarding_point.'</h4> 
            <h4>Bus no: '.$ticket->bus_no.'</h4>
            <h4>Departure Date: '.$ticket->departure_date.'</h4> 
            </div>
            <div>
            <h4>Email: '.$ticket->email.'</h4> 
            <h4>To: '.$ticket->destination.'</h4> 
            <h4>Driver: '.$ticket->driver_name.'</h4>
            <h4>Seat Number: '.$ticket->seat_occupied.'</h4>
            </div>
            <div>
            <h4>Date: '.$date.'</h4> 
            <h4>Invoice Number: '.$ticket->passenger_id.'</h4>
            <h4>Driver Contact: '.$ticket->driver_contact.'</h4>
            </div>
        </div>
        <div class="table">
        <table width="100%" style="border-collapse: collapse; border: 0px;">
        <tr>
            <th style="border: 1px solid; padding:12px;" width="30%">Particulars</th>
            <th style="border: 1px solid; padding:12px;" width="30%">Quantity</th>
            <th style="border: 1px solid; padding:12px;" width="15%">Amount</th>
      
        </tr>
      <tr>
       <td style="border: 1px solid; padding:12px;">Ticket</td>
       <td style="border: 1px solid; padding:12px;">'.$ticket->total_seats.'</td>
       <td style="border: 1px solid; padding:12px;">Rs '.$ticket->total_price.'</td>
      </tr>
      <tr>
      <td style="border: 1px solid;padding:12px;">Tax</td>
      <td style="border: 1px solid;padding:12px;">0%</td>
      <td style="border: 1px solid;padding:12px;">Rs 0</td>
        </tr>
      <tr>
       <td colspan="2" style="border: 1px solid;padding:12px;">Total amount</td>
       <td style="border: 1px solid;padding:12px;">Rs '.$ticket->total_price.'</td>
      </tr>
      </table>
      </div>
      ';
     }
     
     return $invoice;
    }
}
