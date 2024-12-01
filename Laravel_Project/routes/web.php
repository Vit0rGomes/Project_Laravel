<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\ProductController;
//autenticação
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

Route::get('/'                ,[EventController::class, 'index']);
Route::get('/events/create'   ,[EventController::class, 'create']);
Route::get('/events/{id}'     ,[EventController::class, 'show']);
Route::post('/events'         ,[EventController::class, 'store']);

Route::get('/users/user/{id}' ,[UsersController::class, 'userID']);
Route::get('/users/user'      ,[UsersController::class, 'user']);
Route::get('/users/login'     ,[UsersController::class, 'login']);
Route::get('/users/cadastro'  ,[UsersController::class, 'signUP']);

Route::get('/info',            [InfoController::class, 'info']);

Route::get('/produto/{id?}', function ($id = null) {
    return view('produto', ['id' => $id]);
});

Route::get('/produtos', function () {
    return view('produtos');
}); 

// autenticação //
Route::get('/auth/redirect', function () {
    return Socialite::driver('google')->redirect();
});
 
// Criando usuário //
Route::get('/auth_google', function () {
    $googleUser = Socialite::driver('google')->user();
 
    $user = User::updateOrCreate([
        'email' => $googleUser->getEmail(),
    ], [
        'google_id' => $googleUser->getId(),
        'name' => $googleUser->name,
        'google_token' => $googleUser->token,
        'google_refresh_token' => $googleUser->refreshToken,
        'password' => null,
    ]);

    Auth::login($user);
 
    return redirect('/')->with('msg','Logado com sucesso!');
 
});

// usando dados dinâmicos //
/*

Route::get('/auth/{$provider}/redirect', function ($provider) {
    return Socialite::driver($provider)->redirect();
}); 

Route::get('/auth_{$provider}', function ($provider) {
    $googleUser = Socialite::driver($provider)->user();
 
    $user = User::updateOrCreate([
        'provider_id' => $providerUser->id,
    ], [
        'name' => $providerUser->name,
        'email' => $googleUser->email,
        'provider_avatar' => $providerUser->avatar,
        'provider_name' => $provider,
    ]);

    Auth::login($user);
 
    return redirect('/')->with('msg','Logado com sucesso!');
 
}); 

*/