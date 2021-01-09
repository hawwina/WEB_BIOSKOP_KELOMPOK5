<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CinemaController extends Controller
{
    public function index(){
        $daftar_movies = DB::table('daftar_movies')->paginate(8);
        return view('home', ['daftar_movies' => $daftar_movies]);
    }
    public function nowplaying(){
        $daftar_movies = DB::table('daftar_movies')->paginate(8);
        return view('cinema.nowplaying.indexnowplaying', ['daftar_movies' => $daftar_movies]);
    }
    public function upcoming(){
        $daftar_movies = DB::table('daftar_movies')->paginate(8);
        return view('cinema.upcoming.indexupcoming', ['daftar_movies' => $daftar_movies]);
        
    }
    public function theaters(){
        return view('cinema.theaters.indextheaters',);
    }
    public function detailmovie($id){
        $daftar_movies = DB::table('daftar_movies')->where('id', $id)->first();

        return view('cinema/movie/detailmovie', ['daftar_movies' => $daftar_movies], compact('daftar_movies'));
    }
    public function seet(){
        return view('cinema.movie.seet',);
    }
    public function tiket(){
        return view('cinema.movie.tiket',);
    }
    public function receipt(){
        return view('cinema.movie.receipt',);
    }
    public function more(){
        return view('cinema.more.indexmore',);
    }
    public function detailtheaterid($id){
        $datatheaters = DB::table('datatheaters')->where('id', $id)->first();
        return view('cinema/movie/detailtheater', ['datatheaters' => $datatheaters]);
    }
    public function detailtheater(){
        $datatheaters = DB::table('datatheaters')->first();
        return view('cinema/movie/detailtheater', ['datatheaters' => $datatheaters]);
    }
    public function detailstudioid($id){
        $datastudios = DB::table('datastudios')->where('id', $id)->first();
        return view('cinema/movie/detailstudio', ['datastudios' => $datastudios]);
    }
    public function detailstudio(){
        $datastudios = DB::table('datastudios')->first();
        return view('cinema/movie/detailstudio', ['datastudios' => $datastudios]);    
    }
   
}