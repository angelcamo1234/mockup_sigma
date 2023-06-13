@extends('layouts.app')
@section('title', '- Retencion')

@section('content')

<div class="form-group px-4">
    <h1 class="mb-3">RETENCIÓN</h1>
    <div class="row">
        <div class="mb-3 row col-12 col-md-6">
            <label for="dealer" class="col-sm-2 col-form-label">DEALER</label>
            <div class="col-sm-10">
                <select name="dealer" id="dealer" class="form-select">
                    <option value=""></option>
                    @for ($i = 1; $i <= 10; $i++)
                    <option value="DEALER {{ $i }}" {{ $i == 1 ? 'selected' : '' }}>DEALER {{ $i }}</option>
                    @endfor
                </select>
            </div>
        </div>
        <div class="mb-3 col-12 col-md-6 d-none d-md-block"></div>
        <div class="mb-3 row col-12 col-md-6">
            <label for="marca" class="col-sm-2 col-form-label">MARCA</label>
            <div class="col-sm-10">
                <select name="marca" id="marca" class="form-select">
                    <option value=""></option>
                    <option value="HONDA" selected>HONDA</option>
                </select>
            </div>
        </div>
        <div class="row col-12 col-md-6" id="div_modelo_select">
            <label for="modelo" class="col-sm-2 col-form-label">MODELO</label>
            <div class="col-sm-10">
                <select name="modelo" id="modelo" class="form-select">
                    <option value=""></option>
                    <option value="CIVIC">CIVIC</option>
                    <option value="PILOT">PILOT</option>
                    <option value="CR-V">CR-V</option>
                    <option value="WR-V">WR-V</option>
                </select>
            </div>
        </div>
    </div>
</div>

<div class="row m-3">
    <div class="col-12 col-sm-12 col-md-6">
        <table class="table col-12">
            <tr>
                <th></th>
                @foreach ($data->col_1->anhos as $anho)
                    <th class="text-center">{{ $anho }}</th>
                @endforeach
            </tr>
            <tr>
                <td class="">TOTAL VEHICULOS</td>
                @foreach ($data->col_1->total_vh as $vh)
                    <td class="text-center">{{ $vh }}</td>
                @endforeach
            </tr>
            <tr>
                <td class="">AVANCE DEALER</td>
                @foreach ($data->col_1->avance_dealer as $ad)
                    <td class="text-center">{{ $ad }}</td>
                @endforeach
            </tr>
            <tr class="bg-yellow">
                <td class="bg-yellow">ALCANCE</td>
                @foreach ($data->col_1->alcance as $al)
                    <td class="text-center ">{{ $al }}%</td>
                @endforeach
            </tr>
            <tr class="bg-green">
                <td class="">OBJ. RETENCIÓN</td>
                @foreach ($data->col_1->retencion as $r)
                    <td class="text-center bg-green">{{ $r }}%</td>
                @endforeach
            </tr>
        </table>
        <div class="mt-3" id="dealer-chart">

        </div>
    </div>
    <div class="col-12 col-sm-12 col-md-6 d-none" id="div_modelo">
        <table class="table col-12">
            <tr>
                <th></th>
                @foreach ($data->col_1->anhos as $anho)
                    <th class="text-center">{{ $anho }}</th>
                @endforeach
            </tr>
            <tr>
                <td class="">TOTAL VEHICULOS</td>
                @foreach ($data->col_2->total_vh as $vh)
                    <td class="text-center">{{ $vh }}</td>
                @endforeach
            </tr>
            <tr>
                <td class="">AVANCE DEALER</td>
                @foreach ($data->col_2->avance_dealer as $ad)
                    <td class="text-center">{{ $ad }}</td>
                @endforeach
            </tr>
            <tr class="bg-yellow">
                <td class="bg-yellow">ALCANCE</td>
                @foreach ($data->col_2->alcance as $al)
                    <td class="text-center ">{{ $al }}%</td>
                @endforeach
            </tr>
            <tr class="bg-green">
                <td class="">OBJ. RETENCIÓN</td>
                @foreach ($data->col_2->retencion as $r)
                    <td class="text-center bg-green">{{ $r }}%</td>
                @endforeach
            </tr>
        </table>
        <div class="mt-3" id="dealer-chart-2">

        </div>
    </div>
</div>

@endsection

@section('scripts')

<script>

$('#dealer').on('change', function() {
    let dealer_val = $(this).val() || false

    $('#marca').change()
})

$('#marca').on('change', function() {
    let marca_val = $(this).val() || false
    let dealer_val = $('#dealer').val() || false

    if (marca_val && dealer_val) $('#div_modelo_select').removeClass('d-none')
    else {
        console.log('test')
        $('#div_modelo_select').addClass('d-none')        
        $('#modelo').val(null)        
    }

    $('#modelo').change()
})

$('#modelo').on('change', function() {
    let modelo_val = $(this).val() || false    

    if (modelo_val) {
        $('#div_modelo').removeClass('d-none')
        chart2()        
    } else $('#div_modelo').addClass('d-none')
})

Highcharts.chart('dealer-chart', {
    chart: {
        zoomType: 'xy'
    },
    title: {
        text: '',
        align: 'left'
    },
    /* subtitle: {
        text: 'Source: WorldClimate.com',
        align: 'left'
    }, */
    xAxis: [{
        categories: {!! json_encode($data->col_1->anhos) !!},
        crosshair: true
    }],
    yAxis: [{ // Primary yAxis
        labels: {
            format: '{value}%',
            style: {
                color: '#FF0000'//Highcharts.getOptions().colors[2]
            }
        },
        min: 0,
        title: {
            text: 'Alcance',
            style: {
                color: '#FF0000'//Highcharts.getOptions().colors[2]
            }
        },
        opposite: true

    }, { // Secondary yAxis
        gridLineWidth: 0,
        min: 0,
        title: {
            text: 'OBJ. RETENCIÓN',
            style: {
                color: Highcharts.getOptions().colors[0]
            }
        },
        labels: {
            format: '{value}%',
            style: {
                color: Highcharts.getOptions().colors[0]
            }
        }

    }, { // Tertiary yAxis
        gridLineWidth: 0,
        min: 0,
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
        name: 'OBJ. RETENCIÓN',
        type: 'column',
        yAxis: 1,
        data: {!! json_encode($data->col_1->retencion) !!},
        tooltip: {
            valueSuffix: ' %'
        }

    }, {
        name: 'Alcance',
        type: 'spline',
        color: 'red',
        data: {!! json_encode($data->col_1->alcance) !!},
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

function chart2() {
    Highcharts.chart('dealer-chart-2', {
    chart: {
        zoomType: 'xy'
    },
    
    title: {
        text: '',
        align: 'left'
    },
    /* subtitle: {
        text: 'Source: WorldClimate.com',
        align: 'left'
    }, */
    xAxis: [{
        categories: {!! json_encode($data->col_2->anhos) !!},
        crosshair: true
    }],
    yAxis: [{ // Primary yAxis
        labels: {
            format: '{value}%',
            style: {
                color: '#FF0000'//Highcharts.getOptions().colors[2]
            }
        },
        min: 0,
        title: {
            text: 'Alcance',
            style: {
                color: '#FF0000'//Highcharts.getOptions().colors[2]
            }
        },
        opposite: true

    }, { // Secondary yAxis
        gridLineWidth: 0,
        title: {
            text: 'OBJ. RETENCIÓN',
            style: {
                color: Highcharts.getOptions().colors[0]
            }
        },
        labels: {
            format: '{value}%',
            style: {
                color: Highcharts.getOptions().colors[0]
            }
        }

    }, { // Tertiary yAxis
        gridLineWidth: 0,
        min: 0,
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
        name: 'OBJ. RETENCIÓN',
        type: 'column',
        yAxis: 1,
        data: {!! json_encode($data->col_2->retencion) !!},
        tooltip: {
            valueSuffix: ' %'
        }

    }, {
        name: 'Alcance',
        type: 'spline',
        color: 'red',
        data: {!! json_encode($data->col_2->alcance) !!},
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
}

</script>

@endsection