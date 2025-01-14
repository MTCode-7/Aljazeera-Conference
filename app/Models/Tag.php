<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;
    protected $fillable = ['name'];
    protected $table = 'blog_tags';

    public function blogs(){
        return $this->hasMany(Blog::class);
    }
}
