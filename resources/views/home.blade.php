@extends('layouts.app')
@section('title', '- Inicio')

@section('content')
    <div class="w-100 d-flex flex-column justify-content-center align-items-center" style="height: 89vh">
        <div>
            <img src="{{ asset('assets/images/Logo.jpg') }}" alt="Logo Sistema" width="500">   
        </div>     
        <div>
            <h1>Bienvenido, Administrador</h1>
        </div>
    </div>
@endsection