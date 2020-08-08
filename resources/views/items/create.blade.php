@extends('adminlte.master')

@section('content')
    <h2>Text Halaman v.2</h2>
@endsection

@push('scripts')
    <script>
        var wrappers = document.getElementsByClassName("wrappers");

        console.log("ini items : ", items);
    </script>
@endpush