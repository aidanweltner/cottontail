{{--
  Template Name: Service Archive
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    <header>
      <h1 class="md:mt-0 text-3xl lg:text-5xl">
        @include('partials.page-header')
      </h1>
    </header>
    <hr>
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-3 lg:gap-4">
      @foreach ($menu_services as $service)
        <article class="border-none p-4 bg-white dark:bg-plum-800 rounded-md group hover:bg-gray-200 dark:hover:bg-plum-700 project-card">
          <header>
            <a class="border-none group-hover:border-2" href="{{ get_term_link( $service ) }}" title="{!! 'Service: '.$service->name !!}">
              <h2 class="mt-0 text-brown-800 dark:text-brown-400 group-hover:underline">{!! $service->name !!}</h2>
            </a>
          </header>
          <p>{!! get_field('main_heading', $service->taxonomy . '_' . $service->term_id ) !!}</p>
        </article>          
      @endforeach
    </div>
    @include('partials.content-page')
  @endwhile
@endsection
