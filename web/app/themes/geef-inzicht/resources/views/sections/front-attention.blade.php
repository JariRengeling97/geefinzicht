<section class="front-attention py-5 xl:py-10">
  <div class="container xl:flex xl:flex-row-reverse xl:items-center xl:-left-32 xl:relative">
    <div class="xl:w-8/12">
      <img src="/app/uploads/2022/11/pexels-olga-1146242.jpg" alt="" class="rounded-xl">
    </div>
    <div class="mx-8 shadow-lg rounded-lg p-7 mt-[-50px] xl:mt-0 xl:w-4/12 xl:left-40 z-10 bg-white relative">
      <h1 class="text-3xl lg:text-4xl font-bold">Waar ben je naar op zoek?</h1>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum nisi deserunt nobis illo similique exercitationem, sapiente quas, tenetur ex distinctio libero dolorem hic in cum pariatur dignissimos, tempore facilis veniam?</p>
      <select id="expertises" class="border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 my-3">
        <option value="#" selected>Vind experts op basis van klachten</option>
        <?php
        $filters = array();

        foreach($experts as $expert) {
          $expertises = get_field('expertise', $expert->ID);
          foreach($expertises as $expertise) {
            array_push($filters, $expertise['name']);
          }
        }

        foreach($filters as $filter) {
          echo '<option value="/hulp-zoeken/?_expertise='.strtolower($filter).'">'.$filter.'</option>';
        }

        ?>
      </select>
      <span href="" class="search-expert py-2.5 w-full mb-4 text-center px-12 bg-secondary border-secondary border-2 rounded-md text-white inline-block font-semibold hover:bg-transparent hover:text-secondary transition-all">Vind hulp
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 inline-block ml-3 relative -top-[1px]">
          <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
        </svg>
      </span>
      <p class="mb-0 text-sm">Hulp bij het maken van een keuze? <a href="" class="text-orange">Open de chatbot</a></p>
      <p class="text-sm">Leuke adviezen & meer info? <a href="/blog" class="text-orange">Bekijk onze blogs</a></p>
    </div>
  </div>
</section>