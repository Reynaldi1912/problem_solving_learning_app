<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ide;
use App\Models\kategori;

class kategori extends Model
{
    use HasFactory;
    protected $table='kategori';

    protected $fillable=[
        'id','nama_kategori','color'
    ];

    public function ide(){
        return $this->hasMany(ide::class);
    }
}
