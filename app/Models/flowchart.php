<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class flowchart extends Model
{
    use HasFactory;
    protected $table='flowchart';

    protected $fillable=[
        'id','link','ide_id'
    ];
    public function ide(){
        return $this->belongsTo(ide::class);
    }
}
