@extends('layouts.app')

@section('title', 'Contact')

@section('konten')
<h1 class="text-sky-600 font-bold">Ini adalah halaman contact, halo my name is {{$data}}, umur : {{$umur}}</h1>
@if ($umur >= 18)
<h3>you have rights to voting president</h3>
@else
<h3>Not yet!</h3>
@endif

@endsection