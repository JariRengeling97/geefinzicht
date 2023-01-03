<section class="recent-experts py-5 xl:py-10">
  <div class="container">
    <div class="xl:flex xl:items-center">
      <div class="xl:w-7/12">
        <h2 class="text-2xl lg:text-3xl font-semibold">Nieuwste blogs</h2>
        <p>Vind hier de meest recent geposte blogs. Voor inspirerende verhalen van lotgenoten,
          interessante tips & adviezen en nog veel meer.</p>
      </div>
      <div class="hidden text-right w-full | xl:w-5/12 xl:inline-block">
        <a href="/blog" class="py-2.5 px-12 bg-primary border-primary border-2 rounded-md text-white inline-block font-semibold hover:bg-transparent hover:text-primary transition-all">Alle blogs bekijken 
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 inline-block ml-3">
            <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
          </svg>
        </a>
      </div>
    </div>
    <div class="lg:grid lg:grid-cols-2 lg:gap-8 2xl:grid-cols-3">
      @foreach ($recent_posts as $post)
        @include('components.blog-card', array('post' => $post))
      @endforeach
    </div>
  </div>
</section>