<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;
    protected $fillable =['title','content' ,'image','image_icon'];

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
