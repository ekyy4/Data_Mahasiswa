@extends('template');

@section('content');

<h1>Form Mahasiswa</h1>
<label for="exampleFromControlInput1">NIM</label>
<input type="text" class="form-control">
<label for="exampleFromControlInput1">Nama</label>
<input type="text" class="form-control">
<label for="exampleFromControlInput1">Jurusan</label>
<input type="text" class="form-control">
<label for="exampleFromControlInput1">Fakultas</label>
<input type="text" class="form-control">
<label for="exampleFromControlInput1">Jenis Kelamin</label>
<input type="text" class="form-control">
<a href="/crud/create" class="btn btn-primary btn-sm mb-3">Tambah Data</a>

