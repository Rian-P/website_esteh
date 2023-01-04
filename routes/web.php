<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\landing\AuthController;
use App\Http\Controllers\landing\CareerController;
use App\Http\Controllers\landing\AboutController;
use App\Http\Controllers\landing\HomeController;
use App\Http\Controllers\landing\PortfolioController;
use App\Http\Controllers\landing\ServiceController;
use App\Http\Controllers\landing\TeamController;
use App\Http\Controllers\landing\BlogController;
use App\Http\Controllers\landing\ContactController;
use App\Http\Controllers\landing\DashboardController;
use App\Http\Controllers\landing\LoginController;
use App\Http\Controllers\landing\RegisterController;
use App\Http\Controllers\landing\ViewBlogController;
use App\Http\Controllers\landing\EditBlogController;
use App\Http\Controllers\landing\TambahBlogController;
use App\Http\Controllers\landing\UpdateTeamController;
use App\Http\Controllers\landing\ViewPortfolioController;
use App\Http\Controllers\landing\ViewIntershipController;
use App\Http\Controllers\landing\cvController;
use App\Http\Controllers\landing\BlogdetailController;


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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/home', [HomeController::class, 'home'])->name('home');
Route::get('/career', [CareerController::class, 'cereer'])->name('cerrer');
Route::get('/about', [AboutController::class, 'about'])->name('about');
Route::get('/portfolio', [PortfolioController::class, 'portfolio'])->name('portfolio');
Route::get('/team', [TeamController::class, 'team'])->name('team');
Route::get('/blog', [BlogController::class, 'blog'])->name('blog');
Route::get('/service', [ServiceController::class, 'service'])->name('service');
Route::get('/contact', [ContactController::class, 'contact'])->name('contact');
Route::get('/blogdetail', [BlogdetailController::class, 'blogdetail'])->name('blogdetail');
// login in dashboard
// Route::get('/dashborad', [LoginController::class, 'dashborad'])->name('dashborad');
// Route::get('/dashborad', [RegisterController::class, 'dashborad'])->name('dashborad');
Route::get('/', [LoginController::class, 'login'])->name('login');
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');
Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');
Route::post('actionregister', [RegisterController::class, 'actionregister'])->name('actionregister');
Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

//user
Route::get('/users', [LoginController::class, 'index'])->name('users');
Route::get('/users/hapus/{id_user}', [LoginController::class, 'hapus'])->name('hapus.index');
Route::get('/edit/{id_user}', [LoginController::class, 'edit'])->name('ubahusers');
Route::post('/update/{id_user}', [LoginController::class, 'updateusers'])->name('updateusers');

//REGISTER
Route::get('/register', [RegisterController::class, 'register'])->name('register');
Route::get('/fromregister', [RegisterController::class, 'fromregister'])->name('fromregister');



//blog
Route::get('/viewblog', [ViewBlogController::class, 'viewblog'])->name('viewblog');
Route::get('/tambahblog', [TambahBlogController::class, 'tambahblog'])->name('tambahblog');
Route::post('/insertblog', [TambahBlogController::class, 'store'])->name('insertblog');
Route::get('/viewblog/hapus/{id}', [TambahBlogController::class, 'hapus'])->name('hapus');
Route::put('/viewblog/update/{id}', [TambahBlogController::class, 'update'])->name('update.index');
Route::get('/viewblog/edit/{id}', [TambahBlogController::class, 'edit'])->name('edit');

//team
Route::get('/updateteam', [UpdateTeamController::class, 'index'])->name('updateteam.index');
Route::get('/tambahteam', [UpdateTeamController::class, 'tambah'])->name('tambahteam.index');
Route::post('/tambahteam', [UpdateTeamController::class, 'store'])->name('team.index');
Route::get('/updateteam/edit/{id}', [UpdateTeamController::class, 'edit'])->name('editteam.index');
Route::put('/updateteam/update/{id}', [UpdateTeamController::class, 'update'])->name('updateTeam.index');
Route::get('/updateteam/hapus/{id}', [UpdateTeamController::class, 'hapus'])->name('hapus.index');
Route::get('/cv/edit/{id}', [cvController::class, 'cv'])->name('cv');


// portfolio
Route::get('/viewportfolio', [ViewPortfolioController::class, 'show'])->name('viewportfolio');
Route::get('/formPortfolio', [ViewPortfolioController::class, 'fromportfolio'])->name('formPortfolio');
Route::post('/insertPortfolio', [ViewPortfolioController::class, 'store']);
Route::get('/delete/{id}', [ViewPortfolioController::class, 'destroy'])->name('destroy');
Route::get('/editportfolio/{id}', [ViewPortfolioController::class, 'edit'])->name('editportfolio');
Route::post('/updateportfolio/{id}', [ViewPortfolioController::class, 'update'])->name('updateteam');

// intership
// Route::get('/viewintership', [ViewIntershipController::class, 'index'])->name('viewintership');
Route::get('/viewintership', [ViewIntershipController::class, 'show'])->name('viewintership');
Route::get('/formintership', [ViewIntershipController::class, 'index'])->name('formintership');
Route::post('/insertintership', [ViewIntershipController::class, 'store']);
Route::get('/delete/{id}', [ViewIntershipController::class, 'destroy'])->name('destroy');
Route::get('/editintership/{id}', [ViewIntershipController::class, 'edit'])->name('editintership');
Route::post('/updateintership/{id}', [ViewIntershipController::class, 'update'])->name('updateintership');






