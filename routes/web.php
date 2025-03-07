<?php

use App\Http\Controllers\MessageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoomController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get( '/', function () {
	return Inertia::render( 'Welcome', [ 
		'canLogin' => Route::has( 'login' ),
		'canRegister' => Route::has( 'register' ),
		'laravelVersion' => Application::VERSION,
		'phpVersion' => PHP_VERSION,
	] );
} );

Route::get( '/dashboard', function () {
	return Inertia::render( 'Dashboard' );
} )->middleware( [ 'auth', 'verified' ] )->name( 'dashboard' );

Route::middleware( 'auth' )->group( function () {
	Route::get( '/profile', [ ProfileController::class, 'edit' ] )->name( 'profile.edit' );
	Route::patch( '/profile', [ ProfileController::class, 'update' ] )->name( 'profile.update' );
	Route::delete( '/profile', [ ProfileController::class, 'destroy' ] )->name( 'profile.destroy' );
	Route::resource( 'rooms', RoomController::class)
		->scoped( [ 'room' => 'slug' ] )
		->only( [ 'show' ] );
	Route::resource( 'rooms.messages', MessageController::class)
		->scoped( [ 'room' => 'slug' ] )
		->only( [ 'index', 'store' ] );
} );

require __DIR__ . '/auth.php';
