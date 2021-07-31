@extends('layouts.app')
@section('content')
    <div class="container">
        @if (session('succes'))
        <div class="alert alert-success">
            {{ session('succes') }}
        </div>
    @endif
        <div class="row">
            @foreach ($all_posts as $post)
            <div class="card" style="width: 16rem;">
                <img class="card-img-top" src="{{ asset($post->image) }}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{$post->title}}</h5>
                    <p class="card-text">{{$post->content}}</p>
                    <a href="{{route('admin.editpost',$post->id)}}" class="btn btn-primary">Edit</a>
                    <a href="{{route('admin.delete',$post->id)}}" class="btn btn-danger">Delete</a>
                </div>
            </div>
        @endforeach
        </div>


    </div>

@endsection
