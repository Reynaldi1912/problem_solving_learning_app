<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class erd extends Model
{
    use HasFactory;
    protected $table='erd';

    protected $fillable=[
        'id','link','ide_id'
    ];
    public function ide(){
        return $this->belongsTo(ide::class);
    }
}
