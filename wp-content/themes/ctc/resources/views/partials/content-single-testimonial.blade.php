<article @php(post_class())>
  <header>
    <h1 class="entry-title">
      {!! $title !!}
    </h1>

    <div class="flex space-x-2 lg:space-x-4 items-center font-mono text-xs lg:text-sm">
      <time class="updated" datetime="{{ get_post_time('c', true) }}">
        {{ get_the_date( 'F Y' ) }}
      </time>
    </div>
  </header>

  <div class="entry-content">
    @php(the_content())

    @if ( get_field('source') )
        <p>
          <span class="font-bold">{!! get_field('source') !!}</span>
          @if ( get_field('source_position') )
            <br>
            <span>{!! get_field('source_position') !!}</span>
          @endif
        </p>
    @endif
  </div>

  <footer class="flex items-center justify-between mt-8 lg:mt-16">
    @include('components.to-archive-link')
    {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
  </footer>

  @php(comments_template())
</article>
