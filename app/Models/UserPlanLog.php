<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class UserPlanLog extends Model
{
    use HasFactory;
    use Notifiable;
    protected $table = 'user_plan_logs';
    protected $fillable = [
        'user_id', 'customer_id', 'plan_name','plan_type','added_from','added_by','activation_date'
    ];
}
