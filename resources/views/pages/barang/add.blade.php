@extends('layout.main')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form method="POST" action="{{ url('admin/store/barang') }}">
                    @csrf
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nama Barang</label>
                                    <input name="pelanggan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Barang">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Harga</label>
                                    <input name="harga" type="number" class="form-control" id="exampleInputPassword1" placeholder="Eneter Harga">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Satuan</label>
                                    <select name="satuan" class="form-control">
                                        <option>--- PILIH ---</option>
                                        @foreach($satuan as $row)
                                        <option value="{{ $row->id_satuan }}">{{ $row->nama_satuan }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Category</label>
                                    <select name="category" class="form-control">
                                        <option>--- PILIH ---</option>
                                        @foreach($category as $row)
                                        <option value="{{ $row->id_category }}">{{ $row->nama_category }}</option>
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