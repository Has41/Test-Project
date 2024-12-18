<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <style>
    @include('style')
  </style>
  <title>About Us</title>
</head>

<body class="bg-customBg text-white">
  <!-- Navbar -->
  @include('navbar')

  <!-- Mobile Menu -->
  @include('mobileMenue')

  <!-- Main Content -->
  <main class="px-6 sm:px-12 py-12">
    <!-- Hero Section -->
    <section class="text-center">
      <h1 class="text-4xl font-bold text-white font-poppins">About Us</h1>
      <p class="text-gray-300 mt-4 text-lg font- font-poppins">
        Empowering teams to manage and track projects effortlessly.
      </p>
    </section>

    <!-- Our Mission -->
    <section class="mt-12 bg-white text-gray-800 p-8 rounded-lg shadow-md">
      <h2 class="text-2xl font-bold text-[#0b0b45] font-poppins">Our Mission</h2>
      <p class="mt-4 text-gray-600 font-poppins">
        To provide businesses with intuitive and efficient solutions that simplify workflows, improve productivity, and foster seamless collaboration.
      </p>
    </section>

    <!-- Our Vision -->
    <section class="mt-8 bg-white text-gray-800 p-8 rounded-lg shadow-md">
      <h2 class="text-2xl font-bold text-[#0b0b45] font-poppins">Our Vision</h2>
      <p class="mt-4 text-gray-600 font-poppins">
        To be the leading provider of project management tools and services, empowering businesses worldwide to achieve their goals.
      </p>
    </section>

    <!-- Our Values -->
    <section class="mt-8 bg-white text-gray-800 p-8 rounded-lg shadow-md">
      <h2 class="text-2xl font-bold text-[#0b0b45] font-poppins">Our Values</h2>
      <ul class="list-disc list-inside mt-4 text-gray-600">
        <li class="font-poppins leading-6">Innovation: Embracing creativity and forward-thinking solutions.</li>
        <li class="font-poppins leading-6">Integrity: Upholding honesty and transparency in everything we do.</li>
        <li class="font-poppins leading-6">Collaboration: Fostering teamwork and communication to achieve shared success.</li>
        <li class="font-poppins leading-6">Customer Centricity: Ensuring that client satisfaction remains our top priority.</li>
      </ul>
    </section>

    <!-- Meet the Team -->
    <section class="mt-8">
      <h2 class="text-2xl font-bold text-white font-poppins">Meet the Team</h2>
      <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 mt-6">
        <!-- Team Member -->
        <div class="text-center bg-white text-gray-800 p-6 rounded-lg shadow-md">
          <img src="images/David.jpg" alt="Team Member" class="w-32  h-24 mx-auto rounded-full" />
          <h3 class="mt-4 font-semibold font-poppins">John Doe</h3>
          <p class="text-gray-600 font-poppins">Project Manager</p>
        </div>
        <!-- Team Member -->
        <div class="text-center bg-white text-gray-800 p-6 rounded-lg shadow-md">
          <img src="images/Joe.jpg" alt="Team Member" class="w-32 h-24 mx-auto rounded-full" />
          <h3 class="mt-4 font-semibold font-poppins">Jane Smith</h3>
          <p class="text-gray-600 font-poppins">Lead Developer</p>
        </div>
        <!-- Team Member -->
        <div class="text-center bg-white text-gray-800 p-6 rounded-lg shadow-md">
          <img src="images/Jane.jpg" alt="Team Member" class="w-32  h-24 mx-auto rounded-full" />
          <h3 class="mt-4 font-semibold font-poppins">Emily Davis</h3>
          <p class="text-gray-600 font-poppins">UI/UX Designer</p>
        </div>
      </div>
    </section>
  </main>

  <footer class="bg-[#0b0b45] text-white text-center py-6 mt-12">
    <p class="font-poppins">&copy; 2024 Manage Your Business. All Rights Reserved.</p>
  </footer>

  <script>
     document.addEventListener("DOMContentLoaded", function () {
        const logoutButton = document.getElementById("logout-button");
        const loginButton = document.getElementById("login-button");
        const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
        const accessToken = localStorage.getItem('accessToken'); // Retrieve the access token from localStorage

        if (!accessToken) {
            logoutButton.style.display = "none";
            loginButton.style.display = "block";
        }
        else {
            logoutButton.style.display = "block";
            loginButton.style.display = "none";
        }

    })
  
  </script>
</body>

</html>