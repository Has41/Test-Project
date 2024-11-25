<!doctype html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- @vite(['../css/app.css', '../js/app.js']) -->
  <href=".. /css/app.css" rel="stylesheet">
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
    <div class="left-section flex-1 flex flex-col mt-28 px-16 ml-10  text-white">
      <!-- Heading Section -->
      <div class="signup-text">
        <h1 class="text-5xl  leading-tight font-poppins font-bold">Project Management</h1>
        <h1 class="text-5xl leading-tight font-poppins font-bold">Made Easy.</h1>
        <p class="text-lg mt-4 font-poppins font-light">
          Plan, Track, and Run Successful Projects Together.
        </p>
      </div>

      <!-- Form Section -->
      <div class="signup-form mt-10">
        <h5 class="text-xl font-semibold mb-4 font-poppins">Sign Up.</h5>
        <!-- Add a wrapper with a fixed width -->
        <form class="flex flex-col space-y-4 w-[400px]">
          <input class="py-2 px-4 rounded-3xl text-center font-poppins  text-customBg" placeholder="Enter Username" />
          <input class="py-2 px-4 rounded-3xl text-center font-poppins  text-customBg" placeholder="Enter Email" />
          <input class="py-2 px-4 rounded-3xl text-center font-poppins  text-customBg" placeholder="Enter Password"
            type="password" />
          <!-- <label for="role" class="font-poppins font-semibold" >Select Role</label> -->
          <select name="role" id="role"
            class="text-customBg py-2 px-4 rounded-3xl text-center font-poppins appearance-none">
            <option value="">Select Role</option>
            <option value="User">User</option>
            <option value="Admin">Admin</option>
          </select>
          <div class="agreement-text">
            <p class="text-xs font-poppins font-light">I agree to the Atlassian customer agreement, Which incorpo-</p>
            <p class="text-xs font-poppins font-light">rates byt reference the AI Product-SpecificTerms and acknowle-
            </p>
            <p class="text-xs font-poppins font-light">dge the privacy policy!</p>

          </div>
          <button
            class="bg-white text-customBg font-poppins text-base font-semibold py-2 px-4 rounded-3xl transition-all ease-in-out hover:bg-gray-400 mx-auto justify-center w-28">
            Sign Up
          </button>
        </form>
      </div>

    </div>

    <!-- Right Section -->
    <div class="right-section items-center justify-center bg-cover bg-center h-[50%] w-full" style="
        
      "></div>
  </div>



</body>

</html>