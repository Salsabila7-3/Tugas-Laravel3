@extends('template')
@section('main')
    <h2>Tambah Data</h2>
    <form action="{{ route('siswa.store') }}" method="POST">
        @csrf
        <input type="text" placeholder="inputkan nis" name="nis">
        <input type="text" placeholder="inputkan nama" name="nama">
        <input type="text" placeholder="inputkan alamat" name="alamat">
        <button type="submit">Simpan</button>
    </form>
@endsection