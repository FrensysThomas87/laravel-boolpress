<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Author;
use App\AuthorDetail;
use App\Post;




class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 20; $i++){
            $author = new Author();
            $author->name = $faker->firstName();
            $author->surname = $faker->lastName();
            $author->save();

            $authorDetail = new AuthorDetail();
            $authorDetail->email_adress = $faker->email();
            $authorDetail->pic =  'https://picsum.photos/seed/' . rand(0,1000) . '/200/300';
            $author->detail()->save($authorDetail);

            for($y = 0; $y < rand(2,5); $y++){
                $post = new Post();
                $post->tilte = $faker->text(20);
                $post->text = $faker->text(1000);
                $author->posts()->save($post);




            }
        }
    }
}
