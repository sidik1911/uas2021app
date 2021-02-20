@extends('layout.main')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h3>Tambah Satuan</h3>
                <form method="POST" action="{{ url('admin/add/satuan') }}">
                    @csrf
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Satuan</label>
                                    <input name="satuan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="EnterSatuan" />
                                </div>
                            </div>
                            <div class="col-md-3 mt-2">
                                <div class="form-group mt-4">
                                    <button type="submit" class="btn btn-primary form-control">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endSection