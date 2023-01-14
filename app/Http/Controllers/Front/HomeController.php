<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        return view('front.index');
    }

    public function aboutWebsite()
    {
        return view('front.aboutus.index');
    }

    public function blogs()
    {
        return view('front.blogs.index');
    }

    public function gallerys()
    {
        return view('front.galley.index');
    }
    public function contactus()
    {
        return view('front.contact.index');
    }

    public function blogsDetails($id)
    {
        $blog = Blog::where('name->ar',str_replace('-', ' ', $id))->first();
        $data = Blog::findorfail($blog->id);
        return view('front.blogs.details',compact('data'));
    }

}
