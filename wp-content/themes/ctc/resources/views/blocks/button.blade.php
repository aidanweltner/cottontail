{{-- 
  Title: Button
  Description: Button for cottontail creative
  Category: cottontail
  Icon: button
  EnqueueStyle: styles/blocks.css
--}}
@php
    $link = get_field('link');
@endphp
<div class="ctc-block bg-yellow-100 dark:bg-brown-600 rounded-md shadow-lg inline py-3">
  <a
    id="{{ $block['id']}}"
    class="button"
    href="{{ $link['url']}}"
    title="{{ $link['title'] }}"
    {{ $link['target'] ? 'target="'.$link['target'].'"' : ''}} >
      {!! $link['title'] !!}
      @svg( 'svg.arrow-narrow-right', 'h-5 ml-3')
  </a>
</div>