<div class="max-w-screen-lg px-4 md:px-10 lg:px-8 mx-auto">
  @include('partials.header')

    <main id="main" class="py-8 lg:py-24 prose dark:prose-dark max-w-screen-lg main">
      @yield('content')
    </main>

    @hasSection('sidebar')
      <aside class="sidebar">
        @yield('sidebar')
      </aside>
    @endif

  @include('partials.footer')
</div>
