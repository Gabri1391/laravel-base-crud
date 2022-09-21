<?php

use Illuminate\Database\Seeder;
use App\Models\Comic;


class ComicTableSeader extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics = config('comics');

        foreach($comics as $comic){
            $new_comic = new Comic();
            $new_comic->title = $new_comic['title'];
            $new_comic->description = $new_comic['description'];
            $new_comic->thumb = $new_comic['thumb'];
            $new_comic->price = $new_comic['price'];
            $new_comic->series = $new_comic['series'];
            $new_comic->type = $new_comic['type'];

            $new_comic->save();
        }
    }
}
