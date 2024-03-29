{{-- 
  Title: Main, sub & SVG layout
  Description: Add main heading & SVG icon to layout
  Category: cottontail
  Icon: align-pull-right
--}}
@php
  extract(get_fields());
@endphp
<div id="{{ $block['id'] }}">
  <div class="flex flex-col md:flex-row-reverse md:justify-end md:items-center">
    @if ( $svg_icon != 'none' && !empty($svg_icon))
      @svg('svg.'.$svg_icon, 'w-1/2 md:w-1/3 md:pl-4 lg:pl-6')
    @endif
    <div class="{{$svg_icon != 'none' && !empty($svg_icon) ? 'md:w-2/3' : ''}} space-y-4">
      @if ( isset($pre_heading) && $pre_heading )
          <h1 class="pre-heading {{$svg_icon != 'none' && !empty($svg_icon) ? 'mt-4 sm:mt-0' : ''}}">
            {!! $pre_heading !!}
          </h1>
      @endif
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