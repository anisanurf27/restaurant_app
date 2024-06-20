<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    use HasFactory;
    protected $table = 'laporan';

    protected $fillable = [
        'name',
        'address',
        'email',
        'phone',
        'total_price',
        'payment_method',
        '_token', // Assuming _token is added to allow mass assignment
    ];
}
