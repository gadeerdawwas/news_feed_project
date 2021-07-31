<?php

namespace App\Providers;

use Carbon\Carbon;
use App\Models\News;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $date = Carbon::now()->format('l F d , m , Y ');
        $all_posts=Post::all();
        $all_post = Post::orderBy('id', 'desc')->skip(0)->take(5)->get();
        $post_business = Post::all()->where('category_id', 3);
        $post_fashion = Post::all()->where('category_id', 2);
        $post_technology = Post::all()->where('category_id', 4);
        $post_game = Post::all()->where('category_id', 5);
        // return $post_business;
        $posts = Post::skip(0)->take(4)->get();
        $popular_posts = Post::orderBy('views', 'desc')->skip(0)->take(7)->get();
        $news = News::orderBy('id', 'desc')->get();
        $categoreies = Category::all();
        view()->share('date', $date);
        View::share([ 'posts' => $posts,
        'all_posts'=> $all_posts ,
        'all_post' => $all_post,
        'popular_posts' => $popular_posts,
        'news' => $news,
        'categoreies' => $categoreies,
        'post_business' => $post_business,
        'post_fashion' => $post_fashion,
        'post_technology' => $post_technology,
        'post_game' =>$post_game]);
    }
}
