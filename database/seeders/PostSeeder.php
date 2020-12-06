<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    public function run()
    {
        DB::table('posts')->insert([
            'title' => "Programming",
            'description_short' => 'new post about programming',
            'description' => "new post about programming with modern programming languages",
            'url' => "programming",
            "is_published" => true,
            "id_category" => 1
        ]);
    }
}