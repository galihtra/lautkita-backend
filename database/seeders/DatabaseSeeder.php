<?php

namespace Database\Seeders;

use App\Models\CategoryPost;
use App\Models\OrderItem;
use App\Models\Post;
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
        \App\Models\Category::factory(5)->create();
        \App\Models\Banner::factory(5)->create();

        // Uncomment the following lines if you want to create a test user
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            UserSeeder::class,
            ProductSeeder::class,
            OrderSeeder::class,
            OrderItemSeeder::class,
            CampaignSeeder::class,
        ]);

        Post::create([
            'title' => "Judul Pertama",
            'category_id' => 1,
            'user_id' => 23,
            'image' => "/storage/post-images/QA1QXB83FXQk9bm7dEmkhXtINF7t2Y0pwUC8PRNs.jpg",
            'slug' => "judul-pertama",
            'excerpt' => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quo, dolore.",
            'body' => "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium alias error ad placeat hic dolore ipsa natus, quia libero veritatis.</p><p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veritatis recusandae nobis itaque enim deleniti quibusdam at est iste impedit natus!</p><p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Exercitationem earum quasi fuga? Est ad sed cum. Debitis, suscipit fugit. Fuga.</p>"
        ]);


        CategoryPost::create([
            'name' => 'cinta laut',
            'slug' => 'cinta-laut'
        ]);
    }
}
