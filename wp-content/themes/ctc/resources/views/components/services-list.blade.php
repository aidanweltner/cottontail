<ul>
  @foreach ($services as $service)
      <li>
        <a
          href="{{ get_term_link( $service ) }}"
          title="{!! 'Service: '.$service->name !!}"
          class="inline-flex items-center group border-none font-mono lg:text-md text-plum-800 hover:text-plum-500 dark:text-brown-400 dark:hover:text-brown-600"
        >
          <span>{!! $service->name !!}</span>
          @svg('svg.chevron-right', 'ml-4 h-4 text--plum-300 dark:text-brown-600 opacity-0 md:group-hover:opacity-100 transition-opacity')
        </a>
      </li>
  @endforeach
</ul>