<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Blog</title>


    </head>
    <body class="antialiased">

        <h1> Salut depuis le quebec</h1>

        <p>It's currently {{ date('H:i A')}} .</p>

    <footer>
        <p>&copy; Copyright {{ date('Y') }} &middot; <a href="#">About Us</a></p>
    </footer>


    </body>
</html>
