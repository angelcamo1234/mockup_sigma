<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
})->name('login');

Route::get('/inicio', function () {
    return view('home');
})->name('home');

Route::post('/login', function () {
    return redirect()->route('home');
})->name('login.post');

Route::get('/seguimiento_general', function () {
    $info_1 = [
        (object) ['DEALER' => 'DEALER 1', 'META' => 90000, 'PREVISION' => 90000, 'GAP' => 0, 'CUMPLIMIENTO' => 100, 'REAL' => 42878.88, 'AVANCE' => 47.6, 'INVENTARIO' => 150000, 'MOS' => 2.5, 'NOV' => 46806.49, 'VARIACION' => -8.4, 'PROM' => 74298.8058333333, 'VARIACION_2' => -42.3, 'DIC' => 83460.65, 'VARIACION_3' => -48.6],
        (object) ['DEALER' => 'DEALER 2', 'META' => 15000, 'PREVISION' => 10000, 'GAP' => -5000, 'CUMPLIMIENTO' => 66.6666666666667, 'REAL' => 3418.03, 'AVANCE' => 22.8, 'INVENTARIO' => 3418.03, 'MOS' => 1.6, 'NOV' => 7493.28, 'VARIACION' => -54.4, 'PROM' => 22356.5308333333, 'VARIACION_2' => -84.7, 'DIC' => 21310.47, 'VARIACION_3' => -84],
        (object) ['DEALER' => 'DEALER 3', 'META' => 56000, 'PREVISION' => 56000, 'GAP' => 0, 'CUMPLIMIENTO' => 100, 'REAL' => 92055.6100000001, 'AVANCE' => 164.4, 'INVENTARIO' => 45880, 'MOS' => 4.5, 'NOV' => 92086.68, 'VARIACION' => 0, 'PROM' => 69310.5891666667, 'VARIACION_2' => 32.8, 'DIC' => 50132.13, 'VARIACION_3' => 83.6],
        (object) ['DEALER' => 'DEALER 4', 'META' => 120000, 'PREVISION' => 80000, 'GAP' => -40000, 'CUMPLIMIENTO' => 66.6666666666667, 'REAL' => 178415.28, 'AVANCE' => 148.7, 'INVENTARIO' => 178415.28, 'MOS' => 3.8, 'NOV' => 130115.81, 'VARIACION' => 37.1, 'PROM' => 111847.223333333, 'VARIACION_2' => 59.5, 'DIC' => 48057.82, 'VARIACION_3' => 271.3],
        (object) ['DEALER' => 'DEALER 5', 'META' => 88000, 'PREVISION' => 88000, 'GAP' => 0, 'CUMPLIMIENTO' => 100, 'REAL' => 54508.11, 'AVANCE' => 61.9, 'INVENTARIO' => 230000, 'MOS' => 4.1, 'NOV' => 94051.69, 'VARIACION' => -42, 'PROM' => 80700.4425, 'VARIACION_2' => -32.5, 'DIC' => 82342.86, 'VARIACION_3' => -33.8],
        (object) ['DEALER' => 'DEALER 6', 'META' => 450000, 'PREVISION' => 450000, 'GAP' => 0, 'CUMPLIMIENTO' => 100, 'REAL' => 333284.04, 'AVANCE' => 74.1, 'INVENTARIO' => 150123, 'MOS' => 0.9, 'NOV' => 452303.729999999, 'VARIACION' => -26.3, 'PROM' => 364727.555, 'VARIACION_2' => -8.6, 'DIC' => 409049.58, 'VARIACION_3' => -18.5],
        (object) ['DEALER' => '', 'META' => 819000, 'PREVISION' => 774000, 'GAP' => -45000, 'CUMPLIMIENTO' => 94.5054945054945, 'REAL' => 704559.95, 'AVANCE' => 86, 'INVENTARIO' => 757836.31, 'MOS' => 4.8, 'NOV' => 822857.679999999, 'VARIACION' => -14.4, 'PROM' => 723241.146666667, 'VARIACION_2' => -2.6, 'DIC' => 694353.51, 'VARIACION_3' => 1.5],
    ];

    $info_2 = [
        (object) ['DEALER' => 'DEALER 1', 'META' => 198, 'PREVISION' => 180, 'GAP' => -18, 'CUMPLIMIENTO' => 90.9090909090909, 'REAL' => 130, 'AVANCE' => 65.7, 'INVENTARIO' => 0, 'MOS' => 0, 'NOV' => 98, 'VARIACION' => 32.7, 'PROM' => 155, 'VARIACION_2' => -16.1, 'DIC' => 229, 'VARIACION_3' => -43.2],
        (object) ['DEALER' => 'DEALER 2', 'META' => 63, 'PREVISION' => 63, 'GAP' => 0, 'CUMPLIMIENTO' => 100, 'REAL' => 58, 'AVANCE' => 92.1, 'INVENTARIO' => 0, 'MOS' => 0, 'NOV' => 65, 'VARIACION' => -10.8, 'PROM' => 60.5833333333333, 'VARIACION_2' => -4.3, 'DIC' => 53, 'VARIACION_3' => 9.4],
        (object) ['DEALER' => 'DEALER 3', 'META' => 90, 'PREVISION' => 90, 'GAP' => 0, 'CUMPLIMIENTO' => 100, 'REAL' => 108, 'AVANCE' => 120, 'INVENTARIO' => 0, 'MOS' => 0, 'NOV' => 108, 'VARIACION' => 0, 'PROM' => 75.3333333333333, 'VARIACION_2' => 43.4, 'DIC' => 48, 'VARIACION_3' => 125],
        (object) ['DEALER' => 'DEALER 4', 'META' => 90, 'PREVISION' => 90, 'GAP' => 0, 'CUMPLIMIENTO' => 100, 'REAL' => 135, 'AVANCE' => 150, 'INVENTARIO' => 0, 'MOS' => 0, 'NOV' => 123, 'VARIACION' => 9.8, 'PROM' => 87.75, 'VARIACION_2' => 53.8, 'DIC' => 35, 'VARIACION_3' => 285.7],
        (object) ['DEALER' => 'DEALER 5', 'META' => 198, 'PREVISION' => 198, 'GAP' => 0, 'CUMPLIMIENTO' => 100, 'REAL' => 218, 'AVANCE' => 110.1, 'INVENTARIO' => 0, 'MOS' => 0, 'NOV' => 199, 'VARIACION' => 9.5, 'PROM' => 200.583333333333, 'VARIACION_2' => 8.7, 'DIC' => 235, 'VARIACION_3' => -7.2],
        (object) ['DEALER' => 'DEALER 6', 'META' => 329, 'PREVISION' => 329, 'GAP' => 0, 'CUMPLIMIENTO' => 100, 'REAL' => 336, 'AVANCE' => 102.1, 'INVENTARIO' => 0, 'MOS' => 0, 'NOV' => 350, 'VARIACION' => -4, 'PROM' => 319, 'VARIACION_2' => 5.3, 'DIC' => 312, 'VARIACION_3' => 7.7],
        (object) ['DEALER' => '', 'META' => 968, 'PREVISION' => 950, 'GAP' => -18, 'CUMPLIMIENTO' => 98.1404958677686, 'REAL' => 985, 'AVANCE' => 101.8, 'INVENTARIO' => 0, 'MOS' => 0, 'NOV' => 943, 'VARIACION' => 4.5, 'PROM' => 898.25, 'VARIACION_2' => 9.7, 'DIC' => 912, 'VARIACION_3' => 8],
    ];

    $info_3 = [
        (object) ['DEALER' => 'DEALER 1', 'META' => 22, 'PREVISION' => 22, 'GAP' => 0, 'CUMPLIMIENTO' => 100, 'REAL' => 10, 'AVANCE' => 45.5, 'INVENTARIO' => 0, 'MOS' => 0, 'NOV' => 9, 'VARIACION' => 11.1, 'PROM' => 8.08333333333333, 'VARIACION_2' => 23.7, 'DIC' => 7, 'VARIACION_3' => 42.9],
        (object) ['DEALER' => 'DEALER 2', 'META' => 7, 'PREVISION' => 7, 'GAP' => 0, 'CUMPLIMIENTO' => 100, 'REAL' => 1, 'AVANCE' => 14.3, 'INVENTARIO' => 0, 'MOS' => 0, 'NOV' => 0, 'VARIACION' => 0, 'PROM' => 1.83333333333333, 'VARIACION_2' => -45.5, 'DIC' => 3, 'VARIACION_3' => -66.7],
        (object) ['DEALER' => 'DEALER 3', 'META' => 10, 'PREVISION' => 10, 'GAP' => 0, 'CUMPLIMIENTO' => 100, 'REAL' => 4, 'AVANCE' => 40, 'INVENTARIO' => 0, 'MOS' => 0, 'NOV' => 3, 'VARIACION' => 33.3, 'PROM' => 5.25, 'VARIACION_2' => -23.8, 'DIC' => 0, 'VARIACION_3' => 0],
        (object) ['DEALER' => 'DEALER 4', 'META' => 2, 'PREVISION' => 2, 'GAP' => 0, 'CUMPLIMIENTO' => 100, 'REAL' => 10, 'AVANCE' => 500, 'INVENTARIO' => 0, 'MOS' => 0, 'NOV' => 12, 'VARIACION' => -16.7, 'PROM' => 5.25, 'VARIACION_2' => 90.5, 'DIC' => 0, 'VARIACION_3' => 0],
        (object) ['DEALER' => 'DEALER 5', 'META' => 22, 'PREVISION' => 15, 'GAP' => -7, 'CUMPLIMIENTO' => 68.1818181818182, 'REAL' => 15, 'AVANCE' => 68.2, 'INVENTARIO' => 0, 'MOS' => 0, 'NOV' => 8, 'VARIACION' => 87.5, 'PROM' => 8.5, 'VARIACION_2' => 76.5, 'DIC' => 4, 'VARIACION_3' => 275],
        (object) ['DEALER' => 'DEALER 6', 'META' => 65, 'PREVISION' => 50, 'GAP' => -15, 'CUMPLIMIENTO' => 76.9230769230769, 'REAL' => 64, 'AVANCE' => 98.5, 'INVENTARIO' => 0, 'MOS' => 0, 'NOV' => 61, 'VARIACION' => 4.9, 'PROM' => 57.8333333333333, 'VARIACION_2' => 10.7, 'DIC' => 67, 'VARIACION_3' => -4.5],
        (object) ['DEALER' => '', 'META' => 128, 'PREVISION' => 106, 'GAP' => -22, 'CUMPLIMIENTO' => 82.8125, 'REAL' => 104, 'AVANCE' => 81.3, 'INVENTARIO' => 0, 'MOS' => 0, 'NOV' => 93, 'VARIACION' => 11.8, 'PROM' => 86.75, 'VARIACION_2' => 19.9, 'DIC' => 81, 'VARIACION_3' => 28.4],

    ];

    return view('seguimiento_general', compact('info_1', 'info_2', 'info_3'));
})->name('seguimiento_general');

Route::get('/stock_dealer', function () {

    $dealer = collect([
        (object) ['CLASIFICACION' => 'A', 'STOCK' => 79428, 'PORCENTAJE' => 29],
        (object) ['CLASIFICACION' => 'B', 'STOCK' => 79199, 'PORCENTAJE' => 29],
        (object) ['CLASIFICACION' => 'C', 'STOCK' => 64136, 'PORCENTAJE' => 23],
        (object) ['CLASIFICACION' => 'D', 'STOCK' => 19658, 'PORCENTAJE' => 7],
        (object) ['CLASIFICACION' => 'E', 'STOCK' => 6786, 'PORCENTAJE' => 2],
        (object) ['CLASIFICACION' => 'F', 'STOCK' => 24444, 'PORCENTAJE' => 9],
    ]);

    $labels = $dealer->reduce(function ($o, $item) {
        $o[] = $item->CLASIFICACION;
        return $o;
    }, []);

    $bars = $dealer->reduce(function ($o, $item) {
        $o[] = $item->STOCK;
        return $o;
    }, []);

    $lines = $dealer->reduce(function ($o, $item) {
        $o[] = $item->PORCENTAJE;
        return $o;
    }, []);

    return view('stock_dealer', compact('dealer', 'labels', 'bars', 'lines'));
})->name('stock_dealer');

Route::get('/gestion_por_dealer', function () {

    $meses = ['ene-22', 'feb-22', 'mar-22', 'abr-22', 'may-22', 'jun-22', 'jul-22', 'ago-22', 'sep-22', 'oct-22', 'nov-22', 'dic-22'];

    $facturacion = [360191, 352411, 349808, 172583, 243125, 196031, 196680, 299614, 279596, 279578, 275785, 250546, 271329];

    $ots = [317, 297, 376, 279, 324, 272, 210, 341, 376, 350, 350, 336, 319];

    $ticket = [1136, 1187, 930, 619, 750, 721, 937, 879, 744, 799, 788, 746, 895];

    return view('gestion_por_dealer', compact('meses', 'facturacion', 'ots', 'ticket'));
})->name('gestion_por_dealer');

Route::get('/retencion', function () {

    $data = (object) [
        'col_1' => (object) [
            'anhos' => ['AÑO 1', 'AÑO 2', 'AÑO 3', 'AÑO 4', 'AÑO 5'],
            'total_vh' => [350, 300, 315, 250, 240],
            'avance_dealer' => [158, 120, 111, 75, 60],            
            'alcance' => [45, 40, 35, 30, 25],
            'retencion' => [65, 55, 50, 45, 40],
            'alcance_retencion' => [20, 15, 15, 15, 15],
        ],
        'col_2' => (object) [
            'anhos' => ['AÑO 1', 'AÑO 2', 'AÑO 3', 'AÑO 4', 'AÑO 5'],
            'total_vh' => [110, 95, 78, 64, 78],
            'avance_dealer' => [72, 51, 20, 20, 8],
            'alcance' => [65, 53, 25, 30, 10],
            'retencion' => [65, 55, 50, 45, 40],
            'alcance_retencion' => [0, 2, 25, 15, 30],
        ]
    ];

    return view('retencion', compact('data'));
})->name('retencion');
