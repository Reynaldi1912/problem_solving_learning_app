<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ide;
use App\Models\level;

class level extends Model
{
    use HasFactory;
    protected $table='level';

    protected $fillable=[
        'id','nama_level','icon'
    ];

    public function ide(){
        return $this->hasMany(ide::class);
    }
}
