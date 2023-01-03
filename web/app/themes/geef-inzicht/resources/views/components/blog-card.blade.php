<a href="{!! the_permalink($post->ID) !!}">
  <div class="object-cover overflow-hidden object-center pt-2 lg:pt-5">
    @if (get_the_post_thumbnail_url($post->ID))
      <img src="{!! get_the_post_thumbnail_url($post->ID) !!}" class="aspect-square w-full object-cover rounded-md">
    @else
      <img src="@asset('images/placeholder.png')" class="aspect-square w-full object-cover rounded-md">
    @endif
    <div class="flex justify-between items-center mt-3">
      <div>
        <h3 class="text-xl lg:text-2xl mb-0">{!! $post->post_title !!}</h3>
      </div>
    </div>
    <div>
      @if (get_field('read_time', $post->ID))
        <small class="mb-0">{!! get_field('read_time', $post->ID) !!} leestijd</small>
      @endif
    </div>
  </div>
</a>