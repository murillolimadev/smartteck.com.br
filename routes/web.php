<?php

use App\Http\Controllers\ContatoController;
use App\Http\Controllers\EnderecoController;
use App\Http\Controllers\MissaoController;
use App\Http\Controllers\NoticiaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\ValoresController;
use App\Http\Controllers\VisaoController;
use App\Http\Controllers\Home\HomeController;
use Illuminate\Support\Facades\Route;

// home
Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('about/', [HomeController::class, 'index'])->name('about');
Route::get('noticia/', [NoticiaController::class, 'index'])->name('noticias.index');
Route::get('noticia/{slug}', [HomeController::class, 'view'])->name('noticia.view');
Route::get('contato/', [ContatoController::class, 'index'])->name('home.contato.index');
Route::post('contact/store', [ContatoController::class, 'store'])->name('contact.store');

// API
Route::get('api/', [HomeController::class, 'api'])->name('documentacao.api');

//administrativo
Route::get('/dashboard', [SliderController::class, 'index'])->middleware(['auth', 'verified'])->name('');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//dashboard
Route::get('/dashboard', [SliderController::class, 'index'])->name('admin.pages.slider.index')->middleware(['auth']);

// slider
Route::post('slider/store/', [SliderController::class, 'store'])->name('admin.pages.slider.store')->middleware('auth');
Route::get('slider/edit/{id}', [SliderController::class, 'edit'])->name('admin.pages.slider.edit')->middleware('auth');
Route::post('slider/update/{id}', [SliderController::class, 'update'])->name('admin.pages.slider.update')->middleware('auth');
Route::delete('delete/slider/{id}', [SliderController::class, 'destroy'])->name('admin.pages.slider.delete')->middleware(['auth']);


//missao
Route::get('admin/missao/', [MissaoController::class, 'index'])->name('admin.pages.missao.index')->middleware(['auth']);
Route::post('admin/missao/store/', [MissaoController::class, 'store'])->name('admin.pages.missao.store')->middleware(['auth']);
Route::get('admin/missao/edit/{id}', [MissaoController::class, 'edit'])->name('admin.pages.missao.edit')->middleware(['auth']);;
Route::put('admin/missao/update/{id}', [MissaoController::class, 'update'])->name('admin.pages.missao.update')->middleware(['auth']);;
Route::get('admin/missao/delete/{id}', [MissaoController::class, 'destroy'])->name('admin.missao.delete')->middleware(['auth']);;

//Visao
Route::get('admin/visao', [VisaoController::class, 'index'])->name('admin.pages.visao.index')->middleware(['auth']);
Route::post('admin/visao/store/', [VisaoController::class, 'store'])->name('admin.pages.visao.store')->middleware(['auth']);
Route::get('admin/visao/edit/{id}', [VisaoController::class, 'edit'])->name('admin.pages.visao.edit')->middleware('auth');
Route::put('admin/visao/update/{id}', [VisaoController::class, 'update'])->name('admin.pages.visao.update')->middleware('auth');
Route::get('admin/visao/delete/{id}', [VisaoController::class, 'destroy'])->name('admin.pages.visao.delete')->middleware('auth');

//Valores
Route::get('admin/valores', [ValoresController::class, 'index'])->name('admin.pages.valores.index')->middleware(['auth']);
Route::post('admin/valores/store/', [ValoresController::class, 'store'])->name('admin.pages.valores.store')->middleware(['auth']);
Route::get('admin/valores/edit/{id}', [ValoresController::class, 'edit'])->name('admin.pages.valores.edit')->middleware('auth');
Route::put('admin/valores/update/{id}', [ValoresController::class, 'update'])->name('admin.pages.valores.update')->middleware('auth');
Route::get('admin/valores/delete/{id}', [ValoresController::class, 'destroy'])->name('admin.pages.valores.delete')->middleware('auth');

//noticias
Route::get('admin/noticias', [NoticiaController::class, 'index'])->name('admin.pages.noticias.index')->middleware(['auth']);
Route::post('admin/noticias/store/', [NoticiaController::class, 'store'])->name('admin.pages.noticias.store')->middleware(['auth']);
Route::post('admin/noticias/update/{id}', [NoticiaController::class, 'update'])->name('admin.pages.noticia.update')->middleware(['auth']);
Route::get('admin/noticias/edit/{id}', [NoticiaController::class, 'edit'])->name('admin.pages.noticias.edit')->middleware(['auth']);
Route::get('admin/noticias/delete/{id}', [NoticiaController::class, 'destroy'])->name('admin.pages.noticias.destroy')->middleware(['auth']);

// endereco
Route::get('/endereco', [EnderecoController::class, 'index'])->name('admin.pages.endereco.index')->middleware(['auth']);
Route::post('endereco/store/', [EnderecoController::class, 'store'])->name('admin.pages.endereco.store')->middleware(['auth']);
Route::get('endereco/edit/{id}', [EnderecoController::class, 'edit'])->name('admin.pages.endereco.edit')->middleware('auth');
Route::put('endereco/update/{id}', [EnderecoController::class, 'update'])->name('admin.pages.endereco.update')->middleware('auth');
Route::get('endereco/delete/{id}', [EnderecoController::class, 'destroy'])->name('admin.pages.endereco.delete')->middleware('auth');

//mensagem
Route::get('admin/mensagem', [EnderecoController::class, 'index'])->name('admin.pages.mensagem.index')->middleware(['auth']);


Route::get('/sair', [HomeController::class, 'sair'])->name('sair');


require __DIR__ . '/auth.php';
