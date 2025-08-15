  <nav class="bg-white dark:bg-slate-800">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="flex h-16 items-center justify-between">
        
        <!-- Clickablke Home Logo -->
        <div class="flex items-center">
          <div class="shrink-0 flex items-center space-x-2">
            <a href="{{route('home')}}" class="flex items-center space-x-2">
              <!-- Icons8 -->
              <img width="40" height="40" src="https://img.icons8.com/ultraviolet/40/meeting-room.png" alt="meeting-room"/>
              <!-- DoodleTech logo -->
              <img width="250" height="40" src="{{ asset('images/doodletech.svg') }}" alt="DoodleTech"/>
            </a>
          </div>
        </div>

        <!-- Nav Links -->
        <div class="hidden md:block">
          <div class="ml-10 flex items-baseline space-x-4">
            <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
            <x-nav-link href="/services" :active="request()->is('services')" >Services</x-nav-link>
            <x-nav-link href="/contact" :active="request()->is('contact')" >Contact</x-nav-link>
            <x-nav-link href="/blog" :active="request()->is('blog')" >Blog</x-nav-link>
          </div>
        </div>

        <!-- Mobile Menu Button -->
        <div class="-mr-2 flex md:hidden">
          <button type="button" command="--toggle" commandfor="mobile-menu" class="relative inline-flex items-center justify-center rounded-md bg-white dark:bg-slate-800 p-2 text-slate-400 hover:bg-slate-700 hover:text-white focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-slate-800 focus:outline-hidden">
            <span class="absolute -inset-0.5"></span>
            <span class="sr-only">Open main menu</span>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6 in-aria-expanded:hidden">
              <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6 not-in-aria-expanded:hidden">
              <path d="M6 18 18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
          </button>
        </div>

      </div>
    </div>

    <!-- Mobile nav Links -->
    <el-disclosure id="mobile-menu" hidden class="block md:hidden">
      <div class="space-y-1 px-2 pt-2 pb-3 sm:px-3">
        <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
        <x-nav-link href="/services" :active="request()->is('services')" >Services</x-nav-link>
        <x-nav-link href="/contact" :active="request()->is('contact')">Contact</x-nav-link>
        <x-nav-link href="/blog" :active="request()->is('blog')">Blog</x-nav-link>
      </div>
    </el-disclosure>
  </nav>