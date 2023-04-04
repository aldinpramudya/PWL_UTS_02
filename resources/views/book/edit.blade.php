@extends('master')

@section('table')
<div class="container mt-5">

    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Edit Buku
            </div>
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form method="post" action="{{ route('book.update', $Book->id)}}" id="myForm">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="kode_buku">Nim</label>
                        <input type="kode_buku" name="kode_buku" class="form-control" id="kode_buku" value="{{$Book->kode_buku}}" aria-describedby="kode_buku">
                    </div>
                    <div class="form-group">
                        <label for="judul">Judul</label>
                        <input type="judul" name="judul" class="form-control" id="judul" value="{{$Book->judul}}" aria-describedby="judul">
                    </div>
                    <div class="form-group">
                        <label for="pengarang">Pengarang</label>
                        <input type="pengarang" name="pengarang" class="form-control" id="pengarang" value="{{$Book->pengarang}}" aria-describedby="pengarang">
                    </div>
                    <div class="form-group">
                        <label for="jenis_buku">Jenis Buku</label>
                        <input type="jenis_buku" name="jenis_buku" class="form-control" id="jenis_buku" value="{{$Book->jenis_buku}}" aria-describedby="jenis_buku">
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga</label>
                        <input type="harga" name="harga" class="form-control" id="harga" value="{{$Book->harga}}" aria-describedby="harga">
                    </div>
                    <div class="form-group">
                        <label for="qty">Jurusan</label>
                        <input type="qty" name="qty" class="form-control" id="qty" value="{{$Book->qty}}" aria-describedby="qty">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@stop