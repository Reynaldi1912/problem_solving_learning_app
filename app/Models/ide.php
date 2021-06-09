<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ide;
use App\Models\level;
use App\Models\kategori;
use App\Modelsgambaran_ide;



class ide extends Model
{
    use HasFactory;
    protected $table='ide';

    protected $fillable=[
        'id','judul,kategori_id','level_id','img','hari','rating'
    ];
    public function level(){
        return $this->belongsTo(level::class);
    }
    public function kategori(){
        return $this->belongsTo(kategori::class);
    }

    // gambaran ide
    public function gambaran_ide(){
        return $this->hasMany(gambaran_ide::class);
    }
    public function tantangan(){
        return $this->hasMany(tantangan::class);
    }

    // Diagram Proses
    public function flowchart(){
        return $this->hasMany(flowchart::class);
    }
    public function activity_diagram(){
        return $this->hasMany(activity_diagram::class);
    }
    public function erd(){
        return $this->hasMany(erd::class);
    }

    // Ulasan Ide
    public function komentar_ide(){
        return $this->hasMany(komentar_ide::class);
    }

    // fitur
    public function fitur(){
        return $this->hasMany(fitur::class);
    }

    //kerjakan
    public function teknologi_kerjakan(){
        return $this->hasMany(teknologi_kerjakan::class);
    }
    public function fitur_kerjakan(){
        return $this->hasMany(fitur_kerjakan::class);
    }
    public function delivirabless(){
        return $this->hasMany(delivirabless::class);
    }
    public function jadwal_pengerjaan(){
        return $this->hasMany(jadwal_pengerjaan::class);
    }
    public function jadwal_sendiri(){
        return $this->hasMany(jadwal_sendiri::class);
    }
    

}
