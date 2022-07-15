@extends('layouts.main')

@section('container')
<h1>Halaman tambah</h1>

<div class="container">
  <main>

    <div class="row g-5">
      <div class="col-md-7 col-lg-8">
        <form class="needs-validation" enctype="multipart/form-data" action="/biodata/{{ $data->id }}" method="post">

          @csrf

          <input type="file" name="gambar" id="">

          <div class="row g-3">
            <div class="col-sm-6">
              <label for="firstName" class="form-label">Nama</label>
              <input type="text" class="form-control" name="nama" placeholder="" required>
            </div>

            <div class="col-sm-6">
              <label for="lastName" class="form-label">NIM</label>
              <input type="text" class="form-control"  name="nim"  required>
            </div>

            <div class="col-sm-6">
              <label for="lastName" class="form-label">Tempat Tanggal Lahir</label>
              <input type="text" class="form-control"  name="ttl" required>
            </div>

            <div class="col-sm-6">
              <label for="lastName" class="form-label">Pendidikan Terakhir</label>
              <input type="text" class="form-control"  name="pendidikan_terakhir"  required>
            </div>

            <div class="col-sm-6">
              <label for="lastName" class="form-label">Jenis Kelamin</label>
              <input type="text" class="form-control"  name="jk"  required>
            </div>

            <div class="col-sm-6">
              <label for="lastName" class="form-label">Agama</label>
              <input type="text" class="form-control" name="agama"  required>
            </div>

            <div class="col-sm-12">
              <label for="lastName" class="form-label">Alamat</label>
              <input type="text" class="form-control" name="alamat" required>
            </div>

            <div class="col-sm-6">
              <label for="lastName" class="form-label">Status</label>
              <input type="text" class="form-control"  name="status" required>
            </div>

            <div class="col-sm-6">
              <label for="lastName" class="form-label">Kewarganegaraan</label>
              <input type="text" class="form-control" name="kewarganegaraan"  required>
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