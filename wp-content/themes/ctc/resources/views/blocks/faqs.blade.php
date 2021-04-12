{{-- 
  Title: FAQs
  Description: Short section of selected FAQs
  Category: cottontail
  Icon: editor-ul
  EnqueueStyle: styles/blocks.css
--}}
@php
    $faqs_services = [
      'service_title'   => get_field('services_title'),
      'services'        => get_field('services'),
      'faq_title'       => get_field('faqs_title'),
      'faqs'            => get_field('faqs'),
    ];
@endphp
@include('components.faqs-services', $faqs_services)