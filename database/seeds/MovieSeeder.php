<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movies')->insert([
            [
                'movie_name'=> 'Tenet ',
                'movie_description' => 'Armed with only one word, Tenet, and fighting for the survival of the entire world, a Protagonist journeys through a twilight world of international espionage on a mission that will unfold in something beyond real time.',
                'year' => 2020,
                'director_name' => 'Christopher Nolan',
                'imdb_link' => 'https://www.imdb.com/title/tt6723592/?ref_=nv_sr_srsg_0',
                'imdb_rating' => 8.0
            ],
            [
                'name'=> 'Dil Bechara',
                'movie_description' => 'The emotional journey of two hopelessly in love youngsters, a young girl, Kizie, suffering from cancer, and a boy, Manny, whom she meets at a support group.',
                'year' => 2020,
                'director_name' => 'Mukesh Chhabra',
                'imdb_link' => 'https://www.imdb.com/title/tt8110330/?ref_=fn_al_tt_1',
                'imdb_rating' => 8.9
            ],
            [
                'name'=> 'Joker',
                'movie_description' => 'In Gotham City, mentally troubled comedian Arthur Fleck is disregarded and mistreated by society. He then embarks on a downward spiral of revolution and bloody crime. This path brings him face-to-face with his alter-ego: the Joker.',
                'year' => 2019,
                'director_name' => 'Todd Phillips',
                'imdb_link' => 'https://www.imdb.com/title/tt7286456/?ref_=fn_al_tt_1',
                'imdb_rating' => 8.5
            ],
            [
                'name'=> 'Khuda Haafiz',
                'movie_description' => "A newly married couple's life falls in jeopardy when the wife goes missing under mysterious circumstances.",
                'year' => 2020,
                'director_name' => 'Faruk Kabir',
                'imdb_link' => 'https://www.imdb.com/title/tt7363104/?ref_=nv_sr_srsg_0',
                'imdb_rating' => 7.4
            ],
            [
                'name'=> 'Inception',
                'movie_description' => 'A thief who steals corporate secrets through the use of dream-sharing technology is given the inverse task of planting an idea into the mind of a C.E.O.',
                'year' => 2010,
                'director_name' => 'Christopher Nolan',
                'imdb_link' => 'https://www.imdb.com/title/tt1375666/?ref_=nv_sr_srsg_0',
                'imdb_rating' => 8.8
            ],
            [
                'name'=> 'Knives Out',
                'movie_description' => 'A detective investigates the death of a patriarch of an eccentric, combative family.',
                'year' => 2019,
                'director_name' => 'Rian Johnson',
                'imdb_link' => 'https://www.imdb.com/title/tt8946378/?ref_=nv_sr_srsg_0',
                'imdb_rating' => 7.9
            ],
            [
                'name'=> 'The Umbrella Academy',
                'movie_description' => 'A family of former child heroes, now grown apart, must reunite to continue to protect the world.',
                'year' => 2019,
                'director_name' => 'Steve Blackman',
                'imdb_link' => 'https://www.imdb.com/title/tt1312171/?ref_=nv_sr_srsg_0',
                'imdb_rating' => 8.0
            ],
            [
                'name'=> 'Gisaengchung',
                'movie_description' => 'Greed and class discrimination threaten the newly formed symbiotic relationship between the wealthy Park family and the destitute Kim clan. ',
                'year' => 2019,
                'director_name' => 'Bong Joon Ho',
                'imdb_link' => 'https://www.imdb.com/title/tt6751668/?ref_=fn_al_tt_1',
                'imdb_rating' => 8.6
            ],
            [
                'name'=> 'Interstellar',
                'movie_description' => 'Armed with only one word, Tenet, and fighting for the survival of the entire world, a Protagonist journeys through a twilight world of international espionage on a mission that will unfold in something beyond real time.',
                'year' => 2014,
                'director_name' => 'Christopher Nolan',
                'imdb_link' => 'https://www.imdb.com/title/tt0816692/?ref_=nv_sr_srsg_0',
                'imdb_rating' => 8.6
            ],
            [
                'name'=> 'The Dark Knight',
                'movie_description' => 'When the menace known as the Joker wreaks havoc and chaos on the people of Gotham, Batman must accept one of the greatest psychological and physical tests of his ability to fight injustice.',
                'year' => 2008,
                'director_name' => 'Christopher Nolan',
                'imdb_link' => 'https://www.imdb.com/title/tt0468569/?ref_=fn_al_tt_1',
                'imdb_rating' => 9.0
            ]

        ]);
    }
}
