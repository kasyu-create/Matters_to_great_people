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
    public function show($id){

        $genre = new Genre;
        $genres = $genre->show($id);
        return view('genre.show', [
            'genres' => $genres,
        ]);
    }

    public function store(Request $request){
        $genre = new Genre;
        // 一時保存されたUploadedFileの取得
        $file = $request->file('image');
        
        if(!empty($file))
        {
            // 画像の名前を取得
            $file_name = $file->getClientOriginalName();
            $document = $request->image;
            // アップロードしたファイル名または任意の名前を付けたい場合、public以外のフォルダに保存したい場合は、storeAs メソッドを利用。
            // 第１引数にフォルダ、第２引数に名前の指定　storage/app配下に保存
            $document->storeAS('app', $file_name);
            $genre->img_path = $file_name;
        }


        $genre->name = $request->name;
        $genre->description = $request->description;
        $genre->save();
        
        return redirect('/portfolio');
    }

    public function edit($id){
        $genre = Genre::find($id);

        return view('genre.edit', [
            'genre' => $genre]
        );
    }

    public function update(Request $request, $id){
        $genre = Genre::find($id);
        $file = $request->file('image');

        if(!empty($file))
        {
            // 画像の名前を取得
            $file_name = $file->getClientOriginalName();
            $document = $request->image;
            // アップロードしたファイル名または任意の名前を付けたい場合、public以外のフォルダに保存したい場合は、storeAs メソッドを利用。
            // 第１引数にフォルダ、第２引数に名前の指定　storage/app配下に保存
            $document->storeAS('app', $file_name);
            $genre->img_path = $file_name;
        }

        $genre->name = $request->name;
        $genre->description = $request->description;
        $genre->save();

        return redirect('/portfolio');
    }

    public function destroy($id){
        $genre = Genre::find($id);
        $genre->delete();
        return redirect('/portfolio');
    }
}
