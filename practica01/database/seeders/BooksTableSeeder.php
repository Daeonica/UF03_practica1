<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;


class BooksTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();
        //con la funcion max conseguimos el ultimo id
        $lastInsertedId = DB::table('books')->max('id');

        for ($i = $lastInsertedId; $i < $lastInsertedId + 10; $i++) {
            DB::table('books')->insert([
                'isbn' => $faker->unique()->isbn13,
                'title' => $faker->sentence(4),
                'author' => $faker->name,
                'description' => $faker->paragraph,
                'price' => $faker->randomFloat(2, 10, 100),
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}