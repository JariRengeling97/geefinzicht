<section class="header shadow-md py-2 lg:py-5 mb-5 xl:mb-10 sticky top-0 z-50 bg-white">
  <div class="container">
    <div class="flex justify-between items-center">
      <div>
        <a href="/">
          <img src="{{$logo['url']}}" class="w-20 h-auto" alt="">
        </a>
      </div>
      <div class="lg:hidden">
        <div class="hamburger">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
          </svg>
        </div>
      </div>
      <div class="hidden lg:block">
        <div class="flex items-center">
          <div>
            @if (has_nav_menu('primary_navigation'))
              <nav class="desktop-primary-nav" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
                {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'echo' => false]) !!}
              </nav>
            @endif
          </div>
          <div>
            <a href="" class="py-2.5 px-12 bg-primary border-primary border-2 rounded-md text-white inline-block font-semibold hover:bg-transparent hover:text-primary transition-all">Expert worden 
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 inline-block ml-3">
                <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
              </svg>
            </a>
          </div>
        </div>
      </div>
    </div>
    @if (has_nav_menu('primary_navigation'))
      <nav class="primary-nav hidden" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'echo' => false]) !!}
      </nav>
    @endif
  </div>
</section>
