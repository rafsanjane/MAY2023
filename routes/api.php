<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\SiteController;
use Illuminate\Http\JsonResponse;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::controller(HomeController::class)->group(function () {

    Route::get('/', "Page");
    Route::get('/home', "Page");
});

Route::get('/hello', [SiteController::class, "DemoAction"]);

Route::post('/form', [SiteController::class, "FormData"]);

Route::post('/file', [SiteController::class, "FileData"]);

Route::post('/ip', [SiteController::class, "UserIp"]);

Route::post('/json', [SiteController::class, "Json"]);
Route::post('/redirect', [SiteController::class, "Redirect"]);

Route::post('/hi/{name}/{age}', [SiteController::class, "jsonAction"]);

Route::post('/submit', function (Request $request) {
    $email = $request->input('email');

    $data = [
        'success' => true,
        'message' => 'Form submitted successfully.'
    ];

    return new JsonResponse($data);
});
