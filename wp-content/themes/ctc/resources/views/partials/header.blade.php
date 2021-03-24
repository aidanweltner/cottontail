<header class="banner relative flex justify-between items-center py-4">
  <a class="brand inline-flex items-center font-sans font-bold text-2xl" href="{{ home_url('/') }}">
    @svg('svg.rabbit', 'h-8 mr-3')
    {{ $siteName }}
  </a>

  <p class="font-mono text-plum-800 dark:text-cream-300">
    {{ $tagline }}
  </p>

  <button class="hamburger hamburger--collapse" type="button" aria-label="Menu" aria-controls="navigation">
    <span class="hamburger-label mr-2 text-2xl font-bold font-sans text-plum-900 dark:text-cream-300">Menu</span>
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
