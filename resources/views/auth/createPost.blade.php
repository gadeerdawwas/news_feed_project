@extends('layouts.app')

@section('content')


    <div class="container">

        @if (session('succes'))
            <div class="alert alert-success">
                {{ session('succes') }}
            </div>
        @endif
        <form action="{{ route('admin.createpost') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Title</label>
                <input type="text" name="title" class="form-control  @error('title') is-invalid @enderror" value="">
                @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Content</label>
                <textarea class="form-control @error('content') is-invalid @enderror" type='text' name="content">
                        </textarea>
                @error('content')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">image</label>
                <input type="file" class="form-control @error('image') is-invalid @enderror" name="image" />
                @error('image')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">image_icon</label>
                <input type="file" class="form-control @error('image_icon') is-invalid @enderror" name="image_icon" />
                @error('image_icon')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>



            <button type="submit" class="btn btn-primary">Send</button>
        </form>
    </div>

@endsection
