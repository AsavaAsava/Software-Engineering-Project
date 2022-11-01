<nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute" style="background: #252837;">
    <div class="container">
        <div class="collapse navbar-collapse justify-content-end" id="navbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="{{route('page.index', 'homepage')}}" class="nav-link">
                        <i class="nc-icon nc-chart-pie-35"></i> {{ __('Home') }}
                    </a>
                </li>
                <li class="nav-item @if($activePage == 'login') active @endif">
                    <a href="{{ route('login') }}" class="nav-link">
                        <i class="nc-icon nc-mobile"></i> {{ __('Login') }}
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>