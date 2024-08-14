@extends('layouts.master')
@section('content')

<div class="content-wrapper">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h1>Halaman Edit Data Supplier</h1>
                            <br>
                        </div>
                        <div class="card-body">

                            <div class="container-fluid">
                            <a class="btn btn-outline-primary" btn href="/supplier">Kembali</a>
                             <form action="/supplier/update/{{$supplier->id}}" method="post">
                                @csrf
                                <div class="mb-3">
                                    <label for="" class="form-label">Nama Supplier</label>
                                    <input
                                        value="{{$supplier->nama_supplier}}"
                                        type="text"
                                        class="form-control"
                                        name="nama_supplier"
                                        id="nama_supplier"
                                        aria-describedby="helpId"

                                    />
                                </div>

                                <div class="mb-3">
                                    <label for="" class="form-label">Alamat</label>
                                    <input
                                        value="{{$supplier->alamat}}"
                                        type="text"
                                        class="form-control"
                                        name="alamat"
                                        id="alamat"
                                        aria-describedby="helpId"
                                        placeholder=""
                                    />
                                </div>

                                <div class="mb-3">
                                    <label for="" class="form-label">No Telp</label>
                                    <input
                                    value="{{$supplier->no_telp}}"
                                        type="number"
                                        class="form-control"
                                        name="no_telp"
                                        id="no_telp"
                                        aria-describedby="helpId"
                                        placeholder=""
                                    />
                                </div>

                            <button class="btn btn-outline-success" type="submit">Kirim</button>
                        </form>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
