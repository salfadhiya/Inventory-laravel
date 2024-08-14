@extends('layouts.master')
@section('content')

<div class="content-wrapper">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h1>Halaman Edit Data User</h1>
                            <br>
                        </div>
                        <div class="card-body">
                           
                            <div class="container-fluid">
                            <a class="btn btn-outline-primary" btn href="/user">Kembali</a>
                             <form action="/user/update/{{$user->id}}" method="post">
                                @csrf
                            <div class="mb-3">
                                <label for="" class="form-label">Nama</label>
                                <input
                                    value="{{$user->name}}"
                                    type="text"
                                    class="form-control"
                                    name="name"
                                    id="name"
                                    aria-describedby="helpId"
                                />
                            </div>
                        
                            <div class="mb-3">
                                <label for="" class="form-label">Email</label>
                                <input
                                    value="{{$user->email}}"
                                    type="email"
                                    class="form-control"
                                    name="email"
                                    id="email"
                                    aria-describedby="helpId"
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
