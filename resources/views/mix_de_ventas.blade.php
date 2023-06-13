@extends('layouts.app')
@section('title', '- Mix de ventas')

@section('content')

<div class="form-group px-4">
    <h1 class="mb-3">MIX DE VENTAS</h1>
    <div class="mb-3 row col-12 col-md-6">
        <label for="marca" class="col-sm-2 col-form-label">MARCA</label>
        <div class="col-sm-10">
            <select name="marca" id="marca" class="form-select">
                <option value="HONDA">HONDA</option>
            </select>
        </div>
    </div>
    <div class="mb-3 row col-12 col-md-6">
        <label for="dealer" class="col-sm-2 col-form-label">DEALER</label>
        <div class="col-sm-10">
            <select name="dealer" id="dealer" class="form-select">
                @for ($i = 1; $i <= 10; $i++)
                    <option value="DEALER {{ $i }}">DEALER {{ $i }}</option>
                @endfor
            </select>
        </div>
    </div>
    <div class="mb-3 row col-12 col-md-6">
        <label for="periodo" class="col-sm-2 col-form-label">PERIODO</label>
        <div class="col-sm-10">
            <select name="periodo" id="periodo" class="form-select">
                <option value="">SELECCIONE</option>
                @foreach ($periodo as $idx => $p)
                    <option value="{{ $idx }}" {{ $p }}>{{ $idx }}</option>
                @endforeach
            </select>
        </div>
    </div>
</div>

<div class="row m-3">
    <div class="col-12 col-md-12">
        <table class="table">
            <tr>
                <td colspan="4" style="font-weight: bold">RESUMEN POR GESTIÓN (En dólares y con IGV)</td>
                <td colspan="6" style="font-weight: bold">Comparador Vs Mes anterior</td>
            </tr>
            <tr class="text-center">
                <td style="font-weight: bold; color: white; background-color: #4472C4;">Modelo</td>
                <td style="font-weight: bold; color: white; background-color: #4472C4;">Ventas</td>
                <td style="font-weight: bold; color: white; background-color: #4472C4;">Ticket</td>
                <td style="font-weight: bold; color: white; background-color: #4472C4;">Fact</td>
                <td style="font-weight: bold; color: white; background-color: #FFC000;">Ventas</td>
                <td style="font-weight: bold; color: white; background-color: #808080;">Var%</td>
                <td style="font-weight: bold; color: white; background-color: #FFC000;">Ticket</td>
                <td style="font-weight: bold; color: white; background-color: #808080;">Var%</td>
                <td style="font-weight: bold; color: white; background-color: #FFC000;">Fact</td>
                <td style="font-weight: bold; color: white; background-color: #808080;">Var%</td>
            </tr>
            <tr class="text-center">
                <td style="text-align: left!important">KICKS</td>
                <td>50</td>
                <td>$ 3,200</td>
                <td>$ 160,000</td>
                <td>75</td>
                <td style="font-weight: bold; color: red">-33.3%</td>
                <td>$ 2,667</td>
                <td style="font-weight: bold; color: #009392; background-color: #C6EFCE">20.0%</td>
                <td>$ 200,000</td>
                <td style="font-weight: bold; color: red">-20.0%</td>
            </tr>
            <tr class="text-center">
                <td style="text-align: left!important">NEW FRONTIER</td>
                <td>60</td>
                <td>$ 7,754</td>
                <td>$ 465,230</td>
                <td>46</td>
                <td style="font-weight: bold; color: #009392; background-color: #C6EFCE">30.4%</td>
                <td>$ 9,783</td>
                <td style="font-weight: bold; color: red">-20.7%</td>
                <td>$ 450,000</td>
                <td style="font-weight: bold; color: #009392; background-color: #C6EFCE">3.4%</td>
            </tr>
            <tr class="text-center">
                <td style="text-align: left!important">NEW SENTRA</td>
                <td>30</td>
                <td>$ 18,433</td>
                <td>$ 552,990</td>
                <td>14</td>
                <td style="font-weight: bold; color: #009392; background-color: #C6EFCE">114.3%</td>
                <td>$ 21,429</td>
                <td style="font-weight: bold; color: red">-14.0%</td>
                <td>$ 300,000</td>
                <td style="font-weight: bold; color: #009392; background-color: #C6EFCE">84.3%</td>
            </tr>
            <tr class="text-center">
                <td style="text-align: left!important">VERSA</td>
                <td>10</td>
                <td>$ 10,840</td>
                <td>$ 108,400</td>
                <td>43</td>
                <td style="font-weight: bold; color: red">-76.7%</td>
                <td>$ 9,302</td>
                <td style="font-weight: bold; color: #009392; background-color: #C6EFCE">16.5%</td>
                <td>$ 400,000</td>
                <td style="font-weight: bold; color: red">-72.9%</td>
            </tr>
            <tr class="text-center">
                <td style="text-align: left!important">XTRAIL</td>
                <td>16</td>
                <td>$ 40,444</td>
                <td>$ 647,104</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr class="text-center">
                <td style="text-align: left!important">QASHQAI</td>
                <td>43</td>
                <td>$ 5,400</td>
                <td>$ 232,200</td>
                <td>22</td>
                <td style="font-weight: bold; color: #009392; background-color: #C6EFCE">95.5%</td>
                <td>$ 6,818</td>
                <td style="font-weight: bold; color: red">-20.8%</td>
                <td>$ 150,000</td>
                <td style="font-weight: bold; color: #009392; background-color: #C6EFCE">54.8%</td>
            </tr>
            <tr class="text-center">
                <td style="font-weight: bold; color: black; background-color: #D9E1F2;">NISSAN</td>
                <td style="font-weight: bold; color: black; background-color: #D9E1F2;">209</td>
                <td style="font-weight: bold; color: black; background-color: #D9E1F2;">$ 10,363</td>
                <td style="font-weight: bold; color: black; background-color: #D9E1F2;">$ 2,165,924</td>
                <td style="font-weight: bold; color: black; background-color: #D9E1F2;">200</td>
                <td style="font-weight: bold; color: #009392; background-color: #C6EFCE">4.5%</td>
                <td style="font-weight: bold; color: black; background-color: #D9E1F2;">$ 7,500</td>
                <td style="font-weight: bold; color: #009392; background-color: #C6EFCE">38.2%</td>
                <td style="font-weight: bold; color: black; background-color: #D9E1F2;">$ 1,500,000</td>
                <td style="font-weight: bold; color: #009392; background-color: #C6EFCE">44.4%</td>
            </tr>
        </table>
    </div>
    <div class="col-12 col-md-6">
        <table class="table">
            <tr>
                <td colspan="4" style="font-weight: bold">RESUMEN POR VENDEDOR (En dólares y con IGV)</td>
            </tr>
            <tr class="text-center">
                <td style="font-weight: bold; color: white; background-color: #4472C4;">ASESOR</td>
                <td style="font-weight: bold; color: white; background-color: #4472C4;">Ventas</td>
                <td style="font-weight: bold; color: white; background-color: #4472C4;">Ticket</td>
                <td style="font-weight: bold; color: white; background-color: #4472C4;">Fact</td>
            </tr>
            <tr class="text-center">
                <td style="font-weight: bold; color: black; background-color: #FCE4D6;">ASESOR 1</td>
                <td style="font-weight: bold; color: black; background-color: #FCE4D6;">38</td>
                <td style="font-weight: bold; color: black; background-color: #FCE4D6;">$ 14,682</td>
                <td style="font-weight: bold; color: black; background-color: #FCE4D6;">$ 557,908</td>
            </tr>
            <tr>
                <td>KICKS</td>
                <td class="text-center">10</td>
                <td class="text-center">$ 16,000</td>
                <td class="text-center">$ 160,000</td>
            </tr>
            <tr>
                <td>NEW FRONTIER</td>
                <td class="text-center">0</td>
                <td class="text-center">$ -</td>
                <td class="text-center">$ -</td>
            </tr>
            <tr>
                <td>NEW SENTRA</td>
                <td class="text-center">4</td>
                <td class="text-center">$ 18,433</td>
                <td class="text-center">$ 73,732</td>
            </tr>
            <tr>
                <td>VERSA</td>
                <td class="text-center">10</td>
                <td class="text-center">$ 10,840</td>
                <td class="text-center">$ 108,400</td>
            </tr>
            <tr>
                <td>XTRAIL</td>
                <td class="text-center">4</td>
                <td class="text-center">$ 40,444</td>
                <td class="text-center">$ 161,776</td>
            </tr>
            <tr>
                <td>QASHQAI</td>
                <td class="text-center">10</td>
                <td class="text-center">$ 5,400</td>
                <td class="text-center">$ 54,000</td>
            </tr>
            <tr class="text-center">
                <td style="font-weight: bold; color: black; background-color: #FCE4D6;">ASESOR 2</td>
                <td style="font-weight: bold; color: black; background-color: #FCE4D6;">100</td>
                <td style="font-weight: bold; color: black; background-color: #FCE4D6;">$ 9,934</td>
                <td style="font-weight: bold; color: black; background-color: #FCE4D6;">$ 993,416</td>
            </tr>
            <tr class="text-center">
                <td style="font-weight: bold; color: black; background-color: #FCE4D6;">ASESOR 3</td>
                <td style="font-weight: bold; color: black; background-color: #FCE4D6;">71</td>
                <td style="font-weight: bold; color: black; background-color: #FCE4D6;">$ 7,858</td>
                <td style="font-weight: bold; color: black; background-color: #FCE4D6;">$ 557,908</td>
            </tr>
            <tr>
                <td>KICKS</td>
                <td class="text-center">40</td>
                <td class="text-center">$ 4,000</td>
                <td class="text-center">$ 160,000</td>
            </tr>
            <tr>
                <td>NEW FRONTIER</td>
                <td class="text-center">3</td>
                <td class="text-center">$ -</td>
                <td class="text-center">$ -</td>
            </tr>
            <tr>
                <td>NEW SENTRA</td>
                <td class="text-center">4</td>
                <td class="text-center">$ 18,433</td>
                <td class="text-center">$ 73,732</td>
            </tr>
            <tr>
                <td>VERSA</td>
                <td class="text-center">10</td>
                <td class="text-center">$ 10,840</td>
                <td class="text-center">$ 108,400</td>
            </tr>
            <tr>
                <td>XTRAIL</td>
                <td class="text-center">4</td>
                <td class="text-center">$ 40,444</td>
                <td class="text-center">$ 161,776</td>
            </tr>
            <tr>
                <td>QASHQAI</td>
                <td class="text-center">10</td>
                <td class="text-center">$ 5,400</td>
                <td class="text-center">$ 54,000</td>
            </tr>
            <tr class="text-center">
                <td style="font-weight: bold; color: black; background-color: #D9E1F2;">NISSAN</td>
                <td style="font-weight: bold; color: black; background-color: #D9E1F2;">209</td>
                <td style="font-weight: bold; color: black; background-color: #D9E1F2;">$ 10,092</td>
                <td style="font-weight: bold; color: black; background-color: #D9E1F2;">$ 2,109,232</td>
            </tr>
        </table>
    </div>
    <div class="col-12 col-md-6">
        <div id="pizza">

        </div>
        <div class="mt-2 col-md-6 col-sm-6 col-12">
            <table class="table">
                <tr class="text-center">
                    <td style="font-weight: bold; color: black; background-color: #D9E1F2;">NISSAN</td>
                    <td style="font-weight: bold; color: black; background-color: #D9E1F2;">Und.</td>
                    <td style="font-weight: bold; color: black; background-color: #D9E1F2;">Mix</td>
                </tr>
                <tr>
                    <td>KICKS</td>
                    <td class="text-center">50</td>
                    <td class="text-center">24%</td>
                </tr>
                <tr>
                    <td>NEW FRONTIER</td>
                    <td class="text-center">60</td>
                    <td class="text-center">29%</td>
                </tr>
                <tr>
                    <td>NEW SENTRA</td>
                    <td class="text-center">30</td>
                    <td class="text-center">14%</td>
                </tr>
                <tr>
                    <td>VERSA</td>
                    <td class="text-center">10</td>
                    <td class="text-center">5%</td>
                </tr>
                <tr>
                    <td>XTRAIL</td>
                    <td class="text-center">16</td>
                    <td class="text-center">8%</td>
                </tr>
                <tr>
                    <td>QASHQAI</td>
                    <td class="text-center">43</td>
                    <td class="text-center">21%</td>
                </tr>
                <tr>
                    <td style="font-weight: bold">Total</td>
                    <td class="text-center" style="font-weight: bold">209</td>
                    <td class="text-center"></td>
                </tr>
                
            </table>
        </div>
    </div>
</div>

@endsection

@section('scripts')
    <script>
        // Data retrieved from https://netmarketshare.com/
// Make monochrome colors
const colors = Highcharts.getOptions().colors.map((c, i) =>
    // Start out with a darkened base color (negative brighten), and end
    // up with a much brighter color
    Highcharts.color(Highcharts.getOptions().colors[0])
        .brighten((i - 3) / 7)
        .get()
);

// Build the chart
Highcharts.chart('pizza', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: '',
        align: 'left'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    accessibility: {
        point: {
            valueSuffix: '%'
        }
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            colors,
            borderRadius: 5,
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b><br>{point.percentage:.1f} %',
                distance: -50,
                filter: {
                    property: 'percentage',
                    operator: '>',
                    value: 4
                }
            }
        }
    },
    series: [{
        name: 'Share',
        data: [            
            { name: 'KICKS', y: 24, color: '#4472C4'},
            { name: 'NEW FRONTIER', y: 29, color: '#ED7D31'},
            { name: 'NEW SENTRA', y: 14, color: '#A5A5A5'},
            { name: 'VERSA', y: 5, color: '#FFC000'},
            { name: 'XTRAIL', y: 8, color: '#5B9BD5'},
            { name: 'QASHQAI', y: 20, color: '#70AD47'},
        ]
    }]
});

    </script>
@endsection