@extends('layouts.app')
@section('title', '- Asignar Dealer')

@section('content')

<div class="form-group px-4">
    <h1 class="mb-3">ASIGNAR DEALER</h1>
    <div class="mb-3 row col-12 col-md-6">
        <label for="jefe" class="col-sm-2 col-form-label">JEFES</label>
        <div class="col-sm-10">
            <select name="jefe" id="jefe" class="form-select">                
                <option value="JEFE 1">JEFE 1</option>
                <option value="JEFE 2">JEFE 2</option>
                <option value="JEFE 3">JEFE 3</option>
            </select>
        </div>
    </div>
</div>

<div class="row m-3">
    <div class="row">
        <div class="card col-12 col-md-6 bg-blue">
            @foreach ($locales as $l)
                <div class="form-check">
                    <input id="my-input-{{ $loop->iteration }}" class="form-check-input" type="checkbox" name="" value="true">
                    <label for="my-input-{{ $loop->iteration }}" class="form-check-label">{{ $l }}</label>
                </div>
            @endforeach
        </div>
        <div class="card col-12 col-md-6 bg-yellow">
            <ul class="list-unstyled">
                @foreach ($dealers as $d)
                    <li>{{ $d }}</li>
                @endforeach
            </ul>
        </div>
    </div>
    <div class="d-flex justify-content-end mt-3">
        <button class="btn btn-primary" id="guardar">Guardar</button>
    </div>
</div>

@endsection

@section('scripts')
<script>
    $('#guardar').on('click', function() {
        window.location.reload();
    })
</script>
@endsection