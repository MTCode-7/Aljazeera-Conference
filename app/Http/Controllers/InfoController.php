<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class InfoController extends Controller
{
    
    public function about(){
        $aboutUs = About::first(); // إحضار العنصر الأول فقط
        return view('pages.about',compact('aboutUs'));
    }

    public function contact(){
        return view('pages.contact');
    }
}
