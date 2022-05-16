<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('Login.Logincb');
    }

    public function error()
    {
        //
        return view('Login.Loginerror');
    }

    public function logout()
    {
        session()->forget('user');
        return redirect('/login');
    }

    public function verify(Request $request)
    {
        $user = User::where('password',$request->password)->where('email_user',$request->username)->orWhere('username',$request->username)->first();        
        // dd($user);
        if(!$user)
        return redirect('/login/error');
        else{
            $request->session()->put('user', $user);
            return redirect('/');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Register.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // return $request;
        $user = new User;
        $user->user_id = User::max('user_id') + 1;
        $user->nama_user = $request->nama_user;
        $user->email_user = $request->email_user;
        $user->username = $request->username;
        $user->notelp_user = $request->notelp_user;
        $user->password = $request->password;
        $user->save();
        return redirect('/login');
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
        return User::where('user_id',$id)->get();
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
    public function update(Request $request, $id)
    {
        //
        return User::where('user_id',$id)->update($request->toArray());
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
        return User::where('user_id',$id)->delete();
    }
}
