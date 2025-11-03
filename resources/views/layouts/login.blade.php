<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'Login | Alin’s Portfolio')</title>

  {{-- Font & Style --}}
  <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;600;700&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>
  {{-- Efek Background --}}
  <div class="login-background"></div>

  {{-- Konten dari child view --}}
  @yield('content')
</body>
</html>
