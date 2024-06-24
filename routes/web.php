<?php

use App\Livewire\ShowBlog;
use App\Livewire\ShowHome;
use App\Livewire\ShowPage;
use App\Livewire\BlogDetail;
use App\Livewire\ShowFaqPage;
use App\Livewire\ShowService;
use App\Livewire\ShowTeamPage;
use App\Livewire\ShowContactPage;
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
Route::get('/Habilidades', ShowTeamPage::class)->name('teamPage');
Route::get('/Proyectos',ShowBlog::class)->name('blog');
Route::get('/Proyectos/{id}',BlogDetail::class)->name('blogDetail');
Route::get('/Faq',ShowFaqPage::class)->name('faqPage');
Route::get('/Page/{id}',ShowPage::class)->name('Page');
Route::get('/contact',ShowContactPage::class)->name('contact');


