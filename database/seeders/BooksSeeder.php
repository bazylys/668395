<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\BookStore;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bookStores = BookStore::factory()
            ->count(100)
            ->create();

        $books = Book::factory()
            ->count(1000)
            ->create();

        $counter = 0;

        foreach ($bookStores as $store) {
            $rand = rand(5, 15);

            $arrayBooks = $books->slice($counter, $rand);
            foreach ($arrayBooks as $book) {

                $store->books()->attach($book, ['count' => rand(5, 20)]);
            }
            $counter += $rand;
        }

    }
}
