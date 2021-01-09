<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TheaterController extends Controller
{
    public function datatheater(){
        $datatheaters = DB::table('datatheaters')->get();

        return view('admin.theater.datatheater', ['datatheaters' => $datatheaters]);
    } 
    public function addtheater(){
        return view('admin.theater.addtheater',);
    }
    public function addtheaterprocess(Request $request){
        $request->validate([
            'namaTheater' => 'required', 
        ],[
            'namaTheater.required' => 'Theater tidak boleh kosong',

        ]);
        DB::table('datatheaters')->insert(
            [
                'namaTheater' => $request->namaTheater,
            ]
        );
        return redirect('datatheater')->with('status', 'Daftar Theater Berhasil Ditambahkan!');
    }
    public function edittheater($id){
        $admin = DB::table('datatheaters')->where('id', $id)->first();
        
        return view('admin/theater/edittheater', compact('admin'));
    }
    public function edittheaterprocess(Request $request, $id){
        $request->validate([
            'namaTheater' => 'required', 
        ],[
            'namaTheater.required' => 'Theater tidak boleh kosong',

        ]);

        DB::table('datatheaters')->where('id', $id)
            ->update([
                'namaTheater' => $request->namaTheater,
            ]);
        return redirect('datatheater')->with('status', 'Daftar Theater Berhasil Diedit!');
    }
    public function delete($id){
        DB::table('datatheaters')->where('id', $id)->delete();
        return redirect('datatheater')->with('status', 'Daftar Movie Berhasil Dihapus!');
    }

    //bagian studio

    public function datastudio(){
        $datastudios = DB::table('datastudios')->get();

        return view('admin.studio.datastudio', ['datastudios' => $datastudios]);
    } 
    public function addstudio(){
        return view('admin.studio.addstudio',);
    }
    public function addstudioprocess(Request $request){
        $request->validate([
            'namaStudio' => 'required',
            'Theater_id' => 'required', 
        ],[
            'namaStudio.required' => 'Studio tidak boleh kosong',
            'Theater_id.required' => 'Theater_id tidak boleh kosong',

        ]);
        DB::table('datastudios')->insert(
            [
                'namaStudio' => $request->namaStudio,
                'Theater_id' => $request->Theater_id,
            ]
        );
        return redirect('datastudio')->with('status', 'Daftar Studio Berhasil Ditambahkan!');
    }
    public function editstudio($id){
        $admin = DB::table('datastudios')->where('id', $id)->first();
        
        return view('admin/studio/editstudio', compact('admin'));
    }
    public function editstudioprocess(Request $request, $id){
        $request->validate([
            'namaStudio' => 'required', 
            'Theater_id' => 'required', 
        ],[
            'namaStudio.required' => 'Studio tidak boleh kosong',
            'Theater_id.required' => 'Theater_id tidak boleh kosong',

        ]);

        DB::table('datastudios')->where('id', $id)
            ->update([
                'namaStudio' => $request->namaStudio,
                'Theater_id' => $request->Theater_id,
            ]);
        return redirect('datastudio')->with('status', 'Daftar Studio Berhasil Diedit!');
    }
    public function deletestudio($id){
        DB::table('datastudios')->where('id', $id)->delete();
        return redirect('datastudio')->with('status', 'Daftar Movie Berhasil Dihapus!');
    }
}
