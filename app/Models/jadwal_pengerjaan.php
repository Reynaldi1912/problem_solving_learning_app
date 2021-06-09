<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jadwal_pengerjaan extends Model
{
    use HasFactory;
    protected $table='jadwal_pengerjaan';

    protected $fillable=[
        'id','tanggal_mulai','senin','selasa','rabu','kamis','jumat','sabtu','minggu','estimasi_waktu','ide_id','user_id'
    ];

    public function ide(){
        return $this->belongsTo(ide::class);
    }
    public function User(){
        return $this->belongsTo(User::class);
    }
    
}
