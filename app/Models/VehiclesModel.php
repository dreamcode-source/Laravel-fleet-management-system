<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VehiclesModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'v_type',
        'v_name',
        'v_model',
        'image',
    ];

    
}
