@extends('adminlte.master')

@section('content')
    <div class="mt-3 ml-3">
    <div class="card">
              <div class="card-header">
                <h3 class="card-title">Pertanyaan Table</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              @if(session('success'))
                <div class="alert alert-success">
                    {{session('success')}}
                </div>
              @endif
              <a class="btn btn-info mb-2" href="/pertanyaan/create">Buat Pertanyaan</a>
                <table class="table table-bordered">
                  <thead>                  
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Judul</th>
                      <th>Body</th>
                      <th style="width: 80px">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse($pertanyaan1 as $key => $pertanyaan1)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$pertanyaan1->judul}}</td>
                        <td>{{$pertanyaan1->isi}}</td>
                        <td class="d-flex">
                          <a href="/pertanyaan/{{$pertanyaan1->id}}" class="btn btn-info btn-sm ">show</a>
                          <a href="/pertanyaan/{{$pertanyaan1->id}}/edit" class="btn btn-default btn-sm">edit</a>
                          <form action="/pertanyaan/{{$pertanyaan1->id}}" method="post">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="delete" class="btn btn-danger btn-sm">
                          </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="4" align="center">No Post</td>
                    </tr>
                    @endforelse
                  </tbody>
                </table>
              </div>
            </div>
    </div>
@endsection