@extends('sbadmin2.master')

@section('content')

<div class="ml-3 mt-3">
    <h3>Detail Artikel</h3>
    <p> Judul : {{ $artikel->judul}} </p>
    <p> Isi : {{ $artikel->isi}} </p>
</div>
    
@endsection