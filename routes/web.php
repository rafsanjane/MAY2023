<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\SiteController;
use Illuminate\Http\JsonResponse;
use App\Http\Middleware\SiteMiddleware;
use App\Http\Middleware\HomeMiddleware;
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
    Route::middleware(HomeMiddleware::class)->group(function () {

        Route::get('/', "Page");
        Route::get('/home', "Page");
        Route::get('/resume', "ResumePage");
        Route::get('/portfolio', "Portfolio");
        Route::get('/project', "Project");
    });
});




Route::resource('/photo', PhotoController::class);



Route::controller(SiteController::class)->group(function () {
    Route::get('/hello/{key}', 'DemoMiddlewareAction')->middleware([SiteMiddleware::class]);
    Route::get('/demoo', "DemoManipulat")->middleware('throttle:5,1');;
});

// Route::get('/hello', [SiteController::class, 'DemoMiddlewareAction'])->middleware([SiteMiddleware::class]);

// Route::controller(SiteController::class)->group(function () {


//     Route::get('/SessionPut/{email}', 'SessionPut');
//     Route::get('/SessionPull', 'SessionPull');
//     Route::get('/SessionForget',  'SessionForget');
//     Route::get('/SessionFlush',  'SessionFlush');
//     Route::post('/form',  "FormData");
//     Route::post('/file',  "FileData");
//     Route::get('/ip',  "UserIp");
//     Route::post('/json',  "Json");
//     Route::get('/redirect', "Redirect");
//     Route::get('/cookie',  "CookieAction");
//     Route::post('/hi/{name}/{age}',  "jsonAction");
// });



// Route::post('/submit', function (Request $request) {
//     $email = $request->input('email');

//     $data = [
//         'success' => true,
//         'message' => 'Form submitted successfully.'
//     ];
//     return $email;
//     return new JsonResponse($data);
// });
Route::get('/home', function () {
    return redirect('/dashboard');
});
