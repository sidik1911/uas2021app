<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Pelanggan extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data = DB::table('pelanggans')->get();
        return view('pages/pelanggan/index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages/pelanggan/add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pelanggan = $request->pelanggan;
        $telephone = $request->telephone;
        $status  = $request->status;

        $data = [
            'nama_pelanggan' => $pelanggan,
            'no_tlp' => $telephone,
            'status' => $status,
        ];

        DB::table('pelanggans')->insert($data);
        return redirect('admin/pelanggan')->with('message', 'Data success aded!');
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
        $data = DB::table('pelanggans')->where('id_pelanggan', '=', $id)->first();
        $selected = ['member', 'vip'];
        return view('pages/pelanggan/edit', ['data' => $data, 'status' => $selected]);
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
        $id = $request->id;
        $pelanggan = $request->pelanggan;
        $telephone = $request->telephone;
        $status  = $request->status;

        $data = [
            'nama_pelanggan' => $pelanggan,
            'no_tlp' => $telephone,
            'status' => $status,
        ];

        DB::table('pelanggans')->where('id_pelanggan', '=', $id)->update($data);
        return redirect('admin/pelanggan')->with('message', 'Update Data success aded!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('pelanggans')->where('id_pelanggan', '=', $id)->delete();
        return redirect('admin/pelanggan')->with('message', 'Data success deleted!');
    }
}