<?php

namespace App\Http\Controllers;

use App\Http\Resources\RoomResource;
use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller {

	public function index() {
	}

	public function create() {
	}

	public function store( Request $request ) {
	}

	public function show( Room $room ) {
		return inertia( 'Room/Show', [ 
			'room' => RoomResource::make( $room )
		] );
	}
	public function edit( string $id ) {
	}

	public function update( Request $request, string $id ) {
	}

	public function destroy( string $id ) {
	}
}
