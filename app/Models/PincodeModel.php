<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PincodeModel extends Model
{
    use HasFactory;
    protected $table = 'pincode';
    public $fillable =['pincode'];
    public $timestamp = false;
}
