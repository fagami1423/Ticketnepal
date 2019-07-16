<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use Notifiable;
    protected $guard = 'admin';
    
    protected $fillable = [
        'name', 'email', 'password'
    ];
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function bus(){
        return $this->hasMany('App\Bus');
    }
    public function operator(){
        return $this->hasMany('App\Operator');
    }
}
