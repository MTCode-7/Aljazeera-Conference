<?php

namespace App\Http\Controllers;

use App\Models\BlogComments;
use Illuminate\Http\Request;

class BlogCommentsController extends Controller
{

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'text'=>'required',
            'email'=>'required',
            'blog_id'=>'required',
        ]);
        
        BlogComments::create([
            'name'=>$request->name,
            'text'=>$request->text,
            'email'=>$request->email,
            'blog_id'=>$request->blog_id,
        ]);

        return back()->with('success','تم نشر التعليق');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BlogComments $blogComments)
    {
        $blogComments->delete();
    }
}
