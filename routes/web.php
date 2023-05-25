<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SiteController;
use Illuminate\Http\JsonResponse;
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

Route::controller(HomeController::class)->group(function () {

    Route::get('/', "Page");
    Route::get('/home', "Page");
});









Route::post('/form', [SiteController::class, "FormData"]);
Route::post('/file', [SiteController::class, "FileData"]);
Route::post('/ip', [SiteController::class, "UserIp"]);
Route::post('/json', [SiteController::class, "Json"]);
Route::get('/redirect', [SiteController::class, "Redirect"]);

Route::post('/hi/{name}/{age}', [SiteController::class, "jsonAction"]);


Route::get('/books', [BooksController::class, "books"]);
Route::get('/books/{is}', [BooksController::class, "getBook"]);


Route::controller(SiteController::class)->group(function () {

    Route::get('/rafsanjane', 'Home');
    Route::get('/resume', 'resume');
    Route::get('/services', 'services');
    Route::get('/contact', 'contact');
    Route::get('/portfolio', 'Portfolio');
});





Route::post('/submit', function (Request $request) {
    $email = $request->input('email');

    $data = [
        'success' => true,
        'message' => 'Form submitted successfully.'
    ];
    return $email;
    return new JsonResponse($data);
});
