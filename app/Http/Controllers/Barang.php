<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Barang extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('barangs')
            ->join('satuans', 'barangs.satuan_id', '=', 'satuans.id_satuan')
            ->join('kategoris', 'barangs.category_id', '=', 'kategoris.id_category')
            ->get();
        return view('pages/barang/index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $satuan = DB::table('satuans')->get();
        $category = DB::table('category')->get();
        return view('pages/barang/add', ['satuan' => $satuan, 'category' => $category]);
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
        $harga = $request->harga;
        $satuan = $request->satuan;
        $category = $request->category;
        $data = [
            'nama_barang' => $pelanggan,
            'category_id' => $category,
            'satuan_id' => $satuan,
            'harga_barang' => $harga,
        ];
        DB::table('barangs')->insert($data);
        return redirect('admin/barang')->with('message', 'Barang Baru success aded!');
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
}