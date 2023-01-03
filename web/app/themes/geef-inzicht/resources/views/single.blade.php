@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    <div class="blog single-blog">
      <div class="container single-blog__container py-5 xl:py-10">
        <div class="border-b border-gray-200 pb-4">
          <h1 class="text-3xl lg:text-4xl font-bold single-blog__title">{!! the_title() !!}</h1>
          <?php if(get_field('read_time')) { ?>
            <small class="mb-0"><?php echo get_field('read_time'); ?> leestijd</small>
          <?php } ?>
          <?php if(get_the_post_thumbnail_url()) { ?>
            <div class="pt-5">
              <img src="{!! get_the_post_thumbnail_url() !!}" alt="" class="rounded-md max-h-[500px] object-cover w-full">
            </div>
          <?php } ?>
          <?php if(get_field('image_description')) { ?>
            <small class="pt-5 block italic single-blog__undertitle"><?php echo get_field('image_description'); ?></small>
          <?php } ?>
        </div>
        <div class="pt-5">
          {!! the_content() !!}
        </div>
      </div>
    </div>
  @endwhile
@endsection