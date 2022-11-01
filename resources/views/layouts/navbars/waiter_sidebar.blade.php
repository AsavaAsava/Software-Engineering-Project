<div class="sidebar" data-color="Thai-Tanic Grey">
    <!--
Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

Tip 2: you can also add an image using data-image tag
-->
    <div class="sidebar-wrapper">
        <div class="logo">
            <br>
            <img src="{{asset('light-bootstrap/img/Logo-TT.png')}}" style="margin-left: 35%;height:30%;width:30%">
            <br>
            <a href="{{route('page.index', 'homepage')}}" class="simple-text" style="color: rgb(233,107,105);font-size: 1.5em;">
                {{ __("Thai-Tanic") }}
            </a>
            <span style="margin-left: 24%">Welcome Waiter!</span>
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
