<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenreTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genres')->insert([
            ['genre_name'=> "Horror"],
            ['genre_name'=> "Drama"],
            ['genre_name'=> "Action"],
            ['genre_name'=> "History"],
            ['genre_name'=> "War"],
            ['genre_name'=> "Detective"]
        ]);
    }
}
