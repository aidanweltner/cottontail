<div class="border-none p-4 bg-white dark:bg-plum-800 rounded-md group hover:bg-gray-200 dark:hover:bg-plum-700 project-card">
  <article @php(post_class('post-card'))>
    <div class="mt-4">
      <a href="{{ get_permalink() }}" title="{{ $title }}">
        <h2 class="mt-0 text-brown-800 dark:text-brown-400 group-hover:underline">{!! $title !!}</h2>
      </a>
      <p class="text-xs text-plum-500 dark:text-cream-400 font-bold font-mono">
        {!! get_the_excerpt() !!}
      </p>
    </div>
    <div class="flex justify-between items-center">
      <time class="m-0 text-sm text-plum-500 dark:text-cream-500" datetime="{{ get_post_time('c', true) }}">
        {{ get_the_date( 'F Y' ) }}
      </time>
      <a class="border-none" href="{{ get_permalink() }}" title="{{ $title }}">
        @svg('svg.arrow-narrow-right', 'text-brown-600 h-6 transform ease-in-out duration-100 group-hover:translate-x-2')
      </a>
    </div>
  </article>
</div>