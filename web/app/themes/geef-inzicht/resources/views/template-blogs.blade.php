{{--
  Template Name: Blogs
--}}

@extends('layouts.app')

@section('content')
    <section class="recent-experts py-5 xl:py-10">
        <div class="container">
            <div class="border-b border-gray-200 pb-4">
                <h1 class="text-3xl lg:text-4xl font-bold">{!! the_title() !!}</h1>
            </div>
            <div class="lg:grid lg:grid-cols-2 lg:gap-8 2xl:grid-cols-4">
                @foreach ($posts as $post)
                    @include('components.blog-card', array('post' => $post))
                @endforeach
            </div>
        </div>
    </section>
@endsection
