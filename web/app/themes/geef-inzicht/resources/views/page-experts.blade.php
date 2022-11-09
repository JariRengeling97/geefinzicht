{{--
  Template Name: Experts
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    <div class="container py-5 xl:py-10">
      <div class="border-b border-gray-200 pb-4">
        <h1 class="text-3xl lg:text-4xl font-bold">Aangesloten experts</h1>
      </div>
      <div class="flex pt-5">
        <div class="w-3/12 pr-8">
            <div class="py-6">
              <h3 class="-mx-2 -my-3 flow-root">
                <!-- Expand/collapse section button -->
                <button type="button" class="flex w-full filter-btn items-center justify-between bg-white px-2 py-3 text-gray-400 hover:text-gray-500" aria-controls="filter-section-mobile-0" aria-expanded="false">
                  <span class="font-medium text-gray-900">Expertise</span>
                  <span class="ml-6 flex items-center">
                    <!--
                      Expand icon, show/hide based on section open state.

                      Heroicon name: mini/plus
                    -->
                    <svg class="h-5 w-5 hidden" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                      <path d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z" />
                    </svg>
                    <!--
                      Collapse icon, show/hide based on section open state.

                      Heroicon name: mini/minus
                    -->
                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                      <path fill-rule="evenodd" d="M3 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H3.75A.75.75 0 013 10z" clip-rule="evenodd" />
                    </svg>
                  </span>
                </button>
              </h3>
              <!-- Filter section, show/hide based on section state. -->
              <div class="pt-6 filters" id="filter-section-mobile-0">
                <select id="countries" class="border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
                  <option selected>Selecteer een expertise</option>
                  <option value="US">Expertise 1</option>
                  <option value="CA">Expertise 2</option>
                  <option value="FR">Expertise 3</option>
                  <option value="DE">Expertise 4</option>
                </select>
              </div>
            </div>
            <div class="py-6 border-t border-gray-200">
              <h3 class="-mx-2 -my-3 flow-root">
                <!-- Expand/collapse section button -->
                <button type="button" class="flex w-full items-center justify-between bg-white px-2 py-3 text-gray-400 hover:text-gray-500" aria-controls="filter-section-mobile-0" aria-expanded="false">
                  <span class="font-medium text-gray-900">Klachten</span>
                  <span class="ml-6 flex items-center">
                    <!--
                      Expand icon, show/hide based on section open state.

                      Heroicon name: mini/plus
                    -->
                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                      <path d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z" />
                    </svg>
                    <!--
                      Collapse icon, show/hide based on section open state.

                      Heroicon name: mini/minus
                    -->
                    <svg class="h-5 w-5 hidden" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                      <path fill-rule="evenodd" d="M3 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H3.75A.75.75 0 013 10z" clip-rule="evenodd" />
                    </svg>
                  </span>
                </button>
              </h3>
              <!-- Filter section, show/hide based on section state. -->
              <div class="pt-6 hidden" id="filter-section-mobile-0">
                <div class="space-y-4">
                  <div class="flex items-center">
                    <input id="filter-mobile-color-0" name="color[]" value="white" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                    <label for="filter-mobile-color-0" class="ml-3 min-w-0 flex-1 text-gray-500">Klacht 1</label>
                  </div>

                  <div class="flex items-center">
                    <input id="filter-mobile-color-1" name="color[]" value="beige" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                    <label for="filter-mobile-color-1" class="ml-3 min-w-0 flex-1 text-gray-500">Klacht 2</label>
                  </div>

                  <div class="flex items-center">
                    <input id="filter-mobile-color-2" name="color[]" value="blue" type="checkbox" checked class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                    <label for="filter-mobile-color-2" class="ml-3 min-w-0 flex-1 text-gray-500">Klacht 3</label>
                  </div>

                  <div class="flex items-center">
                    <input id="filter-mobile-color-3" name="color[]" value="brown" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                    <label for="filter-mobile-color-3" class="ml-3 min-w-0 flex-1 text-gray-500">Klacht 4</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="py-6 border-t border-gray-200">
              <h3 class="-mx-2 -my-3 flow-root">
                <!-- Expand/collapse section button -->
                <button type="button" class="flex w-full items-center justify-between bg-white px-2 py-3 text-gray-400 hover:text-gray-500" aria-controls="filter-section-mobile-0" aria-expanded="false">
                  <span class="font-medium text-gray-900">Wachttijd</span>
                  <span class="ml-6 flex items-center">
                    <!--
                      Expand icon, show/hide based on section open state.

                      Heroicon name: mini/plus
                    -->
                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                      <path d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z" />
                    </svg>
                    <!--
                      Collapse icon, show/hide based on section open state.

                      Heroicon name: mini/minus
                    -->
                    <svg class="h-5 w-5 hidden" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                      <path fill-rule="evenodd" d="M3 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H3.75A.75.75 0 013 10z" clip-rule="evenodd" />
                    </svg>
                  </span>
                </button>
              </h3>
              <!-- Filter section, show/hide based on section state. -->
              <div class="pt-6 hidden" id="filter-section-mobile-0">
                <div class="space-y-4">
                  <div class="flex items-center">
                    <input id="filter-mobile-color-0" name="color[]" value="white" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                    <label for="filter-mobile-color-0" class="ml-3 min-w-0 flex-1 text-gray-500">Wachttijd 1</label>
                  </div>

                  <div class="flex items-center">
                    <input id="filter-mobile-color-1" name="color[]" value="beige" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                    <label for="filter-mobile-color-1" class="ml-3 min-w-0 flex-1 text-gray-500">Wachttijd 2</label>
                  </div>

                  <div class="flex items-center">
                    <input id="filter-mobile-color-2" name="color[]" value="blue" type="checkbox" checked class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                    <label for="filter-mobile-color-2" class="ml-3 min-w-0 flex-1 text-gray-500">Wachttijd 3</label>
                  </div>

                  <div class="flex items-center">
                    <input id="filter-mobile-color-3" name="color[]" value="brown" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                    <label for="filter-mobile-color-3" class="ml-3 min-w-0 flex-1 text-gray-500">Wachttijd 4</label>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <div class="w-9/12">
          <div class="grid gap-4 grid-cols-1 | md:grid-cols-2 | lg:grid-cols-3 lg:gap-8">
            @include('components.blog-card')
            @include('components.blog-card')
            @include('components.blog-card')
            @include('components.blog-card')
            @include('components.blog-card')
            @include('components.blog-card')
            @include('components.blog-card')
            @include('components.blog-card')
            @include('components.blog-card')
          </div>
        </div>
      </div>
    </div>
  @endwhile
@endsection
