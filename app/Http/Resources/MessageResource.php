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
		/** @var \Carbon\Carbon $createdAt */
		$createdAt = $this->created_at;
		return [ 
			'id' => $this->id,
			'room_id' => $this->room_id,
			'user_id' => $this->user_id,
			'content' => $this->content,
			'created_at' => $createdAt->diffForHumans(),
			'user' => UserResource::make( $this->user ),
		];
	}
}
