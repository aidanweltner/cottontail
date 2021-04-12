{{-- 
  Title: Services List
  Description: List of services, selected or in post
  Category: cottontail
  Icon: editor-ul
  EnqueueStyle: styles/blocks.css
--}}
@php
    $service_title = get_field('title');
    $acf = get_field('services');
    if ( !empty($acf) ) {
      $vars = [
        'services' => $acf,
      ];
    } else {
      $vars = [
        'services' => get_the_terms( get_the_ID(), 'service'),
      ];
    }
@endphp
<div class="ctc-block">
  <h2>{!! $service_title !!}</h2>
  @include('components.services-list', $vars)
</div>