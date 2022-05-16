<?php

namespace App\Http\Controllers;

use App\Models\Reservasi;
use App\Models\Restoran;
use Illuminate\Http\Request;

class ReservasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        if(!session('user')) return redirect('/login');
        return view('Reservasi/reservasi');
    }

    public function detail()
    {
        //
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $reservasi = new Reservasi;
        $reservasi->reservasi_id = Reservasi::max('reservasi_id') ? Reservasi::max('reservasi_id') + 1 : 1;
        $reservasi->restoran_id	= $request->restoran_id;
        $reservasi->user_id	= session('user.user_id');
        $reservasi->jumlah= $request->jumlah;
        $reservasi->hari_reservasi	= $request->hari_reservasi;
        $reservasi->request	= $request->srequest;
        $reservasi->jam_reservasi = $request->jam_reservasi;
        $reservasi->save();
        return redirect('/reservasiku');
    }

    public function reservasiku(){
        if(!session('user')) return redirect('/login');
        $reserv = Reservasi::where('user_id', session('user.user_id'))->first();
        if(!$reserv) return redirect('/resto');
        $resto = Restoran::where('restoran_id',$reserv->restoran_id)->first();
        // dd($resto);
        return view('Reservasiku/myreservation',['reservasi'=>$reserv, 'resto' => $resto->nama_restoran]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $reservasi = Reservasi::where('user_id', session('user.user_id'))->get()[0];
        $reservasi->jumlah= $request->jumlah;
        $reservasi->hari_reservasi	= $request->hari_reservasi;
        $reservasi->request	= $request->srequest;
        $reservasi->jam_reservasi = $request->jam_reservasi;
        // dd($reservasi);
        $reservasi->save();
        return redirect('/reservasiku');
    }

    public function cancel(){
        Reservasi::where('user_id', session('user.user_id'))->delete();
        return redirect('/reservasiku');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
