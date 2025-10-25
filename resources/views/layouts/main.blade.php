<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | Website Sederhanaku</title>
    
    </head>
<body>
    <nav>
        <a href="/">Home</a> | 
        <a href="/about">About</a>
    </nav>

    <hr>

    <div class="container">
        @yield('content')
    </div>

    <hr>
    <footer>
        <p>&copy; 2025 Website Sederhanaku</p>
    </footer>
</body>
</html>