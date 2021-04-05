<ul class="services font-mono text-cream-500 text-xs flex flex-wrap space-x-3 m-0">
  @php
      $services = get_the_terms( $post, 'service');
  @endphp
  @foreach ($services as $service)
      <li class="rounded-sm bg-white dark:bg-plum-800 px-3 py-1">
        <a
          href="{{ get_term_link( $service, 'service') }}"
          title="{!! $service->name !!}"
          class="border-none text-plum-500 hover:text-brown-700 dark:text-cream-500 dark:hover:text-brown-400"
        >
          {!! $service->name !!}
        </a>
      </li>
  @endforeach
</ul>