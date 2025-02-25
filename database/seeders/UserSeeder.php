<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Collection;

class UserSeeder extends Seeder {
	/**
	 * @var array<int, string> $names
	 */
	protected array $names = [ 'admin', 'selia',];
	// protected Collection $names = collect( [ 'admin', 'eslam', 'selia', 'amina' ] );
	/**
	 * Run the database seeds.
	 */
	public function run(): void {
		collect( $this->names )->each(
			fn( string $name ) =>
			User::factory()->create( [ 'name' => $name, 'email' => "{$name}@gmail.com" ] )
		);
	}
}
