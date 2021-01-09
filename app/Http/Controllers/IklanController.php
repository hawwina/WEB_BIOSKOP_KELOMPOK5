<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IklanController extends Controller
{
    public function dataiklan(){
        $dataiklans = DB::table('dataiklans')->get();

        return view('admin.iklan.dataiklan', ['dataiklans' => $dataiklans]);
    }
    public function addiklan(){
        return view('admin.iklan.addiklan',);
    }
    public function addiklanprocess(Request $request){
        $request->validate([
            'judul' => 'required',
            'uploadgambar' => 'required', 
        ],[
            'judul.required' => 'judul tidak boleh kosong',
            'uploadgambar.required' => 'gambar tidak boleh kosong',

        ]);

        // menyimpan data file yang diupload ke variabel $file
        $file = $request->file('uploadgambar');
        
        // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = '/data_file/';

        // upload file
        $file2=$file->storeAs($tujuan_upload, $request->judul.'.'.$file->getClientOriginalExtension(), 'public');

        DB::table('dataiklans')->insert(
            [
                'judul' => $request->judul,
                'uploadgambar' => $tujuan_upload.$request->title.'.'.$file->getClientOriginalExtension(),
            ]
        );
        
        return redirect('dataiklan')->with('status', 'Daftar iklan Berhasil Ditambahkan!');
    }
    public function editiklan($id){
        $admin = DB::table('dataiklans')->where('id', $id)->first();
        
        return view('admin/iklan/editiklan', compact('admin'));
    }
    public function editiklanprocess(Request $request, $id){
        $request->validate([
            'judul' => 'required', 
            'uploadgambar' => 'required',
        ],[
            'judul.required' => 'judul tidak boleh kosong',
            'uploadgambar.required' => 'gambar tidak boleh kosong',

        ]);

        DB::table('dataiklans')->where('id', $id)
            ->update([
                
                'judul' => $request->judul,
                'uploadgambar' => $request->uploadgambar,
            ]);
        return redirect('dataiklan')->with('status', 'Daftar Iklan Berhasil Diedit!');
    }
    public function deleteiklan($id){
        DB::table('dataiklans')->where('id', $id)->deleteiklan();
        return redirect('dataiklan')->with('status', 'Daftar Movie Berhasil Dihapus!');
    }
}
