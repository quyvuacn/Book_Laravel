<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('authors')->insert([
            [
                "authorid"=>1,
                "authorname"=>"J.R.R. Tolkien"
            ],
            [
                "authorid"=>2,
                "authorname"=>"Alex Haley"
            ],
            [
                "authorid"=>3,
                "authorname"=>"Tom Clancy"
            ],
            [
                "authorid"=>4,
                "authorname"=>"Isaac Asimov"
            ]
        ]);

        DB::table('books')->insert([
            [
                "bookid"=> 1,
                "authorid"=> 1,
                "title"=> "The Two Towers",
                "ISBN"=> "0-261-10236-2",
                "pub_year"=> 1954,
                "available"=> 1,
            ],
            [
                "bookid"=> 2,
                "authorid"=> 1,
                "title"=> "The Return of the King",
                "ISBN"=> "0-261-10237-0",
                "pub_year"=> 1955,
                "available"=> 1,
            ],
            [
                "bookid"=> 3,
                "authorid"=> 2,
                "title"=> "Roots",
                "ISBN"=> "0-440-17464-3",
                "pub_year"=> 1974,
                "available"=> 1,
            ],
            [
                "bookid"=> 4,
                "authorid"=> 3,
                "title"=> "Rainbow Six",
                "ISBN"=> "0-425-17034-9",
                "pub_year"=> 1974,
                "available"=> 1,
            ],
            [
                "bookid"=> 5,
                "authorid"=> 3,
                "title"=> "Teeth of the Tiger",
                "ISBN"=> "0-399-15079-4",
                "pub_year"=> 2003,
                "available"=> 1,
            ],
            [
                "bookid"=> 6,
                "authorid"=> 1,
                "title"=> "The Hobbit",
                "ISBN"=> "0-261-10221-4",
                "pub_year"=> 1937,
                "available"=> 1
            ]


        ]);
    }
}
