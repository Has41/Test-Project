<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Sign Up</title>
  <style>
    @include('style')
  </style>
</head>
<body>
  @include('navbar')
  <main class="bg-customBg w-full min-h-screen flex flex-col md:flex-row pt-16 md:pt-14 md:px-4">
    <!-- Left Section -->
    <div class="flex flex-col justify-center px-8 md:px-16 pb-8 text-white w-full md:w-1/2">
      <section>
        <!-- Heading and Description -->
        <div class="flex flex-col gap-y-3">
          <h1 class="text-4xl sm:text-5xl leading-none font-poppins font-bold">Project Management</h1>
          <h1 class="text-4xl sm:text-5xl leading-tight font-poppins font-bold">Made Easy.</h1>
          <p class="text-lg mt-4 font-poppins font-light">Plan, Track, and Run Successful Projects Together.</p>
        </div>

        <!-- Form Section -->
        <div class="pt-8">
          <form id="signup-form" class="flex flex-col space-y-4 w-full sm:w-[400px]">
            <h5 class="text-xl font-semibold font-poppins">Sign Up</h5>

            <input
              id="username"
              class="py-2 px-4 rounded-3xl text-center font-poppins text-customBg"
              placeholder="Enter Username"
              required
              type="text"
            />
            <input
              id="email"
              class="py-2 px-4 rounded-3xl text-center font-poppins text-customBg"
              placeholder="Enter Email"
              type="email"
              required
            />
            <input
              id="password"
              class="py-2 px-4 rounded-3xl text-center font-poppins text-customBg"
              placeholder="Enter Password"
              type="password"
              required
              autocomplete="new-password"
            />
            <input
              id="confirm-password"
              class="py-2 px-4 rounded-3xl text-center font-poppins text-customBg"
              placeholder="Confirm Password"
              type="password"
              required
              autocomplete="new-password"
            />
            <p class="text-xs font-poppins font-light">
              I agree to the Atlassian customer agreement, which incorporates by reference the AI Product-Specific Terms and acknowledges the
              privacy policy!
            </p>
            <button
              type="submit"
              class="bg-white text-customBg font-poppins text-base font-semibold py-2 px-4 rounded-3xl transition-all ease-in-out hover:bg-gray-400 mx-auto justify-center w-28"
            >
              Sign Up
            </button>
            <p class="text-center text-white font-poppins text-sm mt-4">
              Already have an account? <a href="/login" class="text-white cursor-pointer">Login!</a>
            </p>
          </form>
        </div>
      </section>
    </div>

    <!-- Right Section (Image) -->
    <div class="aspect-[3/4] md:aspect-[3/1] w-full md:w-1/2 flex items-center justify-center">
      <img src="images/Signup.png" alt="Signup Image" class="object-cover w-full h-full" />
    </div>
  </main>

  <script>
    document.getElementById("signup-form").addEventListener("submit", async (event) => {
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

      const userData = {
        username,
        email,
        password
      };

      try {
        // Fetch CSRF token
        const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute("content");

        // Send request to Laravel API
        const res = await fetch("/api/register", {
          method: "POST",
          headers: {
            "Content-Type": "application/json",
            "X-CSRF-TOKEN": csrfToken
          },
          body: JSON.stringify(userData)
        });

        const result = await res.json();

        if (res.ok && result.status) {
          alert("Registration successful!");
          window.location.href = "/login";
        } else {
          alert("Error: " + (result.message || "An error occurred."));
        }
      } catch (error) {
        console.error("Error:", error);
        alert("An error occurred. Please try again later.");
      }
    });
  </script>
</body>
</html>
