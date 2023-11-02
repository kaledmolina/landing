<?php

use App\Livewire\ShowHome;
use App\Livewire\ShowService;
use App\Livewire\ShowTeamPage;
use App\Livewire\ShowServicePage;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', ShowHome::class)->name('home');
Route::get('/Servicios', ShowServicePage::class)->name('servicesPage');
Route::get('/Servicios/{id}', ShowService::class)->name('servicePage');
Route::get('/Equipo', ShowTeamPage::class)->name('teamPage');

