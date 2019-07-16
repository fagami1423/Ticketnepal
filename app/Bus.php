<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{
    protected $table = 'buses';
    protected $fillable = [
        'operator_id','admin_id',
        'boarding_point',
        'destination',
        'bus_no',
        'type',
        'no_of_seats',
        'features',
        'driver_name',
        'driver_contact',
        'availability',
        'ticket_price',
        'shift','bus_image'
    ];

    public function admin(){
        return $this->belongsTo('App\Admin');
    }

    public function seat(){ 
       return $this->hasMany('App\Seat');
    }

    public function booking(){ 
        return $this->hasMany('App\bookinh');
     }

    public function invoice(){ 
        return $this->hasMany('App\Invoice');
    }
}
