<?php

use Illuminate\Database\Seeder;

use App\Tag;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = ['sport', 'film', 'serie-tv', 'cronaca', 'tecnologia', 'scienza'];

        foreach($tags as $tag){
            $tagDB = new Tag();
            $tagDB->tag_name = $tag;
            $tagDB->save();
        }
    }
}
