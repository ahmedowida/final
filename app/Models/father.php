<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class father extends Model
{
    use HasFactory;
    public function boys(){
        return $this->hasMany(boys::class ,'boys_id','id');
     }

}
