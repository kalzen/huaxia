<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\PostLanguage;
use App\Models\Tag;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index()
    {
        // $categories = Category::orderBy('name', 'asc')->get();
        // $featured_posts = Post::active()->orderBy('viewed', 'desc')->paginate();
        $lang =  App::getLocale();
        $posts = Post::active($lang)->paginate();

        $services = Post::whereHas('categories', function ($query) {
            $query->where('category_post.category_id', 1);
        })->get();
        
        return view('post.index', compact('posts', 'services'));
    }

    public function detail($alias)
    {
        $lang =  App::getLocale();
        $post = Post::active()->where('slug', $alias)->first();
        $post_id = 0;
        $otherLang = $lang == 'vi' ? 'en' : 'vi';

        $languageRelation = 'Language_' . $otherLang;

        if ($post->lang != $lang) {
            $post_id = $post->$languageRelation->$lang;
        }

        if ($post_id) {
            $post = Post::active()->where('id', $post_id)->first();
        }

        $categoryId = Category::where('lang', $lang)->get()->pluck('id');
        $services = Post::where('lang', $lang)->whereHas('categories', function ($query) use ($categoryId) {
            $query->where('category_post.category_id', $categoryId);
        })->get();
        $services->load('images');
        DB::table('posts')->where('id', $post->id)->increment('viewed');
        $categories = Category::orderBy('name', 'asc')->whereNull('parent_id')->limit(8)->get();
        $most_view = Post::active($lang)->orderBy('id', 'desc')->limit(5)->get();
        $tags = Tag::limit(5)->get();

        if ($post_id) {
            return redirect()->route('post.detail', ['alias' => $post->slug]);
        }
        return view('post.detail', compact('post', 'categories', 'most_view', 'tags', 'services'));
    }

    public function category($alias)
    {
        $categories = Category::orderBy('name', 'asc')->get();
        $category = Category::where('slug', $alias)->firstOrFail();
        if ($category->parent_id != '0') {
            $category_parent = Category::find($category->parent_id);
        }
        $posts = $category->posts()->active()->orderBy('id', 'desc')->paginate();
        $featured_posts = Post::active()->orderBy('id', 'desc')->paginate();
        return view('post.index', compact('category', 'posts', 'categories', 'featured_posts', 'category_parent'));
    }

    public function search()
    {
        $featured_posts = Post::active()->orderBy('viewed', 'desc')->paginate();
        $categories = Category::orderBy('name', 'asc')->get();
        $query = Post::latest()->active()->with(['tags', 'images']);
        $posts = $query->where(function ($p) {
            $p->where('title', 'like', '%' . request('keyword') . '%')
                ->orWhereHas('categories', function ($q) {
                    $q->where('name', 'like', '%' . request('keyword') . '%');
                });
        })->paginate();
        return view('post.index', compact('posts', 'categories', 'featured_posts'));
    }
}
