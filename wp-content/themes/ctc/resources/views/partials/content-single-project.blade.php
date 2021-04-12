<article @php(post_class())>
  <header class="flex flex-col justify-between min-h-half">
    <div class="space-y-4">
      <h1 class="entry-title mb-0">
        {!! $title !!}
        @if ( !empty($site) )
          <a
            href="{{ $site['url'] }}"
            target="{{ $site['target'] }}"
            title="{!! $site['title'] !!}"
            class="inline-flex items-center border-none ml-3 mt-auto hover:border-b-2 text-plum-700 hover:text-plum-500 dark:text-brown-600 dark:hover:text-brown-400"
          >
            <span class="sr-only">{!! $site['title'] !!}</span>
            @svg('svg.external-link', 'h-6 ml-1')
          </a>
        @endif
      </h1>
      @include('partials/entry-meta')
    </div>
    <div>
      <p class="font-mono max-w-screen-md">
        {!! get_the_excerpt() !!}
      </p>
      @include('partials.post-services')
    </div>
    <hr>
  </header>

  <div class="entry-content">
    @php(the_content())
  </div>

  <footer class="flex items-center justify-between mt-8 lg:mt-16">
    @include('components.to-archive-link')
    {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
  </footer>
</article>
