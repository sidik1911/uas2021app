@extends('layout.main')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="zero_config" class="table table-striped table-bordered no-wrap">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Transaski</th>
                                <th>Tanggal Transaksi</th>
                                <th>Harga</th>
                                <th>QTY</th>
                                <th>Barang</th>
                                <th>Discount</th>
                                <th>Nama Pelanggan</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $row)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{ $row->nama_transaksi }}</td>
                                <td>{{ $row->tgl_transaksi }}</td>
                                <td>{{ $row->harga }}</td>
                                <td>{{ $row->qty }}</td>
                                <td>{{ $row->nama_barang }}</td>
                                <td>{{ $row->diskon }}</td>
                                <td>{{ $row->nama_pelanggan }}</td>
                                <td>
                                    <a href="{{ url('admin/edit/pelanggan') }}/" class="btn btn-warning fa fa-print"></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <ul class="pagination float-right">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1">Previous</a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endSection