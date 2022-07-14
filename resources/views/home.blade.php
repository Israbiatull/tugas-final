@extends('layouts.main')

@section('container')
<h1>Halaman Home</h1>

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">nama</th>
        <th scope="col">nim</th>
        <th scope="col">status</th>
        <th scope="col">aksi</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($data as $i => $member)
        <tr>
            <th scope="row">{{ $i+1 }}</th>
            <td>{{ $member->nama }}</td>
            <td>{{ $member->nim }}</td>
            <td>{{ $member->status }}</td>
            <td>
                @auth
                    <a href="" class="btn btn-danger">hapus</a>
                    <a href="" class="btn btn-info">edit</a>
                @else
                    <a href="/biodata/{{ $member->id }}" class="btn btn-success">detail</a>
                @endauth
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
@endsection