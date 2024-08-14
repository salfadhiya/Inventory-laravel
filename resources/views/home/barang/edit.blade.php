@extends('layouts.master')
@section('content')

<div class="content-wrapper">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h1>Halaman Edit Data Barang</h1>
                            <br>
                        </div>
                        <div class="card-body">

                            <div class="container-fluid">
                            <a class="btn btn-outline-primary" btn href="/barang">Kembali</a>
                             <form action="/barang/update/{{$barang->id}}" method="post">
                                @csrf
                                <div class="mb-3">
                                    <label for="" class="form-label">Gambar</label>
                                    <input
                                        value="{{$barang->gambar}}"
                                        type="text"
                                        class="form-control"
                                        name="gambar"
                                        id="gambar"
                                        aria-describedby="helpId"
                                        
                                    />
                                </div>

                                <div class="mb-3">
                                    <label for="" class="form-label">Nama Barang</label>
                                    <input
                                        value="{{$barang->nama_barang}}"
                                        type="text"
                                        class="form-control"
                                        name="nama_barang"
                                        id="nama_barang"
                                        aria-describedby="helpId"
                                        placeholder=""
                                    />
                                </div>

                                <div class="mb-3">
                                    <label for="" class="form-label">Id Jenis</label>
                                    <input
                                    value="{{$barang->id_jenis}}"
                                        type="number"
                                        class="form-control"
                                        name="id_jenis"
                                        id="id_jenis"
                                        aria-describedby="helpId"
                                        placeholder=""
                                    />
                                </div>

                                <div class="mb-3">
                                    <label for="" class="form-label">Harga Beli</label>
                                    <input
                                    value="{{$barang->harga_beli}}"
                                        type="number"
                                        class="form-control"
                                        name="harga_beli"
                                        id="harga_beli"
                                        aria-describedby="helpId"
                                        placeholder=""
                                    />
                                </div>

                                <div class="mb-3">
                                    <label for="" class="form-label">Harga Jual</label>
                                    <input
                                    value="{{$barang->harga_jual}}"
                                        type="number"
                                        class="form-control"
                                        name="harga_jual"
                                        id="harga_jual"
                                        aria-describedby="helpId"
                                        placeholder=""
                                    />
                                </div>

                                <div class="mb-3">
                                    <label for="" class="form-label">Stok</label>
                                    <input
                                    value="{{$barang->stok}}"
                                        type="number"
                                        class="form-control"
                                        name="stok"
                                        id="stok"
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
