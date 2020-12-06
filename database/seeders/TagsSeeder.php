<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class TagsSeeder extends Seeder
{
    public function run()
    {
        DB::table('tags')->insert([
            'name' => 'С#',
            'url' => 'csharp',
            'description' => '.net',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('tags')->insert([
            'name' => 'PHP',
            'url' => 'php',
            'description' => 'laravel',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
