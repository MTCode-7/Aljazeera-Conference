<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogComments extends Model
{
    use HasFactory;

    protected $fillable = ['name','text','email','blog_id'];

    protected $table = 'blog_comments';


    public function blog()
    {
        return $this->hasOne(Blog::class,'blog_id');
    }

}
