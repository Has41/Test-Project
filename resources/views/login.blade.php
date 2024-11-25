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
        <!-- <h5 class="text-xl font-semibold mb-4">Sign Up.</h5> -->
        <!-- Add a wrapper with a fixed width -->
        <div class="signin-bgColor flex justify-center flex-col space-x-3 rounded-2xl ">
          <form class="flex flex-col space-y-4 w-[300px] ">

            <input class="py-2 px-4 rounded-3xl font-poppins text-white bg-customBg text-center"
              placeholder="Enter Email" />
            <input class="py-2 px-4 rounded-3xl font-poppins text-white bg-customBg text-center"
              placeholder="Enter Password" type="password" />
            <button
              class="bg-customBg text-whitefont-poppins text-base font-semibold py-2 px-4 rounded-3xl transition-all ease-in-out hover:bg-customHover mx-auto justify-center w-28">
              Login
            </button>
        </div>
        </form>
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


</body>

</html>