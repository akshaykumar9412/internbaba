<header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

        <a href="index.html" class="logo d-flex align-items-center me-auto">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <img src="{{ asset('uploads/settings/logo.png') }}" width=70px height=70px alt="">
            {{-- <h1 class="sitename">{{ get_setting('project_name', 'KDIPL') }}</h1> --}}
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="#hero" class="active">Home</a></li>
                <li><a href="#about">About</a></li>
                {{-- <li><a href="#services">Services</a></li>
                <li><a href="#portfolio">Portfolio</a></li>
                <li><a href="#team">Team</a></li> --}}
                <li class="dropdown"><a href="#"><span>Dropdown</span> <i
                            class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li>
                            <link href="#">Dropdown 1</a>
                        </li>
                        <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i
                                    class="bi bi-chevron-down toggle-dropdown"></i></a>
                            <ul>
                                <li><a href="#">Deep Dropdown 1</a></li>
                                <li><a href="#">Deep Dropdown 2</a></li>
                                <li><a href="#">Deep Dropdown 3</a></li>
                                <li><a href="#">Deep Dropdown 4</a></li>
                                <li><a href="#">Deep Dropdown 5</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Dropdown 2</a></li>
                        <li><a href="#">Dropdown 3</a></li>
                        <li><a href="#">Dropdown 4</a></li>
                    </ul>
                </li>
                <li><a href="#contact">Contact</a></li>
                @if (!Auth::check())
                    <li><a href="{{ url('/login') }}" class="btn-getstarted">Login</a></li>
                    <li class="dropdown"><a href="#" class="btn-getstarted"><span>Registration</span> <i
                                class="bi bi-chevron-down toggle-dropdown"></i></a>
                        <ul>

                            <li><a href="#">As A Candidate</a></li>
                            <li><a href="#">As A Employer</a></li>
                        </ul>
                    </li>
                @endif
                @if (Auth::check())
                    <li class="dropdown"><a href="#"
                            class="btn-getstarted"><span>{{ auth()->user()->name }}</span> <i
                                class="bi bi-chevron-down toggle-dropdown"></i></a>
                        <ul>

                            <li><a href="{{ url('/profile') }}">Profile</a></li>

                            <li><a href="{{ url('/logout') }}"
                                    onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">Logout</a>
                                <form id="logout-form" action="{{ url('/logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </li>
                @endif
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

    </div>
</header>
