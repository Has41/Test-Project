<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    @include('style')
    
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Poppins", sans-serif;
  }
  
  body {
    background-color: #010039;
    color: #fff;
  }
  
  section {
    display: grid;
    grid-template-columns: 1fr 1fr; /* Two equal columns */
    align-items: center; /* Vertically center content */
    justify-content: center; /* Space content between columns */
    height: 100vh;
    width: 100%;
    padding: 2rem;
    overflow: hidden;
  }
  
  .left-content {
    text-align: left;
    margin-left: 20%;
    display: flex; /* Change to flexbox for better alignment */
    flex-direction: column; /* Stack elements vertically */
    gap: 1.5rem; /* Apply vertical spacing */
  }
  
  .left-content h1 {
    font-size: 4rem;
  }
  
  .left-content h2 {
    font-size: 4rem;
    letter-spacing: 1px;
  }
  
  .left-content p {
    font-size: 1.2rem;
    line-height: 1.5;
    color: gray;
  }
  
  .right-content {
    display: flex;
    justify-content: center;
    align-items: center;
  }
  
  .right-content img {
    max-width: 135%; /* Make image responsive */
    height: auto; /* Maintain aspect ratio */
  }
  

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