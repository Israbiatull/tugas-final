@extends('layouts.main')

@section('container')
<h1>Biodata Detail</h1>

<div class="container">
  <main>
    <div class="py-5 text-start">
      <img class="d-block mx-auto mb-4" src="{{ asset('storage/'.$data->gambar) }}" alt="" width="250" height="420"  style="object-fit: cover">
      <h2>{{ $data->nama }}</h2>
    </div>

    <div class="row g-5">
      <div class="col-md-7 col-lg-8">
        <form class="needs-validation" enctype="multipart/form-data" action="/biodata/{{ $data->id }}" method="post">

          @method('put')
          @csrf

          <input type="hidden" name="gambar" value="{{ $data->gambar }}">

          @auth
            <input type="file" name="gambar" id="">
          @endauth

          <div class="row g-3">
            <div class="col-sm-6">
              <label for="firstName" class="form-label">Nama</label>
              <input type="text" class="form-control" name="nama" placeholder="" value="{{ $data->nama }}" required>
            </div>

            <div class="col-sm-6">
              <label for="lastName" class="form-label">NIM</label>
              <input type="text" class="form-control"  name="nim" value="{{ $data->nim }}" required>
            </div>

            <div class="col-sm-6">
              <label for="lastName" class="form-label">Tempat Tanggal Lahir</label>
              <input type="text" class="form-control"  name="ttl" value="{{ $data->ttl}}" required>
            </div>

            <div class="col-sm-6">
              <label for="lastName" class="form-label">Pendidikan Terakhir</label>
              <input type="text" class="form-control"  name="pendidikan_terakhir" value="{{ $data->pendidikan_terakhir }}" required>
            </div>

            <div class="col-sm-6">
              <label for="lastName" class="form-label">Jenis Kelamin</label>
              <input type="text" class="form-control"  name="jk" value="{{ $data->jk }}" required>
            </div>

            <div class="col-sm-6">
              <label for="lastName" class="form-label">Agama</label>
              <input type="text" class="form-control" name="agama" value="{{ $data->agama }}" required>
            </div>

            <div class="col-sm-12">
              <label for="lastName" class="form-label">Alamat</label>
              <input type="text" class="form-control" name="alamat" value="{{ $data->alamat }}" required>
            </div>

            <div class="col-sm-6">
              <label for="lastName" class="form-label">Status</label>
              <input type="text" class="form-control"  name="status" value="{{ $data->status }}" required>
            </div>

            <div class="col-sm-6">
              <label for="lastName" class="form-label">Kewarganegaraan</label>
              <input type="text" class="form-control" name="kewarganegaraan" value="{{ $data->kewarganegaraan }}" required>
            </div>

          </div>

          <hr class="my-4">

          @auth
            <button class="w-100 btn btn-primary btn-lg" type="submit">ubah</button>
          @else
            <a href="/" class="btn btn-info">Kembali</a>
          @endauth
        </form>
      </div>
    </div>
  </main>

</div>

@endsection