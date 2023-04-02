<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table='categories';



use HasFactory;
public function category(){
    return $this->belongsTo(category::class,'category_id', 'id');
}
}
