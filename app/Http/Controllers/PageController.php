<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PageController extends Controller
{
  public function home(){
    $people = ['Ayat','Bart','Omid'];
    return view('welcome', compact('people'));
  }
  public function about(){
    return view('pages.about');
  }

}
