<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class boy extends Model
{
    use HasFactory;

    public function father(){
        return $this->belongsTo(father::class , 'father_id' ,'id');
     }


}
