<?php

namespace Database\Seeders;

use App\Models\Room;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
	/**
	 * Seed the application's database.
	 */
	public function run(): void {
		User::factory()->create( [ 
			'name' => 'admin',
			'email' => 'admin@gmail.com',
		] );
		Room::insert( [ 
			[ 'title' => 'inertia', 'slug' => str( 'inertia' )->slug(), 'created_at' => now(), 'updated_at' => now() ],
		] );
	}
}
