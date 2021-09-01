{{-- 
  Title: Testimonial Block
  Description: Add testimonial
  Category: cottontail
  Icon: format-quote
--}}
@php
    extract( get_fields() );
    
    $post_id = get_the_ID();

    if ( $post_testimonial ) {
      $testimonial = get_field('testimonial', $post_id );

      $quote = $testimonial->post_content;
      $source = get_field('source', $testimonial->ID);
      $source_position = get_field('source_position', $testimonial->ID);
      $source_company = get_field('source_company', $testimonial->ID);
    }
@endphp
<div class="p-4 lg:p-8 mb-4 lg:mb-8 bg-white dark:bg-plum-800 shadow-md dark:shadow-lg rounded-md testimonial-block">
  @if ( !empty($text_above) ) <p class="text-above mt-0 font-bold lg:text-lg mb-4 lg:mb-8">{{ $text_above }}</p> @endif
  <blockquote class="m-auto p-0 border-none">
    <div class="text-lg lg:text-xl mb-4 lg:mb-8 ">
      @if ( !$post_testimonial ) <p> @endif
        {!! $quote !!}
      @if ( !$post_testimonial ) </p> @endif
    </div>
    <cite class="lg:text-lg font-light">{!! $source !!}, <em class="font-bold">{!! $source_position !!}</em> <span class="font-light">{!! $source_company !!}</span></cite>
  </blockquote>

</div>