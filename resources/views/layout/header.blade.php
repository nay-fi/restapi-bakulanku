<header class="bg-white">
    <nav class="mx-auto flex max-w-7xl items-center justify-between p-4 lg:px-8 bg-orange-500" aria-label="Global">
      <div class="lg:flex lg:gap-x-4 lg:justify-end lg:align-middle">
        @auth
        <a href="/" class="text-lg font-semibold leading-6 text-gray-100 py-2 px-4 rounded-md hover:bg-orange-400">Home</a>
        <a href="{{route('admin.dashboard')}}" class="text-lg font-semibold leading-6 text-gray-100 py-2 px-4 rounded-md hover:bg-orange-400">Order</a>
        @endauth
      </div>

      <div class="lg:justify-end hover:bg-orange-400 py-2 px-2 rounded-md">
        <a href="/ceklogin" class="text-lg font-semibold leading-6 inline-flex text-gray-100">Sign In &nbsp;<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 9V5.25A2.25 2.25 0 0 1 10.5 3h6a2.25 2.25 0 0 1 2.25 2.25v13.5A2.25 2.25 0 0 1 16.5 21h-6a2.25 2.25 0 0 1-2.25-2.25V15M12 9l3 3m0 0-3 3m3-3H2.25" />
          </svg>
          </a>
      </div>

      @auth
      <div class=" lg:justify-end hover:bg-orange-400 py-2 px-2 rounded-md">
        <a href="{{route('ceklogout')}}" class="text-lg font-semibold leading-6 inline-flex text-gray-100">Logout &nbsp;<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 9V5.25A2.25 2.25 0 0 1 10.5 3h6a2.25 2.25 0 0 1 2.25 2.25v13.5A2.25 2.25 0 0 1 16.5 21h-6a2.25 2.25 0 0 1-2.25-2.25V15M12 9l3 3m0 0-3 3m3-3H2.25" />
          </svg>
          </a>
      </div>
      @endauth
    </nav>
  </header>
