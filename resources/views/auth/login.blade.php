@extends('layouts.app')

@section('content')
<div class="w-100 d-flex justify-content-center align-items-center" style="height: 95vh">
    <div class="card col-12 col-md-6">
        <div class="card-body">
            <div class="w-100 d-flex justify-content-center">
                <img src="{{ asset('assets/images/Logo.jpg') }}" alt="Logo Sistema" width="300">
            </div>
            <div class="row p-5">
                <form action="{{ route('login.post') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="usuario">Usuario</label>
                        <input id="usuario" class="form-control" type="text" name="usuario">
                    </div>
                    <div class="form-group mt-3">
                        <label for="password">Contraseña</label>
                        <input id="password" class="form-control" type="password" name="password">
                    </div>
                    <div class="form-group mt-3 d-flex justify-content-center">
                        <button class="btn btn-primary">Ingresar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection