@extends('layouts.app')

@section('content')
  @include('components.main-sub-svg-header')

  @if (! have_posts())
    <x-alert type="warning">
      {!! __('Sorry, no results were found.', 'sage') !!}
    </x-alert>

    {!! get_search_form(false) !!}
  @else
    @if ( !empty($long_description) )
      <div class="prose dark:prose-dark mb-6 lg:mb-12">
        {!! $long_description !!}
      </div>
    @endif

    <p class="font-sans font-bold text-xl mb-1 lg:mb-3">
      @if ( !empty($project_desc) )
         {!! $project_desc !!}
      @else
        {!! __('Recent works', 'sage') !!} 
      @endif
    </p>
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-3 lg:gap-4">
      @while(have_posts()) @php(the_post())
        @include('partials.content')
      @endwhile
    </div>

    {!! get_the_posts_navigation() !!}

    @if( !empty($faq_section['faqs_services']['faqs']) && !empty($faq_section['faqs_services']['services']) )
        <hr class="my-16 lg:my-24">
        <h2 class="lg:text-3xl max-w-screen-md">{!! $faq_section['heading'] !!}</h2>
        <p class="max-w-screen-sm">{!! $faq_section['paragraph'] !!}</p>
        @include('components.faqs-services', $faq_section['faqs_services'])
        @includeWhen(!empty($faq_section['cta']), 'components.button', [
          'link' => $faq_section['cta']
        ])
    @endif

  @endif
@endsection