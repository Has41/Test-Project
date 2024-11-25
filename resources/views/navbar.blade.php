<nav class="h-16 w-full bg-white flex items-center justify-between px-8 shadow-md">
    <!-- Logo or Brand Name -->
    <div class="text-2xl font-bold text-gray-800 font-poppins">
        Your Logo
    </div>

    <!-- Navigation Links in a Row -->
    <ul class="flex items-center mx-10">
        <li><a href="{{url('/index')}}"
                class="  py-2 px-4 nav-item text-customBg hover:text-customHover cursor-pointer font-poppins font-medium ">Home</a>
        </li>
        <li class="  py-2 px-4 nav-item text-customBg hover:text-customHover cursor-pointer font-poppins font-medium ">
            About Us</li>
        <li class="  py-2 px-4 nav-item text-customBg hover:text-customHover cursor-pointer font-poppins font-medium ">
            Service</li>
        <li class="  py-2 px-4 nav-item text-customBg hover:text-customHover cursor-pointer font-poppins font-medium">
            Contact Us</li>
        <li class="  py-2 px-4 nav-item text-customBg hover:text-customHover cursor-pointer font-poppins font-medium">
            <select class="appearance-none bg-transparent outline-none text-customBg cursor-pointer font-medium"
                onchange="navigateToPage(this.value)">
                <option value="#" disabled selected>More Options</option>
                <option value="./team.html">Teams Available</option>
                <option value="./create-project.html">Project Dashboard</option>
                <option value="./module.html">Modules</option>
                <option value="./project.html">Projects</option>
            </select>
        </li>
        @if (Request::is('login'))
            {{-- Do not show any button on the login page --}}
        @else
            @auth
                {{-- Show the logout button if the user is logged in --}}
                <a id="logout-button" href="#"
                    class="bg-customBg text-white py-2 px-4 rounded-lg hover:bg-customHover font-poppins font-medium">
                    Logout
                </a>

                <meta name="csrf-token" content="{{ csrf_token() }}">
                <!-- Other head content like CSS, scripts, etc. -->



                {{-- Logout form (required for POST requests in Laravel) --}}

            @else
                {{-- Show the login button if the user is not logged in --}}
                <a href="{{ route('login') }}"
                    class="bg-customBg text-white py-2 px-4 rounded-lg hover:bg-customHover font-poppins font-medium">
                    Login
                </a>
            @endauth
        @endif



    </ul>

</nav>
<script>
    document.getElementById("logout-button").addEventListener("click", async function (event) {
    event.preventDefault(); // Prevent default behavior of link

    const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
    const accessToken = localStorage.getItem('accessToken'); // Correct key name for access token

    if (!accessToken) {
        alert("No access token found. Please log in again.");
        return;
    }

    try {
        const res = await fetch("http://127.0.0.1:8000/api/logout", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "X-CSRF-TOKEN": csrfToken, // Send the CSRF token
                "Authorization": `Bearer ${accessToken}` // Send the access token
            }
        });

        const result = await res.json();
        if (result.status) {
            alert(result.message);
            localStorage.removeItem('accessToken'); // Clear access token from localStorage
            // Redirect the user after logout
            window.location.href = result.redirect_url;
        } else {
            alert("Logout failed: " + result.message);
        }
    } catch (error) {
        console.error("Error during logout:", error);
        alert("An error occurred. Please try again.");
    }
});

</script>