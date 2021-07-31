@extends('layouts.app')

@section('content')


    <div class="container">

        @if (session('succes'))
            <div class="alert alert-success">
                {{ session('succes') }}
            </div>
        @endif
        <form action="{{ route('admin.updatepost',$posts->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Title</label>
                <input type="text" name="title" class="form-control  @error('title') is-invalid @enderror" value="{{$posts->title}}">
                @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Content</label>
                <textarea class="form-control @error('content') is-invalid @enderror" type='text' name="content" >{{$posts->content}}
                </textarea>
                @error('content')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <img src="{{asset($posts->image)}}" alt="" width="150px">
                <input type="file" class="form-control @error('image') is-invalid @enderror" name="image"  />
                @error('image')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>



            <button type="submit" class="btn btn-primary">Send</button>
        </form>
    </div>

@endsection
