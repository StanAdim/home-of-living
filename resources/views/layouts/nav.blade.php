<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm hli_bg fixed-top">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{asset('images/logo.png')}}" alt="HomeOfLiving">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto ">
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Services</a>
                    <div class="dropdown-menu">
                        <a href="" class="dropdown-item">Leadership training</a>
                        <a href="" class="dropdown-item">Home keeping</a>
                        <a href="" class="dropdown-item">Youth inspiring</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Departments</a>
                    <div class="dropdown-menu">
                        <a href="{{route('leadership')}}" class="dropdown-item">LEADERSHIP</a>
                        <a href="{{route('ict')}}" class="dropdown-item">ICT</a>
                        <a href="{{route('treasury')}}" class="dropdown-item">TREASURY</a>
                        <a href="{{route('home-keeping')}}" class="dropdown-item">HOME KEEPING</a>
                        <a href="{{route('projects')}}" class="dropdown-item">PROJECT AND SCIENCE</a>
                    </div>
                </li>
                <li class="nav-item ">
                    <a href="{{route('forum')}}" class="nav-link">HLI Forum</a>
                </li>
                <li class="nav-item ">
                    <a href="{{route('about')}}" class="nav-link">About Us</a>
                </li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item " href="{{url('/home')}}" role="button" aria-haspopup="true" aria-expanded="false" v-pre>
                              {{__(' My Account')}}
                          </a>
                          <!-- COMPOSING THE NEW REPORTS -->
                          <a class="dropdown-item " href="#" role="button" aria-haspopup="true" aria-expanded="false" v-pre>
                              {{__(' New report')}}
                          </a>
                          <!-- THE USER'S FORUM POST AND HE/SHE SHARED -->
                          <a class="dropdown-item " href="#" role="button" aria-haspopup="true" aria-expanded="false" v-pre>
                              {{__(' Forum Post')}}
                          </a>
                          <!-- THE DEPARTMENT THE USER BELONGS AND THE DETAILS -->
                          <a class="dropdown-item " href="#" role="button" aria-haspopup="true" aria-expanded="false" v-pre>
                              {{__('My Department')}}
                          </a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
