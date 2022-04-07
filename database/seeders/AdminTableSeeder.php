<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $password = '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'; // password

        Admin::forceCreate([
            'name' => 'Taylor Otwell',
            'email' => 'taylor@laravel.com',
            'password' => $password,
        ]);

        Admin::forceCreate([
            'name' => 'Mohamed Said',
            'email' => 'mohamed@laravel.com',
            'password' => $password,
        ]);

        Admin::forceCreate([
            'name' => 'David Hemphill',
            'email' => 'david@laravel.com',
            'password' => $password,
        ]);

        Admin::forceCreate([
            'name' => 'Laravel Nova',
            'email' => 'nova@laravel.com',
            'password' => $password,
        ]);
    }
}
