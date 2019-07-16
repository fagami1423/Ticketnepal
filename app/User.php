<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name', 'email', 'password', 'phone'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function passenger(){ 
        return $this->hasMany('App\Passenger');
    }

    public function seat(){ 
        return $this->hasMany('App\Seat');
    }

    public function invoice(){ 
        return $this->hasMany('App\Invoice');
    }

    public function booking(){ 
        return $this->hasMany('App\Booking');
    }
    
    public static function getUsers(){
        return static::selectRaw('name, email, phone')
                        ->get()
                        ->toArray();
    }
}
