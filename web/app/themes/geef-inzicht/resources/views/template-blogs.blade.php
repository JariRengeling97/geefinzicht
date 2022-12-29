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
            <div class="flex pt-5">
                <div class="w-3/12 pr-8">
                    <div class="py-6">
                      <h3 class="-mx-2 -my-3 flow-root">
                        <button type="button" class="flex w-full filter-btn items-center justify-between bg-white px-2 py-3 text-gray-400 hover:text-gray-500" aria-controls="filter-section-mobile-0" aria-expanded="false">
                          <span class="font-medium text-gray-900">Categorie</span>
                          <span class="ml-6 flex items-center">
                            <svg class="h-5 w-5 minus hidden" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                              <path d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z" />
                            </svg>
                            <svg class="h-5 w-5 plus" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                              <path fill-rule="evenodd" d="M3 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H3.75A.75.75 0 013 10z" clip-rule="evenodd" />
                            </svg>
                          </span>
                        </button>
                      </h3>
                      <div class="pt-6 filters" id="filter-section-mobile-0">
                        <?php
                          echo do_shortcode('[facetwp facet="categ"]');
                        ?>
                      </div>
                    </div>
                </div>
                <div class="w-9/12">
                  <?php
                    echo do_shortcode('[facetwp template="blog"]');
                  ?>
                </div>
                <div class="hidden grid gap-4 grid-cols-1 | md:grid-cols-2 | lg:grid-cols-3 lg:gap-8"></div>
            </div>
        </div>
    </section>
@endsection
