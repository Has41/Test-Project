<nav class="h-16 w-full bg-white flex items-center justify-between px-8 shadow-md">
    <!-- Logo or Brand Name -->
    <div class="text-2xl font-bold text-gray-800 font-poppins">
        Your Logo
    </div>

    <!-- Navigation Links in a Row -->
    <ul class="flex items-center mx-10">
        <li><a href="{{url('/')}}" style="padding: 1rem;"
                class="  py-2 px-4 nav-item text-customBg hover:text-customHover cursor-pointer font-poppins font-medium ">Home</a>
        </li>
        <li> <a href="{{url('/about')}}" style="padding: 5px;"
                class="  py-2 px-4 nav-item text-customBg hover:text-customHover cursor-pointer font-poppins font-medium ">
                About Us</a></li>
        <li> <a href="{{url('/service')}}" style="padding: 5px;"
                class="  py-2 px-4 nav-item text-customBg hover:text-customHover cursor-pointer font-poppins font-medium ">
                Services</a></li>
        <li> <a href="{{url('/contact')}}" style="padding: 5px;"
                class="  py-2 px-4 nav-item text-customBg hover:text-customHover cursor-pointer font-poppins font-medium ">
                Contact Us</a></li>
        @if (Request::is('aabout') || Request::is('conatact') || Request::is('seravice'))
            {{-- Show the login button on specific pages --}}
            <a href="{{ route('login') }}"
                class="bg-customBg text-white py-2 px-4 rounded-lg hover:bg-customHover font-poppins font-medium"
                id="login-button">
                Login
            </a>
        @else
            {{-- Check if the user is authenticated --}}
            @auth
                {{-- Show navigation options for authenticated users --}}
                <li id="selection"
                    class="py-2 px-4 nav-item text-customBg hover:text-customHover cursor-pointer font-poppins font-medium">
                    <select class="appearance-none bg-transparent outline-none text-customBg cursor-pointer font-medium"
                        onchange="navigateToPage(this.value)">
                        <option value="#" disabled selected>More Options</option>
                        <option value="/team">Projects</option>
                        @if (Auth::user()->role === 'admin')
                            <option value="/create">Create Project</option>
                        @endif
                        <option value="/module">Modules</option>
                        <option value="/requests">Request</option>
                    </select>
                </li>

                <script>
                    function navigateToPage(url) {
                        if (url && url !== '#') {
                            window.location.href = url;
                        }
                    }
                </script>
            @else
                {{-- If not authenticated and not on a specific route, show the login button --}}
                <a href="{{ route('login') }}"
                    class="bg-customBg text-white py-2 px-4 rounded-lg hover:bg-customHover font-poppins font-medium"
                    id="login-button">
                    Login
                </a>
            @endauth

            {{-- Show logout button only when authenticated --}}
            @auth
                <a id="logout-button" href="#"
                    class="bg-customBg text-white py-2 px-4 rounded-lg hover:bg-customHover font-poppins font-medium">
                    Logout
                </a>
            @endauth
        @endif



        <!-- @if(Auth::check())
            <p style="color: green;">Authenticated User: {{ Auth::user()->username }}</p>
        @else
            <p style="color: green;">Not authenticated</p>
        @endif    -->






    </ul>

</nav>


<script>
    document.addEventListener("DOMContentLoaded", function () {
        const logoutButton = document.getElementById("logout-button");
        const loginButton = document.getElementById("login-button");
        const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
        const accessToken = localStorage.getItem('accessToken'); // Retrieve the access token from localStorage
        const selection = document.getElementById('selection');
        if (!accessToken) {
            logoutButton.style.display = "none";
            loginButton.style.display = "block";
            selection.style.display = "none";
        }
        else {
            logoutButton.style.display = "block";
            loginButton.style.display = "none";
            selection.style.display = "block";
        }

    })

    document.getElementById("logout-button").addEventListener("click", async function (event) {
        event.preventDefault(); // Prevent default behavior of link

        const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
        const accessToken = localStorage.getItem('accessToken'); // Retrieve the access token from localStorage

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
                // Clear the access token from localStorage after a successful logout
                localStorage.removeItem('accessToken');

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