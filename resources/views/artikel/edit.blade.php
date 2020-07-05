@extends('sbadmin2.master')

@section('content')
<h5>Edit Artikel</h5>
<div class="ml-3 mt-3">
<form action="/artikel/{{$artikel->idartikel}}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group row">
            <label for="judul" class="col-sm-2 col-form-label">Judul:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="judul" value="{{ $artikel->judul }}" name="judul" placeholder="Enter Judul">
            </div>
        </div>
     
        <div class="form-group row">
            <label for="isi" class="col-sm-2 col-form-label">Isi:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="isi" value="{{ $artikel->isi }}" name="isi" placeholder="Enter Isi">
            </div>
        </div>
     
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection