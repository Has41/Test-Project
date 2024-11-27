<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    @include('style')
  </style>
  <title>Manage Your Business</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body class="bg-customBg text-white">
  <!-- Add Navbar -->
  @include('navbar')
  <!-- End Navbar -->
  <main>
    <section class="grid grid-cols-1 sm:grid-cols-2 items-center justify-center h-screen p-8 overflow-hidden">
      <!-- Left Content -->
      <div class="left-content text-left ml-[20%] flex flex-col gap-6">
        <h1 class="font-poppins font-bold text-4xl">Home</h1>
        <h2 class="font-poppins font-bold text-4xl tracking-wide">Manage Your Business</h2>
        <p class="font-poppins text-lg leading-6 text-gray-400">
          Plan, Track, And Run Successful Projects Together.
        </p>
        <a href="./signup"
          class="bg-white text-customBg py-2 px-4 w-32 rounded-lg font-poppins font-medium transition-colors duration-500 ease-in-out hover:bg-customHover hover:text-white">
          Get Started
        </a>

      </div>
      <!-- Right Content -->
      <div class="right-content flex justify-center items-center">
        <img src="images/SideImage.png" alt="Illustration of project management" class="max-w-[135%] h-auto" />
      </div>
    </section>
  </main>
</body>

</html>