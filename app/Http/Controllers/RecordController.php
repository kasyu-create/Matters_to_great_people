<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Record;

class RecordController extends Controller
{
    public function index(){
      $record = new Record;
      $records = $record->index();
      \Log::info($records);
        return view('record.index', $record);
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
