<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  
  <head>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
    
      <!-- Tailwind CSS CDN -->
      @vite(['resources/css/app.css', 'resources/js/app.js'])
      <!-- Add these CSS and JS links in your HTML file -->
<title>karo  👋</title>
   
  </head>
    <body>
        <header class="bg-white">
          <div class="mx-auto max-w-screen-xl px-4 sm:px-6 lg:px-8">
            <div class="flex h-16 items-center justify-between">
              <div class="md:flex md:items-center md:gap-12">
                <a class="block text-teal-600" href="/">
                  <span class="sr-only">Home</span>
                  <img src="https://res.cloudinary.com/di2a8gjsq/image/upload/v1687184390/karologo_hg8smj.jpg"  class="h-10 rounded-full" alt="The logo of Karo School">
                </a>
              </div>
        
              <div class="hidden md:block">
                <nav aria-label="Global">
                  <ul class="flex items-center gap-6 text-sm">
                    <li>
                      <a
                        class="text-gray-500 transition hover:text-gray-500/75"
                        href="/blogs"
                      >
                       News
                      </a>
                    </li>
                    <li>
                      <a
                        class="text-gray-500 transition hover:text-gray-500/75"
                        href="/admin"
                      >
                 Admin
                      </a>
                    </li>
                  </ul>
                </nav>
              </div>
        
              <div class="flex items-center gap-4">
                @guest
                  <div class="sm:flex sm:gap-4">
                    <a class="rounded-md bg-teal-600 px-5 py-2.5 text-sm font-medium text-white shadow" href="/login">Login</a>
                    <div class="hidden sm:flex">
                      <a class="rounded-md bg-gray-100 px-5 py-2.5 text-sm font-medium text-teal-600" href="/register">Register</a>
                    </div>
                  </div>
                @else
                  <div class="font-medium text-gray-600">{{ Auth::user()->name }}</div>
                  <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-dropdown-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-dropdown-link>
                </form>
                @endguest
              
                <div class="block md:hidden">
                  <button class="rounded bg-gray-100 p-2 text-gray-600 transition hover:text-gray-600/75">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                  </button>
                </div>
              </div>
              
            </div>
          </div>
        </header>
        <div class="flex items-center justify-between gap-4 bg-indigo-600 px-4 py-3 text-white" x-data="{ visible: true }" x-show="visible">
          <p class="text-sm font-medium">
           @foreach ($announcements as $announcement )
           Announcemens....
             {{$announcement->content}} deadline is
             {{$announcement->deadline}}
           @endforeach
          </p>
      
          <button aria-label="Dismiss" class="shrink-0 rounded-lg bg-black/10 p-1 transition hover:bg-black/20" x-on:click="visible = false">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"/>
            </svg>
          </button>
        </div>

   <!--
  Heads up! 👋

  This component comes with some `rtl` classes. Please remove them if they are not needed in your project.
-->

<section
class="overflow-hidden bg-[url(https://res.cloudinary.com/di2a8gjsq/image/upload/v1687182224/karo4_fxzhzr.jpg)] bg-cover bg-top bg-no-repeat"
>
<div class="bg-black/50 p-8 md:p-12 lg:px-16 lg:py-24">
  <div class="text-center ltr:sm:text-left rtl:sm:text-right">
    <h2 class="text-2xl font-bold text-white sm:text-3xl md:text-5xl">
      Karo School
    </h2>
    <h2 class="text-2xl font-bold text-white sm:text-3xl md:text-5xl">
      Where Knowledge is Power
    </h2>
  

    <div class="mt-4 sm:mt-8">
      <a
        href="https://wa.me/254701775650?text=I'm%20contacting%20you%20from%20Karo%20website%20"
        class="inline-block rounded-full bg-indigo-600 px-12 py-3 text-sm font-medium text-white transition hover:bg-indigo-700 focus:outline-none focus:ring focus:ring-yellow-400"
      >
      Contact Karo
      </a>
    </div>
  </div>
</div>
</section>
          <div class="max-w-screen-xl px-4 py-8 mx-auto sm:px-6 sm:py-12 lg:px-8">
            <header class="text-center">
              <h2 class="text-xl font-bold text-gray-900 sm:text-3xl">
                KARO COMMUNITY
              </h2>
        
              <p class="max-w-md mx-auto mt-4 text-gray-500">
                Karo School is a small educational institution nestled in
                 a vibrant community. It has become a beacon of hope and a 
                 catalyst for change in the lives of many children. The school
                  provides quality education and a nurturing environment that empowers 
                  students to thrive academically and personally.
              </p>
            </header>
        
            <ul class="grid grid-cols-1 gap-4 mt-8 lg:grid-cols-3">
              <li>
                <a href="#" class="relative block group">
                  <img
                    src="https://res.cloudinary.com/di2a8gjsq/image/upload/v1687182362/karo5_j8abrp.jpg"
                    alt=""
                    class="object-cover w-full transition duration-500 aspect-square group-hover:opacity-90"
                  />
        
                  <div
                    class="absolute inset-0 flex flex-col items-start justify-end p-6"
                  >
                    <h3 class="text-xl font-medium text-white">Our staff</h3>
        
                   
                  </div>
                </a>
              </li>
        
              <li>
                <a href="#" class="relative block group">
                  <img
                    src="https://res.cloudinary.com/di2a8gjsq/image/upload/v1687182414/WhatsApp_Image_2023-06-13_at_09.45.42_gxl75q.jpg"
                    alt=""
                    class="object-cover w-full transition duration-500 aspect-square group-hover:opacity-90"
                  />
        
                  <div
                    class="absolute inset-0 flex flex-col items-start justify-end p-6"
                  >
                    <h3 class="text-xl font-medium text-white">Our students</h3>
        
                 
                  </div>
                </a>
              </li>
        
              <li class="lg:col-span-2 lg:col-start-2 lg:row-span-2 lg:row-start-1">
                <a href="#" class="relative block group">
                  <img
                    src="https://res.cloudinary.com/di2a8gjsq/image/upload/v1687182208/karo3_m6jkyj.jpg"
                    alt=""
                    class="object-cover w-full transition duration-500 aspect-square group-hover:opacity-90"
                  />
        
                  <div
                    class="absolute inset-0 flex flex-col items-start justify-end p-6"
                  >
                    <h3 class="text-xl font-medium text-white">Karo school</h3>
        
                  
                  </div>
                </a>
              </li>
            </ul>
          </div>
        </section>
      <!--
        Heads up! 👋
      
        This component comes with some `rtl` classes. Please remove them if they are not needed in your project.
      -->
      <!--
  Heads up! 👋

  This component comes with some `rtl` classes. Please remove them if they are not needed in your project.
-->

<footer class="bg-white">
  <div class="mx-auto max-w-screen-xl px-4 pb-6 pt-16 sm:px-6 lg:px-8 lg:pt-24">
    <div class="grid grid-cols-1 gap-8 lg:grid-cols-3">
      <div>
        <div class="flex justify-center text-teal-600 sm:justify-start">
          <img src="https://res.cloudinary.com/di2a8gjsq/image/upload/v1687184390/karologo_hg8smj.jpg"  class="h-20 rounded-full" alt="The logo of Karo School">
         
        </div>

        <p
          class="mt-6 max-w-md text-center leading-relaxed text-gray-500 sm:max-w-xs sm:text-left"
        >
        Check out the school social-media pages 
        </p>

        <ul class="mt-8 flex justify-center gap-6 sm:justify-start md:gap-8">
          <li>
            <a
              href="/"
              rel="noreferrer"
              target="_blank"
              class="text-teal-700 transition hover:text-teal-700/75"
            >
              <span class="sr-only">Facebook</span>
              <svg
                class="h-6 w-6"
                fill="currentColor"
                viewBox="0 0 24 24"
                aria-hidden="true"
              >
                <path
                  fill-rule="evenodd"
                  d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                  clip-rule="evenodd"
                />
              </svg>
            </a>
          </li>

          <li>
            <a
              href="/"
              rel="noreferrer"
              target="_blank"
              class="text-teal-700 transition hover:text-teal-700/75"
            >
              <span class="sr-only">Instagram</span>
              <svg
                class="h-6 w-6"
                fill="currentColor"
                viewBox="0 0 24 24"
                aria-hidden="true"
              >
                <path
                  fill-rule="evenodd"
                  d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                  clip-rule="evenodd"
                />
              </svg>
            </a>
          </li>

          <li>
            <a
              href="/"
              rel="noreferrer"
              target="_blank"
              class="text-teal-700 transition hover:text-teal-700/75"
            >
              <span class="sr-only">Twitter</span>
              <svg
                class="h-6 w-6"
                fill="currentColor"
                viewBox="0 0 24 24"
                aria-hidden="true"
              >
                <path
                  d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"
                />
              </svg>
            </a>
          </li>

          

          
        </ul>
      </div>

     
      </div>
    </div>

    <div class="mt-12 border-t border-gray-100 pt-6">
      <div class="text-center sm:flex sm:justify-between sm:text-left">
        <p class="text-sm text-gray-500">
          <span class="block sm:inline">All rights reserved.</span>

          <a
            class="inline-block text-teal-600 underline transition hover:text-teal-600/75"
            href="/"
          >
            Terms & Conditions
          </a>

          <span>&middot;</span>

          <a
            class="inline-block text-teal-600 underline transition hover:text-teal-600/75"
            href="/"
          >
            Privacy Policy
          </a>
        </p>

        <p class="mt-4 text-sm text-gray-500 sm:order-first sm:mt-0">
          &copy;<span id="year"> </span>  Karo School
        </p>
      </div>
    </div>
  </div>
</footer>
<script>
  const currentYear = new Date().getFullYear();
  document.getElementById("year").textContent = currentYear;
  </script>
      <script src="https://cdn.tailwindcss.com"></script>
       </body>
      
</html>
