<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Manage Your Business</title>
  <style>
    @include('style')
  </style>
</head>

<body class="bg-customBg">
  <!-- Add Navbar -->
  @include('navbar')
  <!-- End Navbar -->

  <div style="margin-bottom: 2.5rem" class="flex justify-between items-center px-20 mt-10 ">
        <!-- Left Element -->
        <h1 class="heading font-poppins font-bold text-2xl bg-white p-3 rounded-3xl w-52 text-center">
          Module Status
        </h1>
        <!-- Right Element -->
        <h1 class="heading font-poppins font-semibold text-1xl bg-white p-3 rounded-3xl w-36 text-center">
          Language Eng
        </h1>
      </div>
      @foreach ($requests as $request)
  <main class="w-full min-h-screen flex flex-col md:flex-row pt-1 md:pt-1 md:px-1">
    <!-- Left Content -->
    <section class="h-screen p-0 overflow-hidden bg-customBg">
      
      <div class="w-[80%] h-[45%] justify-center mt-2">
        
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

                  @if (Auth::user()->role === 'admin' || Auth::user()->id === $request->assigned_to)
                    <form id="accept-form-{{ $request->id }}" data-request-id="{{ $request->id }}"
                      data-request-by-id="{{ $request->requestBy_id }}" data-project-id="{{ $request->project_id }}">
                      @csrf
                      <button style="background-color: #121063; text-align: center; color: #fff; padding: 0.5rem 1rem; border-radius: 1.5rem; border: none; cursor: pointer;" type="submit">
                        Accept
                      </button>
                    </form>
                  @endif
                </div>
              </div>

              <!-- Right Column -->
              <div class="w-1/2 space-y-3 mt-10">
                <p class="text-customHover font-poppins text-lg">{{ $request->name ?? 'N/A' }}</p>
                <p class="text-customHover font-poppins text-lg">$ {{ $request->budget ?? 'N/A' }}</p>
                <p class="text-customHover font-poppins text-lg">{{ $request->deadline ?? 'N/A' }}</p>
                <p class="text-customHover font-poppins text-lg">{{ $request->status ?? 'N/A' }}</p>
              </div>

              <!-- Image Section -->
              <div class="w-1/2 space-y-3 module-background">
                <!-- Background Image -->
              </div>
            </div>
          </div>
          
        </div>
      </section>
    </main>
    @endforeach

  <script>
    // Fetch and handle form submission for accept requests
    document.querySelectorAll('form[id^="accept-form-"]').forEach((form) => {
      form.addEventListener('submit', async function (event) {
        event.preventDefault(); // Prevent form's default submission

        try {
          // Get data attributes
          const projectId = form.dataset.projectId;
          const requestId = form.dataset.requestId;
          const requestById = form.dataset.requestById;

          // Send a POST request using Fetch API
          const response = await fetch('http://127.0.0.1:8000/api/accept', {
            method: 'POST',
            headers: {
              'Content-Type': 'application/json',
              'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            },
            body: JSON.stringify({
              project_id: projectId,
              request_id: requestId,
              requestBy_id: requestById,
            }),
          });

          const data = await response.json();

          if (data.status) {
            alert('Request accepted successfully');
            window.location = data.redirect_url; // Redirect if successful
          } else {
            alert('Failed to accept request: ' + JSON.stringify(data.message));
          }
        } catch (error) {
          console.error('Error:', error);
          alert('An error occurred while accepting the request.');
        }
      });
    });
  </script>
</body>

</html>

<style>
  .module-background {
    background: url('images/Login.png') no-repeat center;
    background-size: cover;
    width: 350px;
    height: 350px;
    margin-top: -40px;
  }
</style>
