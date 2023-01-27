<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use  App\Models\Categories;

class Playgrounds extends Model
{
    use HasFactory;

    
    protected $table = 'playgrounds';

    protected $primaryKey = 'id';


    protected $fillable = [
        'name',
        'price',
        'description',
        'category_id',
        'image',
    ];

    public function Categories(){
        return $this->belongsTo(Categories::class,'name');
    }
}
