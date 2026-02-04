<style>
  .sidebar {
    width: 250px;
    min-height: 100vh;
    background: #fff;
    box-shadow: 0 0 15px rgba(0,0,0,0.1);
    transition: all 0.3s;
    z-index: 1000;
  }
  
  .main-content {
    transition: margin 0.3s;
  }
  
  @media (max-width: 1199.98px) {
    .sidebar {
      position: fixed;
      left: -250px;
    }
    
    body.sidebar-toggled .sidebar {
      left: 0;
    }
    
    body.sidebar-toggled::before {
      content: '';
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0,0,0,0.5);
      z-index: 999;
    }
  }
  
  .sidebar .nav-link {
    color: #333;
    padding: 0.75rem 1rem;
    border-radius: 0.25rem;
    margin-bottom: 0.25rem;
  }
  
  .sidebar .nav-link:hover, .sidebar .nav-link.active {
    background: #f8f9fa;
    color: #0d6efd;
  }
  
  .sidebar .submenu {
    padding-left: 1.5rem;
  }
  
  .sidebar .submenu .nav-link {
    padding: 0.5rem 1rem;
    font-size: 0.9rem;
  }
</style>

<aside id="sidebar" class="sidebar d-flex flex-column">
  <div class="p-3">
    <h5 class="text-uppercase fw-bold text-muted mb-4">Menú</h5>
    
    <!-- Search Bar -->
    <div class="input-group mb-4">
      <input type="text" class="form-control" placeholder="Buscar...">
      <button class="btn btn-outline-secondary" type="button">
        <i class="bi bi-search"></i>
      </button>
    </div>

    <!-- Menu Items -->
    <ul class="nav flex-column">
      <li class="nav-item">
        <a href="#" class="nav-link d-flex align-items-center">
          <i class="bi bi-speedometer2 me-3"></i>
          <span>Dashboard</span>
          <span class="badge bg-primary rounded-pill ms-auto">5</span>
        </a>
      </li>

      <!-- Punto de Interés Dropdown -->
      <li class="nav-item">
        <a class="nav-link d-flex align-items-center" data-bs-toggle="collapse" href="#puntoInteresMenu">
          <i class="bi bi-geo-alt me-3"></i>
          <span>Punto de Interés</span>
          <i class="bi bi-chevron-down ms-auto"></i>
        </a>
        
        <div class="collapse" id="puntoInteresMenu">
          <ul class="nav flex-column submenu">
            <li class="nav-item">
              <a href="#" class="nav-link d-flex align-items-center">
                <i class="bi bi-arrow-return-right me-2"></i>
                Deportes aventura
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link d-flex align-items-center">
                <i class="bi bi-arrow-return-right me-2"></i>
                Desiertos y lagunas
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link d-flex align-items-center">
                <i class="bi bi-arrow-return-right me-2"></i>
                Ferias y fiestas
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link d-flex align-items-center">
                <i class="bi bi-arrow-return-right me-2"></i>
                Iglesias
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link d-flex align-items-center">
                <i class="bi bi-arrow-return-right me-2"></i>
                Parques temáticos
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link d-flex align-items-center">
                <i class="bi bi-arrow-return-right me-2"></i>
                Playas
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link d-flex align-items-center">
                <i class="bi bi-arrow-return-right me-2"></i>
                Platos típicos
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link d-flex align-items-center">
                <i class="bi bi-arrow-return-right me-2"></i>
                Museos
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link d-flex align-items-center">
                <i class="bi bi-arrow-return-right me-2"></i>
                Termales
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link d-flex align-items-center">
                <i class="bi bi-arrow-return-right me-2"></i>
                Reservas naturales
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link d-flex align-items-center">
                <i class="bi bi-arrow-return-right me-2"></i>
                Actividades parques
              </a>
            </li>
          </ul>
        </div>
      </li>

      <!-- Additional Menu Items -->
      <li class="nav-item">
        <a href="#" class="nav-link d-flex align-items-center">
          <i class="bi bi-people me-3"></i>
          <span>Usuarios</span>
        </a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link d-flex align-items-center">
          <i class="bi bi-gear me-3"></i>
          <span>Configuración</span>
        </a>
      </li>
    </ul>
  </div>

  <!-- User Profile -->
  <div class="mt-auto p-3 border-top">
    <div class="d-flex align-items-center">
      <img src="https://ui-avatars.com/api/?name=Usuario&background=4e73df&color=fff" 
           alt="User" 
           class="rounded-circle me-2" 
           width="40" 
           height="40">
      <div>
        <div class="fw-bold">Usuario</div>
        <small class="text-muted">Administrador</small>
      </div>
    </div>
  </div>
  </div>
</aside>
