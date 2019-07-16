<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Passenger extends Model
{
    protected $table = 'passengers';
    
    protected $fillable = [
        'user_id',
        'name',
        'contact',
        'email',
        'boarding_point',
        'departure_date'
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function booking(){
        return $this->hasMany('App\Booking');
    }
}

