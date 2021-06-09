<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jadwal_sendiri extends Model
{
    use HasFactory;
    protected $table='jadwal_sendiri';

    protected $fillable=[
        'id','hari','sub_fitur_id','fitur_id','user_id','ide_id'
    ];

    public function fitur(){
        return $this->belongsTo(fitur::class);
    }
    public function sub_fitur(){
        return $this->belongsTo(sub_fitur::class);
    }
    public function User(){
        return $this->belongsTo(User::class);
    }
    public function ide(){
        return $this->belongsTo(ide::class);
    }
}
