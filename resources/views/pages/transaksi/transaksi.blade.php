@extends('layout.main')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h3 class="mb-4">Buat Transaksi Barumu!</h3>
                <form method="POST" action="{{ url('admin/store/transaksi') }}">
                    @csrf
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nama Transaksi</label>
                                    <input name="transaksi" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Transaksi">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Tanggal Transaksi</label>
                                    <input name="tanggal_transaksi" type="date" class="form-control" id="exampleInputPassword1" placeholder="Eneter Tanggal">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Harga</label>
                                    <input name="harga" type="number" class="form-control" id="exampleInputPassword1" placeholder="Eneter Harga">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Qty</label>
                                    <input name="qty" type="number" class="form-control" id="exampleInputPassword1" placeholder="Eneter Qty">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Disc</label>
                                    <input name="disc" type="number" class="form-control" id="exampleInputPassword1" placeholder="Eneter Disount">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Barang</label>
                                    <select name="barang" class="form-control">
                                        <option>--- PILIH ---</option>
                                        @foreach($barang as $row)
                                        <option value="{{ $row->id_barang }}">{{ $row->nama_barang }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Pelanggan</label>
                                    <select name="pelanggan" class="form-control">
                                        <option>--- PILIH ---</option>
                                        @foreach($pelanggan as $row)
                                        <option value="{{ $row->id_pelanggan }}">{{ $row->nama_pelanggan }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary float-right">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endSection