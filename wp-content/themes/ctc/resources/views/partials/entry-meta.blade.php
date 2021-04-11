<div class="flex space-x-2 lg:space-x-4 items-center font-mono text-xs lg:text-sm">
  <time class="updated" datetime="{{ get_post_time('c', true) }}">
    {{ get_the_date( 'F Y' ) }}
  </time>

  <span>•</span>
  
  <p class="byline author vcard m-0">
    <span>{{ __('by', 'sage') }}</span>
    <a href="{{ get_author_posts_url(get_the_author_meta('ID')) }}" rel="author" class="fn border-none">
      {{ get_the_author() }}
    </a>
  </p>
</div>
