<header class="banner relative flex justify-between items-center py-4">
  <a class="brand inline-flex items-center font-sans font-bold text-2xl h-10 focus:bg-blue-400 dark:focus:bg-plum-800" href="{{ home_url('/') }}">
    @svg('svg.rabbit', 'h-8 mr-3')
    {{ $siteName }}
  </a>

  <p class="hidden md:block font-mono text-plum-800 dark:text-cream-300">
    {{ $tagline }}
  </p>

  <button class="hamburger hamburger--collapse h-10 focus:ring-2 focus:bg-blue-400 dark:focus:bg-plum-800 ring-blue-600" type="button" aria-label="Menu" aria-controls="navigation">
    <span class="hamburger-label mr-2 text-2xl font-bold font-sans text-plum-900 dark:text-cream-300">Menu</span>
    <span class="hamburger-box">
      <span class="hamburger-inner"></span>
    </span>
  </button>
  <div id="nav-wrap" class="hidden bg-blue-400 dark:bg-plum-800 absolute -bottom-full -right-4 md:-right-6 lg:-right-8 px-4 md:px-6 lg:px-8 py-6 justify-end w-screen max-w-screen-lg">
    <nav class="nav-primary">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav flex space-x-3 text-plum-900 dark:text-cream-300', 'echo' => false]) !!}
      @endif
    </nav>
  </div>
</header>
