<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'AdHost &mdash; Premium Addons')</title>
  <meta name="description" content="@yield('meta_desc', 'Want to manage your server better? AdHost Essential is the solution! The best ServerTools add-on for Minecraft Bedrock servers.')">
  <meta name="theme-color" content="#1C2333">
  <link rel="icon" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><circle cx='50' cy='50' r='45' fill='%234FC3F7'/><path d='M38 55l8 8 16-16' fill='none' stroke='%23fff' stroke-width='5' stroke-linecap='round' stroke-linejoin='round'/></svg>">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;450;500;600;700;800&family=Playfair+Display:ital,wght@0,400;0,700;0,900;1,400;1,700;1,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link rel="stylesheet" href="{{ config('app.url') }}/css/style.css">
  @stack('styles')
</head>
<body>

  <nav class="navbar" id="navbar">
    <div class="nav-inner">
      <a href="{{ url('/') }}" class="nav-logo">
        <span class="logo-icon">
          <svg viewBox="0 0 100 100" width="32" height="32">
            <rect x="15" y="30" width="70" height="50" rx="8" fill="#4FC3F7"/>
            <rect x="22" y="40" width="56" height="30" rx="4" fill="#1a1a2e"/>
            <circle cx="50" cy="55" r="10" fill="#4FC3F7"/>
            <path d="M46 55l4 4 8-8" fill="none" stroke="#1a1a2e" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </span>
        <span class="brand-text">AdHost</span>
      </a>
      <div class="nav-links">
        <a href="{{ url('/') }}" @class(['active' => request()->is('/')])>Home</a>
        <a href="{{ url('/dashboard') }}" @class(['active' => request()->is('dashboard')])>Dashboard</a>
        <a href="{{ url('/free-downloads') }}" @class(['active' => request()->is('free-downloads')])>Free</a>
        <a href="{{ url('/pricing') }}" @class(['active' => request()->is('pricing')])>Pricing</a>
        <a href="{{ url('/changelog') }}" @class(['active' => request()->is('changelog')])>Changelog</a>
        <a href="{{ url('/services') }}" @class(['active' => request()->is('services')])>Services</a>
        <a href="{{ url('/docs') }}" @class(['active' => request()->is('docs')])>Docs</a>
        @auth
          <a href="{{ url('/dashboard') }}" class="nav-cta">{{ Auth::user()->name }}</a>
        @else
          <a href="{{ url('/dashboard') }}" class="nav-cta">Sign In</a>
        @endauth
      </div>
    </div>
  </nav>

  @yield('content')

  <footer class="footer">
    <div class="footer-inner">
      <div class="footer-logo">
        <svg viewBox="0 0 100 100" width="28" height="28">
          <rect x="15" y="30" width="70" height="50" rx="8" fill="#4FC3F7"/>
          <rect x="22" y="40" width="56" height="30" rx="4" fill="#0d0d1a"/>
          <circle cx="50" cy="55" r="10" fill="#4FC3F7"/>
          <path d="M46 55l4 4 8-8" fill="none" stroke="#0d0d1a" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
        <span>AdHost</span>
      </div>
      <div class="footer-links">
        <a href="{{ url('/') }}">Home</a>
        <a href="{{ url('/dashboard') }}">Dashboard</a>
        <a href="{{ url('/pricing') }}">Pricing</a>
        <a href="{{ url('/docs') }}">Docs</a>
      </div>
      <p class="footer-copy">&copy; 2026 AdHost. All rights reserved.</p>
    </div>
  </footer>

  <script src="{{ config('app.url') }}/js/script.js"></script>
  @stack('scripts')
</body>
</html>
