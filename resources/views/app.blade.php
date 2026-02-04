<!DOCTYPE html>
<html lang="es" style="height: 100%;">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, viewport-fit=cover">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
  <meta name="theme-color" content="#ffffff">

  <title>@yield('title', 'Tour App')</title>

  <!-- Favicons -->
  <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

  <!-- Vendor CSS -->
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <style>
    :root {
      --app-bg: #f8f9fa;
      --primary-color: #4361ee;
      --text-color: #2c3e50;
      --border-radius: 12px;
      --shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
    }
    
    body {
      font-family: 'Roboto', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
      background-color: var(--app-bg);
      color: var(--text-color);
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
      height: 100%;
      overflow-x: hidden;
    }
    
    .app-container {
      max-width: 100%;
      margin: 0 auto;
      background: white;
      min-height: 100vh;
      position: relative;
      overflow: hidden;
    }
    
    /* Ajustes para dispositivos móviles */
    @media (max-width: 767.98px) {
      body {
        background: white;
      }
      
      .app-container {
        box-shadow: none;
        border-radius: 0;
      }
    }
  </style>
</head>

<body class="app-body">
  <div class="app-container">
    @include('components.header')
    
    <main class="app-main">
      @yield('content')
    </main>
    
    @include('components.bottom-nav')
  </div>

<!-- Scroll Top -->
<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center">
  <i class="bi bi-arrow-up-short"></i>
</a>

<!-- Preloader -->
<div id="preloader"></div>

<!-- Vendor JS -->
<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
<script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
<script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
<script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>

<!-- Main JS -->
<script src="{{ asset('assets/js/main.js') }}"></script>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    const sidebar = document.getElementById('sidebar');
    const sidebarToggle = document.getElementById('sidebarToggle');
    const body = document.body;
    
    if (sidebarToggle) {
      sidebarToggle.addEventListener('click', function(e) {
        e.preventDefault();
        document.body.classList.toggle('sidebar-toggled');
      });
    }
    
    // Cerrar sidebar al hacer clic fuera en móviles
    document.addEventListener('click', function(e) {
      if (window.innerWidth < 1200 && 
          !sidebar.contains(e.target) && 
          e.target !== sidebarToggle && 
          !sidebarToggle.contains(e.target)) {
        document.body.classList.remove('sidebar-toggled');
      }
    });
  });
</script>
</body>
</html>
