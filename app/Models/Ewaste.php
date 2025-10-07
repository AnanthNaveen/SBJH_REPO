<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Ewaste extends Model
{
    use HasFactory;
     public $timestamps = false;

    protected $table = 'ewaste';
    
     protected $fillable = [
        'sysname',
        'syslocate',
        'sysaccessry',
        'qualiycheck',
        'issue_date',
        'username',
        'cdatetime',
    ];
}
