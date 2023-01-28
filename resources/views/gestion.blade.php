@extends('layouts.app')
@section('title', '- Gestión')

@section('content')

<div class="form-group px-4">
    <h1 class="mb-3">GESTIÓN JEFE</h1>
    
</div>

<div class="row m-3">
    <div class="overflow-auto">
        <table class="table text-center">
            <tr>
                <th></th>
                <th colspan="7" class="text-white" style="background-color: #44546a!important">REPUESTOS</th>
            </tr>
            <tr>
                <td></td>
                <td class="bg-green-so text-white">META</td>
                <td></td>
                <td class="bg-blue-so text-white">REAL</td>
                <td class="bg-blue-so text-white">AVANCE</td>
                <td></td>
                <td class="bg-dgray text-white">PROYECCIÓN</td>
                <td class="bg-dgray text-white">ALCANCE</td>
            </tr>
            @foreach ($info_1 as $i)
            <tr>
                <td>{{ $i->DEALER }}</td>
                <td class="r">S/ {{ number_format($i->META, 0, '.', ',') }} <input type="hidden" value="{{ $i->META }}" @if ($loop->last) id="meta_repuesto_total" @else id="meta_repuesto-{{ $loop->iteration }}" @endif></td>
                <td></td>
                <td class="r">S/ {{ number_format($i->REAL, 0, '.', ',') }}</td>
                <td
                    class="r {{ $loop->last ? 'text-yellow bg-yellow' : (round($i->AVANCE, 0) >= 100 ? 'text-green bg-green' : 'text-red bg-red' ) }}">
                    {{ $i->AVANCE }}%</td>
                <td></td>
                <td style="max-width: 100px">
                    @if ($loop->last)
                        S/ <span id="proyeccion_repuesto_total_span">0</span>
                        <input type="hidden" id="proyeccion_repuesto_total">
                    @else
                        <input type="number" class="form-control text-center" step="any" id="proyeccion_repuesto-{{ $loop->iteration }}">
                    @endif
                </td>
                <td class="text-red bg-red">
                    @if ($loop->last)
                        <span id="alcance_repuesto_total">0</span>%
                    @else
                        <span id="alcance_repuesto-{{ $loop->iteration }}">0</span>%
                    @endif                    
                </td>
            </tr>
            @endforeach
        </table>
    </div>
    <div class="overflow-auto mt-3">
        <table class="table text-center">
            <tr>
                <th></th>
                <th colspan="7" class="text-white" style="background-color: #44546a!important">OTS MECÁNICA</th>
            </tr>
            <tr>
                <td></td>
                <td class="bg-green-so text-white">META</td>
                <td></td>
                <td class="bg-blue-so text-white">REAL</td>
                <td class="bg-blue-so text-white">AVANCE</td>
                <td></td>
                <td class="bg-dgray text-white">PROYECCIÓN</td>
                <td class="bg-dgray text-white">ALCANCE</td>
            </tr>
            @foreach ($info_2 as $i)
            <tr>
                <td>{{ $i->DEALER }}</td>
                <td class="r">{{ number_format($i->META, 0, '.', ',') }} <input type="hidden" value="{{ $i->META }}" @if ($loop->last) id="meta_mec_total" @else id="meta_mec-{{ $loop->iteration }}" @endif></td>
                <td></td>
                <td class="r">{{ number_format($i->REAL, 0, '.', ',') }}</td>
                <td
                    class="r {{ $loop->last ? 'text-yellow bg-yellow' : (round($i->AVANCE, 0) >= 100 ? 'text-green bg-green' : 'text-red bg-red' ) }}">
                    {{ $i->AVANCE }}%</td>
                <td></td>
                <td style="max-width: 100px">
                    @if ($loop->last)
                        <span id="proyeccion_mec_total_span">0</span>
                        <input type="hidden" id="proyeccion_mec_total">
                    @else
                        <input type="number" class="form-control text-center" step="any" id="proyeccion_mec-{{ $loop->iteration }}">
                    @endif
                </td>
                <td class="text-red bg-red">
                    @if ($loop->last)
                        <span id="alcance_mec_total">0</span>%
                    @else
                        <span id="alcance_mec-{{ $loop->iteration }}">0</span>%
                    @endif                    
                </td>
            </tr>
            @endforeach
        </table>
    </div>
    <div class="overflow-auto mt-3">
        <table class="table text-center">
            <tr>
                <th></th>
                <th colspan="7" class="text-white" style="background-color: #44546a!important">OTS PYP</th>
            </tr>
            <tr>
                <td></td>
                <td class="bg-green-so text-white">META</td>
                <td></td>
                <td class="bg-blue-so text-white">REAL</td>
                <td class="bg-blue-so text-white">AVANCE</td>
                <td></td>
                <td class="bg-dgray text-white">PROYECCIÓN</td>
                <td class="bg-dgray text-white">ALCANCE</td>
            </tr>
            @foreach ($info_3 as $i)
            <tr>
                <td>{{ $i->DEALER }}</td>
                <td class="r">{{ number_format($i->META, 0, '.', ',') }} <input type="hidden" value="{{ $i->META }}" @if ($loop->last) id="meta_pyp_total" @else id="meta_pyp-{{ $loop->iteration }}" @endif></td>
                <td></td>
                <td class="r">{{ number_format($i->REAL, 0, '.', ',') }}</td>
                <td
                    class="r {{ $loop->last ? 'text-yellow bg-yellow' : (round($i->AVANCE, 0) >= 100 ? 'text-green bg-green' : 'text-red bg-red' ) }}">
                    {{ $i->AVANCE }}%</td>
                <td></td>
                <td style="max-width: 100px">
                    @if ($loop->last)
                        <span id="proyeccion_pyp_total_span">0</span>
                        <input type="hidden" id="proyeccion_pyp_total">
                    @else
                        <input type="number" class="form-control text-center" step="any" id="proyeccion_pyp-{{ $loop->iteration }}">
                    @endif
                </td>
                <td class="text-red bg-red">
                    @if ($loop->last)
                        <span id="alcance_pyp_total">0</span>%
                    @else
                        <span id="alcance_pyp-{{ $loop->iteration }}">0</span>%
                    @endif                    
                </td>
            </tr>
            @endforeach
        </table>
    </div>
    <div class="d-flex justify-content-end">
        <button class="btn btn-primary" id="guardar">Guardar</button>
    </div>
</div>

@endsection

@section('scripts')
<script>
    var color_quitar = 'text-red bg-red text-yellow bg-yellow text-green bg-green'

    $('#guardar').on('click', function() {
        window.location.reload();
    })

    function setBackgroundColor(id, valor) {
        let color

        if (valor < 80) color = 'text-red bg-red'
        else if (valor >= 80 && valor < 100) color = 'text-yellow bg-yellow'
        else if (valor >= 100) color = 'text-green bg-green'

        console.log(color)
        $(id).parent().removeClass(color_quitar)
        $(id).parent().addClass(color)
    }
    
    /* REPUESTO */
    $('[id^="proyeccion_repuesto-"]').on('input', function() {
        let id = $(this).prop('id').split('-')[1]
        let proyeccion_valor = parseFloat($(this).val() || 0)
        let meta_valor = parseFloat($(`#meta_repuesto-${id}`).val())
        let alcance_valor = parseInt((proyeccion_valor / meta_valor * 100).toFixed(0))
        
        let id_alcance = `#alcance_repuesto-${id}`
        setBackgroundColor(id_alcance, alcance_valor)
        
        $(id_alcance).text(alcance_valor)        

        calcular_repuesto()
    })

    function calcular_repuesto() {
        var proyeccion_repuesto_total_valor = 0

        $('[id^="proyeccion_repuesto-"]').each(function() {
            proyeccion_repuesto_total_valor += parseFloat($(this).val() || 0)
        })        
        
        $('#proyeccion_repuesto_total_span').text(proyeccion_repuesto_total_valor)

        let meta_repuesto_total_valor = parseFloat($('#meta_repuesto_total').val())
        let alcance_repuesto_total_valor = parseInt((proyeccion_repuesto_total_valor / meta_repuesto_total_valor * 100).toFixed(0))

        let id_alcance = `#alcance_repuesto_total`
        setBackgroundColor(id_alcance, alcance_repuesto_total_valor)

        $(id_alcance).text(alcance_repuesto_total_valor)
    }

    /* MEC */
    $('[id^="proyeccion_mec-"]').on('input', function() {
    let id = $(this).prop('id').split('-')[1]
    let proyeccion_valor = parseFloat($(this).val() || 0)
    let meta_valor = parseFloat($(`#meta_mec-${id}`).val())
    let alcance_valor = parseInt((proyeccion_valor / meta_valor * 100).toFixed(0))

    let id_alcance = `#alcance_mec-${id}`
    setBackgroundColor(id_alcance, alcance_valor)

    $(id_alcance).text(alcance_valor)

    calcular_mec()
})

function calcular_mec() {
    var proyeccion_mec_total_valor = 0

    $('[id^="proyeccion_mec-"]').each(function() {
        proyeccion_mec_total_valor += parseFloat($(this).val() || 0)
    })        
    
    $('#proyeccion_mec_total_span').text(proyeccion_mec_total_valor)

    let meta_mec_total_valor = parseFloat($('#meta_mec_total').val())
    let alcance_mec_total_valor = parseInt((proyeccion_mec_total_valor / meta_mec_total_valor * 100).toFixed(0))

    let id_alcance = '#alcance_mec_total'
    setBackgroundColor(id_alcance, alcance_mec_total_valor)

    $(id_alcance).text(alcance_mec_total_valor)
}

    /* PYP */
    $('[id^="proyeccion_pyp-"]').on('input', function() {
    let id = $(this).prop('id').split('-')[1]
    let proyeccion_valor = parseFloat($(this).val() || 0)
    let meta_valor = parseFloat($(`#meta_pyp-${id}`).val())
    let alcance_valor = parseInt((proyeccion_valor / meta_valor * 100).toFixed(0))

    let id_alcance = `#alcance_pyp-${id}`
    setBackgroundColor(id_alcance, alcance_valor)

    $(id_alcance).text(alcance_valor)

    calcular_pyp()
})

function calcular_pyp() {
    var proyeccion_pyp_total_valor = 0

    $('[id^="proyeccion_pyp-"]').each(function() {
        proyeccion_pyp_total_valor += parseFloat($(this).val() || 0)
    })        
    
    $('#proyeccion_pyp_total_span').text(proyeccion_pyp_total_valor)

    let meta_pyp_total_valor = parseFloat($('#meta_pyp_total').val())
    let alcance_pyp_total_valor = parseInt((proyeccion_pyp_total_valor / meta_pyp_total_valor * 100).toFixed(0))

    let id_alcance = '#alcance_pyp_total'
    setBackgroundColor(id_alcance, alcance_pyp_total_valor)

    $(id_alcance).text(alcance_pyp_total_valor)
}
</script>
@endsection