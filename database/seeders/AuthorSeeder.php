<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Author::create(['name' => 'Anne', 'birthdate' => '1980-01-01']);
        Author::create(['name' => 'Betty', 'birthdate' => '1985-02-02']);
        Author::create(['name' => 'Charlie', 'birthdate' => '1990-03-03']);
        Author::create(['name' => 'Dilan', 'birthdate' => '1975-04-04']);
        Author::create(['name' => 'Ethan', 'birthdate' => '1982-05-05']);
    }
}
