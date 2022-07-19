@extends('layouts.main')

@section('container')
<h1>Dashboard</h1>

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nama</th>
        <th scope="col">NIM</th>
        <th scope="col">Status</th>
        <th scope="col">Aksi</th>
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
                <form action="/biodata/{{ $member->id }}" method="post" class="d-inline">
                  @method('delete')
                  @csrf
                  <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
                    <a href="/biodata/{{ $member->id }}" class="btn btn-info">Edit</a>
                @else
                    <a href="/biodata/{{ $member->id }}" class="btn btn-success">Detail</a>
                @endauth
            </td>
        </tr>
        @endforeach
        <tr>
          <td colspan="5" >
            <a href="/biodata" class="btn btn-success">tambah data</a>
          </td>
        </tr>
    </tbody>
  </table>
@endsection