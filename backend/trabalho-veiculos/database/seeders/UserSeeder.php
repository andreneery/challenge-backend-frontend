<?php


namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;


// create a class to generate a user seeder
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // create seeders for user migration
        User::firstOrCreate([
            'name' => 'admin',
            'email' => 'admin@email.com',
            'password' => \Hash::make('admin')
        ]);
    }
}