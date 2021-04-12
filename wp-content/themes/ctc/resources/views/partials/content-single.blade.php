<article @php(post_class())>
  <header>
    <h1 class="entry-title">
      {!! $title !!}
    </h1>

    @include('partials/entry-meta')
  </header>

  <div class="entry-content">
    @php(the_content())
  </div>

  <footer class="flex items-center justify-between mt-8 lg:mt-16">
    @include('components.to-archive-link')
    {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
  </footer>

  @php(comments_template())
</article>
