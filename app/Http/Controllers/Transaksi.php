<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Transaksi extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('transaksis')
            ->join('barangs', 'transaksi.id_baranag', '=', 'barangs.id_barang')
            ->join('pelanggans', 'transaksis.id_pelanggan', '=', 'pelanggans.id_pelanggan')->get();
        return view('pages/transaksi/index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pelanggan = DB::table('pelanggans')->get();
        $barang = DB::table('barangs')->get();
        return view('pages/transaksi/transaksi', ['barang' => $barang, 'pelanggan' => $pelanggan]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = [
            'nama_transaksi' => $request->transaksi,
            'tgl_transaksi' => $request->tanggal_transaksi,
            'harga' => $request->harga,
            'qty' => $request->qty,
            'id_baranag' => $request->barang,
            'diskon' => $request->disc,
            'id_pelanggan' => $request->pelanggan
        ];
        DB::table('transaskis')->insert($data);
        return redirect('admin/transaksi')->with('message', 'New Transaksi Created success aded!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = DB::table('transaksis')
            ->join('barangs', 'transaksis.id_barananag', '=', 'barangs.id_barang')
            ->join('pelanggans', 'transaksis.id_pelanggan', '=', 'pelanggans.id_pelanggan')->get();
        dd($data);
        return view('pages/transaksi/transaksi', ['data' => $data]);
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
}