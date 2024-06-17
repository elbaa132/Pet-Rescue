<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;


class formAdoptController extends Controller
{
    public function get_formAdopt(){

        $hewan = DB::table('tbl_hewan')->get();
        $hwn = DB::table('tbl_hewan')->where('id_hewan', 1)->first();
        return view('formAdopt', compact('hewan', 'hwn'));
        
    }

   public function store(Request $request){
    // dd($request->all());
    // dd('ini');
    DB::table('users')->insert([
        'name' => $request->nama,
        'alamat' => $request->alamat,
        'kelurahan' => $request->kelurahan,
        'kecamatan' => $request->kecamatan,
        'kode_pos' => $request->kode_pos,
        'no_telepon' => $request->no_telepon,
        'profesi' => $request->profesi,
        'email' => $request->email,
    ]); 

    DB::table('tbl_adopsi')->insert([
        'id_user' => Auth::user()->id,
        'id_hewan' => $request->jenis_hewan,
        'alasan' => $request->alasan,
    ]); 

    
    Alert::success('Form Berhasil Terkirim', 'Terima Kasih');
    return redirect('get_formAdopt');
   
    }

}
