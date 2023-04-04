@extends('master')

@section('table')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Detail Buku
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>Kode Buku: 
                        </b>{{$Book->kode_buku}}</li>
                    <li class="list-group-item"><b>Judul:
                        </b>{{$Book->judul}}</li>
                    <li class="list-group-item"><b>Email:
                        </b>{{$Book->pengarang}}</li>
                    <li class="list-group-item"><b>TanggalLahir:
                        </b>{{$Book->jenis_buku}}</li>
                    <li class="list-group-item"><b>Kelas:
                        </b>{{$Book->harga}}</li>
                    <li class="list-group-item"><b>Jurusan:
                        </b>{{$Book->qty}}</li>
                </ul>
            </div>
            <a class="btn btn-success mt3" href="{{route('book.index')}}">Kembali</a>
        </div>
    </div>
</div>
@stop