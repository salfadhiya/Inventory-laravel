@extends('layouts.master')
@section('content')

<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                                <h1>Halaman Data Barang Keluar</h1>
                                <a href="/barang_keluar/tambah" class="btn btn-outline-primary">Tambah</a>
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
                                            <th scope="col">Nama Customer</th>
                                            <th scope="col">Jumlah</th>
                                            

                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($barangKeluar as $barangKeluar)
                                        <tr class="">
                                            <td scope="row">{{$loop->iteration}}</td>
                                            <td>{{$barangKeluar->barang->nama_barang}}</td>
                                            <td>{{$barangKeluar->nama_customer}}</td>
                                            <td>{{$barangKeluar->jumlah}}</td>



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
