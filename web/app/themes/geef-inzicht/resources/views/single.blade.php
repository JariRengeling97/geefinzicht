@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    <div class="blog">
      <div class="container py-5 xl:py-10">
        <div class="border-b border-gray-200 pb-4">
          <h1 class="text-3xl lg:text-4xl font-bold">{!! the_title() !!}</h1>
        </div>
        <div class="pt-5">
          {!! the_content() !!}
        </div>
        <?php if(get_the_post_thumbnail_url()) { ?>
          <div class="pt-5">
            <img src="{!! get_the_post_thumbnail_url() !!}" alt="" class="rounded-md max-h-[500px] object-cover w-full">
          </div>
        <?php } ?>
      </div>
    </div>
  @endwhile
@endsection