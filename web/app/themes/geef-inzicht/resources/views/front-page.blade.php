@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('sections.front-attention')
    @include('sections.recent-experts')
    @include('sections.chatbot-banner')
    @include('sections.recent-blogs')
    {{-- @includeFirst(['partials.content-page', 'partials.content']) --}}
  @endwhile
@endsection
