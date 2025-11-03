<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', "Alin's Portfolio")</title>

  {{-- FONT --}}
  <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;600;700&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">

  {{-- === CSS GLOBAL === --}}
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">

  {{-- === CSS TAMBAHAN === --}}
  @if(request()->is('contact'))
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
  @endif

  @if(request()->is('activities*'))
    <link rel="stylesheet" href="{{ asset('css/activities.css') }}">
  @endif

  @if(request()->is('admin*'))
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  @endif

  @if(request()->is('login'))
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
  @endif
</head>

<body>
  <nav class="navbar">
    <div class="logo">A L I N</div>
    <div class="nav-links">
      <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
      <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">About</a>
      <a href="{{ route('activities.index') }}" class="{{ request()->routeIs('activities*') ? 'active' : '' }}">Activities</a>
      <a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a>
    
      @auth
        @if(Auth::user()->role === 'admin')
          <form action="{{ route('logout') }}" method="POST" style="display:inline;">
            @csrf
            <button type="submit" class="btn-logout">Logout</button>
          </form>
        @endif
      @endauth

    </div>
  </nav>

  <main>
    @yield('content')
  </main>

  <footer class="footer">
    <p>© 2025 Alin’s Portfolio | Built with 🖤</p>
  </footer>

  <script>
    // Navbar scroll effect
    window.addEventListener('scroll', function() {
      const navbar = document.querySelector('.navbar');
      if (window.scrollY > 50) {
        navbar.classList.add('scrolled');
      } else {
        navbar.classList.remove('scrolled');
      }
    });

    // Smooth fade page transition
    document.querySelectorAll('a').forEach(link => {
      const target = link.getAttribute('target');
      if (target === "_blank") return;
      link.addEventListener('click', e => {
        if (link.hostname === window.location.hostname) {
          e.preventDefault();
          document.body.classList.add('fade-out');
          setTimeout(() => window.location.href = link.href, 300);
        }
      });
    });
  </script>
</body>
</html>
