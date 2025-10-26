<nav class="navbar navbar-expand-lg py-2 fixed-top " id="main-navbar">
        <div class="container-fluid container-xl">
            <a class="navbar-brand animate__animated animate__fadeInLeft" href="{{ route('HomePage') }}">
                <img width="180" src="{{ asset('images/logo.png') }}" alt="logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link text-capitalize" href="{{ route('HomePage') }}">
                            {{__('messages.nav_home')}}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-capitalize" target="_blank" href="{{route('AboutPage')}}">
                            {{__('messages.nav_about')}}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-capitalize" target="_blank" href="{{route('ResidencesPage')}}">
                            {{__('messages.nav_residences')}}
                        </a>
                    </li>
                   
                    <li class="nav-item">
                        <a class="nav-link" target="_blank" href="{{ route('ContactPage') }}">
                            {{__('messages.nav_contact')}}
                        </a>
                    </li>
                </ul>
                <div class="d-flex ms-auto">
                    <!-- language dropdown  -->
                    <div class="dropdown  lang-dropdown">
                        <button class="btn border-0 dropdown-toggle" type="button" id="dropdownMenuButton"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="lang-Selected">
                                @if (App()->getLocale() == 'en')
                                    <img width="20" src="{{ asset('images/icons/uk.svg') }}" alt="english">
                                    @elseif (App()->getLocale() == 'fr')
                                        <img width="20" src="{{ asset('images/icons/france.svg') }}" alt="french">
                                        @elseif (App()->getLocale() == 'es')
                                        <img width="20" src="{{ asset('images/icons/spain.svg') }}" alt="spanish">
                                @endif
                            </span>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item d-flex align-items-center" href="{{ route('LangChanger' , 'en' )}}">
                                <img width="20" src="{{ asset('images/icons/uk.svg') }}" alt="english">
                                <span class="mx-2">
                                    {{__('messages.english')}}
                                </span>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="{{ route('LangChanger' , 'fr' )}}">
                                <img width="20" src="{{ asset('images/icons/france.svg') }}" alt="french">
                                <span class="mx-2">
                                    {{__('messages.french')}}
                                </span>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="{{ route('LangChanger' , 'es' )}}">
                                <img width="20" src="{{ asset('images/icons/spain.svg') }}" alt="spanish">
                                <span class="mx-2">
                                    {{__('messages.spanish')}}
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- end navbar -->