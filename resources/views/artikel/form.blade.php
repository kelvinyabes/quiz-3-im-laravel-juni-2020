@extends('sbadmin2.master')

@section('content')
<h5>Form Artikel</h5>
<div class="ml-3 mt-3">
    <form action="/artikel" method="post">
        @csrf
        <div class="form-group row">
            <label for="judul" class="col-sm-2 col-form-label">Judul:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="judul" name="judul" placeholder="Enter Judul">
            </div>
        </div>
     
        <div class="form-group row">
            <label for="isi" class="col-sm-2 col-form-label">Isi:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="isi" name="isi" placeholder="Enter Isi">
            </div>
        </div>
     
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection