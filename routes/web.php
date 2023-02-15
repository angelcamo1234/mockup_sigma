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
    $usuario = request()->usuario;
    $password = request()->password;

    if ($usuario !== 'SIGMA' || $password !== 'SIGMA') return redirect()->back()->with('error_login', 'Usuario o Contraseña incorrectos');

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

Route::get('/metas', function () {

    $meses = ['ENE', 'FEB', 'MAR', 'ABR', 'MAY', 'JUN', 'JUL', 'AGO', 'SET', 'OCT', 'NOV', 'DIC'];

    return view('metas', compact('meses'));
})->name('metas');

Route::get('/gestion', function () {

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

    return view('gestion', compact('info_1', 'info_2', 'info_3'));
})->name('gestion');

Route::get('/asignar_dealer', function () {

    $locales = ['DEALER 7', 'DEALER 8', 'DEALER 9', 'DEALER 10', 'DEALER 11', 'DEALER 12'];
    $dealers = ['DEALER 1', 'DEALER 2', 'DEALER 3', 'DEALER 4', 'DEALER 5', 'DEALER 6'];

    return view('asignar_dealer', compact('locales', 'dealers'));
})->name('asignar_dealer');

Route::get('/reportes/comparador_mecanica', function() {

    $dealers = [null, 'DELAER 7', 'DEALER 8', 'TOP 5', 'DEALER 2', 'DEALER 9', 'PROMEDIO', 'DEALER 4', 'DEALER 3', 'DEALER 5', 'DEALER 1', 'DEALER 6'];
    $data = [
        (object) ['bg_color' => 'class="text-center" style="background-color: #dddddd;"', 'porc' => false, 'x100' => false, 's' => true, 'negrita' => true, 'title' => 'Facturacion'],
        (object) ['bg_color' => 'class="text-center" style="background-color: #dddddd;"', 'porc' => false, 'x100' => false, 's' => true, 'negrita' => false, 'title' => 'Ingreso MO', 'd1' => 96387, 'd1p' => null, 'd2' => 82403, 'd2p' => null, 'd3' => 91686.2, 'd3p' => null, 'd4' => 78816, 'd4p' => null, 'd5' => 87030, 'd5p' => null, 'd6' => 88949.1111111111, 'd6p' => null, 'd7' => 113795, 'd7p' => null, 'd8' => 83882, 'd8p' => null, 'd9' => 69781, 'd9p' => null, 'd10' => 91563, 'd10p' => null, 'd11' => 96885, 'd11p' => null],
        (object) ['bg_color' => 'class="text-center" style="background-color: #dddddd;"', 'porc' => false, 'x100' => false, 's' => true, 'negrita' => false, 'title' => 'Ingreso Serv. Terceros', 'd1' => 27098, 'd1p' => null, 'd2' => 25119, 'd2p' => null, 'd3' => 25017.4, 'd3p' => null, 'd4' => 29044, 'd4p' => null, 'd5' => 17340, 'd5p' => null, 'd6' => 22790.3333333333, 'd6p' => null, 'd7' => 26486, 'd7p' => null, 'd8' => 22084, 'd8p' => null, 'd9' => 21412, 'd9p' => null, 'd10' => 21058, 'd10p' => null, 'd11' => 15472, 'd11p' => null],
        (object) ['bg_color' => 'class="text-center" style="background-color: #dddddd;"', 'porc' => false, 'x100' => false, 's' => true, 'negrita' => false, 'title' => 'Ingreso Repuestos', 'd1' => 68248, 'd1p' => null, 'd2' => 119921, 'd2p' => null, 'd3' => 78479.6, 'd3p' => null, 'd4' => 61618, 'd4p' => null, 'd5' => 57113, 'd5p' => null, 'd6' => 83757.5555555556, 'd6p' => null, 'd7' => 85498, 'd7p' => null, 'd8' => 67111, 'd8p' => null, 'd9' => 87768, 'd9p' => null, 'd10' => 91364, 'd10p' => null, 'd11' => 115177, 'd11p' => null],
        (object) ['bg_color' => 'class="text-center" style="background-color: #dddddd;"', 'porc' => false, 'x100' => false, 's' => true, 'negrita' => false, 'title' => '<b>Ingreso Total</b>', 'd1' => 191733, 'd1p' => null, 'd2' => 227443, 'd2p' => null, 'd3' => 195183.2, 'd3p' => null, 'd4' => 169478, 'd4p' => null, 'd5' => 161483, 'd5p' => null, 'd6' => 195497, 'd6p' => null, 'd7' => 225779, 'd7p' => null, 'd8' => 173077, 'd8p' => null, 'd9' => 178961, 'd9p' => null, 'd10' => 203985, 'd10p' => null, 'd11' => 227534, 'd11p' => null],
        (object) ['bg_color' => 'class="text-center" style="background-color: #dddddd;"', 'porc' => false, 'x100' => false, 's' => true, 'negrita' => false, 'title' => 'Utilidad MO / <span style="color: #A2C45F">Margen</span>', 'd1' => 76145.73, 'd1p' => 79, 'd2' => 72514.64, 'd2p' => 88, 'd3' => 74248.332, 'd3p' => 80.9809240649084, 'd4' => 66205.44, 'd4p' => 84, 'd5' => 68753.7, 'd5p' => 79, 'd6' => 72134.2366666667, 'd6p' => 81.0960736600953, 'd7' => 87622.15, 'd7p' => 77, 'd8' => 68783.24, 'd8p' => 82, 'd9' => 67687.57, 'd9p' => 97, 'd10' => 65925.36, 'd10p' => 72, 'd11' => 75570.3, 'd11p' => 78],
        (object) ['bg_color' => 'class="text-center" style="background-color: #dddddd;"', 'porc' => false, 'x100' => false, 's' => true, 'negrita' => false, 'title' => 'Utilidad Serv. Terceros / <span style="color: #A2C45F">Margen</span>', 'd1' => 18155.66, 'd1p' => 67, 'd2' => 14820.21, 'd2p' => 59, 'd3' => 14644.606, 'd3p' => 58.5376817734857, 'd4' => 19749.92, 'd4p' => 68, 'd5' => 8843.4, 'd5p' => 51, 'd6' => 13054.9966666667, 'd6p' => 57.2830439806351, 'd7' => 11653.84, 'd7p' => 44, 'd8' => 12146.2, 'd8p' => 55, 'd9' => 9421.28, 'd9p' => 44, 'd10' => 13266.54, 'd10p' => 63, 'd11' => 9437.92, 'd11p' => 61],
        (object) ['bg_color' => 'class="text-center" style="background-color: #dddddd;"', 'porc' => false, 'x100' => false, 's' => true, 'negrita' => false, 'title' => 'Utilidad Repuestos / <span style="color: #A2C45F">Margen</span>', 'd1' => 25251.76, 'd1p' => 37, 'd2' => 45569.98, 'd2p' => 38, 'd3' => 23047.232, 'd3p' => 29.3671629315134, 'd4' => 10475.06, 'd4p' => 17, 'd5' => 12564.86, 'd5p' => 22, 'd6' => 19751.4766666667, 'd6p' => 23.5817252970876, 'd7' => 21374.5, 'd7p' => 25, 'd8' => 10066.65, 'd8p' => 15, 'd9' => 15798.24, 'd9p' => 18, 'd10' => 22841, 'd10p' => 25, 'd11' => 13821.24, 'd11p' => 12],
        (object) ['bg_color' => 'class="text-center" style="background-color: #FFF2CC;"', 'porc' => false, 'x100' => false, 's' => true, 'negrita' => false, 'title' => '<b>Utilidad Total</b>', 'd1' => 119553.15, 'd1p' => 62.3539766237424, 'd2' => 132904.83, 'd2p' => 58.4343461878361, 'd3' => 111940.17, 'd3p' => 57.3513345410876, 'd4' => 96430.42, 'd4p' => 56.8984882993663, 'd5' => 90161.96, 'd5p' => 55.8337162425766, 'd6' => 104940.71, 'd6p' => 53.6789362496611, 'd7' => 120650.49, 'd7p' => 53.4374277501451, 'd8' => 90996.09, 'd8p' => 52.5754952997799, 'd9' => 92907.09, 'd9p' => 51.9147132615486, 'd10' => 102032.9, 'd10p' => 50.0198053778464, 'd11' => 98829.46, 'd11p' => 43.4350294900982],
        (object) ['bg_color' => 'class="text-center" style="background-color: #dddddd;"', 'porc' => false, 'x100' => false, 's' => true, 'negrita' => true, 'title' => 'Ots'],
        (object) ['bg_color' => 'class="text-center" style="background-color: #dddddd; color: #ED7D76; font-weight: bold;"', 'porc' => false, 'x100' => false, 's' => false, 'negrita' => false, 'title' => '<b>Público</b>', 'd1' => 104, 'd1p' => null, 'd2' => 250, 'd2p' => null, 'd3' => 178, 'd3p' => null, 'd4' => 202, 'd4p' => null, 'd5' => 96, 'd5p' => null, 'd6' => 174, 'd6p' => null, 'd7' => 237, 'd7p' => null, 'd8' => 152, 'd8p' => null, 'd9' => 120, 'd9p' => null, 'd10' => 182, 'd10p' => null, 'd11' => 223, 'd11p' => null],
        (object) ['bg_color' => 'class="text-center" style="background-color: #dddddd;"', 'porc' => false, 'x100' => false, 's' => false, 'negrita' => false, 'title' => 'Garantía', 'd1' => 20, 'd1p' => null, 'd2' => 14, 'd2p' => null, 'd3' => 17, 'd3p' => null, 'd4' => 10, 'd4p' => null, 'd5' => 20, 'd5p' => null, 'd6' => 16, 'd6p' => null, 'd7' => 19, 'd7p' => null, 'd8' => 8, 'd8p' => null, 'd9' => 21, 'd9p' => null, 'd10' => 9, 'd10p' => null, 'd11' => 21, 'd11p' => null],
        (object) ['bg_color' => 'class="text-center" style="background-color: #dddddd;"', 'porc' => false, 'x100' => false, 's' => false, 'negrita' => false, 'title' => 'Reclamo', 'd1' => 23, 'd1p' => null, 'd2' => 15, 'd2p' => null, 'd3' => 17, 'd3p' => null, 'd4' => 13, 'd4p' => null, 'd5' => 11, 'd5p' => null, 'd6' => 16, 'd6p' => null, 'd7' => 22, 'd7p' => null, 'd8' => 17, 'd8p' => null, 'd9' => 16, 'd9p' => null, 'd10' => 13, 'd10p' => null, 'd11' => 10, 'd11p' => null],
        (object) ['bg_color' => 'class="text-center" style="background-color: #dddddd;"', 'porc' => false, 'x100' => false, 's' => false, 'negrita' => false, 'title' => 'Interna', 'd1' => 5, 'd1p' => null, 'd2' => 17, 'd2p' => null, 'd3' => 14, 'd3p' => null, 'd4' => 17, 'd4p' => null, 'd5' => 12, 'd5p' => null, 'd6' => 13, 'd6p' => null, 'd7' => 19, 'd7p' => null, 'd8' => 16, 'd8p' => null, 'd9' => 9, 'd9p' => null, 'd10' => 6, 'd10p' => null, 'd11' => 11, 'd11p' => null],
        (object) ['bg_color' => 'class="text-center" style="background-color: #dddddd;"', 'porc' => false, 'x100' => false, 's' => true, 'negrita' => true, 'title' => 'Ticket'],
        (object) ['bg_color' => 'class="text-center" style="background-color: #dddddd; color: #ED7D76; font-weight: bold;"', 'porc' => false, 'x100' => false, 's' => false, 'negrita' => false, 'title' => 'Ots Facturadas', 'd1' => 104, 'd1p' => null, 'd2' => 250, 'd2p' => null, 'd3' => 178, 'd3p' => null, 'd4' => 202, 'd4p' => null, 'd5' => 96, 'd5p' => null, 'd6' => 174, 'd6p' => null, 'd7' => 237, 'd7p' => null, 'd8' => 152, 'd8p' => null, 'd9' => 120, 'd9p' => null, 'd10' => 182, 'd10p' => null, 'd11' => 223, 'd11p' => null],
        (object) ['bg_color' => 'class="text-center" style="background-color: #dddddd;"', 'porc' => false, 'x100' => false, 's' => true, 'negrita' => false, 'title' => '<b>Ticket Promedio</b>', 'd1' => 1843.58653846154, 'd1p' => null, 'd2' => 909.772, 'd2p' => null, 'd3' => 1096.53483146067, 'd3p' => null, 'd4' => 839, 'd4p' => null, 'd5' => 1682.11458333333, 'd5p' => null, 'd6' => 1123.54597701149, 'd6p' => null, 'd7' => 952.654008438819, 'd7p' => null, 'd8' => 1138.66447368421, 'd8p' => null, 'd9' => 1491.34166666667, 'd9p' => null, 'd10' => 1120.7967032967, 'd10p' => null, 'd11' => 1020.33183856502, 'd11p' => null],
        (object) ['bg_color' => 'class="text-center" style="background-color: #dddddd;"', 'porc' => false, 'x100' => false, 's' => true, 'negrita' => false, 'title' => 'Ticket MO', 'd1' => 926.798076923077, 'd1p' => null, 'd2' => 329.612, 'd2p' => null, 'd3' => 515.091011235955, 'd3p' => null, 'd4' => 390.178217821782, 'd4p' => null, 'd5' => 906.5625, 'd5p' => null, 'd6' => 511.201787994891, 'd6p' => null, 'd7' => 480.147679324895, 'd7p' => null, 'd8' => 551.855263157895, 'd8p' => null, 'd9' => 581.508333333333, 'd9p' => null, 'd10' => 503.093406593407, 'd10p' => null, 'd11' => 434.461883408072, 'd11p' => null],
        (object) ['bg_color' => 'class="text-center" style="background-color: #dddddd;"', 'porc' => false, 'x100' => false, 's' => true, 'negrita' => false, 'title' => 'Ticket Serv. Terceros', 'd1' => 260.557692307692, 'd1p' => null, 'd2' => 100.476, 'd2p' => null, 'd3' => 140.547191011236, 'd3p' => null, 'd4' => 143.782178217822, 'd4p' => null, 'd5' => 180.625, 'd5p' => null, 'd6' => 130.978927203065, 'd6p' => null, 'd7' => 111.755274261603, 'd7p' => null, 'd8' => 145.289473684211, 'd8p' => null, 'd9' => 178.433333333333, 'd9p' => null, 'd10' => 115.703296703297, 'd10p' => null, 'd11' => 69.3811659192825, 'd11p' => null],
        (object) ['bg_color' => 'class="text-center" style="background-color: #dddddd;"', 'porc' => false, 'x100' => false, 's' => true, 'negrita' => false, 'title' => 'Ticket Repuestos.', 'd1' => 656.230769230769, 'd1p' => null, 'd2' => 479.684, 'd2p' => null, 'd3' => 440.896629213483, 'd3p' => null, 'd4' => 305.039603960396, 'd4p' => null, 'd5' => 594.927083333333, 'd5p' => null, 'd6' => 481.365261813538, 'd6p' => null, 'd7' => 360.751054852321, 'd7p' => null, 'd8' => 441.519736842105, 'd8p' => null, 'd9' => 731.4, 'd9p' => null, 'd10' => 502, 'd10p' => null, 'd11' => 516.488789237668, 'd11p' => null],
        (object) ['bg_color' => 'class="text-center" style="background-color: #dddddd;"', 'porc' => false, 'x100' => false, 's' => true, 'negrita' => true, 'title' => 'Participación Facturación'],
        (object) ['bg_color' => 'class="text-center" style="background-color: #dddddd; color: #002060; font-weight: bold;"', 'porc' => true, 'x100' => true, 's' => false, 'negrita' => false, 'title' => 'Mano de Obra', 'd1' => 0.502714712647275, 'd1p' => null, 'd2' => 0.362301763518772, 'd2p' => null, 'd3' => 0.469744322257243, 'd3p' => null, 'd4' => 0.465051511110587, 'd4p' => null, 'd5' => 0.538942179672164, 'd5p' => null, 'd6' => 0.454989647468304, 'd6p' => null, 'd7' => 0.504010558997958, 'd7p' => null, 'd8' => 0.48465134015496, 'd8p' => null, 'd9' => 0.38992294410514, 'd9p' => null, 'd10' => 0.448871240532392, 'd10p' => null, 'd11' => 0.425804495152373, 'd11p' => null],
        (object) ['bg_color' => 'class="text-center" style="background-color: #dddddd; color: #002060; font-weight: bold;"', 'porc' => true, 'x100' => true, 's' => false, 'negrita' => false, 'title' => 'Serv. Terceros', 'd1' => 0.141331956418561, 'd1p' => null, 'd2' => 0.110440857709404, 'd2p' => null, 'd3' => 0.128173941199857, 'd3p' => null, 'd4' => 0.171373275587392, 'd4p' => null, 'd5' => 0.107379724181493, 'd5p' => null, 'd6' => 0.116576383951331, 'd6p' => null, 'd7' => 0.117309404329012, 'd7p' => null, 'd8' => 0.127596387734939, 'd8p' => null, 'd9' => 0.119646179893943, 'd9p' => null, 'd10' => 0.103233080863789, 'd10p' => null, 'd11' => 0.0679986287763587, 'd11p' => null],
        (object) ['bg_color' => 'class="text-center" style="background-color: #dddddd; color: #002060; font-weight: bold;"', 'porc' => true, 'x100' => true, 's' => false, 'negrita' => false, 'title' => 'Repuestos', 'd1' => 0.355953330934164, 'd1p' => null, 'd2' => 0.527257378771824, 'd2p' => null, 'd3' => 0.402081736542899, 'd3p' => null, 'd4' => 0.363575213302021, 'd4p' => null, 'd5' => 0.353678096146344, 'd5p' => null, 'd6' => 0.428433968580365, 'd6p' => null, 'd7' => 0.37868003667303, 'd7p' => null, 'd8' => 0.387752272110101, 'd8p' => null, 'd9' => 0.490430876000916, 'd9p' => null, 'd10' => 0.447895678603819, 'd10p' => null, 'd11' => 0.506196876071268, 'd11p' => null],
    ];

    return view('reportes.comparador_mecanica', compact('dealers', 'data'));
})->name('reportes.comparador_mecanica');

Route::get('/reportes/comparador_repuestos', function() {

    $dealers = [null, 'DELAER 9', 'DEALER 3', 'TOP 5', 'DEALER 1', 'DEALER 2', 'PROMEDIO', 'DEALER 5', 'DEALER 6', 'DEALER 7', 'DEALER 8', 'DEALER 4'];
    $data = [
        (object) ['bg_color' => 'class="text-center" style="background-color: #dddddd;"', 'porc' => false, 'x100' => false, 's' => true, 'negrita' => true, 'title' => 'Facturacion'],
        (object) ['bg_color' => 'class="text-center" style="background-color: #dddddd;"', 'porc' => false, 'x100' => false, 's' => true, 'negrita' => false, 'title' => 'Ingreso Mecánica', 'd1' => 25899, 'd1p' => null, 'd2' => 26625, 'd2p' => null, 'd3' => 26847.8888888889, 'd3p' => null, 'd4' => 27553, 'd4p' => null, 'd5' => 29106, 'd5p' => null, 'd6' => 25056.4444444444, 'd6p' => null, 'd7' => 24233, 'd7p' => null, 'd8' => 17760, 'd8p' => null, 'd9' => 26767, 'd9p' => null, 'd10' => 21833, 'd10p' => null, 'd11' => 25732, 'd11p' => null],
        (object) ['bg_color' => 'class="text-center" style="background-color: #dddddd;"', 'porc' => false, 'x100' => false, 's' => true, 'negrita' => false, 'title' => 'Ingreso PYP', 'd1' => 111284, 'd1p' => null, 'd2' => 122789, 'd2p' => null, 'd3' => 106393.111111111, 'd3p' => null, 'd4' => 129559, 'd4p' => null, 'd5' => 68651, 'd5p' => null, 'd6' => 99682.5555555556, 'd6p' => null, 'd7' => 62521, 'd7p' => null, 'd8' => 116511, 'd8p' => null, 'd9' => 77148, 'd9p' => null, 'd10' => 72807, 'd10p' => null, 'd11' => 135873, 'd11p' => null],
        (object) ['bg_color' => 'class="text-center" style="background-color: #dddddd;"', 'porc' => false, 'x100' => false, 's' => true, 'negrita' => false, 'title' => 'Ingreso Mesón', 'd1' => 64615, 'd1p' => null, 'd2' => 114005, 'd2p' => null, 'd3' => 83987.4, 'd3p' => null, 'd4' => 58862, 'd4p' => null, 'd5' => 95191, 'd5p' => null, 'd6' => 87264, 'd6p' => null, 'd7' => 104915, 'd7p' => null, 'd8' => 97303, 'd8p' => null, 'd9' => 87749, 'd9p' => null, 'd10' => 76174, 'd10p' => null, 'd11' => 86562, 'd11p' => null],
        (object) ['bg_color' => 'class="text-center" style="background-color: #dddddd;"', 'porc' => false, 'x100' => false, 's' => true, 'negrita' => false, 'title' => 'Ingreso Total', 'd1' => 201798, 'd1p' => null, 'd2' => 263419, 'd2p' => null, 'd3' => 217228.4, 'd3p' => null, 'd4' => 215974, 'd4p' => null, 'd5' => 192948, 'd5p' => null, 'd6' => 212003, 'd6p' => null, 'd7' => 191669, 'd7p' => null, 'd8' => 231574, 'd8p' => null, 'd9' => 191664, 'd9p' => null, 'd10' => 170814, 'd10p' => null, 'd11' => 248167, 'd11p' => null],
        (object) ['bg_color' => 'class="text-center" style="background-color: #dddddd;"', 'porc' => false, 'x100' => false, 's' => true, 'negrita' => false, 'title' => 'Utilidad Mec / Margen', 'd1' => 11913.54, 'd1p' => 46, 'd2' => 8786.25, 'd2p' => 33, 'd3' => 9483.078, 'd3p' => 35.3215034494746, 'd4' => 10470.14, 'd4p' => 38, 'd5' => 7567.56, 'd5p' => 26, 'd6' => 8677.9, 'd6p' => 34.6334054667684, 'd7' => 10904.85, 'd7p' => 45, 'd8' => 6216, 'd8p' => 35, 'd9' => 6156.41, 'd9p' => 23, 'd10' => 5021.59, 'd10p' => 23, 'd11' => 11064.76, 'd11p' => 43],
        (object) ['bg_color' => 'class="text-center" style="background-color: #dddddd;"', 'porc' => false, 'x100' => false, 's' => true, 'negrita' => false, 'title' => 'Utilidad PYP / Margen', 'd1' => 38949.4, 'd1p' => 35, 'd2' => 30697.25, 'd2p' => 25, 'd3' => 27775.4115555556, 'd3p' => 26.1064003726223, 'd4' => 27207.39, 'd4p' => 21, 'd5' => 17162.75, 'd5p' => 25, 'd6' => 24860.2677777778, 'd6p' => 24.9394366338477, 'd7' => 20006.72, 'd7p' => 32, 'd8' => 30292.86, 'd8p' => 26, 'd9' => 18515.52, 'd9p' => 24, 'd10' => 12377.19, 'd10p' => 17, 'd11' => 28533.33, 'd11p' => 21],
        (object) ['bg_color' => 'class="text-center" style="background-color: #dddddd;"', 'porc' => false, 'x100' => false, 's' => true, 'negrita' => false, 'title' => 'Utilidad Mesón / Margen', 'd1' => 16799.9, 'd1p' => 26, 'd2' => 31921.4, 'd2p' => 28, 'd3' => 20402.5108888889, 'd3p' => 24.2923472912471, 'd4' => 15304.12, 'd4p' => 26, 'd5' => 20942.02, 'd5p' => 22, 'd6' => 17045.1144444444, 'd6p' => 19.5328135822842, 'd7' => 13638.95, 'd7p' => 13, 'd8' => 14595.45, 'd8p' => 15, 'd9' => 13162.35, 'd9p' => 15, 'd10' => 17520.02, 'd10p' => 23, 'd11' => 9521.82, 'd11p' => 11],
        (object) ['bg_color' => 'class="text-center" style="background-color: #FFF2CC;"', 'porc' => false, 'x100' => false, 's' => true, 'negrita' => false, 'title' => 'Utilidad Total', 'd1' => 67662.84, 'd1p' => 33.5299854309755, 'd2' => 71404.9, 'd2p' => 27.1069664678706, 'd3' => 57661.0004444444, 'd3p' => 26.5439511797005, 'd4' => 52981.65, 'd4p' => 24.5314945317492, 'd5' => 45672.33, 'd5p' => 23.6707973132658, 'd6' => 50583.2822222222, 'd6p' => 23.8597011467867, 'd7' => 44550.52, 'd7p' => 23.2434666012762, 'd8' => 51104.31, 'd8p' => 22.0682416851633, 'd9' => 37834.28, 'd9p' => 19.739898989899, 'd10' => 34918.8, 'd10p' => 20.4425866732235, 'd11' => 49119.91, 'd11p' => 19.7930869132479],
        (object) ['bg_color' => 'class="text-center" style="background-color: #dddddd;"', 'porc' => false, 'x100' => false, 's' => true, 'negrita' => true, 'title' => 'Ots Facturadas'],
        (object) ['bg_color' => 'class="text-center" style="background-color: #dddddd;"', 'porc' => false, 'x100' => false, 's' => false, 'negrita' => false, 'title' => 'Mecánica', 'd1' => 172, 'd1p' => null, 'd2' => 259, 'd2p' => null, 'd3' => 188, 'd3p' => null, 'd4' => 237, 'd4p' => null, 'd5' => 54, 'd5p' => null, 'd6' => 214, 'd6p' => null, 'd7' => 243, 'd7p' => null, 'd8' => 291, 'd8p' => null, 'd9' => 197, 'd9p' => null, 'd10' => 230, 'd10p' => null, 'd11' => 239, 'd11p' => null],
        (object) ['bg_color' => 'class="text-center" style="background-color: #dddddd;"', 'porc' => false, 'x100' => false, 's' => false, 'negrita' => false, 'title' => 'PYP', 'd1' => 23, 'd1p' => null, 'd2' => 20, 'd2p' => null, 'd3' => 31, 'd3p' => null, 'd4' => 39, 'd4p' => null, 'd5' => 42, 'd5p' => null, 'd6' => 31, 'd6p' => null, 'd7' => 45, 'd7p' => null, 'd8' => 12, 'd8p' => null, 'd9' => 13, 'd9p' => null, 'd10' => 43, 'd10p' => null, 'd11' => 36, 'd11p' => null],
        (object) ['bg_color' => 'class="text-center" style="background-color: #dddddd;"', 'porc' => false, 'x100' => false, 's' => true, 'negrita' => true, 'title' => 'Ticket'],
        (object) ['bg_color' => 'class="text-center" style="background-color: #dddddd;"', 'porc' => false, 'x100' => false, 's' => true, 'negrita' => false, 'title' => 'Ticket Mecánica', 'd1' => 150.575581395349, 'd1p' => null, 'd2' => 102.799227799228, 'd2p' => null, 'd3' => 142.807919621749, 'd3p' => null, 'd4' => 116.257383966245, 'd4p' => null, 'd5' => 539, 'd5p' => null, 'd6' => 117.086188992731, 'd6p' => null, 'd7' => 99.7242798353909, 'd7p' => null, 'd8' => 61.0309278350515, 'd8p' => null, 'd9' => 135.873096446701, 'd9p' => null, 'd10' => 94.9260869565217, 'd10p' => null, 'd11' => 107.665271966527, 'd11p' => null],
        (object) ['bg_color' => 'class="text-center" style="background-color: #dddddd;"', 'porc' => false, 'x100' => false, 's' => true, 'negrita' => false, 'title' => 'Ticket PYP', 'd1' => 4838.4347826087, 'd1p' => null, 'd2' => 6139.45, 'd2p' => null, 'd3' => 3432.03584229391, 'd3p' => null, 'd4' => 3322.02564102564, 'd4p' => null, 'd5' => 1634.54761904762, 'd5p' => null, 'd6' => 3215.56630824373, 'd6p' => null, 'd7' => 1389.35555555556, 'd7p' => null, 'd8' => 9709.25, 'd8p' => null, 'd9' => 5934.46153846154, 'd9p' => null, 'd10' => 1693.18604651163, 'd10p' => null, 'd11' => 3774.25, 'd11p' => null],
    ];

    return view('reportes.comparador_repuestos', compact('dealers', 'data'));
})->name('reportes.comparador_repuestos');

Route::get('/reportes/comparador_pyp', function() {

    $dealers = [null, 'DELAER 1', 'DEALER 4', 'DEALER 8', 'TOP 5', 'DEALER 6', 'PROMEDIO', 'DEALER 5', 'DEALER 9', 'DEALER 2', 'DEALER 7', 'DEALER 3'];
    $data = [
        (object) ['bg_color' => 'class="text-center" style="background-color: #dddddd;"', 'porc' => false, 'x100' => false, 's' => true, 'negrita' => true, 'title' => 'Facturacion'],
        (object) ['bg_color' => 'class="text-center" style="background-color: #dddddd;"', 'porc' => false, 'x100' => false, 's' => true, 'negrita' => false, 'title' => 'Ingreso MO', 'd1' => 92282, 'd1p' => null, 'd2' => 124583, 'd2p' => null, 'd3' => 97555, 'd3p' => null, 'd4' => 94245.2, 'd4p' => null, 'd5' => 78084, 'd5p' => null, 'd6' => 89684.2222222222, 'd6p' => null, 'd7' => 78722, 'd7p' => null, 'd8' => 96273, 'd8p' => null, 'd9' => 81162, 'd9p' => null, 'd10' => 63646, 'd10p' => null, 'd11' => 94851, 'd11p' => null],
        (object) ['bg_color' => 'class="text-center" style="background-color: #dddddd;"', 'porc' => false, 'x100' => false, 's' => true, 'negrita' => false, 'title' => 'Ingreso Serv. Terceros', 'd1' => 23244, 'd1p' => null, 'd2' => 29822, 'd2p' => null, 'd3' => 28942, 'd3p' => null, 'd4' => 27409.2, 'd4p' => null, 'd5' => 33760, 'd5p' => null, 'd6' => 26390.5555555556, 'd6p' => null, 'd7' => 21278, 'd7p' => null, 'd8' => 33828, 'd8p' => null, 'd9' => 22466, 'd9p' => null, 'd10' => 21668, 'd10p' => null, 'd11' => 22507, 'd11p' => null],
        (object) ['bg_color' => 'class="text-center" style="background-color: #dddddd;"', 'porc' => false, 'x100' => false, 's' => true, 'negrita' => false, 'title' => 'Ingreso Repuestos', 'd1' => 67610, 'd1p' => null, 'd2' => 107671, 'd2p' => null, 'd3' => 109154, 'd3p' => null, 'd4' => 90516, 'd4p' => null, 'd5' => 92508, 'd5p' => null, 'd6' => 95934.7777777778, 'd6p' => null, 'd7' => 75637, 'd7p' => null, 'd8' => 119453, 'd8p' => null, 'd9' => 79223, 'd9p' => null, 'd10' => 105246, 'd10p' => null, 'd11' => 106911, 'd11p' => null],
        (object) ['bg_color' => 'class="text-center" style="background-color: #dddddd;"', 'porc' => false, 'x100' => false, 's' => true, 'negrita' => false, 'title' => 'Ingreso Total', 'd1' => 183136, 'd1p' => null, 'd2' => 262076, 'd2p' => null, 'd3' => 235651, 'd3p' => null, 'd4' => 212170.4, 'd4p' => null, 'd5' => 204352, 'd5p' => null, 'd6' => 212009.555555556, 'd6p' => null, 'd7' => 175637, 'd7p' => null, 'd8' => 249554, 'd8p' => null, 'd9' => 182851, 'd9p' => null, 'd10' => 190560, 'd10p' => null, 'd11' => 224269, 'd11p' => null],
        (object) ['bg_color' => 'class="text-center" style="background-color: #dddddd;"', 'porc' => false, 'x100' => false, 's' => true, 'negrita' => false, 'title' => 'Utilidad MO / Margen', 'd1' => 67365.86, 'd1p' => 73, 'd2' => 88453.93, 'd2p' => 71, 'd3' => 63410.75, 'd3p' => 65, 'd4' => 66108.732, 'd4p' => 70.1454631111186, 'd5' => 57782.16, 'd5p' => 74, 'd6' => 59784.9022222222, 'd6p' => 66.6615606857641, 'd7' => 53530.96, 'd7p' => 68, 'd8' => 63540.18, 'd8p' => 66, 'd9' => 43827.48, 'd9p' => 54, 'd10' => 37551.14, 'd10p' => 59, 'd11' => 62601.66, 'd11p' => 66],
        (object) ['bg_color' => 'class="text-center" style="background-color: #dddddd;"', 'porc' => false, 'x100' => false, 's' => true, 'negrita' => false, 'title' => 'Utilidad Serv. Terceros / Margen', 'd1' => 14876.16, 'd1p' => 64, 'd2' => 23559.38, 'd2p' => 79, 'd3' => 17075.78, 'd3p' => 59, 'd4' => 17824.272, 'd4p' => 65.03025261591, 'd5' => 21268.8, 'd5p' => 63, 'd6' => 16492.7788888888, 'd6p' => 62.4950045260299, 'd7' => 12341.24, 'd7p' => 58, 'd8' => 21649.92, 'd8p' => 64, 'd9' => 15950.86, 'd9p' => 71, 'd10' => 8883.88, 'd10p' => 41, 'd11' => 12828.99, 'd11p' => 57],
        (object) ['bg_color' => 'class="text-center" style="background-color: #dddddd;"', 'porc' => false, 'x100' => false, 's' => true, 'negrita' => false, 'title' => 'Utilidad Repuestos / Margen', 'd1' => 20959.1, 'd1p' => 31, 'd2' => 34454.72, 'd2p' => 32, 'd3' => 42570.06, 'd3p' => 39, 'd4' => 26995.156, 'd4p' => 29.8236289716735, 'd5' => 20351.76, 'd5p' => 22, 'd6' => 25846.8055555556, 'd6p' => 26.9420601728257, 'd7' => 16640.14, 'd7p' => 22, 'd8' => 26279.66, 'd8p' => 22, 'd9' => 20597.98, 'd9p' => 26, 'd10' => 34731.18, 'd10p' => 33, 'd11' => 16036.65, 'd11p' => 15],
        (object) ['bg_color' => 'class="text-center" style="background-color: #FFF2CC;"', 'porc' => false, 'x100' => false, 's' => true, 'negrita' => false, 'title' => 'Utilidad Total', 'd1' => 103201.12, 'd1p' => 56.3521754324655, 'd2' => 146468.03, 'd2p' => 55.8876165692395, 'd3' => 123056.59, 'd3p' => 52.2198462981273, 'd4' => 110928.16, 'd4p' => 52.2825804164954, 'd5' => 99402.72, 'd5p' => 48.6428906984028, 'd6' => 102124.486666667, 'd6p' => 48.169756499445, 'd7' => 82512.34, 'd7p' => 46.978905355933, 'd8' => 111469.76, 'd8p' => 44.6675909823124, 'd9' => 80376.32, 'd9p' => 43.9572766897638, 'd10' => 81166.2, 'd10p' => 42.5935138539043, 'd11' => 91467.3, 'd11p' => 40.7846380908641],
        (object) ['bg_color' => 'class="text-center" style="background-color: #dddddd;"', 'porc' => false, 'x100' => false, 's' => true, 'negrita' => true, 'title' => 'Ots x Seguro'],
        (object) ['bg_color' => 'class="text-center" style="background-color: #dddddd;"', 'porc' => false, 'x100' => false, 's' => false, 'negrita' => false, 'title' => 'Seguro 1 / Participación', 'd1' => 24, 'd1p' => 13.5593220338983, 'd2' => 84, 'd2p' => 38.3561643835616, 'd3' => 99, 'd3p' => 31.3291139240506, 'd4' => 67, 'd4p' => 26.9076305220884, 'd5' => 53, 'd5p' => 23.2456140350877, 'd6' => 48, 'd6p' => 22.5352112676056, 'd7' => 75, 'd7p' => 25.4237288135593, 'd8' => 11, 'd8p' => 14.8648648648649, 'd9' => 14, 'd9p' => 10, 'd10' => 28, 'd10p' => 14.8148148148148, 'd11' => 37, 'd11p' => 14.5098039215686],
        (object) ['bg_color' => 'class="text-center" style="background-color: #dddddd;"', 'porc' => false, 'x100' => false, 's' => false, 'negrita' => false, 'title' => 'Seguro 2 / Participación', 'd1' => 67, 'd1p' => 37.8531073446328, 'd2' => 30, 'd2p' => 13.6986301369863, 'd3' => 67, 'd3p' => 21.2025316455696, 'd4' => 54, 'd4p' => 21.6867469879518, 'd5' => 70, 'd5p' => 30.7017543859649, 'd6' => 58, 'd6p' => 27.2300469483568, 'd7' => 32, 'd7p' => 10.8474576271186, 'd8' => 33, 'd8p' => 44.5945945945946, 'd9' => 29, 'd9p' => 20.7142857142857, 'd10' => 92, 'd10p' => 48.6772486772487, 'd11' => 95, 'd11p' => 37.2549019607843],
        (object) ['bg_color' => 'class="text-center" style="background-color: #dddddd;"', 'porc' => false, 'x100' => false, 's' => false, 'negrita' => false, 'title' => 'Seguro 3 / Participación', 'd1' => 40, 'd1p' => 22.5988700564972, 'd2' => 50, 'd2p' => 22.8310502283105, 'd3' => 88, 'd3p' => 27.8481012658228, 'd4' => 58, 'd4p' => 23.2931726907631, 'd5' => 13, 'd5p' => 5.70175438596491, 'd6' => 50, 'd6p' => 23.4741784037559, 'd7' => 95, 'd7p' => 32.2033898305085, 'd8' => 14, 'd8p' => 18.9189189189189, 'd9' => 41, 'd9p' => 29.2857142857143, 'd10' => 26, 'd10p' => 13.7566137566138, 'd11' => 80, 'd11p' => 31.3725490196078],
        (object) ['bg_color' => 'class="text-center" style="background-color: #dddddd;"', 'porc' => false, 'x100' => false, 's' => false, 'negrita' => false, 'title' => 'Seguro 4 / Participación', 'd1' => 46, 'd1p' => 25.9887005649718, 'd2' => 55, 'd2p' => 25.1141552511416, 'd3' => 62, 'd3p' => 19.620253164557, 'd4' => 70, 'd4p' => 28.1124497991968, 'd5' => 92, 'd5p' => 40.3508771929825, 'd6' => 57, 'd6p' => 26.7605633802817, 'd7' => 93, 'd7p' => 31.5254237288136, 'd8' => 16, 'd8p' => 21.6216216216216, 'd9' => 56, 'd9p' => 40, 'd10' => 43, 'd10p' => 22.7513227513227, 'd11' => 43, 'd11p' => 16.8627450980392],
        (object) ['bg_color' => 'class="text-center" style="background-color: #dddddd;"', 'porc' => false, 'x100' => false, 's' => true, 'negrita' => true, 'title' => 'Facturación x Seguro'],
        (object) ['bg_color' => 'class="text-center" style="background-color: #dddddd;"', 'porc' => false, 'x100' => false, 's' => true, 'negrita' => false, 'title' => 'Seguro 1 / Participación', 'd1' => 21926, 'd1p' => 11.9725231521929, 'd2' => 22349, 'd2p' => 8.52767899387964, 'd3' => 37579, 'd3p' => 15.946887558296, 'd4' => 29410.2, 'd4p' => 13.8615942657411, 'd5' => 23510, 'd5p' => 11.5046586282493, 'd6' => 30887.3333333333, 'd6p' => 14.568840188545, 'd7' => 41687, 'd7p' => 23.7347483730649, 'd8' => 35748, 'd8p' => 14.3247553635686, 'd9' => 26269, 'd9p' => 14.3663419943014, 'd10' => 21975, 'd10p' => 11.5318010075567, 'd11' => 46943, 'd11p' => 20.9315598678373],
        (object) ['bg_color' => 'class="text-center" style="background-color: #dddddd;"', 'porc' => false, 'x100' => false, 's' => true, 'negrita' => false, 'title' => 'Seguro 2 / Participación', 'd1' => 61759, 'd1p' => 33.7230255110956, 'd2' => 76068, 'd2p' => 29.025168271799, 'd3' => 77885, 'd3p' => 33.0509949034801, 'd4' => 73288.8, 'd4p' => 34.5424243909612, 'd5' => 76529, 'd5p' => 37.4495967741936, 'd6' => 69819.1111111111, 'd6p' => 32.932058617903, 'd7' => 74203, 'd7p' => 42.2479318139116, 'd8' => 79271, 'd8p' => 31.7650688828871, 'd9' => 58392, 'd9p' => 31.934197789457, 'd10' => 65584, 'd10p' => 34.416456759026, 'd11' => 58681, 'd11p' => 26.1654530942752],
        (object) ['bg_color' => 'class="text-center" style="background-color: #dddddd;"', 'porc' => false, 'x100' => false, 's' => true, 'negrita' => false, 'title' => 'Seguro 3 / Participación', 'd1' => 18135, 'd1p' => 9.90247684780709, 'd2' => 34843, 'd2p' => 13.2949983974114, 'd3' => 19766, 'd3p' => 8.38782776224162, 'd4' => 26574.4, 'd4p' => 12.5250270537266, 'd5' => 25188, 'd5p' => 12.3257907923583, 'd6' => 27724.2222222222, 'd6p' => 13.0768738935247, 'd7' => 34940, 'd7p' => 19.8933026640173, 'd8' => 34996, 'd8p' => 14.0234177773147, 'd9' => 32061, 'd9p' => 17.5339484060793, 'd10' => 15007, 'd10p' => 7.87520990764064, 'd11' => 34582, 'd11p' => 15.4198752391102],
        (object) ['bg_color' => 'class="text-center" style="background-color: #dddddd;"', 'porc' => false, 'x100' => false, 's' => true, 'negrita' => false, 'title' => 'Seguro 4 / Participación', 'd1' => 81316, 'd1p' => 44.4019744889044, 'd2' => 128816, 'd2p' => 49.1521543369099, 'd3' => 100421, 'd3p' => 42.6142897759823, 'd4' => 82897, 'd4p' => 39.070954289571, 'd5' => 79125, 'd5p' => 38.7199538051989, 'd6' => 83578.8888888889, 'd6p' => 39.4222273000274, 'd7' => 24807, 'd7p' => 14.1240171490062, 'd8' => 99539, 'd8p' => 39.8867579762296, 'd9' => 66129, 'd9p' => 36.1655118101624, 'd10' => 87994, 'd10p' => 46.1765323257767, 'd11' => 84063, 'd11p' => 37.4831117987774],
        (object) ['bg_color' => 'class="text-center" style="background-color: #dddddd;"', 'porc' => false, 'x100' => false, 's' => true, 'negrita' => true, 'title' => 'Ticket x Seguro'],
        (object) ['bg_color' => 'class="text-center" style="background-color: #dddddd;"', 'porc' => false, 'x100' => false, 's' => true, 'negrita' => false, 'title' => 'Ticket Seguro 1', 'd1' => 913.583333333333, 'd1p' => null, 'd2' => 266.059523809524, 'd2p' => null, 'd3' => 379.585858585859, 'd3p' => null, 'd4' => 438.958208955224, 'd4p' => null, 'd5' => 443.584905660377, 'd5p' => null, 'd6' => 643.486111111111, 'd6p' => null, 'd7' => 555.826666666667, 'd7p' => null, 'd8' => 3249.81818181818, 'd8p' => null, 'd9' => 1876.35714285714, 'd9p' => null, 'd10' => 784.821428571429, 'd10p' => null, 'd11' => 1268.72972972973, 'd11p' => null],
        (object) ['bg_color' => 'class="text-center" style="background-color: #dddddd;"', 'porc' => false, 'x100' => false, 's' => true, 'negrita' => false, 'title' => 'Ticket Seguro 2', 'd1' => 921.776119402985, 'd1p' => null, 'd2' => 2535.6, 'd2p' => null, 'd3' => 1162.46268656716, 'd3p' => null, 'd4' => 1357.2, 'd4p' => null, 'd5' => 1093.27142857143, 'd5p' => null, 'd6' => 1203.77777777778, 'd6p' => null, 'd7' => 2318.84375, 'd7p' => null, 'd8' => 2402.15151515152, 'd8p' => null, 'd9' => 2013.51724137931, 'd9p' => null, 'd10' => 712.869565217391, 'd10p' => null, 'd11' => 617.694736842105, 'd11p' => null],
        (object) ['bg_color' => 'class="text-center" style="background-color: #dddddd;"', 'porc' => false, 'x100' => false, 's' => true, 'negrita' => false, 'title' => 'Ticket Seguro 3', 'd1' => 453.375, 'd1p' => null, 'd2' => 696.86, 'd2p' => null, 'd3' => 224.613636363636, 'd3p' => null, 'd4' => 458.179310344828, 'd4p' => null, 'd5' => 1937.53846153846, 'd5p' => null, 'd6' => 554.484444444444, 'd6p' => null, 'd7' => 367.789473684211, 'd7p' => null, 'd8' => 2499.71428571429, 'd8p' => null, 'd9' => 781.975609756098, 'd9p' => null, 'd10' => 577.192307692308, 'd10p' => null, 'd11' => 432.275, 'd11p' => null],
        (object) ['bg_color' => 'class="text-center" style="background-color: #dddddd;"', 'porc' => false, 'x100' => false, 's' => true, 'negrita' => false, 'title' => 'Ticket Seguro 4', 'd1' => 1767.73913043478, 'd1p' => null, 'd2' => 2342.10909090909, 'd2p' => null, 'd3' => 1619.6935483871, 'd3p' => null, 'd4' => 1184.24285714286, 'd4p' => null, 'd5' => 860.054347826087, 'd5p' => null, 'd6' => 1466.2962962963, 'd6p' => null, 'd7' => 266.741935483871, 'd7p' => null, 'd8' => 6221.1875, 'd8p' => null, 'd9' => 1180.875, 'd9p' => null, 'd10' => 2046.37209302326, 'd10p' => null, 'd11' => 1954.95348837209, 'd11p' => null],
    ];

    return view('reportes.comparador_pyp', compact('dealers', 'data'));
})->name('reportes.comparador_pyp');