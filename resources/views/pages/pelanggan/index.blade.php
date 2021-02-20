@extends('layout.main')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <a href="{{ url('admin/add/pelanggan') }}" class="btn btn-primary fa fa-plus mb-2"></a>
                <div class="table-responsive">
                    <table id="zero_config" class="table table-striped table-bordered no-wrap">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Telephone</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $row)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{ $row->nama_pelanggan }}</td>
                                <td>{{ $row->no_tlp }}</td>
                                <td>{{ $row->status }}</td>
                                <td>
                                    <a href="{{ url('admin/edit/pelanggan') }}/{{ $row->id_pelanggan }}" class="btn btn-warning fa fa-edit"></a>
                                    <a href="{{ url('admin/destroy/pelanggan') }}/{{ $row->id_pelanggan }}" class="btn btn-danger fa fa-trash"></a>
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