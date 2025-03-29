@extends('layout.app')

@section('judul', 'Dashboard')
@section('konten')

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Dashboard Page</h1>

</div>
<div class="container-fluid">
    @if(Auth::check())
    <b>Halo {{ Auth::user()->name }}, Anda Berhasil Login </b>
    @endif
</div>

@endsection