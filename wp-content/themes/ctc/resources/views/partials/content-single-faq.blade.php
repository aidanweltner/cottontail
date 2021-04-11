<article @php(post_class())>
  <header class="">
    <div class="flex flex-col-reverse">
      <div class="md:flex items-center md:space-x-4 mt-8 lg:mt-12">
        <h1 class="mb-0 font-normal font-mono text-xs lg:text-sm text-plum-500 dark:text-cream-400">
          {!! $title !!}
        </h1>
        <span class="hidden md:block">•</span>
        @include('partials/entry-meta')
      </div>
      <div class="flex flex-col md:flex-row-reverse md:items-center">
        @svg('svg.'.$svg_icon, 'w-1/2 md:w-1/3 md:pl-4 lg:pl-6')
        <div class="md:w-2/3 space-y-4">
          <h2 class="md:mt-0 text-3xl lg:text-5xl">{!! $main_heading !!}</h2>
          <p class="font-mono max-w-screen-md">
            {!! $sub_heading !!}
          </p>
        </div>
      </div>
    </div>
    <hr class="mt-2">
  </header>

  <div class="entry-content">
    @php(the_content())
  </div>

  <footer>
    {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
  </footer>
</article>
