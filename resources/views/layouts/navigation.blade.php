<nav x-data="{ open: false }" class="bg-blue-700 shadow-lg">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex items-center">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <x-application-logo class="block h-9 w-auto fill-current text-white" />
                    </a>
                </div>

                <!-- Navigation Links - High contrast white text -->
                <div class="hidden space-x-2 sm:-my-px sm:ms-10 sm:flex">
                    @auth
                        <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" 
                            class="bg-emerald-600 text-white font-semibold hover:bg-emerald-700 px-4 py-2 rounded-lg text-sm shadow-sm transition-colors duration-200">
                            {{ __('Dashboard') }}
                        </x-nav-link>

                        <x-nav-link :href="route('products.index')" :active="request()->routeIs('products.index')" 
                            class="bg-emerald-600 text-white font-semibold hover:bg-emerald-700 px-4 py-2 rounded-lg text-sm shadow-sm transition-colors duration-200">
                            {{ __('Browse Products') }}
                        </x-nav-link>

                        <x-nav-link :href="route('products.create')" :active="request()->routeIs('products.create')" 
                            class="bg-emerald-600 text-white font-semibold hover:bg-emerald-700 px-4 py-2 rounded-lg text-sm shadow-sm transition-colors duration-200">
                            {{ __('Sell an Item') }}
                        </x-nav-link>
                    @else
                        <x-nav-link :href="route('products.index')" :active="request()->routeIs('products.index')" 
                            class="bg-emerald-600 text-white font-semibold hover:bg-emerald-700 px-4 py-2 rounded-lg text-sm shadow-sm transition-colors duration-200">
                            {{ __('Browse Products') }}
                        </x-nav-link>
                    @endauth
                </div>
            </div>

            <!-- Settings Dropdown - High contrast -->
            @auth
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-semibold rounded-lg text-white bg-emerald-600 hover:bg-emerald-700 focus:outline-none transition ease-in-out duration-150 shadow-sm">
                            @if(Auth::check())
                            <div class="text-white">{{ Auth::user()->user_name }}</div>
                            @endif
                            <div class="ms-1">
                                <svg class="fill-current h-4 w-4 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')" class="text-gray-800 font-medium hover:bg-emerald-50">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link :href="route('logout')" class="text-gray-800 font-medium hover:bg-emerald-50"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>
            @else
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <a href="{{ route('login') }}" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-semibold rounded-lg text-white bg-emerald-600 hover:bg-emerald-700 focus:outline-none transition ease-in-out duration-150 shadow-sm">
                    {{ __('Login') }}
                </a>
                <a href="{{ route('register') }}" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-semibold rounded-lg text-white bg-emerald-600 hover:bg-emerald-700 focus:outline-none transition ease-in-out duration-150 shadow-sm ms-2">
                    {{ __('Register') }}
                </a>
            @endauth
            
            <!-- Hamburger - Clear visibility -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-lg text-white hover:bg-emerald-700 focus:outline-none transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu - Enhanced visibility -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden bg-blue-700">
        <div class="pt-2 pb-3 space-y-2 px-2">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" 
                class="bg-emerald-600 text-white font-semibold hover:bg-emerald-700 block px-4 py-3 rounded-lg text-base shadow-sm">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>

            <x-responsive-nav-link :href="route('products.index')" :active="request()->routeIs('products.index')" 
                class="bg-emerald-600 text-white font-semibold hover:bg-emerald-700 block px-4 py-3 rounded-lg text-base shadow-sm">
                {{ __('Browse Products') }}
            </x-responsive-nav-link>

            <x-responsive-nav-link :href="route('products.create')" :active="request()->routeIs('products.create')" 
                class="bg-emerald-600 text-white font-semibold hover:bg-emerald-700 block px-4 py-3 rounded-lg text-base shadow-sm">
                {{ __('Sell an Item') }}
            </x-responsive-nav-link>
        </div>

        <!-- User Section - Improved contrast -->
        <div class="pt-4 pb-2 border-t border-emerald-500/30 px-2">
            <div class="px-3 py-2">
                @if(Auth::check())
                <div class="font-semibold text-lg text-white">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-emerald-200">{{ Auth::user()->email }}</div>
                @endif
            </div>

            <div class="mt-3 space-y-2">
                <x-responsive-nav-link :href="route('profile.edit')" 
                    class="bg-emerald-600 text-white font-semibold hover:bg-emerald-700 block px-4 py-3 rounded-lg text-base shadow-sm">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-responsive-nav-link :href="route('logout')" 
                        class="bg-emerald-600 text-white font-semibold hover:bg-emerald-700 block px-4 py-3 rounded-lg text-base shadow-sm"
                        onclick="event.preventDefault();
                                    this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>