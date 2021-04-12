<div {!! isset($id) ? 'id="'.$id.'"' : '' !!} class="ctc-block bg-yellow-100 dark:bg-brown-600 rounded-md shadow-lg inline py-3">
  <a
    class="button"
    href="{{ $link['url']}}"
    title="{{ $link['title'] }}"
    {{ $link['target'] ? 'target="'.$link['target'].'"' : ''}} >
      {!! $link['title'] !!}
      @svg( 'svg.arrow-narrow-right', 'h-5 ml-3')
  </a>
</div>