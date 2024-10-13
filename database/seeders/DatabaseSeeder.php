<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Image;
use App\Models\Post;
use App\Models\PostLanguage;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'role' => 1,
            'status' => 1,
            'name' => 'Fumino',
            'email' => 'richberchannel01@gmail.com',
            'password' => Hash::make('1234'),
        ]);

        // Category::create([
        //     'name' => 'Thời sự',
        //     'slug' => 'thoi-su',
        // ]);

        // Category::create([
        //     'name' => 'Thời tiết',
        //     'slug' => 'thoi-tiet',
        // ]);

        // Category::create([
        //     'name' => 'Thế giới',
        //     'slug' => 'the-gioi',
        // ]);

        // Image::create([
        //     'url' => '/userfiles/files/thaylam.jpg',
        //     'user_id' => 1,
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ]);

        // Tag::create([
        //     'name' => 'tag 1',
        //     'updated_at' => now(),
        //     'created_at' => now(),
        // ]);

        // $post = Post::create([
        //     'title' => 'Bài viết thứ nhất',
        //     'slug' => 'bai-viet-thu-nhat',
        //     'description' => 'Mô tả bài viết thứ nhất',
        //     'content' => '<p>Nội dung bài viết thứ nhất</p>',
        //     'user_id' => 1,
        //     'status' => 1,
        //     'is_promotion' => 1,
        //     'keyword' => 'Bài viết thứ nhất',
        //     'viewed' => 50,
        //     'lang' => 'vi',
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ]);

        // $post->categories()->sync(1);
        // $post->tags()->sync([1]);
        // $post->images()->create(['url' => '/userfiles/files/thaylam.jpg']);

        // $post = Post::create([
        //     'title' => 'First post',
        //     'slug' => 'first-post',
        //     'description' => 'Description of first post',
        //     'content' => '<p>Content of first post</p>',
        //     'user_id' => 1,
        //     'status' => 1,
        //     'is_promotion' => 1,
        //     'keyword' => 'First post',
        //     'viewed' => 50,
        //     'lang' => 'en',
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ]);

        // $post->categories()->sync(1);
        // $post->tags()->sync([1]);
        // $post->images()->create(['url' => '/userfiles/files/thaylam.jpg']);

        // $secondPost =  Post::create([
        //     'title' => 'Bài viết thứ hai',
        //     'slug' => 'bai-viet-thu-hai',
        //     'description' => 'Mô tả bài viết thứ hai',
        //     'content' => '<p>Nội dung bài viết thứ 2</p>',
        //     'user_id' => 1,
        //     'status' => 1,
        //     'is_promotion' => 1,
        //     'keyword' => 'Bài viết thứ hai',
        //     'lang' => 'vi',
        //     'viewed' => 100,
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ]);

        // $secondPost->categories()->sync(1);
        // $secondPost->tags()->sync([1]);
        // $secondPost->images()->create(['url' => '/userfiles/files/thaylam.jpg']);

        // $secondPost =  Post::create([
        //     'title' => 'second post',
        //     'slug' => 'second-post',
        //     'description' => 'description of second post',
        //     'content' => '<p>content of second post</p>',
        //     'user_id' => 1,
        //     'status' => 1,
        //     'is_promotion' => 1,
        //     'keyword' => 'second post',
        //     'viewed' => 100,
        //     'lang' => 'en',
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ]);

        // $secondPost->categories()->sync(1);
        // $secondPost->tags()->sync([1]);
        // $secondPost->images()->create(['url' => '/userfiles/files/thaylam.jpg']);

        // $thirdPost = Post::create([
        //     'title' => 'Bài viết thứ ba',
        //     'slug' => 'bai-viet-thu-ba',
        //     'description' => 'Mô tả bài viết thứ ba',
        //     'content' => '<p>Nội dung bài viết thứ 3</p>',
        //     'user_id' => 1,
        //     'status' => 1,
        //     'is_promotion' => 1,
        //     'keyword' => 'Bài viết thứ ba',
        //     'lang' => 'vi',
        //     'viewed' => 150,
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ]);

        // $thirdPost->categories()->sync(1);
        // $thirdPost->tags()->sync([1]);
        // $thirdPost->images()->create(['url' => '/userfiles/files/thaylam.jpg']);

        // $thirdPost->categories()->sync(1);
        // $thirdPost->tags()->sync([1]);
        // $thirdPost->images()->create(['url' => '/userfiles/files/thaylam.jpg']);

        // PostLanguage::create([
        //     'vi' => 1,
        //     'en' => 2,
        // ]);

        // PostLanguage::create([
        //     'vi' => 3,
        //     'en' => 4,
        // ]);

        // PostLanguage::create([
        //     'vi' => 5,
        //     'en' => null,
        // ]);
    }
}
