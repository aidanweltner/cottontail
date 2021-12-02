@php
    $testimonial = get_field('testimonial', $project['id'] );
@endphp
<a
  href="{{ get_the_permalink($project['id']) }}"
  title="{{ get_the_title($project['id']) }}"
  class="border-none p-4 bg-white dark:bg-plum-800 rounded-md group hover:bg-gray-200 dark:hover:bg-plum-700 project-card"
>
  <article class="h-full flex flex-col justify-between space-y-3 lg:space-y-6">
    <ul class="font-mono text-cream-500 text-xs flex flex-wrap space-x-2 m-0">
      @php
          $services = get_the_terms( $project['id'], 'service');
      @endphp
      @foreach ($services as $service)
          <li>{!! $service->name !!}</li>
      @endforeach
    </ul>
    <div>
      <h3 class="mt-0 text-brown-800 dark:text-brown-400 group-hover:underline">{!! get_the_title( $project['id'] ) !!}</h3>
      <p class="text-xs text-plum-500 dark:text-cream-400 font-bold font-mono">"{!! !empty($project['testimonial']) ? $project['testimonial'] : get_field('card', $testimonial->ID)['testimonial'] !!}"</p>
      <p class="text-brown-800 dark:text-cream-400 text-sm font-mono mb-0">
        <span class="font-light">{!! get_field('card', $testimonial->ID )['source'] !!}, </span>
        <span class="font-bold">{!! get_field('source_position', $testimonial->ID) !!}</span>
      </p>
    </div>
    <div class="flex justify-between items-center">
      <time class="m-0 text-sm text-plum-500 dark:text-cream-500" datetime="{{ get_post_time('c', true, $project['id']) }}">
        {{ get_the_date( 'F Y', $project['id'] ) }}
      </time>
      @svg('svg.arrow-narrow-right', 'text-brown-600 h-6 transform ease-in-out duration-100 group-hover:translate-x-2 hide-svg')
    </div>
  </article>
</a>