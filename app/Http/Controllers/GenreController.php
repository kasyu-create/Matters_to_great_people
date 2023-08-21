<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Record;
use App\Models\Genre;

class GenreController extends Controller
{
    public function create(){
        return view('genre.create');
    }
    public function show(){
        \Log::info('テスト');
        return view('genre.show');
    }
}
