@extends('template');
@section('content');
    <h1>Tambah Data</h1>
    <a href="/crud" class="btn btn-primary btn-sm mb-3">Kembali</a>\
    <form action="/crud" method="post">
        <label for="">NIM</label>
        <input type="text" class="form-control" name="nim">
        <label for="">Nama</label>
        <input type="text" class="form-control" name="nama">
        <label for="">Jurusan</label>
        <input type="text" class="form-control" name="jurusan">
        <label for="">Fakultas</label>
        <input type="text" class="form-control" name="fakultas">
        <label for="">Jenis Kelamin</label>
        <select name="jk" class="form-control">
            <option value="L">Laki-laki</option>
            <option value="P">Perempuan</option>
        </select>
        <button class="btn btn-primary btn-sm" type="submit">Simpan</button>
    </form>

