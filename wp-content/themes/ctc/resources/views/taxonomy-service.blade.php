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
  @endif
@endsection