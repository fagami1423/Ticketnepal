<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $table = 'invoices';

    protected $fillable = [
        'user_id',
        'booking_id',
        'bus_id'
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function bus(){
        return $this->belongsTo('App\Bus');
    }

    public function booking(){
        return $this->belongsTo('App\Booking');
    }

}
