@extends('layouts.app')
@section('title', '- Comparador PYP')

@section('content')

<style>

    thead th { position: sticky; top: 0; }
    
    th, td {
    padding: 8px;    
    }
    
    th {
    position: sticky;
    top: 0;
    left: 0;
    }
    
    td {
    position: sticky;
    left: 0;
    }
</style>

<div class="form-group px-4">
    <h1 class="mb-3">COMPARADOR PYP</h1>
    <div class="mb-3 row col-12 col-md-6">
        <label for="jefe" class="col-sm-2 col-form-label">MARCA</label>
        <div class="col-sm-10">
            <select name="jefe" id="jefe" class="form-select">                
                <option value="HYUNDAI">HYUNDAI</option>
                <option value="MMD">MMD</option>
            </select>
        </div>
    </div>
    <div class="mb-3 row col-12 col-md-6">
        <label for="jefe" class="col-sm-2 col-form-label">MONEDA</label>
        <div class="col-sm-10">
            <select name="jefe" id="jefe" class="form-select">                
                <option value="SOLES">SOLES</option>
                <option value="DOLARES">DOLARES</option>
            </select>
        </div>
    </div>
</div>

<div class="row m-3 overflow-auto">
    <table class="table" style="font-size: 12px">
        <thead>
            <tr>
                @foreach ($dealers as $d)
                    @if($loop->first)
                    <th style="background-color: #EFEFEF; z-index: 999;"></th>
                    @endif
                    @if($loop->iteration > 1)
                    <th class="text-center" colspan="2" style="{{ $d ? (substr($d, 0, 1) == 'D' ? 'background-color: #595959; color: white' : (substr($d, 0, 1) == 'T' ? 'background-color: #C00000; color: white' : 'background-color: #002060; color: white')) : '' }}">{{ $d }}</th>
                    @endif
                    @if (!$loop->first && !$loop->last)
                        <th></th>
                    @endif
                @endforeach
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $d)
                <tr>
                    @if ($d->negrita)
                        <td style="min-width: 200px"><b><u>{{ $d->title }}</u></b></td>
                        <td colspan="32"></td>
                    @else
                        <td style="background-color: #EFEFEF; z-index: 999;">{!! $d->title !!}</td>
                        <td {!! $d->bg_color !!}>{{ $d->s ? '$' : '' }}{{ number_format($d->d1 * ($d->x100 ? 100 : 1), 0, '', ',') }} {{ $d->porc ? '%' : '' }}</td>
                        <td {!! $d->d1p ? $d->bg_color : '' !!}>{{ $d->d1p ? round($d->d1p, 0) . '%' : null }}</td>
                        <td></td>
                        <td {!! $d->bg_color !!}>{{ $d->s ? '$' : '' }}{{ number_format($d->d2 * ($d->x100 ? 100 : 1), 0, '', ',') }} {{ $d->porc ? '%' : '' }}</td>
                        <td {!! $d->d1p ? $d->bg_color : '' !!}>{{ $d->d2p ? round($d->d2p, 0) . '%' : null }}</td>
                        <td></td>
                        <td {!! $d->bg_color !!}>{{ $d->s ? '$' : '' }}{{ number_format($d->d3 * ($d->x100 ? 100 : 1), 0, '', ',') }} {{ $d->porc ? '%' : '' }}</td>
                        <td {!! $d->d1p ? $d->bg_color : '' !!}>{{ $d->d3p ? round($d->d3p, 0) . '%' : null }}</td>
                        <td></td>
                        <td {!! $d->bg_color !!}>{{ $d->s ? '$' : '' }}{{ number_format($d->d4 * ($d->x100 ? 100 : 1), 0, '', ',') }} {{ $d->porc ? '%' : '' }}</td>
                        <td {!! $d->d1p ? $d->bg_color : '' !!}>{{ $d->d4p ? round($d->d4p, 0) . '%' : null }}</td>
                        <td></td>
                        <td {!! $d->bg_color !!}>{{ $d->s ? '$' : '' }}{{ number_format($d->d5 * ($d->x100 ? 100 : 1), 0, '', ',') }} {{ $d->porc ? '%' : '' }}</td>
                        <td {!! $d->d1p ? $d->bg_color : '' !!}>{{ $d->d5p ? round($d->d5p, 0) . '%' : null }}</td>
                        <td></td>
                        <td {!! $d->bg_color !!}>{{ $d->s ? '$' : '' }}{{ number_format($d->d6 * ($d->x100 ? 100 : 1), 0, '', ',') }} {{ $d->porc ? '%' : '' }}</td>
                        <td {!! $d->d1p ? $d->bg_color : '' !!}>{{ $d->d6p ? round($d->d6p, 0) . '%' : null }}</td>
                        <td></td>
                        <td {!! $d->bg_color !!}>{{ $d->s ? '$' : '' }}{{ number_format($d->d7 * ($d->x100 ? 100 : 1), 0, '', ',') }} {{ $d->porc ? '%' : '' }}</td>
                        <td {!! $d->d1p ? $d->bg_color : '' !!}>{{ $d->d7p ? round($d->d7p, 0) . '%' : null }}</td>
                        <td></td>
                        <td {!! $d->bg_color !!}>{{ $d->s ? '$' : '' }}{{ number_format($d->d8 * ($d->x100 ? 100 : 1), 0, '', ',') }} {{ $d->porc ? '%' : '' }}</td>
                        <td {!! $d->d1p ? $d->bg_color : '' !!}>{{ $d->d8p ? round($d->d8p, 0) . '%' : null }}</td>
                        <td></td>
                        <td {!! $d->bg_color !!}>{{ $d->s ? '$' : '' }}{{ number_format($d->d9 * ($d->x100 ? 100 : 1), 0, '', ',') }} {{ $d->porc ? '%' : '' }}</td>
                        <td {!! $d->d1p ? $d->bg_color : '' !!}>{{ $d->d9p ? round($d->d9p, 0) . '%' : null }}</td>
                        <td></td>
                        <td {!! $d->bg_color !!}>{{ $d->s ? '$' : '' }}{{ number_format($d->d10 * ($d->x100 ? 100 : 1), 0, '', ',') }} {{ $d->porc ? '%' : '' }}</td>
                        <td {!! $d->d1p ? $d->bg_color : '' !!}>{{ $d->d10p ? round($d->d10p, 0) . '%' : null }}</td>
                        <td></td>
                        <td {!! $d->bg_color !!}>{{ $d->s ? '$' : '' }}{{ number_format($d->d11 * ($d->x100 ? 100 : 1), 0, '', ',') }} {{ $d->porc ? '%' : '' }}</td>
                        <td {!! $d->d1p ? $d->bg_color : '' !!}>{{ $d->d11p ? round($d->d11p, 0) . '%' : null }}</td>
                    @endif
                </tr>
            @endforeach
        </tbody>
    </table>
    {{-- <div class="d-flex justify-content-end mt-3">
        <button class="btn btn-primary" id="guardar">Guardar</button>
    </div> --}}
</div>

@endsection

@section('scripts')
<script>
    $('#guardar').on('click', function() {
        window.location.reload();
    })
</script>
@endsection