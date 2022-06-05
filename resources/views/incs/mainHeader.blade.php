<header class="u-clearfix u-header u-header" id="sec-4d95">
    <div class="u-clearfix u-sheet u-sheet-1">
        <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
            <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px;">
                <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base"
                    href="#">
                    <svg class="u-svg-link" viewBox="0 0 24 24">
                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use>
                    </svg>
                    <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px"
                        xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
                        <g>
                            <rect y="1" width="16" height="2"></rect>
                            <rect y="7" width="16" height="2"></rect>
                            <rect y="13" width="16" height="2"></rect>
                        </g>
                    </svg>
                </a>
            </div>
            <div class="u-custom-menu u-nav-container">
                <ul class="u-nav u-unstyled u-nav-1">
                    {{-- <li class="u-nav-item"><a
                            class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base"
                            style="padding: 10px 26px;" href="{{ Route('home') }}">Home page</a>
                    </li> --}}
                    <li class="u-nav-item"><a
                            class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base"
                            href="{{ Route('about') }}" style="padding: 10px 26px;">About</a>
                    </li>
                    <li class="u-nav-item"><a
                            class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base"
                            href="{{ Route('contactUs') }}" style="padding: 10px 26px;">Contact us</a>
                    </li>
                    @auth('citizen')
                        <li class="u-nav-item">
                            <a
                                class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base"
                                href="{{ Route('citizen') }}"
                                style="padding: 10px 26px;">{{ auth('citizen')->user()->fname }}
                                {{ auth('citizen')->user()->lname }}</a>
                        </li>
                        <li class="u-nav-item"><a
                                class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base"
                                href="{{ Route('citizen.signOut') }}" style="padding: 10px 26px;">Sign-Out</a>
                        </li>
                    @endauth
                    @auth('employee')
                        <li class="u-nav-item"><a
                                class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base"
                                href="{{ Route('employee') }}" style="padding: 10px 26px;">Control Panel</a>
                        </li>
                        <li class="u-nav-item"><a
                                class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base"
                                href="{{ Route('employee.signOut') }}" style="padding: 10px 26px;">Sign-Out</a>
                        </li>
                    @endauth
                    @auth('admin')
                        <li class="u-nav-item"><a
                                class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base"
                                href="{{ Route('admin') }}" style="padding: 10px 26px;">Admin Panel</a>
                        </li>
                        <li class="u-nav-item"><a
                                class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base"
                                href="{{ Route('admin.signOut') }}" style="padding: 10px 26px;">Sign-Out</a>
                        </li>
                    @endauth
                    @guest('citizen')
                        @guest('employee')
                            @guest('admin')
                                <li class="u-nav-item"><a
                                        class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base"
                                        href="{{ Route('employee.login') }}" style="padding: 10px 26px;">Employee LogIn</a>
                                </li>
                                <li class="u-nav-item"><a
                                        class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base"
                                        href="{{ Route('citizen.login') }}" style="padding: 10px 26px;">Citizen LogIn</a>
                                </li>
                            @endguest
                        @endguest
                    @endguest
                </ul>
            </div>
            <div class="u-custom-menu u-nav-container-collapse">
                <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
                    <div class="u-inner-container-layout u-sidenav-overflow">
                        <div class="u-menu-close"></div>
                        <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2">
                            <li class="u-nav-item"><a class="u-button-style u-nav-link"
                                    href="{{ Route('home') }}">HomePage</a>
                            </li>
                            <li class="u-nav-item"><a class="u-button-style u-nav-link"
                                    href="{{ Route('about') }}">About</a>
                            </li>
                            <li class="u-nav-item"><a class="u-button-style u-nav-link"
                                    href="{{ Route('contactUs') }}">Contact us</a>
                            </li>
                            @auth('citizen')
                                <li class="u-nav-item"><a class="u-button-style u-nav-link"
                                        href="{{ Route('citizen') }}">{{ auth('citizen')->user()->fname }}
                                        {{ auth('citizen')->user()->lname }}</a>
                                </li>
                                <li class="u-nav-item"><a class="u-button-style u-nav-link"
                                        href="{{ Route('citizen.signOut') }}">Sign Out</a>
                                </li>
                            @endauth
                            @auth('employee')
                                <li class="u-nav-item"><a class="u-button-style u-nav-link"
                                        href="{{ Route('employee') }}">Control Panel</a>
                                </li>
                                <li class="u-nav-item"><a class="u-button-style u-nav-link"
                                        href="{{ Route('employee.signOut') }}">Sign Out</a>
                                </li>
                            @endauth
                            @auth('admin')
                                <li class="u-nav-item"><a
                                        class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base"
                                        href="{{ Route('admin') }}" style="padding: 10px 26px;">Admin Panel</a>
                                </li>
                                <li class="u-nav-item"><a
                                        class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base"
                                        href="{{ Route('admin.signOut') }}" style="padding: 10px 26px;">Sign-Out</a>
                                </li>
                            @endauth
                            @guest('citizen')
                                @guest('employee')
                                    @guest('admin')
                                        <li class="u-nav-item"><a class="u-button-style u-nav-link"
                                                href="{{ Route('employee.login') }}">Employee LogIn</a>
                                        </li>
                                        <li class="u-nav-item"><a class="u-button-style u-nav-link"
                                                href="{{ Route('citizen.login') }}">Citizen LogIn</a>
                                        </li>
                                    @endguest
                                @endguest
                            @endguest
                        </ul>
                    </div>
                </div>
                <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
            </div>
        </nav>
        <img class="u-image u-image-round u-preserve-proportions u-radius-10 u-image-1"
            src="{{ asset('images/kisspng-letter-computer-icons-letter-e-5abfa798001415.6134645015225097200004.png') }}"
            alt="" data-image-width="512" data-image-height="512">
        <h3 class="u-headline u-text u-text-default u-text-1">
            <a href="{{ Route('home') }}">
                <span class="u-text-custom-color-1">L-</span>Barcadero
            </a>
        </h3>
    </div>
</header>
