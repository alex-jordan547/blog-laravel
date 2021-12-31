<footer class="fixed-bottom text-muted">
    <p>&copy; Copyright {{ date('Y') }} &middot;

        @if(! Route::is('app_about'))

            <a href="{{ route('app_about') }}">About Us</a>

        @endif
    </p>
</footer>
