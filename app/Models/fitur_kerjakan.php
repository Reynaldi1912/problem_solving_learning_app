<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fitur_kerjakan extends Model
{
    use HasFactory;
    protected $table='fitur_kerjakan';

    protected $fillable=[
        'id','fitur_utama_id','fitur_tambahan_id','users_id','ide_id',
    ];
    public function ide(){
        return $this->belongsTo(ide::class);
    }
    public function user(){
        return $this->belongsTo(User::class,'users_id','id');
    }
}
