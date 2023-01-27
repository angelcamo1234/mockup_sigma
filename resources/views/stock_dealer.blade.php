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
</div>

<div class="row m-3">
    <div class="col-12 col-md-6">
        <table class="table table-sm table-md">
            <tr>
                <th scope="col">Clasificación</th>
                <th scope="col">Stock</th>
                <th scope="col" class="text-danger">%</th>
            </tr>
            @foreach ($dealer as $d)
            <tr class="">
                <td>{{ $d->CLASIFICACION }}</td>
                <td>S/ {{ number_format($d->STOCK, 0, '.', ',') }}</td>
                <td class="text-danger">{{ $d->PORCENTAJE }}%</td>
            </tr>
            @endforeach
            <tr>
                <td style="background-color: #d9e1f2">TOTAL</td>
                <td style="background-color: #d9e1f2">S/ {{ number_format($dealer->reduce(function($o, $item) { return
                    $o += $item->STOCK; }, 0), 0, '.', ',') }}</td>
                <td></td>
            </tr>
            <tr>
                <td colspan="3"></td>
            </tr>
            <tr>
                <td style="background-color: #ededed">MOS</td>
                <td style="background-color: #ededed">1.5</td>
                <td></td>
            </tr>
            <tr>
                <td colspan="3"></td>
            </tr>
            <tr>
                <td style="background-color: #ededed">PROM. COMPRA</td>
                <td style="background-color: #ededed">S/ 150,000</td>
                <td></td>
            </tr>
        </table>
    </div>
    <div class="col-12 col-md-6">
        <div id="my_chart">

        </div>
    </div>
</div>

@endsection

@section('scripts')
<script>
    Highcharts.chart('my_chart', {
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
        categories: {!! json_encode($labels) !!},
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
            text: '',
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
        data: {!! json_encode($bars) !!},
        tooltip: {
            valueSuffix: ''
        }

    }, {
        name: 'Porcentaje',
        type: 'spline',
        color: 'red',
        data: {!! json_encode($lines) !!},
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