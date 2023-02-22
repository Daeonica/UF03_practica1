<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;


class BookCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //creamos el objeto faker para poder acceder a sus funciones
        $faker = Faker::create();
        $lastBookId = DB::table("books")->max("id");

        //obtenemos el último id insertado en la tabla categories
        $lastCategoryId = DB::table("categories")->max("id");

        //generamos 10 registros aleatorios
        for ($i = 1; $i <= 10; $i++) {

            //obtenemos un id aleatorio de la tabla books
            $bookId = $faker->numberBetween(1, $lastBookId);

            //generamos un número aleatorio entre 1 y 3 para determinar cuántas categorías asignar al libro actual
            $numCategories = $faker->numberBetween(1, 3);

            for ($j = 1; $j <= $numCategories; $j++) {

                $categoryId = $faker->numberBetween(1, $lastCategoryId);

                //insertamos en la tabla pivot book_category
                DB::table("book_category")->insert(
                    [
                        "book_id" => $bookId,
                        "category_id" => $categoryId,
                        "created_at" => now(),
                        "updated_at" => now(),
                    ]
                );
            }
        }
    }
}
