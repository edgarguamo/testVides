<header class="headerLayout">
    <div class="logo">
        V
    </div>
    <nav class="principal-nav">
        @if (Route::has('login'))
            @auth
                <a href="{{asset('/')}}">Home</a>
                <a href="">Hotels</a>
                <a href="#">Places</a>
                <a href="{{url('/dashboard')}}">Panel de Usuario</a>
                <a href="#">Help</a>
            @else
                <a href="{{asset('/')}}">Home</a>
                <a href="">Hotels</a>
                <a href="#">Places</a>
                <a href="{{ route('login') }}">Login</a>
                <a href="{{route('register')}}">Register</a>
                <a href="#">Help</a>
            @endauth
        @endif
        
    </nav>
</header>