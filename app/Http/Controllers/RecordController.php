<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Record;
use App\Models\Genre;

class RecordController extends Controller
{
    public function index(){
      $record = new Record;
      $records = $record->index();
      return view('record.index', $records);
      }
    public function about(){
        return view('record.about');
    }
    public function contact(){
      return view('record.contact');
    }
    public function portfolio(){
      $genre = new Genre;
      $genres = $genre->index();
      return view('record.portfolio', [
        'genres' => $genres,
    ]);
    }
    public function work(){
      return view('record.work');
    }
}
