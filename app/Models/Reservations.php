<?php

namespace App\Models;
use App\Models\Playgrounds;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservations extends Model
{
    use HasFactory;

    public function Playgrounds(){
        return $this->belongsTo(Playgrounds::class,'playground_id');
    
    }
}
