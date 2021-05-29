<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class komentar_ide extends Model
{
    use HasFactory;
    protected $table='komentar_ide';

    protected $fillable=[
        'id','komentar','users_id','ide_id','rating','keterangan'
    ];
    public function ide(){
        return $this->belongsTo(ide::class);
    }
    public function User(){
        return $this->belongsTo(User::class,'users_id','id');
    }
}
