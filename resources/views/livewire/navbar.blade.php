<nav class="bg-background"  x-data="{ open: false }">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8" >
    <div class="flex items-center justify-between h-16">
      <div class="flex items-center">
        <div class="flex-shrink-0">
          <a href="#" class="text-text">
            Robert Watkin
          </a>
        </div>
        <div class="hidden md:block">
          <div class="ml-10 flex items-baseline space-x-4">
            <a href="{{ route('index') }}" class="text-text hover:text-gray-600 px-3 py-2 rounded-md text-sm font-medium">Home</a>
            <a href="{{ route('projects.index') }}" class="text-text hover:text-gray-600 px-3 py-2 rounded-md text-sm font-medium">Projects</a>
            <a href="#" class="text-text hover:text-gray-600 px-3 py-2 rounded-md text-sm font-medium">Contact</a>
          </div>
        </div>
      </div>
      <div class="-mr-2 flex md:hidden">
        <!-- Mobile menu button -->
        <button type="button" @click="open = true"
          class="bg-gray-900 inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white"
          aria-controls="mobile-menu" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <!-- Icon when menu is closed. -->
          <!--
              Heroicon name: outline/menu
  
              Menu open: "hidden", Menu closed: "block"
            -->
          <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
            stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
          </svg>
          <!-- Icon when menu is open. -->
          <!--
              Heroicon name: outline/x
  
              Menu open: "block", Menu closed: "hidden"
            -->
          <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
            stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
          </svg>
        </button>
      </div>
    </div>
  </div>
  <!-- Mobile menu, show/hide based on menu state. -->
  <div class="md:hidden" id="mobile-menu" x-show="open" @click.outside="open = false">
    <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
      <a href="{{ route('index') }}" class="text-text hover:text-gray-600 block px-3 py-2 rounded-md text-base font-medium">Home</a>
      <a href="{{ route('projects.index') }}" class="text-text hover:text-gray-600 block px-3 py-2 rounded-md text-base font-medium">Projects</a>
      <a href="#" class="text-text hover:text-gray-600 block px-3 py-2 rounded-md text-base font-medium">Contact</a>
    </div>
  </div>
</nav>