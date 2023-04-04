@extends('master')

@section('table')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="float-right my-2">
            <a class="btn btn-success" href="{{route('book.create')}}">InputMahasiswa</a>
        </div>
        <div class="col-md-6 mt-3">
            <form action="{{ url('book')}}" method="get">
                <input type="search" class="form-control" name ="search" value="{{Request::get('search')}}" id="inputEmail" placeholder="Search Here">
                <button class="btn btn-secondary" type="submit">Cari</button>
            </form>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif
<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>Kode Buku</th>
        <th>Judul</th>
        <th>Pengarang</th>
        <th>Jenis Buku</th>
        <th>Harga</th>
        <th>QTY</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($book as $Book)
    <tr>
        <td>{{ $Book->id }}</td>
        <td>{{ $Book->kode_buku }}</td>
        <td>{{ $Book->judul }}</td>
        <td>{{ $Book->pengarang }}</td>
        <td>{{ $Book->jenis_buku }}</td>
        <td>{{ $Book->harga }}</td>
        <td>{{ $Book->qty }}</td>
        <td>
            <form action="{{route('book.destroy',$Book->id)}}" method="POST">
                <a class="btn btn-info" href="{{route('book.show',$Book->id)}}">Show</a>
                <a class="btn btn-primary" href="{{route('book.edit',$Book->id)}}">Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
{{$book->links()}}
@stop