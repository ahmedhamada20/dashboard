<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function index()
   {
      return view('front.index');
   }

   public function courses_list()
   {
      return view('front.courses.coursesImage');
   }

   public function courses_detail()
   {
      return view('front.courses.coursesDetalis');
   }

   public function event()
   {
      return view('front.events.index');
   }

   public function event_detail()
   {
      return view('front.events.details');
   }

   public function abouts()
   {
      return view('front.abouts.index');
   }

   public function blog()
   {
      return view('front.blog.index');
   }

   public function blog_detail()
   {
      return view('front.blog.detail');
   }

   public function contact_us()
   {
      return view('front.contact_us.index');
   }

   public function my_account()
   {
      return view('front.my_account.index');
   }

   public function members()
   {
      return view('front.members.index');
   }

   public function members_detail()
   {
      return view('front.members.detail');
   }

   public function register_sign()
   {
      return view('front.register_sign.index');
   }
}
