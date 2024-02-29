@extends('layout')
@section('title', 'showig')

@Section('content')
    <div class="show">

        <h1>{{ $ReadMore['title'] }}</h1>

        <div class="contentshow">
            <img src="/uplod/{{ $ReadMore['image_path'] }}" alt="" class="">
            <p>{{ $ReadMore['decription'] }}
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum assumenda,
                tempore nostrum sequi alias commodi reprehenderit eligendi iure fugiat doloribus voluptates
                velit soluta, pariatur adipisci dolores quidem? Porro, natus nostrum incidunt eius iste numquam,
                expedita vero placeat laboriosam adipisci rerum. Eum ad nostrum eos eligendi, dolores quos rem ipsa
                molestiae.
                Ea, ut exercitationem sequi cupiditate ducimus illum! Earum deleniti doloremque quam recusandae, nisi quas,
                blanditiis eos ipsum quisquam eligendi doloribus odit velit quae, illum officiis laudantium unde dignissimos
                beatae
                quo ab nobis vero? Et magni laborum labore commodi! Hic, itaque? Quaerat blanditiis, mollitia ratione
                asperiores
                accusantium nihil temporibus quidem fugit!
            </p>
        </div>
        <span class="sopo">
            By : <span class=" italicon">{{ $ReadMore['slug'] }}</span>
            <a href="{{ route('blogs.edit', [$ReadMore->id]) }}" class="update">update your blog</a>

            <form action="{{ route('blogs.destroy', [$ReadMore->id]) }}" method="post">
                @csrf
                @method('delete')
                <input type="submit" value="Delete" class="deletart">
            </form>
            


        </span>

    </div>
@endsection
