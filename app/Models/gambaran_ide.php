<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\gambaran_ide;


class gambaran_ide extends Model
{
    use HasFactory;
    protected $table='gambaran_ide';

    protected $fillable=[
        'id','judul','keterangan','ide_id'
    ];
    public function ide(){
        return $this->belongsTo(ide::class);
    }
}
