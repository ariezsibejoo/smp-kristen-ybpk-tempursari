<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Staff;
use App\Models\Galery;
use App\Models\Murids;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Natanael Dewanto',
            'username' => 'natanael',
            'email' => 'natanael@gmail.com',
            'password' => bcrypt('password'),
            'is_admin' => 1
        ]);

        User::create([
            'name' => 'admin1',
            'username' => 'admin1',
            'email' => 'admin1@gmail.com',
            'password' => bcrypt('password'),
            'is_admin' => 0
        ]);


        // User::create([
        //     'name' => 'Bejo Sujojo',
        //     'email' => 'bejo@gmail.com',
        //     'password' => bcrypt('password')
        // ]);

        User::factory(7)->create();


        Category::create([
            'name' => 'Pengumuman',
            'slug' => 'pengumuman'
        ]);

        Category::create([
            'name' => 'Prestasi',
            'slug' => 'prestasi'
        ]);

        Category::create([
            'name' => 'Ekstrakurikuler',
            'slug' => 'ekstrakurikuler'
        ]);

        Post::factory(20)->create();

        Staff::factory(20)->create();

        Galery::factory(20)->create();

        Murids::factory(20)->create();
    }
}
