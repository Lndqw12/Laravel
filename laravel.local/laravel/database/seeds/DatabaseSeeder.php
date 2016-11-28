<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        // $this->call('UsersTableSeeder');
         $this->call('PostsSeeder');
    }
}
class PostsSeeder extends Seeder
{

    public function run()
    {
        DB::table('Posts')->delete();
        Post::create([
            'title' => 'First Post',
            'slug' => 'First Post',
            'except' => '<b>First Post',
            'content' => '<b>Content Post',
            'published' => true,
            'published_at' => DB::rav('CURRENT_TIMESTAMP'),
        ]);

        Post::create([
            'title' => 'Second Post',
            'slug' => 'second-post',
            'excerpt' => '<b>Second Post body </b>',
            'content' => '<b>Content Second Post body</b>',
            'published' => false,
            'published_at' => DB::rav('CURRENT_TIMESTAMP'),
        ]);
        Post::create([
            'title' => 'Third Post',
            'slug' => 'third-post',
            'excerpt' => '<b>Third Post body</b>',
            'content' => '<b>Content Third Post body</b>',
            'published' => flase,
            'published_at' => DB::rav('CURRENT_TIMESTAMP'),
        ]);
    }
}