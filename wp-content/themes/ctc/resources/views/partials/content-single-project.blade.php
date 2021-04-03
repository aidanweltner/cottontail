<article @php(post_class())>
  <header class="flex flex-col justify-between min-h-half">
    <div>
      <h1 class="entry-title mb-0">
        {!! $title !!}
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

  <footer>
    {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
  </footer>
</article>
