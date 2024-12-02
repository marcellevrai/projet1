<?php

use App\Http\Controllers\VoitureController;
use Illuminate\Support\Facades\Route;
use Illuminate\http\Request;
use App\Models\User;
use App\Models\Voiture;




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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('/article')->name('blog.')->group(function(){
    Route::get('/', function(Request $Request){

        $post = new App\Models\post();

        return [
           "link" =>\route('blog.show',['slug'=>'article','id'=> 13])
        ];
    })->name('index');
    
    Route::get('/{slug}/{id}', function(string $slug, string $id){
        return[
            "slug" => "$slug",
            "id" => "$id"
        ];
    })->where([
        "id" => "[0-9]+",
        "slug" =>"[a-z0-9-/]+"
    ])->name('show');
}); 


Route::get('/test-user', function () {
    // Insérer un utilisateur dans la base de données
    User::create([
        'name' => 'John Doe',
        'email' => 'john@example.com',
        'password' => bcrypt('password'),
    ]);

    // Récupérer tous les utilisateurs
    $users = User::all();

    // Retourner les utilisateurs sous forme JSON
    return response()->json($users);
});


Route::get('/ajouter-voiture', [VoitureController::class, 'ajouter_voiture'])->name('ajouter_voiture');
Route::post('ajouter-voiture', [VoitureController::class, 'store'])->name('ajouter-voiture.store');
Route::get('/voitures', [VoitureController::class, 'voitures'])->name('voiture');
Route::get('/ListeVoiture', [VoitureController::class, 'ListeVoiture'])->name('Listevoiture');
