<?php

namespace Database\Seeders;

use App\Models\Comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comicArray = config('comics');
        foreach ($comicArray as $comic) {
            $newComic = new Comic();
            $newComic->title = $comic['title'];
            $newComic->series = $comic['series'];
            $newComic->thumb = $comic['thumb'];
            $newComic->price = $comic['price'];
            $newComic->type = $comic['type'];
            $newComic->save();
        }
    }
}
