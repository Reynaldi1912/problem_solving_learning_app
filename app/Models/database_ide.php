<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class database_ide extends Model
{
    use HasFactory;
    protected $table='database_ide';

    protected $fillable=[
        'id','nama_database','keterangan'
    ];
}
