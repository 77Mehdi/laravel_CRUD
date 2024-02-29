@extends('layout')

@section('title','creation')
@section('content')
    <h1 class="taitlcreat">create blog</h1>
    <div class="myformart">
        
        <form action="{{route('blogs.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div>
                <label for="slug">artics name</label>
                <input type="text" placeholder="articls name"  value="{{old('slug')}}" name="slug">

                <div class="eroorm">
                    @error('slug')
                        {{ $message }}
                    @enderror
                </div>
            </div>
            <div>
                <label for="title">article title</label>
                <input type="text" placeholder="article title" value="{{old('title')}}" name="title">
                <div class="eroorm">
                    @error('title')
                        {{ $message }}
                    @enderror
                </div>
            </div>
            <div>
                <label for="decription">description for your art</label>
                <input type="text" placeholder="article description" value="{{old('decription')}}" name="decription">

                <div class="eroorm">
                    @error('decription')
                        {{ $message }}
                    @enderror
                </div>
            </div>
            <div>
                <label for="image_path">the image art</label>
                <input type="file"  name="image_path">

                <div class="eroorm">
                    @error('image_path')
                        {{ $message }}
                    @enderror
                </div>
            </div>

            <button type="submit"> GO</button>
        </form>
    </div>
@endsection