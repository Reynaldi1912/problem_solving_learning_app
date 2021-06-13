<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengerjaan extends Model
{
    use HasFactory;
    protected $table='pengerjaan';

    protected $fillable=[
        'id','sub_fitur_id','fitur_id','user_id','ide_id','isSelesai','created_at','updated_at'
    ];
}
