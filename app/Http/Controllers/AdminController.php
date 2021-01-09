<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str; 

class AdminController extends Controller
{
    public function admin(){
        return view('admin.home',);
    }
    public function datamovie(){
        $daftar_movies = DB::table('daftar_movies')->get();

        return view('admin.datamovie', ['daftar_movies' => $daftar_movies]);
    }
    public function add(){
        return view('admin.add',);
    }
    public function addprocess(Request $request){
        $request->validate([
            'cover' => 'required',
            'title' => 'required',
            'synopsis' => 'required',
            'genre' => 'required',
            'duration' => 'required',
            'realdate' => 'required',
            'director' => 'required',
            'actors' => 'required', 
            'trailer' => 'required',
        ],[
            'cover.required' => 'Cover tidak boleh kosong',
            'title.required' => 'Title tidak boleh kosong',
            'synopsis.required' => 'Synopsis tidak boleh kosong',
            'genre.required' => 'Genre tidak boleh kosong',
            'duration.required' => 'Duration tidak boleh kosong',
            'realdate.required' => 'Realdate tidak boleh kosong',
            'director.required' => 'Director tidak boleh kosong',
            'actors.required' => 'Actors tidak boleh kosong',
            'trailer.required' => 'trailer tidak boleh kosong'

        ]);
        // menyimpan data file yang diupload ke variabel $file
        $file = $request->file('cover');
        
        // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = '/data_file/';

        // upload file
        $file2=$file->storeAs($tujuan_upload, $request->title.'.'.$file->getClientOriginalExtension(), 'public');

        DB::table('daftar_movies')->insert(
            [
                'movieCover' => $request->cover,
                'movieTitle' => $request->title,
                'movieSynopsis' => $request->synopsis,
                'movieGenre' => $request->genre,
                'movieDuration' => $request->duration,
                'movieRealdate' => $request->realdate,
                'movieDirector' => $request->director,
                'movieActors' => $request->actors,
                'movieTrailer' => $request->trailer,
                'upload'=>$tujuan_upload.$request->title.'.'.$file->getClientOriginalExtension(),
            ]
        );
        return redirect('datamovie')->with('status', 'Daftar Movie Berhasil Ditambahkan!');
    }
    public function edit($id){
        $admin = DB::table('daftar_movies')->where('id', $id)->first();
        
        return view('admin/edit', compact('admin'));
    }
    public function editprocess(Request $request, $id){
        $request->validate([
            'cover' => 'required',
            'title' => 'required',
            'synopsis' => 'required',
            'genre' => 'required',
            'duration' => 'required',
            'realdate' => 'required',
            'director' => 'required',
            'actors' => 'required',
            'trailer' => 'required',
        ],[
            'cover.required' => 'Cover tidak boleh kosong',
            'title.required' => 'Title tidak boleh kosong',
            'synopsis.required' => 'Synopsis tidak boleh kosong',
            'genre.required' => 'Genre tidak boleh kosong',
            'duration.required' => 'Duration tidak boleh kosong',
            'realdate.required' => 'Realdate tidak boleh kosong',
            'director.required' => 'Director tidak boleh kosong',
            'actors.required' => 'Actors tidak boleh kosong',
            'trailer.required' => 'trailer tidak boleh kosong'
        ]);

        DB::table('daftar_movies')->where('id', $id)
            ->update([
                'movieCover' => $request->cover, 
                'movieTitle' => $request->title,
                'movieSynopsis' => $request->synopsis,
                'movieGenre' => $request->genre,
                'movieDuration' => $request->duration,
                'movieRealdate' => $request->realdate,
                'movieDirector' => $request->director,
                'movieActors' => $request->actors,
                'movieTrailer' => $request->trailer,
                
            ]);
        return redirect('datamovie')->with('status', 'Daftar Movie Berhasil Diedit!');
    }
    public function delete($id){
        DB::table('daftar_movies')->where('id', $id)->delete();
        return redirect('datamovie')->with('status', 'Daftar Movie Berhasil Dihapus!');
    }
    


}
