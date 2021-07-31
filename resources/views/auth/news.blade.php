@extends('layouts.app')
@section('content')
    <div class="container">
        @if (session('succes'))
        <div class="alert alert-success">
            {{ session('succes') }}
        </div>
    @endif
        <div class="row">
            @foreach ($news as $new)
            <div class="card" style="width: 16rem;">
                <div class="">
                    <img class="card-img-top" src="{{ asset($new->image) }}" alt="Card image cap">
                </div>

                <div class="card-body">
                    <h5 class="card-title">{{$new->title}}</h5>
                    <a href="{{route('admin.editnews',$new->id)}}" class="btn btn-primary">Edit</a>
                    <a href="{{route('admin.deletenew',$new->id)}}" class="btn btn-danger">Delete</a>
                </div>
            </div>
        @endforeach
        </div>


    </div>

@endsection
