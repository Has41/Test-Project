<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <style>
        @include('style')
    </style>
    <title>Contact Us</title>
  </head>
  <body>
   @include('navbar')

    <!-- Mobile Menu -->
   
    <main class="bg-customBg py-16 px-6 sm:px-8 md:px-12">
      <div class="max-w-4xl mx-auto">
        <!-- Heading and Description -->
        <section class="text-center mb-12">
          <h1 class="text-4xl font-semibold text-white">Contact Us</h1>
          <p class="text-lg text-white mt-4">We'd love to hear from you! Fill out the form below or reach us via our contact information.</p>
        </section>

        <!-- Contact Form -->
        <section class="bg-white p-8 rounded-lg shadow-lg">
          <form action="#" method="POST" class="space-y-6">
            <div class="flex flex-col sm:flex-row gap-4">
              <!-- Name Field -->
              <div class="flex-1">
                <label for="name" class="block text-lg font-medium text-gray-700">Your Name</label>
                <input
                  type="text"
                  id="name"
                  name="name"
                  class="w-full mt-2 p-4 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#0b0b45]"
                  placeholder="Enter your name"
                  required
                />
              </div>

              <!-- Email Field -->
              <div class="flex-1">
                <label for="email" class="block text-lg font-medium text-gray-700">Your Email</label>
                <input
                  type="email"
                  id="email"
                  name="email"
                  class="w-full mt-2 p-4 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#0b0b45]"
                  placeholder="Enter your email"
                  required
                />
              </div>
            </div>

            <!-- Subject Field -->
            <div>
              <label for="subject" class="block text-lg font-medium text-gray-700">Subject</label>
              <input
                type="text"
                id="subject"
                name="subject"
                class="w-full mt-2 p-4 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#0b0b45]"
                placeholder="Enter the subject"
                required
              />
            </div>

            <!-- Message Field -->
            <div>
              <label for="message" class="block text-lg font-medium text-gray-700">Your Message</label>
              <textarea
                id="message"
                name="message"
                rows="6"
                class="w-full mt-2 p-4 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#0b0b45]"
                placeholder="Write your message"
                required
              ></textarea>
            </div>

            <!-- Submit Button -->
            <div class="text-center">
              <button
                type="submit"
                class="bg-[#0b0b45] text-white py-3 px-8 rounded-lg hover:bg-[#0b0b45] focus:outline-none focus:ring-2 focus:ring-[#0b0b45] font-semibold text-lg"
              >
                Submit
              </button>
            </div>
          </form>
        </section>
      </div>
    </main>
  </body>
</html>