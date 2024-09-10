<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $genres = [
            'Musical','Animation','Family','Sport',
            'Mystery','Thriller','War','Drama',
            'Horror','Sci-Fi','Crime','Western',
            'Action','Sport','Documentary','Comedy'
        ];

        foreach ($genres as $listGenre) {
            Genre::query()->updateOrCreate([
                'name' => $listGenre,
            ]);
        }
    }
}
