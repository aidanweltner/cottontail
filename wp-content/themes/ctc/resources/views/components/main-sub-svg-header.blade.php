<header>
  <div class="flex flex-col-reverse">
    <div class="md:flex items-center md:space-x-4 mt-8 lg:mt-16">
      <h1 class="mb-0 font-normal font-mono text-xs lg:text-sm text-plum-500 dark:text-cream-400">
        @include('partials.page-header')
      </h1>
      @if ( is_tax() == false )
        <span class="hidden md:block">•</span>
        @include('partials/entry-meta')
      @endif
    </div>
    <div class="flex flex-col md:flex-row-reverse md:justify-end md:items-center">
      @if ( $svg_icon != 'none' && !empty($svg_icon))
        @svg('svg.'.$svg_icon, 'w-1/2 md:w-1/3 md:pl-4 lg:pl-6')
      @endif
      <div class="{{$svg_icon != 'none' && !empty($svg_icon) ? 'md:w-2/3' : ''}} space-y-4">
        {{-- Main H2 tag --}}
        <h2 class="md:mt-0 text-3xl lg:text-5xl">
          @if ( !empty($main_heading) )
            {!! $main_heading !!}
          @else
            @include('partials.page-header')
          @endif
        </h2>
        {{-- Sub heading if populated --}}
        @if ( !empty($sub_heading) )
          <p class="font-mono max-w-screen-md">
            {!! $sub_heading !!}
          </p>
        @endif
        {{-- Button if populated --}}
        @includeWhen( !empty($header_cta), 'components.button', [
          'link'    => $header_cta,
        ])  
      </div>
    </div>
  </div>
  <hr class="mt-2">
</header>