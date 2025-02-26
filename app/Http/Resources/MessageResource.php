<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class MessageResource extends JsonResource {
	/**
	 * Transform the resource into an array.
	 *
	 * @return array<string, mixed>
	 */
	public function toArray( Request $request ): array {
		return [ 
			'id' => $this->id,
			'room_id' => $this->room_id,
			'user_id' => $this->user_id,
			'content' => $this->content,
			'created_at' => $this->created_at,
			'user' => UserResource::make( $this->user ),
		];
	}
}
