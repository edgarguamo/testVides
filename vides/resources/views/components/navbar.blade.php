<nav class="flex w-full items-center justify-between flex-wrap bg-teal p-6 fixed bg-white shadow-2xl z-40">
<div class="flex items-center flex-no-shrink text-white mr-6 ">
    <svg class="h-8 w-8 mr-2" width="100" height="107" viewBox="0 0 100 107" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" clip-rule="evenodd" d="M50 107C77.6142 107 100 83.0476 100 53.5004C100 23.9531 77.6142 0.000366211 50 0.000366211C22.3858 0.000366211 0 23.9531 0 53.5004C0 83.0476 22.3858 107 50 107ZM46.0206 87.6385C48.3539 87.6385 50.5873 87.1719 52.7206 86.2385C54.8539 80.3719 57.9873 73.7385 62.1206 66.3385C66.3206 58.8719 69.7873 52.5385 72.5206 47.3385C75.3206 42.0719 76.7206 38.1052 76.7206 35.4385C76.7206 32.1719 73.9873 29.1385 68.5206 26.3385C68.5206 34.0719 62.5873 49.4385 50.7206 72.4385C50.4539 70.7719 50.0539 67.3385 49.5206 62.1385C48.9873 56.8719 48.7206 53.8719 48.7206 53.1385C48.7206 52.4052 48.2539 48.8385 47.3206 42.4385C46.9873 40.5052 46.4206 38.0719 45.6206 35.1385C44.8873 32.1385 43.9539 30.1385 42.8206 29.1385C41.6873 28.1385 40.0206 27.6385 37.8206 27.6385C35.6206 27.6385 32.6873 28.5052 29.0206 30.2385C31.0206 33.5052 32.7206 38.3385 34.1206 44.7385C35.5873 51.0719 37.0206 58.5052 38.4206 67.0385C39.8206 75.5052 41.0539 81.8719 42.1206 86.1385C42.3873 87.1385 43.6873 87.6385 46.0206 87.6385Z" fill="#40D2A6" fill-opacity="0.8"/>
    </svg>
    <span class="font-semibold text-xl tracking-tight text-black">Vides</span>
</div>
<div class="block lg:hidden">
    <button class="flex items-center px-3 py-2 border rounded text-teal-lighter border-teal-light hover:text-white hover:border-white">
    <svg class="h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
    </button>
</div>
<div class="w-full block flex-grow lg:flex lg:items-end lg:w-auto">
    <div class="text-sm lg:flex-grow ">
        @if (Route::has('login'))
            @auth
                <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-teal-lighter hover:text-white mr-4 ">
                    Hoteles
                </a>
                <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-teal-lighter hover:text-white mr-4">
                    Lugares Turisticos
                </a>
                <a <a href="{{url('/dashboard')}}" class="block mt-4 lg:inline-block lg:mt-0 text-teal-lighter hover:text-white   mr-4">
                    Panel de Usuario
                </a>
                <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-teal-lighter hover:text-white">
                    Help
                </a>
            @else
                <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-teal-lighter hover:text-white mr-4 ">
                    Hoteles
                </a>
                <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-teal-lighter hover:text-white mr-4">
                    Lugares Turisticos
                </a>
                <a href="{{ route('login') }}" class="block mt-4 lg:inline-block lg:mt-0 text-teal-lighter hover:text-white   mr-4">
                    Login
                </a>
                <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-teal-lighter hover:text-white">
                    Help
                </a>
        @endauth
    @endif
    </div>    
</div>
</nav>