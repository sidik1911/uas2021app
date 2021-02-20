@extends('layout.main')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form method="POST" action="{{ url('admin/update/pelanggan') }}">
                    @csrf
                    <input type="hidden" name="id" value="{{ $data->id_pelanggan }}" />
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nama Pelanggan</label>
                                    <input name="pelanggan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->nama_pelanggan }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">No telpon</label>
                                    <input name="telephone" type="number" class="form-control" id="exampleInputPassword1" value="{{ $data->no_tlp }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Status</label>
                                    <select name="status" class="form-control">
                                        @foreach($status as $row)
                                        <option value="{{ $row }}" <?= $data->status === $row ? 'selected' : null ?>>{{ $row }}</option>
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