<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecordController extends Controller
{
    public function index(){
        return view('record.index');
      }
    public function about(){
        return view('record.about');
    }
    public function contact(){
      return view('record.contact');
    }
    public function portfolio(){
      return view('record.portfolio');
    }
    public function work(){
      return view('record.work');
    }
}
