<?php

use Illuminate\Database\Seeder;
use \App\Media;

class MediaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $img = new Media();
        $img->isPartOfGallery = 0;
        $img->path = "img/post/blog-1.jpg";
        $img->pathToThumb = "img/post/blog-featured-01.jpg";
        $img->post_id = 1;
        $img->save();

        $img = new Media();
        $img->isPartOfGallery = 0;
        $img->pathToThumb = "img/post/blog-featured-02.jpg";
        $img->path = "img/post/blog-2.jpg";
        $img->post_id = 2;
        $img->save();

        $img = new Media();
        $img->isPartOfGallery = 0;
        $img->path = "img/post/blog-3.jpg";
        $img->pathToThumb = "img/post/blog-featured-03.jpg";
        $img->post_id = 3;
        $img->save();

        $img = new Media();
        $img->isPartOfGallery = 0;
        $img->pathToThumb = "img/post/blog-featured-04.jpg";
        $img->path = "img/post/blog-4.jpg";
        $img->post_id = 4;
        $img->save();

        ////gallery images////

        $img = new Media();
        $img->isPartOfGallery = 1;
        $img->pathToThumb = "img/gallery/rsz_23695_pets_vertical_store_dogs_small_tile_8_cb312176604_.jpg";
        $img->path = "img/gallery/23695_pets_vertical_store_dogs_small_tile_8._CB312176604_.jpg";
        $img->save();

        $img = new Media();
        $img->isPartOfGallery = 1;
        $img->pathToThumb = "img/gallery/rsz_23695_pets_vertical_store_dogs_small_tile_8_cb312176604_.jpg";
        $img->path = "img/gallery/23695_pets_vertical_store_dogs_small_tile_8._CB312176604_.jpg";
        $img->save();

        $img = new Media();
        $img->isPartOfGallery = 1;
        $img->pathToThumb = "img/gallery/rsz_23695_pets_vertical_store_dogs_small_tile_8_cb312176604_.jpg";
        $img->path = "img/gallery/23695_pets_vertical_store_dogs_small_tile_8._CB312176604_.jpg";
        $img->save();

        $img = new Media();
        $img->isPartOfGallery = 1;
        $img->pathToThumb = "img/gallery/rsz_23695_pets_vertical_store_dogs_small_tile_8_cb312176604_.jpg";
        $img->path = "img/gallery/23695_pets_vertical_store_dogs_small_tile_8._CB312176604_.jpg";
        $img->save();

        ////course images////

        $img = new Media();
        $img->isPartOfGallery = 0;
        $img->path = "img/course/rsz_mathkids.jpg";
        $img->pathToThumb = "";
        $img->course_id = 1;
        $img->save();
        //9

        $img = new Media();
        $img->isPartOfGallery = 0;
        $img->pathToThumb = "";
        $img->path = "img/course/rsz_mathadvanced.png";
        $img->course_id = 2;
        $img->save();
        //10

        $img = new Media();
        $img->isPartOfGallery = 0;
        $img->path = "img/course/rsz_mathkids.jpg";
        $img->pathToThumb = "";
        $img->course_id = 3;
        $img->save();
        //11

        $img = new Media();
        $img->isPartOfGallery = 0;
        $img->path = "img/course/rsz_physadvanced.png";
        $img->pathToThumb = "";
        $img->course_id = 4;
        $img->save();
        //12

        $img = new Media();
        $img->isPartOfGallery = 0;
        $img->pathToThumb = "";
        $img->path = "img/course/prog.jpg";
        $img->course_id = 5;
        $img->save();
        //13

        $img = new Media();
        $img->isPartOfGallery = 0;
        $img->pathToThumb = "";
        $img->path = "img/course/prog.jpg";
        $img->course_id = 6;
        $img->save();
        //14

        $img = new Media();
        $img->isPartOfGallery = 0;
        $img->path = "img/course/rsz_laser-tag.jpg";
        $img->pathToThumb = "";
        $img->course_id = 7;
        $img->save();
        //15
    }
}
