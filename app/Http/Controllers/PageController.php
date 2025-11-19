<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{

  public function homePage() {
    return view('index');
  }

   public function aboutPage() {
    return view('about');
  }

   public function contactPage() {
    return view('contact');
  }

   public function newsPage() {
    return view('news');
  }

    public function galleryPage() {
    return view('gallery');
  }
  public function staffPage() {
    return view('staff');
  }
}
