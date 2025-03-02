<?php

namespace App\Http\Controllers;

use App\Events\MessageCreated;
use App\Http\Requests\StoreMessageRequest;
use App\Http\Resources\MessageResource;
use App\Models\Room;
use App\Models\Message;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class MessageController extends Controller {
	// use \App\Tratis\Pr;
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

	public function store( StoreMessageRequest $request ) {
		$room = Room::where( 'slug', $request->slug )->first();
		$message = Message::create( [ 
			'user_id' => auth()->id(),
			'room_id' => $room->id,
			'content' => $request->message,
		] );
		broadcast( new MessageCreated( $message ) )->toOthers();
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
