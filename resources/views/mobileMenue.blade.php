  <!-- Mobile Menu -->
  <div id="mobileMenu" class="md:hidden absolute top-16 right-0 flex  flex-col bg-white shadow-lg px-4 py-2">
    <a href="./index.html" class="py-2 text-[#0b0b45] hover:text-gray-600 font-medium">Home</a>
    <a href="./about-us.html" class="py-2 text-[#0b0b45] hover:text-gray-600 font-medium font-poppins" >About Us </a>
    <a href="./services.html" class="py-2 text-[#0b0b45] hover:text-gray-600 font-medium font-poppins">Service</a>
    <a class="py-2 text-[#0b0b45] hover:text-gray-600 font-medium">Contact Us</a>
    <select 
    class="bg-transparent outline-none text-[#0b0b45] cursor-pointer font-light text-sm py-1"
    style="height: 30px; line-height: 1.5;"
    onchange="navigateToPage(this.value)">
    <option value="#" disabled selected>More Options</option>
    <option value="./team.html">Teams Available</option>
    <option value="./create-project.html">Project Dashboard</option>
    <option value="./module.html">Modules</option>
    <option value="./project.html">Projects</option>
  </select>
  

    <a href="./login.html" class="p-2 text-white bg-[#0b0b45] rounded-lg hover:bg-gray-600 font-medium">Login</a>
  </div>