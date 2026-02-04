<!-- resources/views/components/bottom-nav.blade.php -->
<nav class="bottom-nav">
  <style>
    .bottom-nav {
      position: fixed;
      bottom: 0;
      left: 0;
      right: 0;
      background: white;
      box-shadow: 0 -2px 10px rgba(0, 0, 0, 0.05);
      padding: 8px 0;
      z-index: 1000;
    }
    
    .nav-links {
      display: flex;
      justify-content: space-around;
      align-items: center;
      padding: 0 10px;
    }
    
    .nav-link {
      display: flex;
      flex-direction: column;
      align-items: center;
      text-decoration: none;
      color: #666;
      font-size: 10px;
      padding: 4px 12px;
      border-radius: 12px;
      transition: all 0.2s;
    }
    
    .nav-link i {
      font-size: 20px;
      margin-bottom: 4px;
    }
    
    .nav-link.active {
      color: #4361ee;
      background: rgba(67, 97, 238, 0.1);
    }
    
    .nav-link span {
      font-size: 10px;
    }
  </style>
  
  <div class="nav-links">
    <a href="{{ route('home') }}" class="nav-link active">
      <i class="bi bi-house-door"></i>
      <span>Inicio</span>
    </a>
    <a href="#" class="nav-link">
      <i class="bi bi-compass"></i>
      <span>Explorar</span>
    </a>
    <a href="#" class="nav-link">
      <i class="bi bi-heart"></i>
      <span>Favoritos</span>
    </a>
    <a href="#" class="nav-link">
      <i class="bi bi-person"></i>
      <span>Perfil</span>
    </a>
  </div>
</nav>