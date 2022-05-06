<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        
        // User::create([
            //     'name' => 'Efendi',
            //     'email' => 'efendi@gmail.com',
            //     'password' => bcrypt('12345')
            // ]);
            
            
        // User::create([
        //     'name' => 'Dhika',
        //     'email' => 'dika@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);
        User::factory(5)->create();
        
        Category::create([
            'name' => 'Programming',
            'slug' => 'programming'
        ]);
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);
        
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);
        
        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul 1',
        //     'slug' => 'judul-1',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laudantium molestias expedita qui porro aliquid quibusdam nemo similique libero eum, aspernatur iusto modi, vitae tenetur tempora cumque quasi et ex quos molestiae voluptatibus sint delectus debitis quo.',
        //     'body' => '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laudantium molestias expedita qui porro aliquid quibusdam nemo similique libero eum, aspernatur iusto modi, vitae tenetur tempora cumque quasi et ex quos molestiae voluptatibus sint delectus debitis quo. </p><p>Animi beatae quisquam quo doloremque harum, inventore itaque quibusdam nisi quam totam soluta culpa molestiae explicabo nesciunt unde nam distinctio impedit ipsam esse! Fugit corporis molestias ut animi obcaecati saepe, quasi doloremque ipsa odit autem consequatur perspiciatis nam officiis facere suscipit vero fuga laborum impedit quo perferendis similique nobis necessitatibus sint. Temporibus iure repellat libero repudiandae error facere, veritatis harum asperiores, consequatur magnam illo?</p>'
        // ]);
        
        // Post::create([
        //     'title' => 'Judul 2',
        //     'slug' => 'judul-2',
        //     'category_id' => 2,
        //     'user_id' => 2,
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laudantium molestias expedita qui porro aliquid quibusdam nemo similique libero eum, aspernatur iusto modi, vitae tenetur tempora cumque quasi et ex quos molestiae voluptatibus sint delectus debitis quo.',
        //     'body' => '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laudantium molestias expedita qui porro aliquid quibusdam nemo similique libero eum, aspernatur iusto modi, vitae tenetur tempora cumque quasi et ex quos molestiae voluptatibus sint delectus debitis quo. </p><p>Animi beatae quisquam quo doloremque harum, inventore itaque quibusdam nisi quam totam soluta culpa molestiae explicabo nesciunt unde nam distinctio impedit ipsam esse! Fugit corporis molestias ut animi obcaecati saepe, quasi doloremque ipsa odit autem consequatur perspiciatis nam officiis facere suscipit vero fuga laborum impedit quo perferendis similique nobis necessitatibus sint. Temporibus iure repellat libero repudiandae error facere, veritatis harum asperiores, consequatur magnam illo?</p>'
        // ]);
        // Post::create([
        //     'title' => 'Judul 3',
        //     'slug' => 'judul-3',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laudantium molestias expedita qui porro aliquid quibusdam nemo similique libero eum, aspernatur iusto modi, vitae tenetur tempora cumque quasi et ex quos molestiae voluptatibus sint delectus debitis quo.',
        //     'body' => '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laudantium molestias expedita qui porro aliquid quibusdam nemo similique libero eum, aspernatur iusto modi, vitae tenetur tempora cumque quasi et ex quos molestiae voluptatibus sint delectus debitis quo. </p><p>Animi beatae quisquam quo doloremque harum, inventore itaque quibusdam nisi quam totam soluta culpa molestiae explicabo nesciunt unde nam distinctio impedit ipsam esse! Fugit corporis molestias ut animi obcaecati saepe, quasi doloremque ipsa odit autem consequatur perspiciatis nam officiis facere suscipit vero fuga laborum impedit quo perferendis similique nobis necessitatibus sint. Temporibus iure repellat libero repudiandae error facere, veritatis harum asperiores, consequatur magnam illo?</p>'
        // ]);

    }
}
