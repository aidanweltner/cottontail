<header class="banner z-50 fixed top-0 inset-x-0 bg-blue-300 dark:bg-plum-900">
  <div class="relative max-w-screen-lg px-4 md:px-10 lg:px-8 mx-auto w-full flex justify-between items-center py-4">
    <a class="brand inline-flex items-center font-sans font-bold text-2xl h-10 focus:bg-blue-400 dark:focus:bg-plum-800" href="{{ home_url('/') }}">
      @svg('svg.rabbit', 'h-8 mr-3')
      {!! $siteName !!}
    </a>
    <p class="hidden md:block font-mono text-plum-800 dark:text-cream-300">
      {!! $tagline !!}
    </p>
    <button class="hamburger hamburger--collapse h-10 focus:ring-2 focus:bg-blue-400 dark:focus:bg-plum-800 ring-blue-600 relative z-60" type="button" aria-label="Menu" aria-controls="navigation">
      <span class="hamburger-label mr-2 text-2xl font-bold font-sans text-plum-900 dark:text-cream-300">Menu</span>
      <span class="hamburger-box">
        <span class="hamburger-inner"></span>
      </span>
    </button>
    <div id="nav-wrap" class="hidden absolute z-50 -top-full right-0 justify-end w-screen max-w-screen-lg">
      <div class="block relative mr-4 md:mr-8 lg:mr-6">
        <div class="h-24"></div>
        <nav class="nav-primary py-12 relative space-y-3 text-right max-h-screen pr-4 md:pr-8 lg:pr-6  overflow-auto">
          @if (has_nav_menu('primary_navigation'))
            {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav space-y-3 text-plum-900 dark:text-cream-300', 'echo' => false]) !!}
          @endif
          @includeWhen( !empty($menu_services), 'components.menu.service-list')
        </nav>
      </div>
    </div>
  </div>
  <div id="menu-bg" class="z-20 bg-blue-400 dark:bg-plum-800 shadow-lg absolute top-0 lg:left-1/2 h-screen w-screen lg:w-screen-half transform transition-transform ease-in-out duration-200 scale-x-0 origin-right"></div>
</header>
