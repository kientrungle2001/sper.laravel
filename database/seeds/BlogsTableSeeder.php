<?php

use Illuminate\Database\Seeder;
use App\Blog;

class BlogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Blog::truncate();
        $faker = \Faker\Factory::create();
        for($i = 0; $i < 50; $i++) {
            $blog = [
                'blog_title'    => $faker->sentence,
                'blog_content'  => $faker->paragraph
            ];
            $blog['blog_alias'] = str_replace(' ', '_', $blog['blog_title']);
            $blog['blog_author'] = 'C5F84AFA-24DD-4B88-BD79-4239746338D4';
            $blog['blog_category_id'] = '0198FB52-D591-48A5-A968-3A82EFD7E9DA';
            Blog::create($blog);
        }
    }
}
