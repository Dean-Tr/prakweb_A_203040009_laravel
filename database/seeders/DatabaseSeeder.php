<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {


        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //     'name' => 'Dean Tirta',
        //     'email' => 'deantirtas@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Jhdksa',
        //     'email' => 'jhdksa@gmail.com',
        //     'password' => bcrypt('54321')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web programming',
            'slug' => 'web-programming'
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
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quibusdam laudantium odit minus modi, inventore repellat accusantium accusamus? Ipsa autem expedita laboriosam omnis neque iusto repellat, dolorem sed facilis dolore exercitationem vel similique accusantium consequuntur recusandae ducimus natus. Temporibus hic placeat laborum aliquam adipisci velit maxime blanditiis sed molestiae a nulla tempore reiciendis magnam quas enim, obcaecati amet! Accusantium atque iusto eius quia aspernatur in dolore. Deleniti, consequuntur iure alias nesciunt est dolore facilis illo, maxime corrupti pariatur molestiae assumenda iste qui, nam esse atque ipsam libero debitis ipsum saepe minus. Sit distinctio molestiae itaque voluptatem minus praesentium, corporis modi quasi?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quibusdam laudantium odit minus modi, inventore repellat accusantium accusamus? Ipsa autem expedita laboriosam omnis neque iusto repellat, dolorem sed facilis dolore exercitationem vel similique accusantium consequuntur recusandae ducimus natus. Temporibus hic placeat laborum aliquam adipisci velit maxime blanditiis sed molestiae a nulla tempore reiciendis magnam quas enim, obcaecati amet! Accusantium atque iusto eius quia aspernatur in dolore. Deleniti, consequuntur iure alias nesciunt est dolore facilis illo, maxime corrupti pariatur molestiae assumenda iste qui, nam esse atque ipsam libero debitis ipsum saepe minus. Sit distinctio molestiae itaque voluptatem minus praesentium, corporis modi quasi?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quibusdam laudantium odit minus modi, inventore repellat accusantium accusamus? Ipsa autem expedita laboriosam omnis neque iusto repellat, dolorem sed facilis dolore exercitationem vel similique accusantium consequuntur recusandae ducimus natus. Temporibus hic placeat laborum aliquam adipisci velit maxime blanditiis sed molestiae a nulla tempore reiciendis magnam quas enim, obcaecati amet! Accusantium atque iusto eius quia aspernatur in dolore. Deleniti, consequuntur iure alias nesciunt est dolore facilis illo, maxime corrupti pariatur molestiae assumenda iste qui, nam esse atque ipsam libero debitis ipsum saepe minus. Sit distinctio molestiae itaque voluptatem minus praesentium, corporis modi quasi?',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quibusdam laudantium odit minus modi, inventore repellat accusantium accusamus? Ipsa autem expedita laboriosam omnis neque iusto repellat, dolorem sed facilis dolore exercitationem vel similique accusantium consequuntur recusandae ducimus natus. Temporibus hic placeat laborum aliquam adipisci velit maxime blanditiis sed molestiae a nulla tempore reiciendis magnam quas enim, obcaecati amet! Accusantium atque iusto eius quia aspernatur in dolore. Deleniti, consequuntur iure alias nesciunt est dolore facilis illo, maxime corrupti pariatur molestiae assumenda iste qui, nam esse atque ipsam libero debitis ipsum saepe minus. Sit distinctio molestiae itaque voluptatem minus praesentium, corporis modi quasi?',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
