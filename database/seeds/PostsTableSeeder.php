<?php

use Illuminate\Database\Seeder;
use \App\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $post = new Post();
        $post->title = "Naslov prvog seed posta";
        $post->user_id = 1;
        $post->media_id = 1;
        $post->teaser = "Novi najbolji tecaj";
        $post->save();

        $post = new Post();
        $post->title = "Naslov drugog seed posta";
        $post->user_id = 1;
        $post->media_id = 2;
        $post->teaser = "Bolji od najboljeg";
        $post->save();

        $post = new Post();
        $post->title = "Naslov treceg seed posta";
        $post->user_id = 1;
        $post->media_id = 3;
        $post->teaser = "Naj najbolji";
        $post->save();

        $post = new Post();
        $post->title = "Naslov cetvrtog seed posta";
        $post->user_id = 1;
        $post->media_id = 4;
        $post->teaser = "Neprikosnoven";
        $post->save();
    }
}
