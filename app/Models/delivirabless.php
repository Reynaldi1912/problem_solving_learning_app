<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class delivirabless extends Model
{
    use HasFactory;
    protected $table='delivirabless';

    protected $fillable=[
        'id','flowchart_id','activity_diagram_id','erd_id','wireframe_id','komponen_desain_id','ui_desan_id','users_id','ide_id'
    ];

    public function ide(){
        return $this->belongsTo(ide::class);
    }
    public function user(){
        return $this->belongsTo(User::class,'users_id','id');
    }
}
