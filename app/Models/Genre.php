<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;
    public function index()
    {
      $genres = \DB::select('select * from genre');
      return $genres;
    }
}
