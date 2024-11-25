<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Team Available</title>
  <style>
    @include('style')
    /* Reset */
    body,
    h1,
    h2,
    p,
    div,
    span {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    /* General Styles */
    body {
      font-family: Arial, sans-serif;
      background-color: #121063;
      color: #ffffff;
      display: flex;
      justify-content: center;
      height: 100vh;
    }

    .container {
      width: 90%;
      max-width: 1200px;
      margin-top: 3%;
      overflow: hidden;
    }

    /* Header */
    .header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 2rem;
    }

    .header-title {
      background: white;
      color: #121063;
      font-size: 1.5rem;
      padding: 0.5rem 1.5rem;
      border-radius: 1.5rem;
    }

    .language-button {
      background: white;
      color: #121063;
      font-size: 1rem;
      padding: 0.5rem 1rem;
      border-radius: 1.5rem;
      border: none;
      cursor: pointer;
    }

    /* Cards Section */
    .cards {
      display: flex;
      justify-content: center;
      gap: 1.5rem;
    }

    /* Card */
    .card {
      background: #ffffff;
      color: #121063;
      border-radius: 1.5rem;
      text-align: center;
      padding: 3rem 1rem;
      width: 20rem;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      margin-top: 4%;
    }

    .card-avatar {
      background: #121063;
      color: white;
      font-size: 1.5rem;
      width: 60px;
      height: 60px;
      border-radius: 50%;
      display: flex;
      justify-content: center;
      align-items: center;
      margin: 0 auto 1rem;
    }

    .card-title {
      font-size: 1.2rem;
      font-weight: bold;
      margin-bottom: 0.5rem;
    }

    .card-role {
      font-size: 0.9rem;
      color: #666;
      margin-bottom: 1rem;
    }

    .card-info {
      display: flex;
      justify-content: space-between;
      margin-bottom: 1rem;
      font-size: 0.9rem;
      color: #666;
      column-gap: 5px;
    }

    .info-item {
      display: flex;
      flex-direction: column;
      align-items: center;
      row-gap: 8px;
    }

    .status {
      font-size: 0.9rem;
      margin-bottom: 1rem;
    }

    .rating {
      font-size: 1.2rem;
      color: #ffcd3c;
    }
  </style>
</head>

<body>

  <div class="container">

    <!-- Header -->
    <header class="header">
      <h1 class="header-title">Team Available</h1>
      <button class="language-button">Language Eng</button>
    </header>

    <!-- Cards Section -->
    <section class="cards">
      <!-- Card 1 -->
      <div class="card">
        <div class="card-avatar">DP</div>
        <h2 class="card-title">Lorem Ipsum</h2>
        <p class="card-role">Manager</p>
        <div class="card-info">
          <div class="info-item">
            <span>Project Done</span>
            <span>-</span>
          </div>
          <div class="info-item">
            <span>Users</span>
            <span>-</span>
          </div>
          <div class="info-item">
            <span>Clients</span>
            <span>-</span>
          </div>
          <div class="info-item">
            <span>Impressions</span>
            <span>-</span>
          </div>
        </div>
        <p class="status">Available</p>
        <div class="rating">
          <span>★</span>
          <span>★</span>
          <span>★</span>
          <span>★</span>
          <span>☆</span>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="card">
        <div class="card-avatar">DP</div>
        <h2 class="card-title">Lorem Ipsum</h2>
        <p class="card-role">Tester</p>
        <div class="card-info">
          <div class="info-item">
            <span>Project Done</span>
            <span>-</span>
          </div>
          <div class="info-item">
            <span>Users</span>
            <span>-</span>
          </div>
          <div class="info-item">
            <span>Clients</span>
            <span>-</span>
          </div>
          <div class="info-item">
            <span>Impressions</span>
            <span>-</span>
          </div>
        </div>
        <p class="status">Available</p>
        <div class="rating">
          <span>★</span>
          <span>★</span>
          <span>★</span>
          <span>☆</span>
          <span>☆</span>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="card">
        <div class="card-avatar">DP</div>
        <h2 class="card-title">Lorem Ipsum</h2>
        <p class="card-role">Developers</p>
        <div class="card-info">
          <div class="info-item">
            <span>Project Done</span>
            <span>10</span>
          </div>
          <div class="info-item">
            <span>Users</span>
            <span>3</span>
          </div>
          <div class="info-item">
            <span>Clients</span>
            <span>6</span>
          </div>
          <div class="info-item">
            <span>Impressions</span>
            <span>7</span>
          </div>
        </div>
        <p class="status">Available 23 November</p>
        <div class="rating">
          <span>★</span>
          <span>★</span>
          <span>★</span>
          <span>★</span>
          <span>★</span>
        </div>
      </div>
    </section>
  </div>
</body>

</html>
<script>
  function navigateToPage(value) {
    if (value) {
      window.location.href = value; // Redirect to the selected page
    }
  }
</script>