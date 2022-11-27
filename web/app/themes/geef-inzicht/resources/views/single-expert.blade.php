{{--
  Template Name: Expert
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    <div class="container py-5 xl:py-10">
      <div class="flex pt-3">
        <div class="w-4/12 pr-14 relative z-10 -mt-5">
          <div>
            <img src="{!! get_the_post_thumbnail_url(); !!}" alt="" class="aspect-square rounded-full object-cover shadow-sm">
          </div>
          <div class="pt-5">
            <small class="text-black font-bold text-xs">VERLEENT HULP BIJ</small>
            <p class="text-black mb-0"> 
              <?php
                $expertise_count = count(get_field('expertise'));
                foreach(get_field('expertise') as $expertise) {
                  echo $expertise['name'];
                  if( $expertise_count > 1) echo ', '; 
                  $expertise_count--;
                }
              ?>
            </p>
          </div>
          <div class="h-[1px] bg-[#ededed] w-full block mt-3"></div>
          <div class="pt-3">
            <small class="text-black font-bold text-xs">WACHTTIJD VOOR AFSPRAAK</small>
            <p class="text-black mb-0">{!! get_field('wait_time_for_appointemnt'); !!}</p>
          </div>
          <div class="h-[1px] bg-[#ededed] w-full block mt-3"></div>
          <div class="pt-3">
            <small class="text-black font-bold text-xs">TYPE</small>
            <p class="text-black mb-0">{!! get_field('type'); !!}</p>
          </div>
          <div class="h-[1px] bg-[#ededed] w-full block mt-3"></div>
          <div class="pt-3">
            <small class="text-black font-bold text-xs">Online/offline</small>
            <p class="text-black mb-0">{!! get_field('online_offline'); !!}</p>
          </div>
          <div class="h-[1px] bg-[#ededed] w-full block mt-3"></div>
          <div class="pt-3">
            <small class="text-black font-bold text-xs">Verzekerd</small>
            <p class="text-black mb-0">{!! get_field('insured'); !!}</p>
          </div>
          <div class="h-[1px] bg-[#ededed] w-full block mt-3"></div>
          <div class="pt-3">
            <small class="text-black font-bold text-xs">Locatie</small>
            <p class="text-black mb-0">{!! get_field('place'); !!}</p>
          </div>
          <div class="h-[1px] bg-[#ededed] w-full block mt-3"></div>
          <div class="pt-3">
            <small class="text-black font-bold text-xs">Provincie</small>
            <p class="text-black mb-0">{!! get_field('province'); !!}</p>
          </div>
          <div class="h-[1px] bg-[#ededed] w-full block mt-3"></div>
          <div class="pt-3">
            <small class="text-black font-bold text-xs">Beschikbaarheid locatie</small>
            <p class="text-black mb-0">{!! get_field('availability_location'); !!}</p>
          </div>
        </div>
        <div class="w-8/12">
          <div class="flex justify-between">
            <div class="bg-primary p-10 rounded-md -ml-[28%] pl-[281px]">
              <h1 class="text-3xl lg:text-4xl font-bold mb-0 text-white">{!! the_title() !!}</h1>
              <div>
                <span class="italic text-white font-medium">"{!! get_field('quote'); !!}"</span>
              </div>
            </div>
            <div>
              <a href="{!! get_field('website')['url']; !!}" target="_blank" class="py-1.5 px-6 bg-secondary border-secondary border-2 rounded-md text-white inline-block font-semibold hover:bg-transparent hover:text-secondary transition-all">Website expert
              </a>
            </div>
          </div>
          <div class="pt-12">
            <div class="h-[1px] bg-[#ededed] w-full block"></div>
          </div>
          <div class="pt-12">
            <h2 class="text-xl lg:text-2xl font-medium">Expertises</h2>
            <div class="flex">
              @foreach (get_field('expertise') as $expertise)
                <div class="bg-secondary p-5 mr-6 text-white rounded-md">
                  <span class="uppercase font-bold block">{!! $expertise['name'] !!}</span>
                  <p class="mb-0 text-white">Binnen {!! $expertise['response_time'] !!} reactie</p>
                </div>
              @endforeach
            </div>
          </div>
          <div class="pt-12">
            <div class="h-[1px] bg-[#ededed] w-full block"></div>
          </div>
          <div class="pt-12">
            <h2 class="text-xl lg:text-2xl font-medium">Omschrijving</h2>
            <p>{!! the_content(); !!}</p>
          </div>
          <div class="pt-12">
            <div class="h-[1px] bg-[#ededed] w-full block"></div>
          </div>
          <div class="pt-12">
            <h2 class="text-xl lg:text-2xl font-medium mb-5">Mogelijkheden & tarieven</h2> 
            <div class="overflow-x-auto relative sm:rounded-md">
              <table class="w-full text-left text-gray-500">
                  <thead class="text-xs text-white uppercase bg-primary">
                      <tr>
                          <th scope="col" class="py-3 px-6">
                              Expertise
                          </th>
                          <th scope="col" class="py-3 px-6">
                              Omschrijving
                          </th>
                          <th scope="col" class="py-3 px-6">
                              Tarief
                          </th>
                      </tr>
                  </thead>
                  <tbody class="expertise-table">
                      @foreach (get_field('expertise') as $expertise)
                        <tr class="border-bhover:bg-gray-50">
                          <th scope="row" class="py-4 px-6 whitespace-nowrap font-normal">
                            {!! $expertise['name'] !!}
                          </th>
                          <td class="py-4 px-6">
                            {!! $expertise['description'] !!}
                          </td>
                          <td class="py-4 px-6 min-w-[150px]">
                            €{!! $expertise['price'] !!},- p/u
                          </td>
                      </tr>
                      @endforeach
                  </tbody>
              </table>
            </div>
          </div>
          <div class="pt-12">
            <div class="h-[1px] bg-[#ededed] w-full block"></div>
          </div>
          <div class="pt-12 expert-form">
            <h2 class="text-xl lg:text-2xl font-medium">Neem contact op voor een afspraak</h2>
            <?php echo do_shortcode('[gravityform id="1" title="false"]'); ?>
          </div>
          <div class="pt-12">
            <div class="h-[1px] bg-[#ededed] w-full block"></div>
          </div>
          <div class="pt-12">
            <h2 class="text-xl lg:text-2xl font-medium">Impressie</h2>
            <div class="grid grid-cols-3 gap-8">
              @foreach (get_field('impression') as $image)
                <div>
                  <img src="{!! $image['impression_image'] !!}" class="h-60 w-full object-cover rounded-md">
                </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
  @endwhile
@endsection