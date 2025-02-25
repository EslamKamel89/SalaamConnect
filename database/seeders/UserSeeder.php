<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Collection;

class UserSeeder extends Seeder {
	/**
	 * @var Collection<int, string> $names
	 */
	protected Collection $names = collect( [ 'admin', 'eslam', 'selia', 'amina' ] );
	/**
	 * Run the database seeds.
	 */
	public function run(): void {
		$this->names->each(
			fn( string $name ) =>
			User::create( [ 'name' => $name, 'email' => "{$name}@gmail.com" ] )
		);
	}
}
