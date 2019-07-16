<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Operator extends Model
{
    protected $table = 'operators';

    protected $fillable = [
        'admin_id',
        'name',
        'contact',
        'address'
    ];

    public function admin(){
        return $this->belongsTo('App\Admin');
    }

    public function bus(){
        return $this->hasMany('App\Bus');
    }
}
