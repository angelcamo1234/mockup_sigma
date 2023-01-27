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
        <label for="dealer" class="col-sm-2 col-form-label">DEALER</label>
        <div class="col-sm-10">
            <select name="dealer" id="dealer" class="form-select">
                <option value="DEALER 1">DEALER 1</option>
                <option value="DEALER 2">DEALER 2</option>
            </select>
        </div>
    </div>
    <div class="mb-3 row col-12 col-md-6">
        <label for="servicio" class="col-sm-2 col-form-label">SERVICIO</label>
        <div class="col-sm-10">
            <select name="servicio" id="servicio" class="form-select">
                <option value="MECÁNICA">MECÁNICA</option>
                <option value="DEALER PYP">DEALER PYP</option>
                <option value="MESÓN">MESÓN</option>
            </select>
        </div>
    </div>
</div>

<div class="row m-3">
    <div class="grid-container text-center">
        <div>
            <table class="col-12 tb-border">
                <tr>
                    <th width="100" class="text-center" rowspan="2" style="background-color: #5c7290; color: white; height: 81px;">INVENTARIO</th>
                    <td width="100">Valor</td>
                    <td>S/ 300,000</td>
                </tr>
                <tr>
                    <td>MOS</td>
                    <td>1.50</td>
                </tr>
            </table>
        </div>
        <div>
            <table class="col-12 tb-border">
                <tr>
                    <th width="100" class="text-center" rowspan="3" style="background-color: #266e1a; color: white; height: 81px;">REPUESTOS</th>
                    <td width="100">META</td>
                    <td>S/ 40,000</td>
                </tr>
                <tr>
                    <td rowspan="2">AVANCE</td>
                    <td>S/ 35,000</td>
                </tr>
                <tr>
                    <td class="bg-yellow text-yellow">88%</td>
                </tr>
            </table>
        </div>
        <div>
            <table class="col-12 tb-border">
                <tr>
                    <th width="100" class="text-center" rowspan="3" style="background-color: #7d1417; color: white; height: 81px;">MEC</th>
                    <td width="100">META</td>
                    <td>400</td>
                </tr>
                <tr>
                    <td rowspan="2">AVANCE</td>
                    <td>350</td>
                </tr>
                <tr>
                    <td class="bg-yellow text-yellow">88%</td>
                </tr>
            </table>
        </div>
        
        <div>
            <table class="col-12 tb-border">
                <tr>
                    <th width="100" class="text-center" rowspan="3" style="background-color: #854615; color: white; height: 81px;">PYP</th>
                    <td width="100">META</td>
                    <td>65</td>
                </tr>
                <tr>
                    <td rowspan="2">AVANCE</td>
                    <td>60</td>
                </tr>
                <tr>
                    <td class="bg-yellow text-yellow">92%</td>
                </tr>
            </table>
        </div>
        
    </div>
    <div class="mt-3 overflow-auto">
        <table class="table">
            <tr>
                <td class="bg-yellow text-red" style="background-color: rgba(255, 192, 0, .2)!important">MEC</td>
                @foreach ($meses as $mes)
                    <td class="text-center bg-primary text-white">{{ $mes }}</td>
                @endforeach
                <td class="text-center bg-secondary text-white">Promedio</td>
            </tr>
            <tr>
                <td style="background-color: #ddebf7">Facturación</td>
                @foreach ($facturacion as $f)
                    <td class="text-center">S/ {{ $f }}</td>
                @endforeach
            </tr>
            <tr>
                <td colspan="14"></td>
            </tr>
            <tr>
                <td style="background-color: #ddebf7">Ots</td>
                @foreach ($ots as $o)
                    <td class="text-center">{{ $o }}</td>
                @endforeach
            </tr>
            <tr>
                <td colspan="14"></td>
            </tr>
            <tr>
                <td style="background-color: #ddebf7">Ticket</td>
                @foreach ($ticket as $t)
                    <td class="text-center">S/ {{ $t }}</td>
                @endforeach
            </tr>
        </table>
    </div>
    <div class="row">
        <div class="col-12 col-md-6" id="primer_cuadro"></div>
        <div class="col-12 col-md-6" id="segundo_cuadro"></div>
    </div>
</div>

@endsection

@section('scripts')
@php
    array_pop($ots);
@endphp
<script>

Highcharts.chart('primer_cuadro', {
    chart: {
        type: 'spline'
    },
    title: {
        text: 'Tickets por mes'
    },
    /* subtitle: {
        text: 'Source: ' +
            '<a href="https://en.wikipedia.org/wiki/List_of_cities_by_average_temperature" ' +
            'target="_blank">Wikipedia.com</a>'
    }, */
    xAxis: {
        categories: {!! json_encode($meses) !!},
        accessibility: {
            description: 'Months of the year'
        }
    },
    yAxis: {
        title: {
            text: 'Ticket'
        },
        labels: {
            formatter: function () {
                console.log(this)
                return this.value;
            }
        }
    },
    tooltip: {
        crosshairs: true,
        shared: true
    },
    plotOptions: {
        spline: {
            marker: {
                radius: 4,
                lineColor: '#666666',
                lineWidth: 1
            }
        }
    },
    series: [{
        name: 'Ticket',
        marker: {
            symbol: 'circle'
        },
        data: {!! json_encode($ticket) !!},

    }]
});



Highcharts.chart('segundo_cuadro', {
    chart: {
        zoomType: 'xy'
    },
    title: {
        text: 'Ots objetivo',
        align: 'left'
    },
    /* subtitle: {
        text: 'Source: WorldClimate.com',
        align: 'left'
    }, */
    xAxis: [{
        categories: {!! json_encode($meses) !!},
        crosshair: true
    }],
    yAxis: [{ // Primary yAxis
        labels: {
            format: '{value}%',
            style: {
                color: Highcharts.getOptions().colors[2]
            }
        },
        title: {
            text: 'Porcentaje',
            style: {
                color: Highcharts.getOptions().colors[2]
            }
        },
        opposite: true

    }, { // Secondary yAxis
        gridLineWidth: 0,
        title: {
            text: 'OTs',
            style: {
                color: Highcharts.getOptions().colors[0]
            }
        },
        labels: {
            format: '{value}',
            style: {
                color: Highcharts.getOptions().colors[0]
            }
        }

    }, { // Tertiary yAxis
        gridLineWidth: 0,
        title: {
            text: 'Sea-Level Pressure',
            style: {
                color: Highcharts.getOptions().colors[1]
            }
        },
        labels: {
            format: '{value} mb',
            style: {
                color: Highcharts.getOptions().colors[1]
            }
        },
        opposite: true
    }],
    tooltip: {
        shared: true
    },
    /* legend: {
        layout: 'vertical',
        align: 'left',
        x: 80,
        verticalAlign: 'top',
        y: 55,
        floating: true,
        backgroundColor:
            Highcharts.defaultOptions.legend.backgroundColor || // theme
            'rgba(255,255,255,0.25)'
    }, */
    series: [{
        name: 'OTs MEC',
        type: 'column',
        yAxis: 1,
        data: {!! json_encode($ots) !!},
        tooltip: {
            valueSuffix: ''
        }

    },{
        name: 'Objetivo',
        type: 'column',
        yAxis: 1,
        data: {!! json_encode($ots) !!},
        tooltip: {
            valueSuffix: ''
        }

    }, {
        name: 'Porcentaje',
        type: 'spline',
        data: [7.0, 6.9, 9.5, 14.5, 18.2, 21.5, 25.2, 26.5, 23.3, 18.3, 13.9, 9.6],
        tooltip: {
            valueSuffix: ' %'
        }
    }],
    responsive: {
        rules: [{
            condition: {
                maxWidth: 500
            },
            chartOptions: {
                legend: {
                    floating: false,
                    layout: 'horizontal',
                    align: 'center',
                    verticalAlign: 'bottom',
                    x: 0,
                    y: 0
                },
                yAxis: [{
                    labels: {
                        align: 'right',
                        x: 0,
                        y: -6
                    },
                    showLastLabel: false
                }, {
                    labels: {
                        align: 'left',
                        x: 0,
                        y: -6
                    },
                    showLastLabel: false
                }, {
                    visible: false
                }]
            }
        }]
    }
});
</script>

@endsection