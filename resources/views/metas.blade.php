@extends('layouts.app')
@section('title', '- Metas')

@section('content')

<div class="form-group px-4">
    <h1 class="mb-3">METAS</h1>
    <div class="mb-3 row col-12 col-md-6">
        <label for="marca" class="col-sm-2 col-form-label">MARCA</label>
        <div class="col-sm-10">
            <select name="marca" id="marca" class="form-select">
                <option value="HONDA">HONDA</option>
            </select>
        </div>
    </div>
    <div class="mb-3 row col-12 col-md-6">
        <label for="tipo" class="col-sm-2 col-form-label">TIPO</label>
        <div class="col-sm-10">
            <select name="tipo" id="tipo" class="form-select">
                <option value=""></option>
                <option value="REPUESTOS">REPUESTOS</option>
                <option value="PASOS MEC">PASOS MEC</option>
                <option value="PASOS PYP">PASOS PYP</option>
            </select>
        </div>
    </div>
</div>

<div class="row m-3">
    <div class="d-flex justify-content-end mb-3">
        <button class="btn rounded-pill" style="background-color: #28a745!important; color: white; margin-right: 10px!important">Descargar Plantilla</button>
        <button class="btn rounded-pill" style="background-color: #28a745!important; color: white;">Subir Plantilla</button>
    </div>
    <div class="overflow-auto">
        <table class="table text-center" >
            <tr>
                <th></th>
                @foreach ($meses as $m)
                <th style="background-color: #79a08c!important">{{ $m }}</th>
                @endforeach
            </tr>
            @for ($i = 0; $i < 10; $i++) <tr>
                <td width="100" class="table-info">DEALER {{ $i + 1 }}</td>
                @foreach ($meses as $m)
                <td style="background-color: #ecfbec!important"><input style="font-size: 12.5px" type="text" step="any" class="form-control text-center" value="{{ number_format(random_int(100000, 999999), 0, '.', ',') }}"></td>
                @endforeach
                </tr>
                @endfor
        </table>
    </div>
    <div class="d-flex justify-content-end">
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