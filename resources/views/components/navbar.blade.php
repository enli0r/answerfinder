<div
    x-data="{dropdown:false}"
    class="navbar flex items-center justify-between relative">

    <a href="{{ route('posts.index') }}" class="uppercase text-black text-base font-semibold">answerfinder</a>
    <div class="flex items-center justify-between">
        @if (Route::has('login'))
            <div class="px-6 py-4">
                
            </div>
        @endif

        <button
            @click="dropdown=!dropdown"
            class="flex items-center p-1 rounded-lg hover:bg-white transition">
            <img src="https://icon-library.com/images/no-user-image-icon/no-user-image-icon-27.jpg" alt="xd" class="w-10 h-10 rounded-lg">

            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 font-bold" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
        </button>
    </div>

    {{-- dropdown --}}
    <div
        x-cloak
        x-show="dropdown" 
        @click.away="dropdown=false"
        class="absolute top-16 right-0 bg-white rounded-lg z-50 py-3 flex flex-col shadow-dialog">

        @guest
            @if (Route::has('register'))
                <a href="{{ route('login') }}" class="hover:bg-gray-200 px-8 py-2 transition">Log in</a>
            @endif

            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="hover:bg-gray-200 px-8 py-2 transition">Register</a>
            @endif
        @endguest    


        @auth
            <a href="#" class="hover:bg-gray-200 px-8 py-2 transition">My profile</a>

            <form class="w-full flex" method="POST" action="{{ route('logout') }}">
                @csrf

                <a class="w-full hover:bg-gray-200 px-8 py-2 transition" href="route('logout')"
                    onclick="event.preventDefault();
                    this.closest('form').submit();">
                        Sign out
                </a>
            </form>
        @endauth
    </div>

</div>