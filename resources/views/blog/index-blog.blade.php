@extends('layouts.main')

@section('main-content')
    <h2>BLOG - Mattpress</h2>

    <section id="articles-container">
        {{-- @dd($post) --}}

        @foreach($post as $p)
            <article class="post">
                <h2>{{ $p['title'] }}</h2>
                <p class="subtitle">{{ $p['subtitle'] }}</p>
                <p>{{ $p['content'] }}</p>
                <a href="{{ route('blog.show', ['slug' => $p['slug']]) }} "> Read More </a>
            </article>
        @endforeach

    </section>
@endsection