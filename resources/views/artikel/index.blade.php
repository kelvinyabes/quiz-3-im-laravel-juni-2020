@extends('sbadmin2.master')

@section('content')
<div class="ml-3 mt-3">
  
  <a href="/artikel/create" class="btn btn-primary mb-3">
    Buat Artikel Baru
  </a>
  
  <table class="table table-bordered">
    <thead class="thead-dark">
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Judul</th>
        <th scope="col">Isi</th>
        <th scope="col">Choice</th>
      </tr>
    </thead>
    
    <tbody>
      @foreach ($artikel as $key => $a)
      <tr>
        <td> {{ $key+1 }} </td>
        <td> {{ $a ->judul }} </td>
        <td> {{ $a ->isi }} </td>
        <td> <a href="/artikel/{{ $a->idartikel }}" class="btn btn-sm btn-info" >Show</a>
             <a href="/artikel/{{ $a->idartikel }}/edit" class="btn btn-sm btn-default" >Edit</a>  
             <form action="/artikel/{{ $a->idartikel }}" method="post" style="display:inline">
              @csrf  
              @method('DELETE')
              <button type="submit" class="btn btn-sm btn-danger"> <i class="fas fa-trash"></i> </button>
            </form>
        </td>
      </tr>  
      @endforeach
    </tbody>
  </table>
  </div>
@endsection

@push('scripts')
<script>
    Swal.fire({
        title: 'Berhasil!',
        text: 'Memasangkan script sweet alert',
        icon: 'success',
        confirmButtonText: 'Cool'
    })
</script>
@endpush