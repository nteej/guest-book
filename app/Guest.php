<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    //
    protected $fillable = ['guest_name', 'guest_email', 'guest_message'];
}
