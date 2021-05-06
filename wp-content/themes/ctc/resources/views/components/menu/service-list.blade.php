<div class="services space-y-3">
  <button id="services-menu" class="closed text-right inline-flex items-center text-plum-900 dark:text-cream-300 font sans font-bold">
    <span class="border-b border-blue-400 dark:border-plum-800">All Services:</span>
    @svg('svg.chevron-down', 'h-4 ml-2 text-plum-400 dark:text-brown-600 transform transition-transform ease-in-out duration-200')
  </button>
  <ul id="services-list" class="closed text-right space-y-2">
    @php ($i = 1)
    @foreach ($menu_services as $service)
      <li style="--animation-order:{{ $i }}">
        <a
          href="{{ get_term_link( $service ) }}"
          title="{!! 'Service: '.$service->name !!}"
          class="inline-flex items-center group border-none font-mono text-plum-800 hover:text-plum-500 dark:text-brown-400 dark:hover:text-brown-600"
        >
          {!! $service->name !!}
        </a>
      </li>
      @php ( $i++ )
    @endforeach
  </ul>
</div>