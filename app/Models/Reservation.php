<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'cust_name',
        'contact',
        'reservation_date',
        'number_guest',
        'special_request',
    ];
}
