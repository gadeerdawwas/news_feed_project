<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\News;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $all_post = Post::all();
        // $post_business = Post::all()->where('category_id',3);
        // $post_fashion = Post::all()->where('category_id',2);
        // $post_technology = Post::all()->where('category_id',4);
        // $post_game = Post::all()->where('category_id',5);
        // // return $post_business;
        // $posts = Post::skip(0)->take(4)->get();
        // $popular_posts = Post::orderBy('views', 'desc')->get();
        // $news = News::orderBy('id', 'desc')->get();
        // $categoreies = Category::all();
        // // return $news;
        // return view('Home.index', compact(
        //     'posts',
        //     $posts,
        //     'all_post',
        //     $all_post,
        //     'popular_posts',
        //     $popular_posts,
        //     'news',
        //     $news ,
        //     'categoreies',
        //     $categoreies ,
        //     'post_business',
        //     $post_business,
        //     'post_fashion',
        //     $post_fashion,
        //     'post_technology',
        //     $post_technology ,
        //     'post_game' ,
        //     $post_game

        // ));
        return view('Home.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
