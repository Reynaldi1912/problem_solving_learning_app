<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fitur extends Model
{
    use HasFactory;
    use HasFactory;
    protected $table='fitur';

    protected $fillable=[
        'id','nama','isUtama','estimasi_waktu','ide_id',
    ];

    public function sub_fitur(){
        return $this->hasMany(sub_fitur::class);
    }
    public function ide(){
        return $this->belongsTo(ide::class);
    }
}
