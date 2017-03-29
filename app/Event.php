<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = ['description','event_date','amount'];

     protected $dates = [
        'event_date'
    ];
}
