<a href="{!! the_permalink($post->ID) !!}">
  <div class="object-cover overflow-hidden object-center pt-2 lg:pt-5">
    @if (get_the_post_thumbnail_url($post->ID))
      <img src="{!! get_the_post_thumbnail_url($post->ID) !!}" class="h-60 w-full object-cover rounded-md">
    @else
      <img src="@asset('images/placeholder.png')" class="h-60 w-full object-cover rounded-md">
    @endif
    <div class="flex justify-between items-center mt-3">
      <div>
        <h3 class="text-xl lg:text-2xl mb-0">{!! $post->post_title !!}</h3>
      </div>
      <div>
        <span class="text-sm">Blog</span>
      </div>
    </div>
    <div>
      <p class="mb-0">{!! $post->post_excerpt !!}</p>
    </div>
  </div>
</a>