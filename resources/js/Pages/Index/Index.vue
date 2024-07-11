<template>
  <div class="profile-page">
    <header class="header">
      <nav class="nav">
        <ul>
          <li><a href="#" @click.prevent="editProfile">Edit Profile</a></li>
        </ul>
      </nav>
    </header>
    <main class="main">
      <section class="profile-section">
        <h1>{{ userName }}</h1>
        <p>{{ userEmail }}</p>
        <!-- <img :src="userAvatar" alt="User Avatar"> -->
      </section>
      <section class="stats-section">
        <h2> Achievements </h2>
        <ul>
          <li><span> Udemy </span> {{ postCount }}</li>
          <li><span> Projects </span> {{ followerCount }}</li>
          <li><span> Experience </span> {{ followingCount }}</li>
        </ul>
      </section>
    </main>
  </div>
</template>

<script>
export default {
  data() {
    return {
      userName: 'Ramesh Sharathguru',
      userEmail: 'guru9763@gmail.com',
      userAvatar: 'https://example.com/avatar.jpg',
      udemyCourse: 10,
      projectCount: 50,
      experienceYears: 20
    }
  },
  methods: {
    editProfile() {
      // edit profile logic here
    },
    logout() {
      // logout logic here
    }
  }
}
</script>

<style scoped>
.profile-page {
  max-width: 800px;
  margin: 40px auto;
  padding: 20px;
  background-color: #f9f9f9;
  border: 1px solid #ddd;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.header {
  background-color: #333;
  color: #fff;
  padding: 10px;
  text-align: center;
}

.nav ul {
  list-style: none;
  margin: 0;
  padding: 0;
  display: flex;
  justify-content: space-between;
}

.nav li {
  margin-right: 20px;
}

.nav a {
  color: #fff;
  text-decoration: none;
}

.main {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
}

.profile-section {
  flex-basis: 40%;
  margin: 20px;
}

.stats-section {
  flex-basis: 30%;
  margin: 20px;
}

.stats-section ul {
  list-style: none;
  margin: 0;
  padding: 0;
}

.stats-section li {
  margin-bottom: 10px;
}

.stats-section span {
  font-weight: bold;
}
</style>
