{{-- 
  Title: Button
  Description: Button for cottontail creative
  Category: cottontail
  Icon: button
  EnqueueStyle: styles/blocks.css
--}}
@php
    $button = [
      'link'    => get_field('link'),
      'id'      => $block['id'],
    ]
@endphp
@include('components.button', $button )