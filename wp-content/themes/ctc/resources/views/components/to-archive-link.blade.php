@php
    $type = get_post_type();

    if ( $type == 'faq' ) {
      $type_name = 'common issue';
    }
@endphp
<a class="inline-flex items-center" href="{{ get_post_type_archive_link($type) }}">
  @svg('svg.arrow-narrow-left', 'h-6 pr-4')
  @php( $type = $type_name ?? $type )
  {!! __( 'Back to all '.$type.'s', 'sage' ) !!}
</a>