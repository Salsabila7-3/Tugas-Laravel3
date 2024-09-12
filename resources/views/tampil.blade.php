@extends('template')
@section('main')
<h2>Data Siswa</h2>
@foreach ($data as $item)
    <p>{{ $item->nis }}</p>
    <p>{{ $item->nama }}</p>
    <p>{{ $item->alamat }}</p>

@endforeach    
@endsection