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
            {{-- Do not show the button on the login page --}}
        @else
            @guest
                {{-- Show the login button only if the user is not logged in --}}
                <a href="{{ route('login') }}"
                    class="bg-customBg text-white py-2 px-4 rounded-lg hover:bg-customHover font-poppins font-medium">
                    Login
                </a>
            @endguest
        @endif


    </ul>

</nav>