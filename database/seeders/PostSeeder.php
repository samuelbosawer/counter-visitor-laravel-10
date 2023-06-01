<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;


class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $post = Post::create([
            'title' => 'Lorem ipsum dolor sit amet consectetur adipisicing.',
            'desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam impedit magni, minima perferendis quod dicta. Aperiam iusto cupiditate rem error!',
        ]);
        $post = Post::create([
            'title' => 'Lorem ipsum dolor sit amet consectetur adipisicing.',
            'desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam impedit magni, minima perferendis quod dicta. Aperiam iusto cupiditate rem error!',
        ]);
        $post = Post::create([
            'title' => 'Lorem ipsum dolor sit amet consectetur adipisicing.',
            'desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam impedit magni, minima perferendis quod dicta. Aperiam iusto cupiditate rem error!',
        ]);
         $post = Post::create([
            'title' => 'Lorem ipsum dolor sit amet consectetur adipisicing.',
            'desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam impedit magni, minima perferendis quod dicta. Aperiam iusto cupiditate rem error!',
        ]);
    }
}
