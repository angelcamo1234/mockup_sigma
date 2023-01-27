@extends('layouts.app')

@section('content')

<div class="form-group px-4">
    <div class="mb-3 row col-12 col-md-6">
        <label for="dealer" class="col-sm-2 col-form-label">DEALER</label>
        <div class="col-sm-10">
            <select name="dealer" id="dealer" class="form-select">
                <option value=""></option>
                <option value="DEALER 1">DEALER 1</option>
                <option value="DEALER 2">DEALER 2</option>
            </select>
        </div>
    </div>
    <div class="mb-3 row col-12 col-md-6">
        <label for="marca" class="col-sm-2 col-form-label">MARCA</label>
        <div class="col-sm-10">
            <select name="marca" id="marca" class="form-select">
                <option value=""></option>
                <option value="HYUNDAI">HYUNDAI</option>
            </select>
        </div>
    </div>    
    <div class="mb-3 row col-12 justify-content-md-end d-none" id="div_modelo_select">
        <div class="row col-12 col-md-6">
            <label for="modelo" class="col-sm-2 col-form-label">MODELO</label>
            <div class="col-sm-10">
                <select name="modelo" id="modelo" class="form-select">
                    <option value=""></option>
                    <option value="i10">i10</option>
                    <option value="i20">i20</option>
                    <option value="VENUE">VENUE</option>
                    <option value="TUCSON">TUCSON</option>
                </select>
            </div>
        </div>
    </div>
</div>

<div class="row m-3">
    <div class="col-12 col-md-6">
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
    <div class="col-12 col-md-6 d-none" id="div_modelo">
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
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>

$('#dealer').on('change', function() {
    let dealer_val = $(this).val() || false

    if (!dealer_val) $('#marca').change()
})

$('#marca').on('change', function() {
    let marca_val = $(this).val() || false
    let dealer_val = $('#dealer').val() || false

    if (marca_val && dealer_val) $('#div_modelo_select').removeClass('d-none')
    else {
        console.log('test')
        $('#div_modelo_select').addClass('d-none')        
        $('#modelo').val(null)
        $('#modelo').change()
    }
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
        type: 'column'
    },
    title: {
        text: 'DEALER',
        align: 'center'
    },
    xAxis: {
        categories: {!! json_encode($data->col_1->anhos) !!}
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Count trophies'
        },
        stackLabels: {
            enabled: true,
            style: {
                fontWeight: 'bold',
                color: ( // theme
                    Highcharts.defaultOptions.title.style &&
                    Highcharts.defaultOptions.title.style.color
                ) || 'gray',
                textOutline: 'none'
            }
        }
    },
    /* legend: {
        align: 'left',
        x: 70,
        verticalAlign: 'top',
        y: 70,
        floating: true,
        backgroundColor:
            Highcharts.defaultOptions.legend.backgroundColor || 'white',
        borderColor: '#CCC',
        borderWidth: 1,
        shadow: false
    }, */
    tooltip: {
        headerFormat: '<b>{point.x}</b><br/>',
        pointFormat: '{series.name}: {point.y}<br/>Total: {point.stackTotal}'
    },
    plotOptions: {
        column: {
            stacking: 'normal',
            dataLabels: {
                enabled: true
            }
        }
    },
    series: [{
        name: 'Retencion',
        data: {!! json_encode($data->col_1->alcance_retencion) !!},
        color: 'white',
        borderColor: 'black'
    }, {
        name: 'Alcance',
        data: {!! json_encode($data->col_1->alcance) !!},
        color: '#4472c4',
        borderColor: 'black'
    }]
});

function chart2() {
    Highcharts.chart('dealer-chart-2', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'MODELO',
        align: 'center'
    },
    xAxis: {
        categories: {!! json_encode($data->col_1->anhos) !!}
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Count trophies'
        },
        stackLabels: {
            enabled: true,
            style: {
                fontWeight: 'bold',
                color: ( // theme
                    Highcharts.defaultOptions.title.style &&
                    Highcharts.defaultOptions.title.style.color
                ) || 'gray',
                textOutline: 'none'
            }
        }
    },
    /* legend: {
        align: 'left',
        x: 70,
        verticalAlign: 'top',
        y: 70,
        floating: true,
        backgroundColor:
            Highcharts.defaultOptions.legend.backgroundColor || 'white',
        borderColor: '#CCC',
        borderWidth: 1,
        shadow: false
    }, */
    tooltip: {
        headerFormat: '<b>{point.x}</b><br/>',
        pointFormat: '{series.name}: {point.y}<br/>Total: {point.stackTotal}'
    },
    plotOptions: {
        column: {
            stacking: 'normal',
            dataLabels: {
                enabled: true
            }
        }
    },
    series: [{
        name: 'Retencion',
        data: {!! json_encode($data->col_2->alcance_retencion) !!},
        color: 'white',
        borderColor: 'black'
    }, {
        name: 'Alcance',
        data: {!! json_encode($data->col_2->alcance) !!},
        color: '#4472c4',
        borderColor: 'black'
    }]
});
}

</script>

@endsection