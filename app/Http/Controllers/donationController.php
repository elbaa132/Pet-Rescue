<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Facades\Auth;
// use Auth;



class donationController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

     

   public function store(Request $request){
    // dd(Auth::user()->id);
    DB::table('users')->insert([
        'name' => $request->nama,
        'email' => $request->email,
    ]); 

    $file = $request->file('file');
    // $fileName = date('dmY').'.'.$file->getClientOriginalName();
    $fileName = time().'.'.$file->getClientOriginalName();
    $tujuan_upload = 'bukti_upload';
    $file->move($tujuan_upload,$fileName);

    DB::table('tbl_donasi')->insert([

        'id_user' => Auth::user()->id,
        'nominal' => $request->donate,
        'file_upload' => $fileName,
    ]); 
    
    Alert::success('Berhasil Donasi', 'Terima Kasih');

    return redirect()->back();
   
    }

}
