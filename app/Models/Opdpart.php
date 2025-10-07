<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Opdpart extends Model
{
    protected $table = 'opdparts'; // explicitly link to the renamed table
    use HasFactory;
    protected $fillable = ['name','regno','age','sex','allergies','type','data','consultant'];
    protected $casts = [
        'data' => 'array',
        'allergies' => 'array',
    ];  
  
}
