<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('dashboard');
    }
    public function allpost()
    {

        return view('auth.allpost');
    }
    public function createpost()
    {
        return view('auth.createpost');
    }
    public function save_post(Request $request)
    {
        // return $request;
        $post = $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'required',
            'image_icon' => 'required',
        ]);

        $image_Ex = $request->file('image')->getClientOriginalExtension();
        $image_name = rand() . '_' . rand() . '_' . rand() . '_' . $image_Ex;
        $request->file('image')->move(public_path('images'), $image_name);


        $image_Ex_icon = $request->file('image_icon')->getClientOriginalExtension();
        $image_name_icon = rand()  . '_' . rand() . '_' . $image_Ex_icon;
        $request->file('image_icon')->move(public_path('images'), $image_name_icon);

        // return 'images/' . $image_name_icon;

        Post::create([
            'title'   => $request->title,
            'image'   => 'images/' . $image_name,
            'image_icon'   => 'images/' . $image_name_icon,
            'content' => $request->content,
        ]);
        return redirect()->route('admin.allpost')->with('succes', 'ADD Post Succesfulyy');
    }

    public function news()
    {
        return view('auth.news');
    }
    public function editpost($id)
    {
        $posts = Post::find($id);
        return view('auth.editPost', compact('posts', $posts));
    }

    public function updatepost($id, Request $request)
    {

        $post = Post::findOrFail($id);
        $image_name = $post->image;

        if ($request->has('image')) {
            $image_Ex = $request->file('image')->getClientOriginalExtension();
            $image_name = rand() . '_' . rand() . '_' . rand() . '_' . $image_Ex;
            $request->file('image')->move(public_path('images'), $image_name);
        }

        $post->update([
            'title'   => $request->title,
            'image'   => 'images/' . $image_name,
            'content' => $request->content,
        ]);
        return   redirect()->route('admin.home')->with('succes', 'Update Post Succesfully');
    }

    public function delete($id)
    {
        Post::find($id)->delete();
        return  redirect()->back()->with('succes', 'Delete Element Succesfully');
    }



    ///////////////////////////////////////////////////////////////////////////
    public function createnews()
    {
        return view('auth.createnews');
    }


    public function save_news(Request $request)
    {
        $post = $request->validate([
            'title' => 'required',
            'image' => 'required',
        ]);

        $image_Ex = $request->file('image')->getClientOriginalExtension();
        $image_name = rand() . '_' . rand() . '_' . rand() . '_' . $image_Ex;
        $request->file('image')->move(public_path('images'), $image_name);

        News::create([
            'title'   => $request->title,
            'image'   => 'images/' . $image_name,
        ]);
        return redirect()->route('admin.news')->with('succes', 'ADD News Succesfulyy');
    }

    public function editnews($id)
    {
        $news = News::find($id);
        return view('auth.editnews', compact('news', $news));
    }

    public function updatenews($id, Request $request)
    {

        $news = News::findOrFail($id);
        $image_name = $news->image;

        if ($request->has('image')) {
            $image_Ex = $request->file('image')->getClientOriginalExtension();
            $image_name = rand() . '_' . rand() . '_' . rand() . '_' . $image_Ex;
            $request->file('image')->move(public_path('images'), $image_name);
        }

        $news->update([
            'title'   => $request->title,
            'image'   => 'images/' . $image_name,
        ]);
        return  redirect()->route('admin.news')->with('succes', 'Update News Succesfully');
    }



    public function deletenew($id)
    {
        News::find($id)->delete();
        return  redirect()->back()->with('succes', 'Delete Element Succesfully');
    }
}
