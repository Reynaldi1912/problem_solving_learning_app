<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class version_control extends Model
{
    use HasFactory;
    protected $table='version_control';

    protected $fillable=[
        'id','nama_version_control','keterangan'
    ];
}
