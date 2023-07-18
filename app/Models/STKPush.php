<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class STKPush extends Model
{
    protected $table = 'stk_pushes'; // Replace with your desired table name

    protected $fillable = [
        'transaction_id',
        'amount',
        'phone',
        'ticketid',
        // Add other columns as needed
    ];

    // Add any relationships or additional methods as needed
}
