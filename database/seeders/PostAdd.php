<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use App\Models\Post;

class PostAdd extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Post::create([
            'content' => 'The not official Twitter page.',
            'image_path' => 'https://www.marketingfacts.nl/wp-content/uploads/images/imagesblog/f1b5lfuzmwvzs7nslwbn.jpg',
            'user_id' => 1,
        ]);

        Post::create([
            'content' => 'Twitter is the best social media platform! #twitter',
            'image_path' => 'https://cdn.pixabay.com/photo/2016/11/01/12/09/twitter-logo-1788039_1280.jpg',
            'user_id' => 2,
        ]);

        Post::create([
            'title' => 'BetaStar!',
            'content' => 'BetaStar will be the best company in the world!',
            'image_path' => 'https://plutuseducation.com/blog/wp-content/uploads/2024/12/image-39-e1734437710270-768x461.jpeg',
            'user_id' => 2,
        ]);
    }
}