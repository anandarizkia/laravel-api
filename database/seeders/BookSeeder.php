<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Author;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $authors = Author::all();

        $genres = ['Fiction', 'Non-Fiction', 'Mystery', 'Science Fiction', 'Fantasy', 'Biography'];

        for ($i=1; $i <= 10; $i++) { 
            Book::create([
                'title' => 'Book Title'. $i,
                'author_id' => $authors->random()->id,
                'published_year' => rand(2000,2023),
            ]);
        }
    }
}