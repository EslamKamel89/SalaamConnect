<?php

namespace Database\Seeders;

use App\Models\Message;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class MessageSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 */
	public function run(): void {
		Message::factory()->count( 1000 )->sequence( function (Sequence $sequence) {
			$time = now()->subYear()->addHours( $sequence->index );
			return [ 
				'content' => "Message {$sequence->index}",
				'created_at' => $time,
				'updated_at' => $time,
				'user_id' => User::inRandomOrder()->first()->id,
			];
		} )->create( [ 
					'room_id' => 1,
				] );
	}
}
