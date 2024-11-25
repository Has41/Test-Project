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

<body>
  <!-- Add Navbar -->
  @include('navbar')
  <!-- End Navbar -->

  <main>
    <section class="h-screen p-8 overflow-hidden bg-customBg">
      <!-- Left Content -->

      <div class="flex justify-between items-center px-20 mt-10">
        <!-- Left Element -->
        <h1 class="heading font-poppins font-bold text-2xl bg-white p-3 rounded-3xl w-52 text-center">
          Module Status
        </h1>

        <!-- Right Element -->
        <h1 class="heading font-poppins font-semibold text-1xl bg-white p-3 rounded-3xl w-36 text-center">
          Language Eng
        </h1>
      </div>

      <div class="flex  w-[80%] h-[45%] justify-center mt-20  ">
        <div class="bg-white w-[70%] h-auto rounded-3xl p-8">
          <div class="flex">
            <!-- Left Column -->
            <div class="w-1/2 space-y-3 mt-10 relative">
              <!-- Module Details -->
              <p class="text-customBg font-poppins text-lg font-semibold">Module Name:</p>
              <p class="text-customBg font-poppins text-lg font-semibold">Module Cost:</p>
              <p class="text-customBg font-poppins text-lg font-semibold">Module Deadline:</p>
              <p class="text-customBg font-poppins text-lg font-semibold">Module Status:</p>

              <!-- Tag -->
              <div class="tag flex items-center space-x-2 absolute bottom-0 right-0 p-2 mr-10 bg-gray-200 rounded-lg">
                <p class="text-customBg font-poppins font-normal text-xs">◯</p>
                <p class="text-customBg font-poppins font-normal text-xs">Available</p>
                <p class="text-customBg font-poppins font-normal text-xs">★★★★</p>
              </div>
            </div>


            <!-- Right Column -->
            <div class="w-1/2 space-y-3 mt-10">
              <p class="text-customHover font-poppins text-lg">Design</p>
              <p class="text-customHover font-poppins text-lg">200$</p>
              <p class="text-customHover font-poppins text-lg">23 November</p>
              <p class="text-customHover font-poppins text-lg">50%</p>
            </div>
            <div class="w-1/2 space-y-3  " style="background: url('./assets/Login.png');
                           background-repeat: no-repeat;
                           background-position: center;
                           background-size: cover;
                           width: 350px;
                           height: 350px;
                           margin-top: -40px;
                    ">
              <!-- <img src="images/Login.png" alt="Image" class="w-[100%] h-auto"> -->
            </div>
          </div>
        </div>
      </div>

  </main>

</body>

</html>
<script>
  function navigateToPage(value) {
    if (value) {
      window.location.href = value; // Redirect to the selected page
    }
  }
</script>