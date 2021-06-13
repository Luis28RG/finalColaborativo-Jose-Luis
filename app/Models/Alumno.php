<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    protected $primaryKey = 'idalumno';
    protected $guarded = 'idalumno';
    public $timestamps = false;
    protected $table = 'alumno';
    public $incrementing = true;

}
