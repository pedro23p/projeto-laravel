<?php

use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpFoundation\RedirectResponse;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Http\Controllers\EventController;

Route::get('/', [EventController::class, 'index']);
Route::get('/events/create', [EventController::class, 'create'])->middleware('auth');
Route::post('/events', [EventController::class, 'store']);
Route::get('/events/{id}', [EventController::class, 'show']);
Route::get('/events/create2', [EventController::class, 'create2']);

Route::get('/dashboard', [EventController::class, 'dashboard'])->middleware('auth');





/*Route::get('posts/{post}', function($slug) {
    $path = __DIR__ . "/../resources/posts/{$slug}.html";

    if (! file_exists($path)) {
        return redirect('');
    }
    $post = file_get_contents($path); 

   return view('post', [
       'post' => $post
   ]);
}); */

/*Route::get('/contact', function () {
    return view('contact');
});*/
