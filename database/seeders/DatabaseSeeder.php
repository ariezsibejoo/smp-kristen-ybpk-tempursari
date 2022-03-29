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

        Post::create([
            'title' => 'Judul pertama',
            'slug' => 'judul-pertama',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa dolore aspernatur',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa dolore aspernatur rerum totam recusandae impedit sapiente odit provident molestiae beatae dignissimos asperiores mollitia eum, aliquam, incidunt natus et. Harum soluta iure amet cum ratione vitae eum delectus accusantium asperiores ullam. Voluptatibus amet natus quos nobis excepturi, saepe accusamus dolorum aspernatur error laudantium, impedit odio a veniam sed labore reprehenderit cumque adipisci assumenda ut sit modi dolor. Fugit, ab! At, sequi asperiores? Tenetur impedit ex consequuntur animi magni enim et, error, autem quasi est suscipit sit fuga rerum iusto qui! Omnis reiciendis sapiente corrupti nisi asperiores voluptatum facere dicta fugiat saepe.',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul 2',
            'slug' => 'judul-2',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa dolore aspernatur',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa dolore aspernatur rerum totam recusandae impedit sapiente odit provident molestiae beatae dignissimos asperiores mollitia eum, aliquam, incidunt natus et. Harum soluta iure amet cum ratione vitae eum delectus accusantium asperiores ullam. Voluptatibus amet natus quos nobis excepturi, saepe accusamus dolorum aspernatur error laudantium, impedit odio a veniam sed labore reprehenderit cumque adipisci assumenda ut sit modi dolor. Fugit, ab! At, sequi asperiores? Tenetur impedit ex consequuntur animi magni enim et, error, autem quasi est suscipit sit fuga rerum iusto qui! Omnis reiciendis sapiente corrupti nisi asperiores voluptatum facere dicta fugiat saepe.',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul 3',
            'slug' => 'judul-3',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa dolore aspernatur',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa dolore aspernatur rerum totam recusandae impedit sapiente odit provident molestiae beatae dignissimos asperiores mollitia eum, aliquam, incidunt natus et. Harum soluta iure amet cum ratione vitae eum delectus accusantium asperiores ullam. Voluptatibus amet natus quos nobis excepturi, saepe accusamus dolorum aspernatur error laudantium, impedit odio a veniam sed labore reprehenderit cumque adipisci assumenda ut sit modi dolor. Fugit, ab! At, sequi asperiores? Tenetur impedit ex consequuntur animi magni enim et, error, autem quasi est suscipit sit fuga rerum iusto qui! Omnis reiciendis sapiente corrupti nisi asperiores voluptatum facere dicta fugiat saepe.',
            'category_id' => 2,
            'user_id' => 2
        ]);
    }
}
