@extends('layouts.app')

@section('content')

<div class="form-group px-4">
    <div class="mb-3 row col-12 col-md-6">
        <label for="marca" class="col-sm-2 col-form-label">MARCA</label>
        <div class="col-sm-10">
            <select name="marca" id="marca" class="form-select">
                <option value="HYUNDAI">HYUNDAI</option>
            </select>
        </div>
    </div>
    <div class="mb-3 row col-12 col-md-6">
        <label for="jefe" class="col-sm-2 col-form-label">JEFE</label>
        <div class="col-sm-10">
            <select name="jefe" id="jefe" class="form-select">
                <option value="JEFE 1">JEFE 1</option>
            </select>
        </div>
    </div>
    <div class="mb-3 row col-12 col-md-6">
        <label for="periodo" class="col-sm-2 col-form-label">PERIODO</label>
        <div class="col-sm-10">
            <select name="periodo" id="periodo" class="form-select">
                <option value="DIC-22">DIC-22</option>
            </select>
        </div>
    </div>
</div>

<ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item" role="presentation">
        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button"
            role="tab" aria-controls="home-tab-pane" aria-selected="true">PESTAÑA 1</button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button"
            role="tab" aria-controls="profile-tab-pane" aria-selected="false">PESTAÑA 2</button>
    </li>
</ul>
<div class="tab-content mt-3" id="myTabContent">
    <div class="tab-pane fade show active overflow-auto" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
        <table class="table table-sm text-center" style="font-size: 13.5px">
            <tr>
                <td>MES:</td>
                <td>DIC-22</td>
                <td colspan="11" class="text-center" style="background-color: #f2f2f2!important">GESTIÓN DE REPUESTOS</td>
                <td></td>
                <td style="background-color: #f98b7f; text-align: left!important">PREVISIÓN vs</td>
                <td></td>
                <td></td>
                <td style="background-color: #f98b7f; text-align: left!important">PREVISIÓN vs</td>
                <td></td>
                <td></td>
                <td style="background-color: #f98b7f; text-align: left!important">PREVISIÓN vs</td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td class="bg-green-so text-white r">META</td>
                <td></td>
                <td class="bg-dgray text-white">PREVISIÓN</td>
                <td class="bg-dgray text-white">GAP</td>
                <td class="bg-dgray text-white">CUMPLIMIENTO</td>
                <td></td>
                <td class="bg-blue-so text-white r">REAL</td>
                <td class="bg-blue-so text-white r">AVANCE</td>
                <td></td>
                <td class="bg-yellow-so text-white r">INVENTARIO</td>
                <td class="bg-yellow-so text-white r">MOS</td>
                <td></td>
                <td class="r" style="background-color: #ddebf7">NOV-22</td>
                <td class="r">VARIACIÓN %</td>
                <td></td>
                <td class="r" style="background-color: #ddebf7">PROM 2022</td>
                <td class="r">VARIACIÓN %</td>
                <td></td>
                <td class="r" style="background-color: #ddebf7">DIC-21</td>
                <td class="r">VARIACIÓN %</td>
            </tr>
            @foreach ($info_1 as $i)
            <tr>
                @if ($loop->first)
                <td class="bg-secondary" rowspan="6" style="vertical-align: middle">JEFE 1</td>
                @endif
                @if ($loop->last)
                <td></td>
                @endif
                <td>{{ $i->DEALER }}</td>
                <td class="r">S/ {{ number_format($i->META, 0, '.', ',') }}</td>
                <td></td>
                <td class="r">S/ {{ number_format($i->PREVISION, 0, '.', ',') }}</td>
                <td class="r {{ $i->GAP < 0 ? 'text-red' : '' }}">S/ {{ number_format($i->GAP, 0, '.', ',') }}
                </td>
                <td
                    class="r {{ $loop->last ? 'text-yellow bg-yellow' : (round($i->CUMPLIMIENTO, 0) == 100 ? 'text-green bg-green' : 'text-red bg-red' ) }}">
                    {{ round($i->CUMPLIMIENTO, 0) }}%</td>
                <td></td>
                <td class="r">S/ {{ number_format($i->REAL, 0, '.', ',') }}</td>
                <td
                    class="r {{ $loop->last ? 'text-yellow bg-yellow' : (round($i->AVANCE, 0) >= 100 ? 'text-green bg-green' : 'text-red bg-red' ) }}">
                    {{ $i->AVANCE }}%</td>
                <td></td>
                <td class="r">S/ {{ number_format($i->INVENTARIO, 0, '.', ',') }}</td>
                <td
                    class="r {{ $i->MOS < 1 ? 'text-red' : ($i->MOS >= 1 && $i->MOS <= 2 ? 'text-green' : 'text-yellow' ) }}">
                    {{ $i->MOS }}</td>
                <td></td>
                <td class="r">S/ {{ number_format($i->NOV, 0, '.', ',') }}</td>
                <td class="r {{ $i->VARIACION > 0 ? 'text-green bg-green' : 'text-red' }}">{{ $i->VARIACION }}%
                </td>
                <td></td>
                <td class="r">S/ {{ number_format($i->PROM, 0, '.', ',') }}</td>
                <td class="r {{ $i->VARIACION_2 > 0 ? 'text-green bg-green' : 'text-red' }}">{{ $i->VARIACION_2
                    }}%</td>
                <td></td>
                <td class="r">S/ {{ number_format($i->DIC, 0, '.', ',') }}</td>
                <td class="r {{ $i->VARIACION_3 > 0 ? 'text-green bg-green' : 'text-red' }}">{{ $i->VARIACION_3
                    }}%</td>
            </tr>
            @endforeach
        </table>
    </div>
    <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
        <table class="table table-sm text-center" style="font-size: 13px">
            <tr>
                <td>MES:</td>
                <td>DIC-22</td>
                <td colspan="8" class="text-center r bg-gray">AVANCE PASOS MECÁNICA</td>
                <td></td>
                <td style="background-color: #f98b7f; text-align: left!important">PREVISIÓN vs</td>
                <td></td>
                <td></td>
                <td style="background-color: #f98b7f; text-align: left!important">PREVISIÓN vs</td>
                <td></td>
                <td></td>
                <td style="background-color: #f98b7f; text-align: left!important">PREVISIÓN vs</td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td class="bg-green-so text-white r">META</td>
                <td></td>
                <td class="bg-dgray text-white">PREVISIÓN</td>
                <td class="bg-dgray text-white">GAP</td>
                <td class="bg-dgray text-white">CUMPLIMIENTO</td>
                <td></td>
                <td class="bg-blue-so text-white r">REAL</td>
                <td class="bg-blue-so text-white r">AVANCE</td>
                <td></td>
                <td class="r" style="background-color: #ddebf7">NOV-22</td>
                <td class="r">VARIACIÓN %</td>
                <td></td>
                <td class="r" style="background-color: #ddebf7">PROM 2022</td>
                <td class="r">VARIACIÓN %</td>
                <td></td>
                <td class="r" style="background-color: #ddebf7">DIC-21</td>
                <td class="r">VARIACIÓN %</td>
            </tr>
            @foreach ($info_2 as $i)
            <tr>
                @if ($loop->first)
                <td class="bg-secondary" rowspan="6" style="vertical-align: middle">JEFE 1</td>
                @endif
                @if ($loop->last)
                <td></td>
                @endif
                <td>{{ $i->DEALER }}</td>
                <td class="r">{{ number_format($i->META, 0, '.', ',') }}</td>
                <td></td>
                <td class="r">{{ number_format($i->PREVISION, 0, '.', ',') }}</td>
                <td class="r {{ $i->GAP < 0 ? 'text-red' : '' }}">{{ number_format($i->GAP, 0, '.', ',') }}
                </td>
                <td
                    class="r {{ $loop->last ? 'text-yellow bg-yellow' : (round($i->CUMPLIMIENTO, 0) == 100 ? 'text-green bg-green' : 'text-red bg-red' ) }}">
                    {{ round($i->CUMPLIMIENTO, 0) }}%</td>
                <td></td>
                <td class="r">{{ number_format($i->REAL, 0, '.', ',') }}</td>
                <td
                    class="r {{ $loop->last ? 'text-yellow bg-yellow' : (round($i->AVANCE, 0) >= 100 ? 'text-green bg-green' : 'text-red bg-red' ) }}">
                    {{ $i->AVANCE }}%</td>
                <td></td>
                <td class="r">{{ number_format($i->NOV, 0, '.', ',') }}</td>
                <td class="r {{ $i->VARIACION > 0 ? 'text-green bg-green' : 'text-red' }}">{{ $i->VARIACION }}
                </td>
                <td></td>
                <td class="r">{{ number_format($i->PROM, 0, '.', ',') }}</td>
                <td class="r {{ $i->VARIACION_2 > 0 ? 'text-green bg-green' : 'text-red' }}">{{ $i->VARIACION_2
                    }}</td>
                <td></td>
                <td class="r">{{ number_format($i->DIC, 0, '.', ',') }}</td>
                <td class="r {{ $i->VARIACION_3 > 0 ? 'text-green bg-green' : 'text-red' }}">{{ $i->VARIACION_3
                    }}</td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            @endforeach
        </table>
        <table class="table table-sm text-center mt-3" style="font-size: 13px">
            <tr>
                <td>MES:</td>
                <td>DIC-22</td>
                <td colspan="8" class="text-center r bg-gray">AVANCE PASOS PYP</td>
                <td></td>
                <td style="background-color: #f98b7f; text-align: left!important">PREVISIÓN vs</td>
                <td></td>
                <td></td>
                <td style="background-color: #f98b7f; text-align: left!important">PREVISIÓN vs</td>
                <td></td>
                <td></td>
                <td style="background-color: #f98b7f; text-align: left!important">PREVISIÓN vs</td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td class="bg-green-so text-white r">META</td>
                <td></td>
                <td class="bg-dgray text-white">PREVISIÓN</td>
                <td class="bg-dgray text-white">GAP</td>
                <td class="bg-dgray text-white">CUMPLIMIENTO</td>
                <td></td>
                <td class="bg-blue-so text-white r">REAL</td>
                <td class="bg-blue-so text-white r">AVANCE</td>
                <td></td>
                <td class="r" style="background-color: #ddebf7">NOV-22</td>
                <td class="r">VARIACIÓN %</td>
                <td></td>
                <td class="r" style="background-color: #ddebf7">PROM 2022</td>
                <td class="r">VARIACIÓN %</td>
                <td></td>
                <td class="r" style="background-color: #ddebf7">DIC-21</td>
                <td class="r">VARIACIÓN %</td>
            </tr>
            @foreach ($info_3 as $i)
            <tr>
                @if ($loop->first)
                <td class="bg-secondary" rowspan="6" style="vertical-align: middle">JEFE 2</td>
                @endif
                @if ($loop->last)
                <td></td>
                @endif
                <td>{{ $i->DEALER }}</td>
                <td class="r">{{ number_format($i->META, 0, '.', ',') }}</td>
                <td></td>
                <td class="r">{{ number_format($i->PREVISION, 0, '.', ',') }}</td>
                <td class="r {{ $i->GAP < 0 ? 'text-red' : '' }}">{{ number_format($i->GAP, 0, '.', ',') }}
                </td>
                <td
                    class="r {{ $loop->last ? 'text-yellow bg-yellow' : (round($i->CUMPLIMIENTO, 0) == 100 ? 'text-green bg-green' : 'text-red bg-red' ) }}">
                    {{ round($i->CUMPLIMIENTO, 0) }}%</td>
                <td></td>
                <td class="r">{{ number_format($i->REAL, 0, '.', ',') }}</td>
                <td
                    class="r {{ $loop->last ? 'text-yellow bg-yellow' : (round($i->AVANCE, 0) >= 100 ? 'text-green bg-green' : 'text-red bg-red' ) }}">
                    {{ $i->AVANCE }}%</td>
                <td></td>
                <td class="r">{{ number_format($i->NOV, 0, '.', ',') }}</td>
                <td class="r {{ $i->VARIACION > 0 ? 'text-green bg-green' : 'text-red' }}">{{ $i->VARIACION }}
                </td>
                <td></td>
                <td class="r">{{ number_format($i->PROM, 0, '.', ',') }}</td>
                <td class="r {{ $i->VARIACION_2 > 0 ? 'text-green bg-green' : 'text-red' }}">{{ $i->VARIACION_2
                    }}</td>
                <td></td>
                <td class="r">{{ number_format($i->DIC, 0, '.', ',') }}</td>
                <td class="r {{ $i->VARIACION_3 > 0 ? 'text-green bg-green' : 'text-red' }}">{{ $i->VARIACION_3
                    }}</td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            @endforeach
        </table>
    </div>
</div>

@endsection