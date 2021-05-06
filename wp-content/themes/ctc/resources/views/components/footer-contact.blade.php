<div class="prose dark:prose-dark max-w-screen-lg pb-16 lg:pb-24">
  <hr class="mb-16 lg:mb-24">
  <h2 class="text-plum-500 dark:text-cream-500 text-lg font-mono mb-4">{!! __('Contact', 'sage') !!}</h2>
  <p class="text-plum-900 dark:text-cream-300 text-3xl lg:text-4xl font-sans font-bold mb-0">
    {!! $footer_contact['heading'] !!}
  </p>
  @if ( !empty($footer_contact['description']) )
      <p class="font-mono max-w-screen-md mt-4">
        {!! $footer_contact['description'] !!}
      </p>
  @endif
  @if ( !empty($footer_contact['button']['link']) )
      @include('components.button', $footer_contact['button'] )
  @endif
</div>