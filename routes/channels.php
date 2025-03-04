<?php

use App\Models\User;
use Illuminate\Support\Facades\Broadcast;

Broadcast::channel( 'App.Models.User.{id}', function ($user, $id) {
	return (int) $user->id === (int) $id;
} );

Broadcast::channel( 'room.{roomId}', function (?User $user, int $roomId) {
	return [ ...collect( $user->only( [ 'id', 'name', 'email' ] ) ), 'avatar' => $user->userAvatar() ];
} );
