<footer class="">
  @if ( $footer_contact )
      @include('components.footer-contact')
  @endif
  <div class="py-2 lg:py-4 site-footer flex justify-between text-plum-400 dark:text-cream-400">
    <p>
      © {!! date('Y') !!}
      @if ( $copyright )
          {!! $copyright !!}
      @endif
    </p>
    @php(dynamic_sidebar('sidebar-footer'))
  </div>
</footer>
