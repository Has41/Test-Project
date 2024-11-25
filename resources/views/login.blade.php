<!doctype html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    @include('style')
  </style>
  <title>Manage Your Business</title>
</head>

<body>
  <!-- Add Navbar -->
  @include('navbar')
  <!-- End Navbar -->
  <div class="signin-container bg-customBg w-full h-screen flex">
    <!-- Left Section -->
    <div class="left-section flex-1 flex flex-col mt-28 px-16 ml-10  text-white">
      <!-- Heading Section -->
      <div class="signup-text">
        <h1 class="text-5xl font-bold leading-tight font-poppins">Sign In To Make</h1>
        <h1 class="text-5xl font-bold leading-tight font-poppins">Your Project Easy.</h1>
        <p class="text-lg mt-4 font-poppins">
          Plan, Track, and Run Successful Projects Together.
        </p>
      </div>

      <!-- Form Section -->
      <div class="signin-form mt-10 ml-20 h-64 bg-white flex justify-center rounded-2xl w-[350px]">
        <div class="signin-bgColor flex justify-center flex-col space-x-3 rounded-2xl">
          <form id="login-form" class="flex flex-col space-y-4 w-[300px]">
            <meta name="csrf-token" content="{{ csrf_token() }}">
            <input id="email" class="py-2 px-4 rounded-3xl font-poppins text-white bg-customBg text-center"
              placeholder="Enter Email" type="email" required />
            <input id="password" class="py-2 px-4 rounded-3xl font-poppins text-white bg-customBg text-center"
              placeholder="Enter Password" type="password" required />
            <button type="submit"
              class="bg-customBg text-white font-poppins text-base font-semibold py-2 px-4 rounded-3xl transition-all ease-in-out hover:bg-customHover mx-auto justify-center w-28">
              Login
            </button>
          </form>
        </div>
      </div>

    </div>

    <!-- Right Section -->
    <div class="right-section items-center justify-center bg-cover bg-center h-[50%] w-full" style="
        background-image: url('images/Login.png');
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        height: 40vh;
        width: 40%;
        margin-top: 200px;
        margin-right: 80px;
      "></div>
  </div>
  <script>
    async function loginUser(email, password) {
      const loginData = {
        email: email,
        password: password,
      };

      try {
        // Get CSRF token from the meta tag
        const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

        const res = await fetch("http://127.0.0.1:8000/api/login", {
          method: "POST",
          headers: {
            "Content-Type": "application/json",
            "X-CSRF-TOKEN": csrfToken, // Include CSRF token here
          },
          body: JSON.stringify(loginData),
        });

        const data = await res.json();


        if (data.status) {
          localStorage.setItem("accessToken", data.token.plainTextToken);


          window.location.href = data.redirect_url;
        } else {

          alert("Login failed: " + data.message);
        }
      } catch (error) {
        console.error("Error:", error);
        alert("An error occurred. Please try again.");
      }
    }

    document.getElementById("login-form").addEventListener("submit", function (event) {
      event.preventDefault();

      const email = document.getElementById("email").value;
      const password = document.getElementById("password").value;

      loginUser(email, password);
    });
  </script>


</body>

</html>