<footer class="footer">
    <div class="container @auth-fluid @endauth">
        <nav>
            <ul class="footer-menu">
                <li>
                    <a href="http://www.google.com" class="nav-link" target="_blank">{{ __('Thai-Tanic') }}</a>
                </li>
                <li>
                    <a href="http://www.google.com" class="nav-link" target="_blank">{{ __('About Us') }}</a>
                </li>
                <li>
                    <a href="http://www.google.com" class="nav-link" target="_blank">{{ __('Blog') }}</a>
                </li>
            </ul>
            <p class="copyright text-center">
                ©
                <script>
                    document.write(new Date().getFullYear())
                </script>
                <a href="http://www.google.com">{{ __('Thai-Tanic') }}</a>{{ __(', by Software Engineering Group 5') }}
            </p>
        </nav>
    </div>
</footer>