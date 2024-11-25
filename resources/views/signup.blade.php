<!doctype html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- @vite(['../css/app.css', '../js/app.js']) -->
 
    <style>
      @include('style')
    </style>

    <title>Manage Your Business</title>
    <!-- <style>
    select {
      background-image: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zY3JlZW5zY3JpcHQtZ3JhcGhpY3MuZ2Uvc3ZnIj4KPHBhdGggZD0iTTEwLDEyTDAsM0wzLjk4OTcsM0wyLjAwMTksMEwyLjAwMTksMEwyLjAwMTksMEwzLjk4OTcsMEwzLjk4OTcsMEwzLjk4OTcsMEwiIHN0eWxlPSJmaWxsOm5vbmU7c3RyZWtlaW5nOm5vbmUiLz4KPC9zdmc+Cg==');
      background-repeat: no-repeat;
      background-position: right 10px center;
      background-size: 16px;
    }
  </style> -->
</head>

<body>
  <!-- Add Navbar -->
  @include('navbar')
  <!-- End Navbar -->

  <div class="signup-container bg-customBg w-full h-screen flex">
      <!-- Left Section -->
      <div class="left-section flex-1 flex flex-col mt-28 px-16 ml-10 text-white">
        <!-- Heading Section -->
        <div class="signup-text">
          <h1 class="text-5xl leading-tight font-poppins font-bold">Project Management</h1>
          <h1 class="text-5xl leading-tight font-poppins font-bold">Made Easy.</h1>
          <p class="text-lg mt-4 font-poppins font-light">Plan, Track, and Run Successful Projects Together.</p>
        </div>

        <!-- Form Section -->
        <div class="signup-form mt-10">
          <h5 class="text-xl font-semibold mb-4 font-poppins">Sign Up.</h5>
          <!-- Add a wrapper with a fixed width -->
          <form id="signup-form" class="flex flex-col space-y-4 w-[400px]">
          <meta name="csrf-token" content="{{ csrf_token() }}">
            <input id="username" class="py-2 px-4 rounded-3xl text-center font-poppins text-customBg" placeholder="Enter Username" required />
            <input id="email" class="py-2 px-4 rounded-3xl text-center font-poppins text-customBg" placeholder="Enter Email" type="email" required />
            <input
              id="password"
              class="py-2 px-4 rounded-3xl text-center font-poppins text-customBg"
              placeholder="Enter Password"
              type="password"
              required
            />
            <input
              id="confirm-password"
              class="py-2 px-4 rounded-3xl text-center font-poppins text-customBg"
              placeholder="Confirm Password"
              type="password"
              required
            />
            <!-- <select id="role" class="text-customBg py-2 px-4 rounded-3xl text-center font-poppins appearance-none" required>
              <option value="">Select Role</option>
              <option value="User">User</option>
              <option value="Admin">Admin</option>
            </select> -->
            <div class="agreement-text">
              <p class="text-xs font-poppins font-light">
                I agree to the Atlassian customer agreement, which incorporates by reference the AI Product-Specific Terms and acknowledges the
                privacy policy!
              </p>
            </div>
            <button
              type="submit"
              class="bg-white text-customBg font-poppins text-base font-semibold py-2 px-4 rounded-3xl transition-all ease-in-out hover:bg-gray-400 mx-auto justify-center w-28"
            >
              Sign Up
            </button>
          </form>
        </div>
      </div>

      <!-- Right Section -->
      <div
        class="right-section items-center justify-center bg-cover bg-center h-[50%] w-full"
        style="
          background-image: url('./assets/Signup.png');
          background-position: center;
          background-repeat: no-repeat;
          background-size: cover;
          height: 50vh;
          width: 45%;
          margin-top: 200px;
          margin-right: 80px;
        "
      ></div>
    </div>
  <script>
    document.getElementById("signup-form").addEventListener("submit", async function (event) {
  event.preventDefault(); // Prevent the form from submitting normally

  // Collect form data
  const username = document.getElementById("username").value;
  const email = document.getElementById("email").value;
  const password = document.getElementById("password").value;
  const confirmPassword = document.getElementById("confirm-password").value;

  // Validate password
  if (password !== confirmPassword) {
    alert("Passwords do not match!");
    return;
  }

  // User object
  const userData = {
    username: username,
    email: email,
    password: password,
    role: "user"
  };

  try {
    // Get CSRF token
    const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute("content");

    // Make API request
    const res = await fetch("http://127.0.0.1:8000/api/register", {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
        "X-CSRF-TOKEN": csrfToken
      },
      body: JSON.stringify(userData)
    });

    const result = await res.json();

    if (result.status) {
      // If registration is successful
      alert("Registration successful!");
      // Redirect to the login page
      window.location.href = result.redirect_url || "http://127.0.0.1:8000/login";
    } else {
      // If registration fails
      alert("Error: " + result.message);
    }
  } catch (error) {
    console.error("Error:", error);
    alert("An error occurred. Please try again later.");
  }
});

  </script>


</body>

</html>c