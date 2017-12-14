<?php

use Illuminate\Database\Seeder;
use \App\courseComment;

class courseCommentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cc = new courseComment();
        $cc->course_id = 4;
        $cc->content = "komentar 1";
        $cc->save();

        $cc = new courseComment();
        $cc->course_id = 4;
        $cc->content = "komentar 2";
        $cc->save();

        $cc = new courseComment();
        $cc->course_id = 4;
        $cc->content = "komentar 3";
        $cc->save();

        $cc = new courseComment();
        $cc->course_id = 4;
        $cc->content = "komentar 4";
        $cc->save();
    }
}
