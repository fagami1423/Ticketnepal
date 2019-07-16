<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table = 'bookings';
    protected $fillable = [
        'user_id',
        'bus_id',
        'passenger_id',
        'departure_date',
        'total_price',
        'occupied_seat',
        'total_seats'
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function passenger(){
        return $this->belongsTo('App\Passenger');
    }

    public function bus(){
        return $this->belongsTo('App\Bus');
    }

    public function invoice(){
        return $this->hasMany('App\Invoice');
    }

}
