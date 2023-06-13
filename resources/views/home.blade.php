@extends('layouts.app')
@section('title', '- Inicio')

@section('content')
    <div class="w-100 d-flex flex-column justify-content-center align-items-center" style="height: 89vh">
        <div>
            <img src="{{ asset('assets/images/Logo.png') }}" alt="Logo Sistema" width="300">   
        </div>     
        <div class="text-center">
            <h1>Bienvenido, Administrador</h1>
            <h4>Para continuar, presione el botón <span class="bg-dark rounded" style="padding: 5px; color: rgba(255, 255, 255, 0.5); font-size: .875rem;">@include('layouts.btn-hamburguer')</span> ubicado en la parte superior y seleccione alguna de las opciones</h4>
        </div>
    </div>
@endsection