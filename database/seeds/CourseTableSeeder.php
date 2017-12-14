<?php

use Illuminate\Database\Seeder;
use \App\Course;

class CourseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //1
        $course = new Course();
        $course->name = "Zabavno-edukativna matematika";
        $course->status = "active";
        $course->level = "Osnovnoškolci";
        $course->startingDate = date('2017-06-24');
        $course->duration = 4;
        $course->capacity = 12;
        $course->media_id = 9;
        $course->teaser = "Ovde se radi o ovome";
        $course->save();

        //2
        $course = new Course();
        $course->name = "Zabavno-edukativna matematika";
        $course->status = "active";
        $course->level = "Srednjoškolci";
        $course->startingDate = date('2017-06-24');
        $course->duration = 4;
        $course->capacity = 12;
        $course->media_id = 10;
        $course->teaser = "Ovde se radi o necem drugom";
        $course->save();

        //3
        $course = new Course();
        $course->name = "Računalni laboratorij iz fizike";
        $course->status = "active";
        $course->level = "Osnovnoškolci";
        $course->startingDate = date('2017-06-24');
        $course->duration = 4;
        $course->capacity = 12;
        $course->media_id = 11;
        $course->teaser = "Da zainteresiras nekoga";
        $course->save();

        //4
        $course = new Course();
        $course->name = "Računalni laboratorij iz fizike";
        $course->status = "active";
        $course->level = "Srednjoškolci";
        $course->startingDate = date('2017-06-24');
        $course->duration = 4;
        $course->capacity = 12;
        $course->media_id = 12;
        $course->teaser = "Ovaj je drukciji od ovih";
        $course->save();

        //5
        $course = new Course();
        $course->name = "Računalstvo, Uvod u izradu igara – Javascript";
        $course->status = "active";
        $course->level = "Srednjoškolci";
        $course->startingDate = date('2017-06-24');
        $course->duration = 4;
        $course->capacity = 12;
        $course->media_id = 13;
        $course->teaser = "Ovaj ima neki svoj teaser";
        $course->save();

        //6
        $course = new Course();
        $course->name = "Računalstvo, Uvod u izradu igara";
        $course->status = "active";
        $course->level = "Osnovnoškolci";
        $course->startingDate = date('2017-06-24');
        $course->duration = 4;
        $course->capacity = 12;
        $course->media_id = 14;
        $course->teaser = "Jedna recenica je sasvim dovoljna";
        $course->save();

        //7
        $course = new Course();
        $course->name = "Elektronika – Laser tag, od čipa do zabave";
        $course->status = "active";
        $course->level = "Osnovnoškolci";
        $course->startingDate = date('2017-06-24');
        $course->duration = 4;
        $course->capacity = 12;
        $course->media_id = 15;
        $course->teaser = "Da zainteresiras nekoga";
        $course->save();

    }
}
