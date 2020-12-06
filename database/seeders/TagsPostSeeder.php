<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagsPostSeeder extends Seeder
{

    public function run()
    {
        DB::table('tags_posts')->insert([
            "id_tag" => 1,
            "id_post" => 1
        ]);
    }
}
