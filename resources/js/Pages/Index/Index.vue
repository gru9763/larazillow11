<template>
    <div class="container-fluid p-0">
      <!-- Header Section -->
      <header class="header bg-dark text-white">
        <div class="container">
          <h1 class="display-4">My First Laravel Website</h1>
        </div>
      </header>

      <!-- Navigation Bar -->
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <div class="container">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <!-- Main Content -->
      <main class="content">
        <!-- Hero Section -->
        <section class="hero bg-primary text-white text-center py-5">
          <div class="container">
            <h2 class="display-4">Welcome to our website!</h2>
            <p class="lead">This is a modern and stylish Vue.js layout using Bootstrap.</p>
            <a class="btn btn-light btn-lg" href="#">Learn More</a>
          </div>
        </section>

        <!-- Features Section -->
        <section class="features py-5">
          <div class="container">
            <h2 class="mb-4">Features</h2>
            <div class="row">
              <div class="col-md-4">
                <div class="card mb-4">
                  <div class="card-body">
                    <h5 class="card-title">Feature 1</h5>
                    <p class="card-text">This is a feature description.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card mb-4">
                  <div class="card-body">
                    <h5 class="card-title">Feature 2</h5>
                    <p class="card-text">This is a feature description.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card mb-4">
                  <div class="card-body">
                    <h5 class="card-title">Feature 3</h5>
                    <p class="card-text">This is a feature description.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <!-- Testimonials Section -->
        <section class="testimonials bg-light py-5">
          <div class="container">
            <h2 class="mb-4">Testimonials</h2>
            <div class="row">
              <div class="col-md-4">
                <div class="card mb-4">
                  <div class="card-body">
                    <p class="card-text">This is a testimonial description.</p>
                    <h5 class="card-title">John Doe</h5>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card mb-4">
                  <div class="card-body">
                    <p class="card-text">This is a testimonial description.</p>
                    <h5 class="card-title">Jane Doe</h5>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card mb-4">
                  <div class="card-body">
                    <p class="card-text">This is a testimonial description.</p>
                    <h5 class="card-title">Bob Smith</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <!-- Call to Action Section -->
        <section class="call-to-action bg-primary text-white text-center py-5">
          <div class="container">
            <h2 class="mb-4">Get Started Today!</h2>
            <a class="btn btn-light btn-lg" href="#">Sign Up</a>
          </div>
        </section>
      </main>

      <!-- Footer Section -->
      <footer class="footer bg-dark text-white text-center py-3">
        <div class="container">
          <p class="mb-0">2023 Company Name. All rights reserved.</p>
        </div>
      </footer>
    </div>
  </template>

  <script>
  export default {
    name: 'App'
  }
  </script>

  <style>
  /* Custom Styles */
  body, html {
    height: 100%;
    margin: 0;
  }

  .container-fluid {
    padding: 0;
  }

  .header {
    background-color: #343a40;
    color: #fff;
    text-align: center;
    padding: 1rem 0;
    position: fixed;
    top: 0;
    width: 100%;
    z-index: 1020; /* Ensures it's above other content */
  }

  .navbar {
    margin-top: 60px; /* Adjust based on header height */
  }

  .navbar-toggler-icon {
    background-image: url('data:image/svg+xml;charset=utf8,...'); /* Include appropriate SVG for toggler icon */
  }

  .hero, .call-to-action {
    background-size: cover;
    background-position: center;
  }

  .card {
    border: none;
  }

  .card-title {
    font-size: 1.25rem;
  }

  .card-text {
    color: #6c757d;
  }

  .btn-light {
    color: #343a40;
    background-color: #f8f9fa;
    border: 1px solid #ced4da;
  }

  .btn-light:hover {
    color: #212529;
    background-color: #e2e6ea;
  }

  .footer {
    background-color: #343a40;
    color: #fff;
    position: fixed;
    bottom: 0;
    width: 100%;
  }

  .content {
    padding-top: 70px; /* Adjust based on header height */
    padding-bottom: 60px; /* Adjust based on footer height */
  }

  .footer p {
    margin-bottom: 0;
  }

  /* Responsive Styles */
  @media (max-width: 768px) {
    .navbar-nav {
      text-align: center;
    }

    .navbar-nav .nav-item {
      margin-bottom: 0.5rem;
    }

    .hero .display-4 {
      font-size: 2.5rem;
    }

    .hero .lead {
      font-size: 1.125rem;
    }
  }
  </style>
