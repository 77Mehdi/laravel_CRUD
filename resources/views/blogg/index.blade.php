@extends('layout')

@section('title', 'blogindex')

@section('content')

    <div class="containerblog1 ">
        <h1 class="">All Posts</h1>
    </div>
    <div class="yorblog22">
        <div class="yorblog ">
            <a href="{{route('blogs.create')}}">create your bloge</a>
        </div>
    </div>
    @foreach ($blogesData as $item)
        <div class=" containerblog2 ">
            <div class="div19">
                <img src="uplod/{{$item['image_path']}}" alt="">
            </div>
            <div class="div2">
                 <h2 class=" ">{{$item['title']}}</h2>
                <span>
                    By : <span class=" italicon">{{$item['slug']}}</span>
                    <p class="text-l text-gray-700 py-8 leading-6">
                       {{$item['decription']}}

                    </p>
                    <a href="{{route('blogs.show',[$item->id])}}"
                        class=" bg-gray-700 py-3 text-gray-100 px-4 rounded-lg font-bold uppercase mr-[200px]">
                        Read More
                    </a>
                   
                </span>

            </div>
        </div>


    @endforeach

@endsection
