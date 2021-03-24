<header class="banner relative flex justify-between items-center">
  <a class="brand" href="{{ home_url('/') }}">
    {{ $siteName }}
  </a>

  <button class="hamburger hamburger--collapse" type="button" aria-label="Menu" aria-controls="navigation">
    <span class="hamburger-label mr-2">Menu</span>
    <span class="hamburger-box">
      <span class="hamburger-inner"></span>
    </span>
  </button>
  <div id="nav-wrap" class="hidden absolute -bottom-full right-0">
    <nav class="nav-primary">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav flex space-x-3', 'echo' => false]) !!}
      @endif
    </nav>
  </div>
</header>
