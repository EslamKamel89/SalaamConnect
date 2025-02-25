<?php

namespace Database\Seeders;

use App\Models\Room;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Collection;

class RoomSeeder extends Seeder {
	/**
	 * @var Collection<int, string> $names
	 */
	protected Collection $titles = collect( [ 'Inertia', 'Laravel', 'Vue', 'PHP' ] );
	/**
	 * Run the database seeds.
	 */
	public function run(): void {
		$this->titles->each(
			fn( string $title ) =>
			Room::create( [ 'title' => $title, 'slug' => str( $title )->slug() ] )
		);
	}
}
