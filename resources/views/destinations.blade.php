<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Destination Details - Tour Bootstrap Template</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">
  <style>
    /* Estilos para la página de detalles del destino */
    .destination-info {
      background: #fff;
      padding: 30px;
      border-radius: 8px;
      box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
    }
    
    .main-image {
      height: 100%;
      overflow: hidden;
      border-radius: 8px;
    }
    
    .main-image img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: transform 0.3s ease;
    }
    
    .main-image img:hover {
      transform: scale(1.02);
    }
    
    .thumbnail {
      cursor: pointer;
      transition: all 0.3s ease;
      height: 100%;
      object-fit: cover;
    }
    
    .thumbnail:hover {
      opacity: 0.8;
      transform: translateY(-3px);
    }
    
    .info-box {
      display: flex;
      align-items: center;
      margin-bottom: 15px;
      padding: 15px;
      background: #f8f9fa;
      border-radius: 8px;
    }
    
    .info-box i {
      font-size: 1.5rem;
      color: #0d6efd;
      margin-right: 15px;
    }
    
    .info-box h4 {
      margin: 0;
      font-size: 0.9rem;
      color: #6c757d;
    }
    
    .info-box p {
      margin: 0;
      font-weight: 500;
    }
    
    .rating {
      color: #ffc107;
    }
    
    .activity-card {
      border: 1px solid #eee;
      border-radius: 8px;
      overflow: hidden;
      transition: all 0.3s ease;
    }
    
    .activity-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }
    
    .activity-card img {
      width: 100%;
      height: 150px;
      object-fit: cover;
    }
    
    .activity-info {
      padding: 15px;
    }
    
    .review-card {
      border: 1px solid #eee;
      border-radius: 8px;
      padding: 20px;
      margin-bottom: 20px;
    }
    
    .review-header {
      display: flex;
      justify-content: space-between;
      margin-bottom: 10px;
    }
    
    .review-author {
      font-weight: 600;
    }
    
    .review-date {
      color: #6c757d;
      font-size: 0.9rem;
    }
    
    @media (max-width: 991.98px) {
      .main-image {
        height: 300px;
        margin-bottom: 15px;
      }
      
      .thumbnail {
        height: 140px;
      }
    }
  </style>

  <!-- =======================================================
  * Template Name: Tour
  * Template URL: https://bootstrapmade.com/tour-bootstrap-travel-website-template/
  * Updated: Jul 01 2025 with Bootstrap v5.3.7
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="destination-details-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="header-container container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.webp" alt=""> -->
        <h1 class="sitename">Tour</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="index.html">Home</a></li>
          <li><a href="about.html">About</a></li>
          <li><a href="destinations.html">Destinations</a></li>
          <li><a href="tours.html">Tours</a></li>
          <li><a href="gallery.html">Gallery</a></li>
          <li><a href="blog.html">Blog</a></li>
          <li class="dropdown"><a href="#"><span>More Pages</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="destination-details.html" class="active">Destination Details</a></li>
              <li><a href="tour-details.html">Tour Details</a></li>
              <li><a href="booking.html">Booking</a></li>
              <li><a href="testimonials">Testimonials</a></li>
              <li><a href="faq.html">Frequently Asked Questions</a></li>
              <li><a href="blog-details.html">Blog Details</a></li>
              <li><a href="terms.html">Terms</a></li>
              <li><a href="privacy.html">Privacy</a></li>
              <li><a href="404.html">404</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="#">Dropdown 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="#">Deep Dropdown 1</a></li>
                  <li><a href="#">Deep Dropdown 2</a></li>
                  <li><a href="#">Deep Dropdown 3</a></li>
                  <li><a href="#">Deep Dropdown 4</a></li>
                  <li><a href="#">Deep Dropdown 5</a></li>
                </ul>
              </li>
              <li><a href="#">Dropdown 2</a></li>
              <li><a href="#">Dropdown 3</a></li>
              <li><a href="#">Dropdown 4</a></li>
            </ul>
          </li>
          <li><a href="contact.html">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-getstarted" href="destiantios.html">Get Started</a>

    </div>
  </header>

  <main class="main">
    <div class="container">
      <div class="row">
        <!-- Sidebar con categorías -->
        <div class="col-lg-3">
          <div class="sidebar">
            <h3 class="sidebar-title">Categorías</h3>
            <div class="accordion" id="categoriesAccordion">
              <!-- Categoría 1 -->
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                    Puntos de Interés
                  </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#categoriesAccordion">
                  <div class="accordion-body">
                    <ul class="list-unstyled">
                      <li><a href="#" class="category-link" data-category="playa"><i class="bi bi-chevron-right"></i> Playas</a></li>
                      <li><a href="#" class="category-link" data-category="montana"><i class="bi bi-chevron-right"></i> Montañas</a></li>
                      <li><a href="#" class="category-link" data-category="ciudad"><i class="bi bi-chevron-right"></i> Ciudades</a></li>
                      <li><a href="#" class="category-link" data-category="historico"><i class="bi bi-chevron-right"></i> Sitios Históricos</a></li>
                      <li><a href="#" class="category-link" data-category="naturaleza"><i class="bi bi-chevron-right"></i> Naturaleza</a></li>
                      <li><a href="#" class="category-link" data-category="aventura"><i class="bi bi-chevron-right"></i> Aventura</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <!-- Categoría 2 -->
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                    Tipo de Actividad
                  </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#categoriesAccordion">
                  <div class="accordion-body">
                    <ul class="list-unstyled">
                      <li><a href="#" class="category-link" data-category="senderismo"><i class="bi bi-chevron-right"></i> Senderismo</a></li>
                      <li><a href="#" class="category-link" data-category="gastronomia"><i class="bi bi-chevron-right"></i> Gastronomía</a></li>
                      <li><a href="#" class="category-link" data-category="cultura"><i class="bi bi-chevron-right"></i> Cultural</a></li>
                      <li><a href="#" class="category-link" data-category="relax"><i class="bi bi-chevron-right"></i> Relax</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            
            <!-- Información del destino -->
            <div class="mt-4">
              <div class="info-box">
                <i class="bi bi-geo-alt"></i>
                <div>
                  <h4>Ubicación:</h4>
                  <p id="destination-location">Cargando...</p>
                </div>
              </div>
              <div class="info-box">
                <i class="bi bi-currency-dollar"></i>
                <div>
                  <h4>Precio promedio:</h4>
                  <p id="destination-price">Cargando...</p>
                </div>
              </div>
              <div class="info-box">
                <i class="bi bi-star"></i>
                <div>
                  <h4>Calificación:</h4>
                  <div class="rating" id="destination-rating"></div>
                </div>
              </div>
              <div class="text-center mt-3">
                <a href="#" class="btn btn-primary w-100">Reservar Ahora</a>
              </div>
            </div>
          </div>
        </div>

        <!-- Contenido principal -->
        <div class="col-lg-9">
          <!-- Page Title -->
    <div class="page-title dark-background" data-aos="fade" style="background-image: url(assets/img/travel/showcase-8.webp);">
      <div class="container position-relative">
        <h1>Destination Details</h1>
        <p>Esse dolorum voluptatum ullam est sint nemo et est ipsa porro placeat quibusdam quia assumenda numquam molestias.</p>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li class="current">Destination Details</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Travel Destination Details Section -->
    <section id="travel-destination-details" class="travel-destination-details section">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <!-- Galería de imágenes -->
            <div class="gallery mb-4">
              <div class="row g-3">
                <div class="col-md-8">
                  <div class="main-image">
                    <img src="assets/img/travel/destination-1.jpg" alt="Destino principal" class="img-fluid rounded" id="main-image">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="row g-2">
                    <div class="col-6 col-md-12">
                      <img src="assets/img/travel/destination-2.jpg" alt="Destino secundario 1" class="img-fluid rounded thumbnail" data-main="assets/img/travel/destination-2.jpg">
                    </div>
                    <div class="col-6 col-md-12">
                      <img src="assets/img/travel/destination-3.jpg" alt="Destino secundario 2" class="img-fluid rounded thumbnail" data-main="assets/img/travel/destination-3.jpg">
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Información del destino -->
            <div class="destination-info">
              <h2 id="destination-title">Nombre del Destino</h2>
              <div class="meta d-flex align-items-center mb-4">
                <div class="me-4">
                  <i class="bi bi-geo-alt me-2"></i>
                  <span id="destination-location-text">Ubicación</span>
                </div>
                <div class="me-4">
                  <i class="bi bi-star-fill text-warning"></i>
                  <span id="destination-rating-text">4.8</span>
                  <span class="text-muted">(128 reseñas)</span>
                </div>
              </div>

              <!-- Descripción -->
              <div class="mb-5">
                <h4>Descripción</h4>
                <p id="destination-description">Cargando descripción del destino...</p>
              </div>

              <!-- Características -->
              <div class="mb-5">
                <h4>Características</h4>
                <div class="row">
                  <div class="col-md-6">
                    <ul class="list-unstyled">
                      <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Mejor época para visitar</li>
                      <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Clima promedio</li>
                      <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Idioma principal</li>
                    </ul>
                  </div>
                  <div class="col-md-6">
                    <ul class="list-unstyled">
                      <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Moneda local</li>
                      <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Zona horaria</li>
                      <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Requisitos de visa</li>
                    </ul>
                  </div>
                </div>
              </div>

              <!-- Actividades populares -->
              <div class="mb-5">
                <h4>Actividades populares</h4>
                <div class="row g-3" id="popular-activities">
                  <!-- Las actividades se cargarán dinámicamente -->
                </div>
              </div>

              <!-- Mapa -->
              <div class="mb-5">
                <h4>Ubicación en el mapa</h4>
                <div class="map-container rounded overflow-hidden" style="height: 300px; background-color: #f5f5f5;">
                  <!-- Aquí irá el mapa (Google Maps, Leaflet, etc.) -->
                  <div id="map" style="width: 100%; height: 100%;"></div>
                </div>
              </div>

              <!-- Reseñas -->
              <div class="reviews">
                <div class="d-flex justify-content-between align-items-center mb-4">
                  <h4>Reseñas</h4>
                  <button class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#addReviewModal">
                    <i class="bi bi-pencil-square me-1"></i> Escribir reseña
                  </button>
                </div>
                
                <div class="review-list" id="review-list">
                  <!-- Las reseñas se cargarán dinámicamente -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <!-- Hero Section -->
        <div class="destination-hero" data-aos="fade-up" data-aos-delay="100">
          <div class="hero-image">
            <img src="assets/img/travel/destination-3.webp" alt="Santorini" class="img-fluid">
            <div class="hero-overlay">
              <div class="hero-content">
                <h1>Santorini, Greece</h1>
                <p class="hero-tagline">The Crown Jewel of the Aegean Sea</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Overview Section -->
        <div class="destination-overview" data-aos="fade-up" data-aos-delay="200">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <h2>Discover the Magic</h2>
              <p>Perched on volcanic cliffs overlooking the deep blue Aegean Sea, Santorini captivates visitors with its iconic white-washed buildings, stunning sunsets, and rich ancient history. This enchanting Greek island offers a perfect blend of relaxation and adventure, from exploring archaeological sites to savoring world-class wines in dramatic clifftop settings.</p>
            </div>
          </div>
        </div>

        <!-- Attractions Section -->
        <div class="attractions-section" data-aos="fade-up" data-aos-delay="300">
          <div class="section-header">
            <h2>Must-Visit Attractions</h2>
            <p>Experience the best of what Santorini has to offer</p>
          </div>
          <div class="row gy-4">
            <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="100">
              <div class="attraction-item">
                <div class="attraction-image">
                  <img src="assets/img/travel/destination-3.webp" alt="Oia Village" class="img-fluid">
                </div>
                <div class="attraction-content">
                  <h4>Oia Village</h4>
                  <p>Famous for its breathtaking sunsets and traditional Cycladic architecture with blue-domed churches.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
              <div class="attraction-item">
                <div class="attraction-image">
                  <img src="assets/img/travel/destination-7.webp" alt="Red Beach" class="img-fluid">
                </div>
                <div class="attraction-content">
                  <h4>Red Beach</h4>
                  <p>A unique volcanic beach with dramatic red cliffs and crystal-clear waters perfect for swimming.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="300">
              <div class="attraction-item">
                <div class="attraction-image">
                  <img src="assets/img/travel/destination-12.webp" alt="Akrotiri Ruins" class="img-fluid">
                </div>
                <div class="attraction-content">
                  <h4>Akrotiri Archaeological Site</h4>
                  <p>Explore the well-preserved ruins of an ancient Minoan settlement frozen in time by volcanic ash.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="100">
              <div class="attraction-item">
                <div class="attraction-image">
                  <img src="assets/img/travel/destination-15.webp" alt="Fira Town" class="img-fluid">
                </div>
                <div class="attraction-content">
                  <h4>Fira Town</h4>
                  <p>The vibrant capital offering shopping, dining, and spectacular views of the caldera.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
              <div class="attraction-item">
                <div class="attraction-image">
                  <img src="assets/img/travel/destination-18.webp" alt="Wine Tasting" class="img-fluid">
                </div>
                <div class="attraction-content">
                  <h4>Santo Wines Winery</h4>
                  <p>Sample exceptional local wines while enjoying panoramic views of the volcanic landscape.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="300">
              <div class="attraction-item">
                <div class="attraction-image">
                  <img src="assets/img/travel/destination-9.webp" alt="Volcano Tour" class="img-fluid">
                </div>
                <div class="attraction-content">
                  <h4>Nea Kameni Volcano</h4>
                  <p>Take a boat trip to the active volcano crater and natural hot springs in the caldera.</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Tours Available Section -->
        <div class="tours-section" data-aos="fade-up" data-aos-delay="400">
          <div class="section-header">
            <h2>Available Tours &amp; Experiences</h2>
            <p>Choose from our carefully curated selection of Santorini adventures</p>
          </div>
          <div class="row gy-4">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
              <div class="tour-card">
                <div class="tour-image">
                  <img src="assets/img/travel/tour-5.webp" alt="Sunset Cruise" class="img-fluid">
                  <div class="tour-price">
                    <span>$129</span>
                  </div>
                </div>
                <div class="tour-content">
                  <div class="tour-meta">
                    <span class="duration"><i class="bi bi-clock"></i> 5 hours</span>
                    <span class="rating"><i class="bi bi-star-fill"></i> 4.8</span>
                  </div>
                  <h4>Santorini Sunset Cruise</h4>
                  <p>Sail around the caldera while enjoying a magnificent sunset, with dinner and wine included.</p>
                  <a href="#" class="btn-tour">Book Now</a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
              <div class="tour-card">
                <div class="tour-image">
                  <img src="assets/img/travel/tour-12.webp" alt="Wine Tour" class="img-fluid">
                  <div class="tour-price">
                    <span>$95</span>
                  </div>
                </div>
                <div class="tour-content">
                  <div class="tour-meta">
                    <span class="duration"><i class="bi bi-clock"></i> 6 hours</span>
                    <span class="rating"><i class="bi bi-star-fill"></i> 4.9</span>
                  </div>
                  <h4>Wine Tasting &amp; Cultural Tour</h4>
                  <p>Discover the unique terroir of Santorini with visits to traditional wineries and historical sites.</p>
                  <a href="#" class="btn-tour">Book Now</a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
              <div class="tour-card">
                <div class="tour-image">
                  <img src="assets/img/travel/tour-18.webp" alt="Photography Tour" class="img-fluid">
                  <div class="tour-price">
                    <span>$155</span>
                  </div>
                </div>
                <div class="tour-content">
                  <div class="tour-meta">
                    <span class="duration"><i class="bi bi-clock"></i> 4 hours</span>
                    <span class="rating"><i class="bi bi-star-fill"></i> 4.7</span>
                  </div>
                  <h4>Photography Walking Tour</h4>
                  <p>Capture the most photogenic spots of Oia and Fira with a professional photographer guide.</p>
                  <a href="#" class="btn-tour">Book Now</a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Interactive Map Section -->
        <div class="map-section" data-aos="fade-up" data-aos-delay="500">
          <div class="section-header">
            <h2>Explore the Island</h2>
            <p>Interactive map with key attractions and tour meeting points</p>
          </div>
          <div class="map-container">
            <div class="map-embed">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d50234.23984454287!2d25.375799!3d36.393156!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1499ce86adfd9ff7%3A0xb2a761f740d68afc!2sSantorini%2C%20Greece!5e0!3m2!1sen!2sus!4v1647887432123!5m2!1sen!2sus" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="map-points">
              <div class="point-item">
                <i class="bi bi-geo-alt-fill"></i>
                <span>Oia Village - Main Square</span>
              </div>
              <div class="point-item">
                <i class="bi bi-geo-alt-fill"></i>
                <span>Fira Port - Ferry Terminal</span>
              </div>
              <div class="point-item">
                <i class="bi bi-geo-alt-fill"></i>
                <span>Akrotiri Site - Entrance</span>
              </div>
              <div class="point-item">
                <i class="bi bi-geo-alt-fill"></i>
                <span>Red Beach - Parking Area</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Practical Information Section -->
        <div class="practical-info" data-aos="fade-up" data-aos-delay="600">
          <div class="section-header">
            <h2>Essential Travel Information</h2>
            <p>Everything you need to know for your Santorini adventure</p>
          </div>
          <div class="row gy-4">
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
              <div class="info-item">
                <div class="info-icon">
                  <i class="bi bi-calendar-event"></i>
                </div>
                <h4>Best Time to Visit</h4>
                <p>April to November for warm weather. Peak season: June-August. Shoulder seasons offer fewer crowds and lower prices.</p>
              </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
              <div class="info-item">
                <div class="info-icon">
                  <i class="bi bi-thermometer-sun"></i>
                </div>
                <h4>Weather &amp; Climate</h4>
                <p>Mediterranean climate with hot, dry summers (75-85°F) and mild winters. Sea breeze provides natural cooling.</p>
              </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
              <div class="info-item">
                <div class="info-icon">
                  <i class="bi bi-currency-euro"></i>
                </div>
                <h4>Currency &amp; Language</h4>
                <p>Euro (EUR) is the official currency. Greek is the primary language, though English is widely spoken in tourist areas.</p>
              </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
              <div class="info-item">
                <div class="info-icon">
                  <i class="bi bi-passport"></i>
                </div>
                <h4>Visa Requirements</h4>
                <p>EU citizens need only an ID card. US, Canada, Australia citizens need valid passport for stays up to 90 days.</p>
              </div>
            </div>
          </div>
          <div class="travel-tips" data-aos="fade-up" data-aos-delay="500">
            <h3>Local Tips &amp; Cultural Insights</h3>
            <div class="row">
              <div class="col-md-6">
                <ul class="tips-list">
                  <li><i class="bi bi-check-circle"></i> Book sunset dinner reservations well in advance</li>
                  <li><i class="bi bi-check-circle"></i> Wear comfortable walking shoes for cobblestone streets</li>
                  <li><i class="bi bi-check-circle"></i> Carry sun protection - the Aegean sun can be intense</li>
                </ul>
              </div>
              <div class="col-md-6">
                <ul class="tips-list">
                  <li><i class="bi bi-check-circle"></i> Respect local customs and dress codes at religious sites</li>
                  <li><i class="bi bi-check-circle"></i> Try local specialties: fava beans, cherry tomatoes, and Assyrtiko wine</li>
                  <li><i class="bi bi-check-circle"></i> Use public transportation or rent ATVs for island exploration</li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <!-- Photo Gallery Section -->
        <div class="gallery-section" data-aos="fade-up" data-aos-delay="700">
          <div class="section-header">
            <h2>Gallery</h2>
            <p>Immerse yourself in the beauty of Santorini</p>
          </div>
          <div class="gallery-slider swiper init-swiper">
            <script type="application/json" class="swiper-config">
              {
                "loop": true,
                "speed": 600,
                "autoplay": {
                  "delay": 4000
                },
                "slidesPerView": 1,
                "breakpoints": {
                  "768": {
                    "slidesPerView": 2
                  },
                  "992": {
                    "slidesPerView": 3
                  }
                },
                "pagination": {
                  "el": ".swiper-pagination",
                  "type": "bullets",
                  "clickable": true
                }
              }
            </script>
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="gallery-item">
                  <img src="assets/img/travel/misc-5.webp" alt="Santorini View" class="img-fluid">
                </div>
              </div>
              <div class="swiper-slide">
                <div class="gallery-item">
                  <img src="assets/img/travel/misc-12.webp" alt="Santorini Architecture" class="img-fluid">
                </div>
              </div>
              <div class="swiper-slide">
                <div class="gallery-item">
                  <img src="assets/img/travel/misc-8.webp" alt="Santorini Sunset" class="img-fluid">
                </div>
              </div>
              <div class="swiper-slide">
                <div class="gallery-item">
                  <img src="assets/img/travel/misc-15.webp" alt="Santorini Beach" class="img-fluid">
                </div>
              </div>
              <div class="swiper-slide">
                <div class="gallery-item">
                  <img src="assets/img/travel/misc-3.webp" alt="Santorini Culture" class="img-fluid">
                </div>
              </div>
            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>

        <!-- Call to Action Section -->
        <div class="cta-section" data-aos="fade-up" data-aos-delay="800">
          <div class="row">
            <div class="col-lg-8 mx-auto text-center">
              <h2>Ready to Experience Santorini?</h2>
              <p>Let our travel experts help you create the perfect Santorini itinerary tailored to your interests and budget.</p>
              <div class="cta-buttons">
                <a href="#" class="btn btn-primary">View All Tours</a>
                <a href="#" class="btn btn-outline">Contact Travel Expert</a>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Travel Destination Details Section -->

  </main>

  <footer id="footer" class="footer position-relative dark-background">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center text-center">
          <div class="col-lg-6">
            <h4>Join Our Newsletter</h4>
            <p>Subscribe to our newsletter and receive the latest news about our products and services!</p>
            <form action="forms/newsletter.php" method="post" class="php-email-form">
              <div class="newsletter-form"><input type="email" name="email"><input type="submit" value="Subscribe"></div>
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your subscription request has been sent. Thank you!</div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="index.html" class="d-flex align-items-center">
            <span class="sitename">Tour</span>
          </a>
          <div class="footer-contact pt-3">
            <p>A108 Adam Street</p>
            <p>New York, NY 535022</p>
            <p class="mt-3"><strong>Phone:</strong> <span>+1 5589 55488 55</span></p>
            <p><strong>Email:</strong> <span>info@example.com</span></p>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">About us</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Services</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Terms of service</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Web Design</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Web Development</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Product Management</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Marketing</a></li>
          </ul>
        </div>

        <div class="col-lg-4 col-md-12">
          <h4>Follow Us</h4>
          <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
          <div class="social-links d-flex">
            <a href=""><i class="bi bi-twitter-x"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">MyWebsite</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

</body>

</html>