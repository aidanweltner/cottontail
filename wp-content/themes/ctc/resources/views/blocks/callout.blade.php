{{-- 
  Title: Callout
  Description: Add a callout section
  Category: cottontail
  Icon: align-center
  Mode: preview
  SupportsInnerBlocks: true
--}}
<div class="p-4 lg:p-8 mb-4 lg:mb-8 bg-white dark:bg-plum-800 shadow-md dark:shadow-lg rounded-md callout-block">
  @if ( !empty($text_above) ) <p class="text-above mt-0 font-bold lg:text-lg mb-4 lg:mb-8">{{ $text_above }}</p> @endif
  <InnerBlocks />
</div>
