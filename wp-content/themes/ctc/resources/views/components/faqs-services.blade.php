<div class="ctc-block flex flex-col lg:flex-row lg:space-x-4 lg:space-x-8 faqs-block">
  <div class="w-full lg:w-1/3">
    <h3 class="font-sans">
      {!! $service_title !!}
    </h3>
    <ul class="md-prose-list-none">
      @foreach ($services as $service)
          <li>
            <a
              href="{{ get_term_link( $service ) }}"
              title="{!! 'Service: '.$service->name !!}"
              class="flex items-center group border-none font-mono lg:text-md text-plum-800 hover:text-plum-500 dark:text-brown-400 dark:hover:text-brown-600"
            >
              <span>{!! $service->name !!}</span>
              <div class="hidden md:block ml-2 border-b border-plum-300 dark:border-brown-600 flex-grow"></div>
              @svg('svg.chevron-right', 'justify-self-end h-4 text--plum-300 dark:text-brown-600 opacity-0 md:group-hover:opacity-100 transition-opacity')
            </a>
          </li>
      @endforeach
    </ul>
  </div>
  <div class="w-full lg:w-2/3">
    <h3 class="font-sans">
      {!! $faq_title !!}
    </h3>
    <ul class="md-prose-list-none">
      @foreach ($faqs as $faq)
        <li>
          <a
            href="{{ get_permalink( $faq->ID ) }}"
            title="{!! 'FAQ: '.get_the_title($faq->ID) !!}"
            class="flex items-center group border-none font-mono lg:text-md text-plum-800 hover:text-plum-500 dark:text-brown-400 dark:hover:text-brown-600"
          >
            <span>{!! get_the_title($faq->ID) !!}</span>
            <div class="hidden md:block ml-2 border-b border-plum-300 dark:border-brown-600 flex-grow"></div>
            @svg('svg.chevron-right', 'justify-self-end h-4 text--plum-300 dark:text-brown-600 opacity-0 md:group-hover:opacity-100 transition-opacity')
          </a>
        </li>
      @endforeach
    </ul>
  </div>
</div>