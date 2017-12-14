<?php

use Illuminate\Database\Seeder;
use \App\postComment;

class postCommentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pc = new postComment();
        $pc->post_id = 4;
        $pc->content = "komentar 1";
        $pc->save();

        $pc = new postComment();
        $pc->post_id = 4;
        $pc->content = "komentar 2";
        $pc->save();

        $pc = new postComment();
        $pc->post_id = 4;
        $pc->content = "komentar 3";
        $pc->save();

        $pc = new postComment();
        $pc->post_id = 4;
        $pc->content = "komentar 4";
        $pc->save();
    }
}
