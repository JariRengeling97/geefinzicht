@php
    $content = apply_filters('the_content', $post->post_content);
@endphp

<a href="{!! the_permalink($post->ID) !!}">
  <div class="object-cover overflow-hidden object-center pt-2 lg:pt-4">
    @if (get_the_post_thumbnail_url($post->ID))
      <img src="{!! get_the_post_thumbnail_url($post->ID) !!}" class="h-80 w-full object-cover rounded-md">
    @else
      <img src="@asset('images/placeholder-profile.jpg')" class="h-80 w-full object-cover rounded-md">
    @endif
    <div class="flex justify-between items-center mt-3">
      <div>
        <h3 class="text-xl lg:text-2xl mb-0">{!! $post->post_title !!}</h3>
      </div>
      <div>
        <span class="text-sm">{!! get_field('location', $post->ID) !!} - €{!! get_field('price', $post->ID) !!},-</span>
      </div>
    </div>
    <div>
      <p class="mb-0">{!! wp_trim_words( $content, 35, ' ...' ) !!}</p>
    </div>
  </div>
</a>