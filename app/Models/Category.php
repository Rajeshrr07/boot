<?php

namespace App\Models;

use App\Models\Category;
use App\Models\Categorytype;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['title','description'];

     public function categorytype(){
        return $this->hasMany(Categorytype::class);
    }
}
