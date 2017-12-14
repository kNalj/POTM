<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolesTableSeeder::class);
        $this->call(MediaTableSeeder::class);
        $this->call(CourseTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(PostsTableSeeder::class);
        $this->call(postContentsTableSeeder::class);
        $this->call(courseContentsSeeder::class);
        $this->call(AttendeesSeeder::class);
        $this->call(postCommentsSeeder::class);
        $this->call(courseCommentsSeeder::class);
    }
}
