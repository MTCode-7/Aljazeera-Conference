<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bloggers = Blog::all();
        return view('blog.home', compact('bloggers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tags = Tag::all();
        return view('admin.blog.create')->with('tags', $tags);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'text' => 'required',
            'image' => 'required | mimes:jpg,png,gif,jpeg,webpg |max:2024',
            'tag_id' => 'required',
        ]);
        $input = $request->all();

        $input['added_by'] = Auth::user()->name;
        $input['admin_id'] = Auth::id();

        if ($image = $request->file('ي')) {
            $destinationPath = 'blogsيs/';
            $filename = date('YmdHis') . '.' . $image->getClientOriginalExtension();
            $image->move($destinationPath, $filename);
            $input['image'] = $filename;
        }

        // Blog::create([
        //     'title'=>$request->title,
        //     'image'=>$request->image,
        //     'text'=>$request->text,
        //     'added_by'=>'Mohammed Tawfig',
        //     'tag_id'=>$request->tag_id,
        // ]);

        Blog::create($input);
        return redirect()->route('blog.index')->with('success', 'تم انشاء محتوى التدوينة بنجاح!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        $tags = Tag::all();
        // return view('blog.show', compact('blog'))->with('tags', $tags);
        return view('blog.show', [
            'blog'=>$blog,
            'tags' => $tags,
            'url' => url()->current(), // رابط الصفحة الحالية
            'excerpt' => Str::limit($blog->text, 100) // نص مختصر للمقال
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        $tags = Tag::all();
        return view('admin.blog.edit', compact('blog'), compact('tags'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {
        $input = $request->all();
        if ($image = $request->file('image')) {
            $destinationPath = 'blogsImages/';
            $filename = date('YmdHis') . '.' . $image->getClientOriginalExtension();
            $image->move($destinationPath, $filename);
            $input['image'] = $filename;
        } else {
            unset($input['image']);
        }

        $blog->update($request->all());
        return redirect()->route('show', $blog)->with('success', 'تم تحديث محتوى التدوينة بنجاح!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();
        return back()->with('success', "بنجاح ($blog->title) تم حذف !");
    }
}
