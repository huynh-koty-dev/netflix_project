<header>
    <a href="{{ route('home') }}" class="logo">
        <img src="{{ asset('images/logo-removebg-preview.png') }}">
    </a>
    <div class="menuToggle" onclick="toggleMenu()"></div>
    <ul class="navigation">
        <li><a href="{{ route('home') }}" >Home</a></li>
        <li><a href="">TV Show</a></li>
        <li><a href="">Movies</a></li>
        <li><a href="">Upcoming</a></li>
        <li><a href="">Kids</a></li>
        <li><a href="">Setting</a></li>
        <li><a href="{{ route('logout') }}">Logout out</a></li>
        <li><a href=""><i class="fas fa-search"></i></a></li>
    </ul>
</header>
