<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;

class homeController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index(){
        // Alert::success('Success', 'Terima Kasih Telah Berdonasi');

        // Alert::toast('Toast Message', 'Toast Type');
        return view('home');
   
    }
    public function get_donation()
    {
        return view('donation');
    }
    public function get_aboutUs()
    {
        return view('aboutUs');
    }
    public function get_home()
    {
        return view('home');
    }
    public function get_adoption()
    {
        return view('adoption');
    }
    
    public function auth()
    {
        return view('auth/login');
    }
    public function dashboard()
    {
       
        $donasi = DB::table('tbl_donasi as a')->join('users as b', 'a.id_user', '=', 'b.id')->get();
        $adopsi = DB::table('tbl_adopsi as a')->join('users as b', 'a.id_user', '=', 'b.id')->join('tbl_hewan as c', 'a.id_hewan','=','c.id_hewan')->select('a.*','b.*','c.*')->get();
        return view('dashboard', compact('adopsi','donasi'));

        
    }



}


