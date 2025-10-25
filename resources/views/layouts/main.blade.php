<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | Website Saya</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; }
        nav { background: #333; padding: 1rem; }
        nav a { color: white; text-decoration: none; padding: 1rem; }
        .container { padding: 1.5rem; }
        footer { padding: 1rem; background: #f4f4f4; text-align: center; margin-top: 2rem; }
    </style>
</head>
<body>
    <nav>
        <a href="/">Home</a>
        <a href="/about">About</a>
    </nav>

    <div class="container">
        @yield('content')
    </div>

    <footer>
        <p>&copy; 2025 Milik Moses</p>
    </footer>
</body>
</html>