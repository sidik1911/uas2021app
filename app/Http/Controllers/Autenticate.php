<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Autenticate extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('login');
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
        $email =$request->email;
        $password = $request->password;

        $check = DB::table('users')->where('email','=', $email)->first();
        
        if ($check) {
            if ($email == $check->email) {
                if (password_verify($password, $check->password)) {
                    session([
                        'email' => $check->email,
                        'name' => $check->name,
                    ]);
                    return redirect('/admin/dashboard');
                } else {
                    return redirect('/')->with('message', 'Whent Wrong Password!');
                }
            } else {
                return redirect('/')->with('message', 'Whent Wrong Email!');
            }
        } else {
            return redirect('/')->with('message', 'Account Not Be Registered!');
        }
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
    public function update(Request $request, $id)
    {
        //
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
    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect('/');
    }
}
