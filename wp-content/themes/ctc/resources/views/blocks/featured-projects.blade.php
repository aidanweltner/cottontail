{{-- 
  Title: Featured Projects
  Description: Add three featured projects to any page
  Category: cottontail
  Icon: category
--}}
@php
    $projects = get_field('projects');
    $title = get_field('title');
@endphp

<div id="{{ $block['id'] }}" class="ctc-block pt-12 mb-4">
  @if ( !empty($title) )
    <p class="font-sans font-bold text-xl mb-1 lg:mb-3">{!! $title !!}</p>
  @endif
  <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-3 lg:gap-4">
    @foreach ($projects as $project)
        @include('components.project-card')
    @endforeach
  </div>
</div>