<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;
    // 参照させたいSQLのテーブル名を指定
    protected $table = 'genre';

    protected $fillable = [
        'name',
        'img_path',
    ];
    

    public function index()
    {
      $genres = \DB::select('select * from genre');
      return $genres;
    }

    public function store($request)
    {
      // $genres = \DB::insert('select * from genre');
      return $genres;
    }
}
