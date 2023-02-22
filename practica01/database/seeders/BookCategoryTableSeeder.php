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
        // Creamos un objeto de tipo Faker
        $faker = Faker::create();

        // Obtenemos el último id insertado en la tabla books
        $lastBookId = DB::table("books")->max("id");

        // Obtenemos el último id insertado en la tabla categories
        $lastCategoryId = DB::table("categories")->max("id");

        // Generamos 10 registros aleatorios
        for ($i = 1; $i <= 10; $i++) {

            // Obtenemos un id aleatorio de la tabla books
            $bookId = $faker->numberBetween(1, $lastBookId);

            // Generamos un número aleatorio entre 1 y 3 para determinar cuántas categorías asignar al libro actual
            $numCategories = $faker->numberBetween(1, 3);

            // Generamos registros aleatorios en la tabla pivot para el libro actual
            for ($j = 1; $j <= $numCategories; $j++) {

                // Obtenemos un id aleatorio de la tabla categories
                $categoryId = $faker->numberBetween(1, $lastCategoryId);

                // Insertamos en la tabla pivot book_category
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
