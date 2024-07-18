<template>
    <div class="profile-page">
      <!-- Header with navigation -->
      <header class="header">
        <div class="container">
          <nav class="nav">

          </nav>
        </div>
      </header>

      <!-- Hero section -->
      <section class="hero">
        <div class="container">
          <div class="hero-content">
            <div class="hero-text">
              <h1>Welcome, {{ userName }}</h1>
              <p>{{ userEmail }}</p>
            </div>

          </div>
        </div>
      </section>


    </div>
  </template>

  <script>
  export default {
    data() {
      return {
        userName: 'Ramesh Sharathguru',
        userEmail: 'guru9763@gmail.com',
        userAvatar: 'https://example.com/avatar.jpg', // Example URL for avatar
        udemyCourse: 10,
        projectCount: 50,
        experienceYears: 20
      };
    },
    methods: {
      editProfile() {
        // Example: Navigate to an edit profile page
        this.$router.push('/edit-profile');
      },
      logout() {
        // Example: Implement logout logic (redirect to login page or clear session)
        console.log('Logout clicked');
      }
    }
  };
  </script>

  <style scoped>
  /* Global styles */
  body {
    font-family: 'Arial', sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f8f9fa;
    color: #333;
  }

  .container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
  }

  /* Header styles */
  .header {
    background-color: #343a40;
    color: #fff;
    padding: 15px 0;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  }

  .nav {
    display: flex;
    align-items: center;
    justify-content: space-between;
  }

  .logo {
    display: flex;
    align-items: center;
    text-decoration: none;
    color: #fff;
    font-size: 1.5rem;
    font-weight: bold;
  }

  .nav-links {
    list-style: none;
    margin: 0;
    padding: 0;
    display: flex;
  }

  .nav-links li {
    margin-left: 20px;
  }

  .nav-links a {
    color: #fff;
    text-decoration: none;
    font-weight: bold;
    transition: color 0.3s ease;
  }

  .nav-links a:hover {
    color: #ffc107;
  }

  /* Hero section styles */
  .hero {
    background-color: #343a40;
    color: #fff;
    padding: 80px 0;
  }

  .hero-content {
    display: flex;
    align-items: center;
    justify-content: space-between;
  }

  .hero-text {
    flex-basis: 60%;
  }

  .hero-text h1 {
    font-size: 3rem;
    margin-bottom: 20px;
  }

  .hero-text p {
    font-size: 1.2rem;
    margin-bottom: 40px;
  }

  /* Achievements section styles */
  .achievements {
    padding: 80px 0;
  }

  .achievement-cards {
    display: flex;
    justify-content: space-around;
  }

  .achievement-card {
    background-color: #fff;
    padding: 30px;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    text-align: center;
    transition: transform 0.3s ease;
  }

  .achievement-card:hover {
    transform: translateY(-10px);
  }

  .achievement-card h3 {
    font-size: 2rem;
    margin-bottom: 10px;
  }

  .achievement-card p {
    font-size: 1.5rem;
    color: #343a40;
    font-weight: bold;
  }
  </style>
