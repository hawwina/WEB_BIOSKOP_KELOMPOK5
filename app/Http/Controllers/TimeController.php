<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TimeController extends Controller
{
    public function datatime(){
        $datatimes = DB::table('datatimes')->get();

        return view('admin.time.datatime', ['datatimes' => $datatimes]);
    } 
    public function addtime(){
        return view('admin.time.addtime',);
    }
    public function addtimeprocess(Request $request){
        $request->validate([
            'time' => 'required', 
        ],[
            'time.required' => 'Time tidak boleh kosong',

        ]);
        DB::table('datatimes')->insert(
            [
                'time' => $request->time,
            ]
        );
        return redirect('datatime')->with('status', 'Daftar Time Release Berhasil Ditambahkan!');
    }
    public function edittime($id){
        $admin = DB::table('datatimes')->where('id', $id)->first();
        
        return view('admin/time/edittime', compact('admin'));
    }
    public function edittimeprocess(Request $request, $id){
        $request->validate([
            'time' => 'required', 
        ],[
            'time.required' => 'Time tidak boleh kosong',

        ]);

        DB::table('datatimes')->where('id', $id)
            ->update([
                'time' => $request->time,
            ]);
        return redirect('datatime')->with('status', 'Daftar Time Release Berhasil Diedit!');
    }
    public function delete($id){
        DB::table('datatimes')->where('id', $id)->delete();
        return redirect('datatime')->with('status', 'Daftar Movie Berhasil Dihapus!');
    }
}
