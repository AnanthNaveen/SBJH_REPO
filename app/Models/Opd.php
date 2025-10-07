<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Opd extends Model
{
    protected $table = 'reception'; // specify your table name if it's not 'opds'

    protected $fillable = ['REG_NO', 'PATIENT_NAME', 'PATIENT_NAME', 'ptype', 'cur_date'];
}

?>