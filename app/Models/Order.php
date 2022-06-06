<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';
    protected $casts = [
        'router_requirement' => 'array',
        'extra_router' => 'array',
        'managed_router' => 'array',
        'news_community' => 'array',
        'marketing_community' => 'array',
        'vulnerabilities' => 'array',
        'battery_backup' => 'array',
        'transfer_number' => 'array',
        'transfer_number_details' => 'array',
        'terms_acceptance' => 'array',
        'order_details' => 'array',
        'port_mobile_no' => 'array',
        'mobile_number_port_details' => 'array',
        'due_order_details' => 'array',


    ];

    protected $fillable = [
        'cid',
        'connection_type',
        'postcode_id',
        'postcode',
        'postcode_address',
        'connection',
        'broadband_plan',
        'voice_package',
        'mobile_package',
        'router_requirement',
        'extra_router',
        'managed_router',
        'news_community',
        'marketing_community',
        'vulnerabilities',
        'vulnerabilities_details',
        'battery_backup',
        'transfer_number',
        'transfer_number_details',
        'port_mobile_no',
        'mobile_number_port_details	',
        'terms_acceptance',
        'order_details',
        'status',
        'order_total',
        'due_order_total',
        'due_order_details'
    ];
}
