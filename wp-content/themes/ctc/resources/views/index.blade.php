@extends('layouts.app')

@section('content')

  <h1>@include('partials.page-header')</h1>
  <hr>

  @if (! have_posts())
    <x-alert type="warning">
      {!! __('Sorry, no results were found.', 'sage') !!}
    </x-alert>

    {!! get_search_form(false) !!}
  @endif

  <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-3 lg:gap-4">
    @while(have_posts()) @php(the_post())
      @includeFirst(['partials.content-' . get_post_type(), 'partials.content'])
    @endwhile
  </div>

  {!! get_the_posts_navigation() !!}
@endsection
