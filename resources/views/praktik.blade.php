@extends('template')
@section('main')
    <h1>Saya Praktik Laravel</h1>

<?php
for ($i=1; $i <= 10; $i++) { ?>
<h2>Praktik Laravel</h2>
<?php } ?>

@for ($i = 1; $i <= 3; $i++)
<h2>Sekarang Praktik Laravel</h2>
@endfor

<img src="{{ asset('img/matahari.
jpg') }}" width="300px">
@endsection