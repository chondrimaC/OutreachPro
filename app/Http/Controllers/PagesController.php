<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
      $title = "Welcome to Outreach Pro!";
      return view('index', compact('title'));
    }
}
