@extends('layout/main')

@section('title', 'FormTambah Data Mahasiswa')

@section('container')
<div class="container">
	<div class="row">
		<div class="col-8">
		<h1 class="mt-3">Form Tambah Data Mahasiswa</h1>
		<form method="post" action="/students">
		@csrf
		   <div class="form-group">
		   	 <label for="nama">Nama</label>
		   	 <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukan Nama" name="nama" value="{{old('nama')}}">
		   	 @error('nama')
		   	 	<div class="invalid-feedback">({{$message}})</div>
		   	 @enderror
		   </div>

		   <div class="form-group">
		   	 <label for="nrp">NRP</label>
		   	 <input type="text" class="form-control @error('nrp') is-invalid @enderror" id="nrp" placeholder="Masukan Nrp" name="nrp" value="{{old('nrp')}}">
		   	 @error('nrp')
		   	 	<div class="invalid-feedback">({{$message}})</div>
		   	 @enderror
		   </div>

		   <div class="form-group">
		   	 <label for="nama">Email</label>
		   	 <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="masukan email" value="{{old('email')}}">
		   	 @error('nrp')
		   	 	<div class="invalid-feedback">({{$message}})</div>
		   	 @enderror
		   </div>

		   <div class="form-group">
		   	 <label for="jurusan">Jurusan</label>
		   	 <input type="text" class="form-control @error('jurusan') is-invalid @enderror" name="jurusan" placeholder="masukan jurusan" value="{{old('jurusan')}}">
		   	 @error('nama')
		   	 	<div class="invalid-feedback">({{$message}})</div>
		   	 @enderror
		   </div>
		   <button type="submit" class="btn btn-primary">Tambah Data Mahasiswa</button>
		</form>
	</div>
</div>
</div>
@endsection
