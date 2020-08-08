@extends('adminlte.master')

@section('content')
    <div class="mt-3 ml-3">
        <p class="font-weight-bold">Judul Pertanyaan : </p>
        <h1>{{$pertanyaan->judul}}</h1>
        <p class="font-weight-bold">Isi Pertanyaan : </p>
        <h3>{{$pertanyaan->isi}}</h3>
    </div>
@endsection