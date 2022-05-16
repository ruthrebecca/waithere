<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        return view('Homepage.waithere');
    }
    public function listResto(){
        return view('List.full');
    }
    public function reservasi(){
        return view('Reservasi.reservasi');
    }
    public function reservasiku(){
        return view('Reservasiku.myreservation');
    }
    public function restoDetail(){
        return view('RestoDetail.restodetail');
    }
    
    
    
}
