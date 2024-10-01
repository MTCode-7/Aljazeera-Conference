<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.index',compact('users'));
    }

    public function all_bloggers()
    {
        $blogs = Blog::all();
        return view('admin.blog.all',compact('blogs'));
    }
}
