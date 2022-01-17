@extends('layouts.app')

@section('content')

    <h1 class="text-center my-3">News</h1>

    <section class="news">
        <div class="container py-3">

            @foreach ($blogs as $blog)
                <div class="articles_wrapper py-2">
                    <h3>{{ $blog->title }}</h3>
                    <p>{{ $blog->text }}</p>
                </div>
            @endforeach
        </div>
    </section>

@endsection
