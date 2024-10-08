@extends('layouts.master')
@section('content')

<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                                <h1>Halaman Data Barang Masuk</h1>
                                <a href="/barang_masuk/tambah" class="btn btn-outline-primary">Tambah</a>
                        </div>

                        <div class="card-body">

                            <div
                                class="table-responsive"
                            >
                                <table
                                    class="table table-hover"
                                >
                                    <thead>
                                        <tr>
                                            <th scope="col"> Number</th>
                                            <th scope="col">Id Barang</th>
                                            <th scope="col">Id Supplier</th>
                                            <th scope="col">Jumlah</th>


                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($barangMasuk as $barang_masuk)
                                        <tr class="">
                                            <td scope="row">{{$loop->iteration}}</td>
                                            <td>{{$barang_masuk->barang->nama_barang}}</td>
                                            <td>{{$barang_masuk->supplier->nama_supplier}}</td>
                                            <td>{{$barang_masuk->jumlah}}</td>


                                           

                                        </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection
