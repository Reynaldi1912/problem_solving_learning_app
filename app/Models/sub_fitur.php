<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sub_fitur extends Model
{
    use HasFactory;
    protected $table='sub_fitur';

    protected $fillable=[
        'id','nama','deskripsi','fitur_id','estimasi_waktu'
    ];

    public function fitur(){
        return $this->belongsTo(fitur::class);
    }
    public function sub_fitur_pengerjaan(){
        return $this->hasMany(sub_fitur_pengerjaan::class);
    }
    public function jadwal_sendiri(){
        return $this->hasMany(jadwal_sendiri::class);
    }
    
}
