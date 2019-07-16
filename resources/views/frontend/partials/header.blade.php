
  <header class="header-area">
    <div class="classy-nav-container breakpoint-off">
        <div class="container">
            <!-- Classy Menu -->
            <nav class="classy-navbar justify-content-between" id="conferNav">

                <!-- Logo -->
                <a class="nav-brand" href="/"><img src="/images/logo.png" alt=""></a>

                <!-- Navbar Toggler -->
                <div class="classy-navbar-toggler">
                    <span class="navbarToggler"><span></span><span></span><span></span></span>
                </div>

                <!-- Menu -->
                <div class="classy-menu">
                    <!-- Menu Close Button -->
                    <div class="classycloseIcon">
                        <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                    </div>
                    <!-- Nav Start -->
                    <div class="classynav">
                        <ul id="nav">
                            <li class="active"><a href="/">Home</a></li>
                                <li><a href="#">Reservation</a>
                                    <ul class="dropdown">
                                        <li><a href="#">Car</a></li>
                                        <li><a href="#">Jeep</a></li>
                                        <li><a href="#">Micro Bus</a></li>
                                        <li><a href="#">Bus</a></li>    
                                    </ul>
                                </li>
                            
                            <li><a href="{{ route('search.buses') }}">Book Ticket</a></li>
                                <li><a href="{{ route('contact') }}">Contact</a></li>
                                @if (Auth::guest())
                                <li><a href="{{ route('login') }}">Login</a></li>
                                <li><a href="{{ route('register') }}">Register</a></li>
                                @else
                                    <li class="dropdown">
                                        <a href="#">
                                            {{ Auth::user()->name }} 
                                        </a>

                                        <ul class="dropdown" role="menu">
                                                <li><a href="#">My Profile</a></li>
                                            <li>
                                                <a href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                                    Logout
                                                </a>

                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    {{ csrf_field() }}
                                                </form>
                                            </li>
                                        </ul>
                                    </li>
                                @endif
                        </ul>

                        
                    </div>
                    <!-- Nav End -->
                </div>
            </nav>
        </div>
    </div>
</header>
