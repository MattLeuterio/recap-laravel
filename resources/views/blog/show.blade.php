@extends('layouts.main')

@section('main-content')
    <h2>BLOG - Mattpress</h2>

    <section class="post-container">
        {{-- @dd($post) --}}
            <article class="post">
                <h2>{{ $post['title'] }}</h2>
                <p class="subtitle">{{ $post['subtitle'] }}</p>
                <p>{{ $post['content'] }}</p>
            </article>

    </section>

@endsection