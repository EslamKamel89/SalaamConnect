<?php

namespace App\Http\Controllers;

use App\Http\Resources\RoomResource;
use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller {
	public function show( Room $room ) {
		return inertia( 'Room/Show', [ 
			'room' => RoomResource::make( $room )
		] );
	}
}
