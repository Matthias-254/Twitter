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
            'title' => 'Welcome to Twitter!',
            'content' => 'The not official Twitter page.',
            'image_path' => 'https://www.marketingfacts.nl/wp-content/uploads/images/imagesblog/f1b5lfuzmwvzs7nslwbn.jpg',
        ]);
    }
}