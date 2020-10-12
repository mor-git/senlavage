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

// Route::get('/', function () { 
//     return view('welcome');
// });
Route::get('/', function () { 
    return view('users/login');
});
/**-------------------------------PROFILS ROUTES--------------------------------------------- */
use App\Http\Controllers\ProfilController;
Route::get('profils',[ ProfilController::class,'indexProfil' ]);
Route::get('addProfil',[ ProfilController::class,'createProfil' ]);
Route::post('storeProfil',[ ProfilController::class,'storeProfil' ]);
Route::get('editer/{id}',[ ProfilController::class,'editProfil' ]);
Route::post('updateProfil',[ ProfilController::class,'updateProfil' ]);

/**-------------------------------USERS ROUTES----------------------------------------------- */
// Route::get('users','UserController@index')->name('users');
use App\Http\Controllers\UserController;
Route::get('users',[ UserController::class,'indexUser' ]);
Route::get('addUser',[ UserController::class,'createUser' ]);
Route::post('storeUser',[ UserController::class,'storeUser' ]);
/**-------------------------------SERVICES ROUTES-------------------------------------------- */

use App\Http\Controllers\ServiceController;
Route::get('services',[ ServiceController::class,'indexService' ]);
Route::get('addService',[ ServiceController::class,'createService' ]);
Route::post('storeService',[ ServiceController::class,'storeService' ]);

/**-------------------------------PRODUITS ROUTES----------------------------------------------- */

use App\Http\Controllers\ProduitController; 
Route::get('produits',[ ProduitController::class,'indexProduit' ]);
Route::get('addProduit',[ ProduitController::class,'createProduit' ]);
Route::post('storeProduit',[ ProduitController::class,'storeProduit' ]);
/**-------------------------------AUTHENTIFICATION  ROUTES------------------------------------- */

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
