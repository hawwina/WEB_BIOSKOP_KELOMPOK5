<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SeatController extends Controller
{
    
    public function dataseat(){
        $dataseats = DB::table('dataseats')->get();

        return view('admin.seat.dataseat', ['dataseats' => $dataseats]);
    }
    public function addseat(){
        return view('admin.seat.addseat',);
    }
    public function addseatprocess(Request $request){
        $request->validate([
            'namaSeat' => 'required', 
        ],[
            'namaSeat.required' => 'Nama Seat tidak boleh kosong',

        ]);
        DB::table('dataseats')->insert(
            [
                'namaSeat' => $request->namaSeat,
            ]
        );
        return redirect('dataseat')->with('status', 'Daftar Seat Berhasil Ditambahkan!');
    }
    public function editseat($id){
        $admin = DB::table('dataseats')->where('id', $id)->first();
        
        return view('admin/seat/editseat', compact('admin'));
    }
    public function editseatprocess(Request $request, $id){
        $request->validate([
            'namaSeat' => 'required', 
        ],[
            'namaSeat.required' => 'Nama Seat tidak boleh kosong',

        ]);

        DB::table('dataseats')->where('id', $id)
            ->update([
                'namaSeat' => $request->namaSeat,
            ]);
        return redirect('dataseat')->with('status', 'Daftar Seat Berhasil Diedit!');
    }
    public function delete($id){
        DB::table('dataseats')->where('id', $id)->delete();
        return redirect('dataseat')->with('status', 'Daftar Movie Berhasil Dihapus!');
    }
}
