<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    //     protected $fillable = [
    //     'name',
    //     'email',
    //     'phone',
    //     'address',
    //     'city',
    //     'province',
    //     'zip_code',
    //     'payment_method',
    //     'cart_total',
    // ];

    protected $guarded = ['id'];
}
