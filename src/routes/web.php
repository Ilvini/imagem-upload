<?php

use IlviniPitter\ImagemUpload\Http\Controllers\ImagemUploadController;

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

Route::get('img-render/{path}/{tamanho?}/{imagem?}', [ImagemUploadController::class, 'imagemRender'])->name('imagem.render');
