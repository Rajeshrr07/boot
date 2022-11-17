<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Categorytype extends Model
{
    use HasFactory;
    

    protected $fillable = ['category_id','title','description','categorytype_img','css','html','javascript'];

    public function category(){
        return $this->belongsTo(Category::class,'category_id');
    }
}
