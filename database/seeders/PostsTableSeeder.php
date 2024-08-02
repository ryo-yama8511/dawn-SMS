<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            [
                'post' => '1つ目の投稿になります',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'post' => 'Laravelの投稿ページを作りました',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
