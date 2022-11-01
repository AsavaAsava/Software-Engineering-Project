<div class="sidebar" data-color="Thai-Tanic Orange">
    <!--
Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

Tip 2: you can also add an image using data-image tag
-->
    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="{{route('page.index', 'inv_add_item')}}" class="simple-text">
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
            <li class="nav-item @if($activePage == 'inv_add_item') active @endif">
                <a class="nav-link" href="{{route('page.index', 'inv_add_item')}}">
                    <i class="nc-icon nc-pin-3"></i>
                    <p>{{ __("Add Item") }}</p>
                </a>
            </li>
            <li class="nav-item @if($activePage == 'inv_view_item') active @endif">
                <a class="nav-link" href="{{route('page.index', 'inv_view_item')}}">
                    <i class="nc-icon nc-chart-bar-32"></i>
                    <p>{{ __("View Item") }}</p>
                </a>
            </li>

            <li class="nav-item @if($activePage == 'inv_update_item') active @endif">
                <a class="nav-link" href="{{route('page.index', 'inv_update_item')}}">
                    <i class="nc-icon nc-notes"></i>
                    <p>{{ __("Update Item") }}</p>
                </a>
            </li>
            <li class="nav-item @if($activePage == 'inv_delete_item') active @endif">
                <a class="nav-link" href="{{route('page.index', 'inv_delete_item')}}">
                    <i class="nc-icon nc-grid-45"></i>
                    <p>{{ __("Delete Item") }}</p>
                </a>
            </li>
            <li class="nav-item @if($activePage == 'inv_use_stock') active @endif">
                <a class="nav-link" href="{{route('page.index', 'inv_use_stock')}}">
                    <i class="nc-icon nc-tag-content"></i>
                    <p>{{ __("Use Stock") }}</p>
                </a>
            </li>
            <li class="nav-item @if($activePage == 'inv_reports') active @endif">
                <a class="nav-link" href="{{route('page.index', 'inv_reports')}}">
                    <i class="nc-icon nc-money-coins"></i>
                    <p>{{ __("Reports") }}</p>
                </a>
            </li>
        </ul>
    </div>
</div>
