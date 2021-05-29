<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tantangan extends Model
{
    use HasFactory;
    protected $table='tantangan';

    protected $fillable=[
        'id','judul_tantangan','keterangan','ide_id'
    ];
    public function ide(){
        return $this->belongsTo(ide::class);
    }
}
