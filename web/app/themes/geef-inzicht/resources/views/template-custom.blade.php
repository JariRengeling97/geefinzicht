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
            <img src="/app/uploads/2022/11/pexels-italo-melo-2379004.jpg" alt="" class="aspect-square rounded-full object-cover shadow-sm">
          </div>
          <div class="pt-5">
            <small class="text-black font-bold text-xs">VERLEENT HULP BIJ</small>
            <p class="text-black mb-0">Rugpijn, Voetpijn</p>
          </div>
          <div class="h-[1px] bg-[#ededed] w-full block mt-3"></div>
          <div class="pt-3">
            <small class="text-black font-bold text-xs">WACHTTIJD VOOR AFSPRAAK</small>
            <p class="text-black mb-0">2/3 werkdagen</p>
          </div>
          <div class="h-[1px] bg-[#ededed] w-full block mt-3"></div>
          <div class="pt-3">
            <small class="text-black font-bold text-xs">TYPE</small>
            <p class="text-black mb-0">Fysiek</p>
          </div>
          <div class="h-[1px] bg-[#ededed] w-full block mt-3"></div>
          <div class="pt-3">
            <small class="text-black font-bold text-xs">Verzekerd</small>
            <p class="text-black mb-0">Ja</p>
          </div>
          <div class="h-[1px] bg-[#ededed] w-full block mt-3"></div>
          <div class="pt-3">
            <small class="text-black font-bold text-xs">Locatie</small>
            <p class="text-black mb-0">Online</p>
          </div>
          <div class="h-[1px] bg-[#ededed] w-full block mt-3"></div>
          <div class="pt-3">
            <small class="text-black font-bold text-xs">Provincie</small>
            <p class="text-black mb-0">Gelderland</p>
          </div>
          <div class="h-[1px] bg-[#ededed] w-full block mt-3"></div>
          <div class="pt-3">
            <small class="text-black font-bold text-xs">Beschikbaarheid locatie</small>
            <p class="text-black mb-0">Gratis parkeren, OV, Dichtbij tankstation</p>
          </div>
        </div>
        <div class="w-8/12">
          <div class="flex justify-between">
            <div class="bg-primary p-10 rounded-md -ml-[28%] pl-[281px]">
              <h1 class="text-3xl lg:text-4xl font-bold mb-0 text-white">Jari Rengeling</h1>
              <div>
                <span class="italic text-white font-medium">"Hier komt de quote van een expert"</span>
              </div>
            </div>
            <div>
              <a href="" class="py-1.5 px-6 bg-secondary border-secondary border-2 rounded-md text-white inline-block font-semibold hover:bg-transparent hover:text-secondary transition-all">Website expert
              </a>
            </div>
          </div>
          <div class="pt-12">
            <div class="h-[1px] bg-[#ededed] w-full block"></div>
          </div>
          <div class="pt-12">
            <h2 class="text-xl lg:text-2xl font-medium">Expertises</h2>
            <div class="flex">
              <div class="bg-secondary p-5 text-white rounded-md">
                <span class="uppercase font-bold block">Rugpijn</span>
                <p class="mb-0 text-white">Binnen 6 uur reactie</p>
              </div>
              <div>
                <div class="w-[1px] h-full bg-[#ededed] mx-6 block"></div>
              </div>
              <div class="bg-secondary p-5 text-white rounded-md">
                <span class="uppercase font-bold block">Voetpijn</span>
                <p class="mb-0 text-white">Binnen 6 uur reactie</p>
              </div>
            </div>
          </div>
          <div class="pt-12">
            <div class="h-[1px] bg-[#ededed] w-full block"></div>
          </div>
          <div class="pt-12">
            <h2 class="text-xl lg:text-2xl font-medium">Omschrijving</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis maiores, dolorem officiis ipsum est magnam assumenda consequuntur dolore animi alias suscipit corporis inventore nihil facere culpa exercitationem aut! Qui, odit!</p>
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
                  <tbody>
                      <tr class="bg-white border-bhover:bg-gray-50 ">
                          <th scope="row" class="py-4 px-6 whitespace-nowrap font-normal">
                              Rugpijn
                          </th>
                          <td class="py-4 px-6">
                              Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis officiis voluptas possimus laudantium fuga rem asperiores, perferendis reprehenderit enim beatae et illum animi odio veniam quibusdam suscipit eius nam obcaecati.
                          </td>
                          <td class="py-4 px-6 min-w-[150px]">
                            ???75,- p/u
                          </td>
                      </tr>
                      <tr class="bg-gray-50">
                        <th scope="row" class="py-4 px-6 whitespace-nowrap font-normal">
                            Voetpijn
                        </th>
                        <td class="py-4 px-6">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis sapiente recusandae repudiandae possimus sunt dignissimos mollitia nostrum dolores, voluptate ipsum, aliquam saepe amet voluptates assumenda earum velit dolore nulla molestiae?
                        </td>
                        <td class="py-4 px-6">
                          ???95,- p/u
                        </td>
                    </tr>
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
              <div>
                <img src="/app/uploads/2022/11/pexels-olga-1146242.jpg" class="h-60 w-full object-cover rounded-md">
              </div>
              <div>
                <img src="/app/uploads/2022/11/pexels-quang-anh-ha-nguyen-884977.jpg" class="h-60 w-full object-cover rounded-md">
              </div>
              <div>
                <img src="/app/uploads/2022/11/pexels-julian-jagtenberg-103123.jpg" class="h-60 w-full object-cover rounded-md">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  @endwhile
@endsection
