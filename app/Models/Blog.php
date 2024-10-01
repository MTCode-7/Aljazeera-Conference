<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = ['title','image','text','tag_id','added_by','admin_id'];
    protected $table ='blogs';

    public function tags(){
        return $this->hasMany(Tag::class,'tag_id');
    }

    public function comments()
    {
        return $this->hasMany(BlogComments::class);
    }
    public function admin()
    {
        return $this->hasOne(User::class,'admin_id');
    }
}
