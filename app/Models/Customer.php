<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $casts = [
        'installation_address' => 'array',
        'router_delivery' => 'array',
        'router_delivery_address' => 'array',
        'billing_different' => 'array',
        'billing_different_address' => 'array',
        'activation_date' => 'date',
    ];

    protected $fillable = [
        'uid',
        'unique_id',
        'title',
        'fname',
        'lname',
        'email',
        'phone',
        'alt_email',
        'alt_phone1',
        'alt_phone2',
        'installation_address',
        'router_delivery',
        'router_delivery_address',
        'billing_different',
        'billing_different_address',
        'activation_date',
        'debit_date',
        'billing_notes',
        'status'
    ];

}
