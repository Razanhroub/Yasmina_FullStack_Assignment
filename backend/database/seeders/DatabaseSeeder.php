<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //for using the custom seeder i made 
        $this->call(RolesSeeder::class);

    // Create Admin user as seeder
        $adminRole = Role::where('name', 'admin')->first();

        User::factory()->create([
            'name' => 'Super Admin',
            'email' => 'razan.b.alhroub@gmail.com',
            'password' => Hash::make('Raz_2001'),
            'role_id' => $adminRole->id,
        ])->assignRole('admin');
        }
}
