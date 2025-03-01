<?php

namespace App\Http\Controllers;

use App\Http\Resources\MessageResource;
use App\Models\Room;
use App\Models\Message;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class MessageController extends Controller {
	public function index( Room $room ) {
		/** @var Collection<int , Message> $messages*/
		$messages = $room->messages()
			->with( [ 'user' ] )
			->latest()
			->paginate( 10 );
		// return $messages;
		return MessageResource::collection( $messages );
	}

	public function create() {
	}

	public function store( Request $request ) {
		info( $request->all() );
		$message = new Message();
		$message->id = 9999999999;
		$message->room_id = 1;
		$message->user_id = auth()->id();
		$message->content = $request->message;
		$message->created_at = now();
		$message->updated_at = now();
		return MessageResource::make( $message );
	}

	public function show( string $id ) {
	}

	public function edit( string $id ) {
	}

	public function update( Request $request, string $id ) {
	}

	public function destroy( string $id ) {
	}
}
