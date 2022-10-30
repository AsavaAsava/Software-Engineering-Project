<div class="sidebar" data-color="Thai-Tanic Orange">
    <!--
Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

Tip 2: you can also add an image using data-image tag
-->
    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="{{route('page.index', 'homepage')}}" class="simple-text">
                {{ __("Thai-Tanic") }}
            </a>
        </div>
        <ul class="nav">
            <li class="nav-item @if($activePage == 'homepage') active @endif">
                <a class="nav-link" href="{{route('page.index', 'homepage')}}">
                    <i class="nc-icon nc-pin-3"></i>
                    <p>{{ __("Home") }}</p>
                </a>
            </li>
           
            <li class="nav-item @if($activePage == 'orders') active @endif">
                <a class="nav-link" href="{{route('page.index', 'orders')}}">
                    <i class="nc-icon nc-notes"></i>
                    <p>{{ __("Orders") }}</p>
                </a>
            </li>
            <li class="nav-item @if($activePage == 'reservations') active @endif">
                <a class="nav-link" href="{{route('page.index', 'reservations')}}">
                    <i class="nc-icon nc-grid-45"></i>
                    <p>{{ __("Reservations") }}</p>
                </a>
            </li>
            <li class="nav-item @if($activePage == 'loyalty-points') active @endif">
                <a class="nav-link" href="{{route('page.index', 'loyalty-points')}}">
                    <i class="nc-icon nc-money-coins"></i>
                    <p>{{ __("Loyalty Points") }}</p>
                </a>
            </li>
        </ul>
    </div>
</div>
