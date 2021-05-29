<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class teknologi_kerjakan extends Model
{
    use HasFactory;

    protected $table='teknologi_kerjakan';

    protected $fillable=[
        'id','framework','bahasa_program','database_ide','version_control','users_id','ide_id',
    ];

    public function ide(){
        return $this->belongsTo(ide::class);
    }
    public function User(){
        return $this->belongsTo(User::class,'users_id','id');
    }
}
