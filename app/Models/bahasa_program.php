<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bahasa_program extends Model
{
    use HasFactory;
    protected $table='bahasa_program';

    protected $fillable=[
        'id','nama_bahasa','keterangan'
    ];

}
