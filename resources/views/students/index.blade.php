@extends('layout/main')

@section ('title', 'Daftar Mahasiswa')


@section ('container')

<div class="container">
    <div class="row">
      <div class="col-6">
    <h1 class="mt-3">Daftar Mahasiswa </h1>
    <table class="table">
    <a href="/students/create" class="btn btn-primary my-3">Tambah Data Mahasiswa</a>

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

      <thead class="thead-dark">
        <tr>
          <th scope="col">#</th>
          <th scope="col">nama</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($students as $student)
        <tr>
          <th scope="row">{{ $loop->iteration}}</th>
          <td>{{ $student->nama}}</td>
            <td> 
              <a href="/students/{{$student->id}}" class="badge badge-info">Show Detail</a>

            </td>

        </tr>
       
       @endforeach

      </tbody>
    </table>

  </div>
  </div>
  </div>
@endsection

