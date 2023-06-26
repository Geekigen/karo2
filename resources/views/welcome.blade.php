<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  
  <head>
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
                        href="/"
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
                    <li>
                      <a
                        class="text-gray-500 transition hover:text-gray-500/75"
                        href="/"
                      >
                        images
                      </a>
                    </li>
        
                    <li>
                  
        
                  </ul>
                </nav>
              </div>
        
              <div class="flex items-center gap-4">
                <div class="sm:flex sm:gap-4">
                  <a
                    class="rounded-md bg-teal-600 px-5 py-2.5 text-sm font-medium text-white shadow"
                    href="/"
                  >
                    Login
                  </a>
        
                  <div class="hidden sm:flex">
                    <a
                      class="rounded-md bg-gray-100 px-5 py-2.5 text-sm font-medium text-teal-600"
                      href="/"
                    >
                      Register
                    </a>
                  </div>
                </div>
        
                <div class="block md:hidden">
                  <button
                    class="rounded bg-gray-100 p-2 text-gray-600 transition hover:text-gray-600/75"
                  >
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="h-5 w-5"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke="currentColor"
                      stroke-width="2"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M4 6h16M4 12h16M4 18h16"
                      />
                    </svg>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </header>
      
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
        href="#"
        class="inline-block rounded-full bg-indigo-600 px-12 py-3 text-sm font-medium text-white transition hover:bg-indigo-700 focus:outline-none focus:ring focus:ring-yellow-400"
      >
       More about Karo
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
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque
                praesentium cumque iure dicta incidunt est ipsam, officia dolor fugit
                natus?
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
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Incidunt
                consequuntur amet culpa cum itaque neque.
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
      
                <li>
                  <a
                    href="/"
                    rel="noreferrer"
                    target="_blank"
                    class="text-teal-700 transition hover:text-teal-700/75"
                  >
                    <span class="sr-only">GitHub</span>
                    <svg
                      class="h-6 w-6"
                      fill="currentColor"
                      viewBox="0 0 24 24"
                      aria-hidden="true"
                    >
                      <path
                        fill-rule="evenodd"
                        d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
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
                    <span class="sr-only">Dribbble</span>
                    <svg
                      class="h-6 w-6"
                      fill="currentColor"
                      viewBox="0 0 24 24"
                      aria-hidden="true"
                    >
                      <path
                        fill-rule="evenodd"
                        d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z"
                        clip-rule="evenodd"
                      />
                    </svg>
                  </a>
                </li>
              </ul>
            </div>
      
            <div
              class="grid grid-cols-1 gap-8 sm:grid-cols-2 md:grid-cols-4 lg:col-span-2"
            >
              <div class="text-center sm:text-left">
                <p class="text-lg font-medium text-gray-900">About Us</p>
      
                <ul class="mt-8 space-y-4 text-sm">
                  <li>
                    <a
                      class="text-gray-700 transition hover:text-gray-700/75"
                      href="/"
                    >
                      Company History
                    </a>
                  </li>
      
                  <li>
                    <a
                      class="text-gray-700 transition hover:text-gray-700/75"
                      href="/"
                    >
                      Meet the Team
                    </a>
                  </li>
      
                  <li>
                    <a
                      class="text-gray-700 transition hover:text-gray-700/75"
                      href="/"
                    >
                      Employee Handbook
                    </a>
                  </li>
      
                  <li>
                    <a
                      class="text-gray-700 transition hover:text-gray-700/75"
                      href="/"
                    >
                      Careers
                    </a>
                  </li>
                </ul>
              </div>
      
              <div class="text-center sm:text-left">
                <p class="text-lg font-medium text-gray-900">Our Services</p>
      
                <ul class="mt-8 space-y-4 text-sm">
                  <li>
                    <a
                      class="text-gray-700 transition hover:text-gray-700/75"
                      href="/"
                    >
                      Web Development
                    </a>
                  </li>
      
                  <li>
                    <a
                      class="text-gray-700 transition hover:text-gray-700/75"
                      href="/"
                    >
                      Web Design
                    </a>
                  </li>
      
                  <li>
                    <a
                      class="text-gray-700 transition hover:text-gray-700/75"
                      href="/"
                    >
                      Marketing
                    </a>
                  </li>
      
                  <li>
                    <a
                      class="text-gray-700 transition hover:text-gray-700/75"
                      href="/"
                    >
                      Google Ads
                    </a>
                  </li>
                </ul>
              </div>
      
              <div class="text-center sm:text-left">
                <p class="text-lg font-medium text-gray-900">Helpful Links</p>
      
                <ul class="mt-8 space-y-4 text-sm">
                  <li>
                    <a
                      class="text-gray-700 transition hover:text-gray-700/75"
                      href="/"
                    >
                      FAQs
                    </a>
                  </li>
      
                  <li>
                    <a
                      class="text-gray-700 transition hover:text-gray-700/75"
                      href="/"
                    >
                      Support
                    </a>
                  </li>
      
                  <li>
                    <a
                      class="group flex justify-center gap-1.5 ltr:sm:justify-start rtl:sm:justify-end"
                      href="/"
                    >
                      <span
                        class="text-gray-700 transition group-hover:text-gray-700/75"
                      >
                        Live Chat
                      </span>
      
                      <span class="relative flex h-2 w-2">
                        <span
                          class="absolute inline-flex h-full w-full animate-ping rounded-full bg-teal-400 opacity-75"
                        ></span>
                        <span
                          class="relative inline-flex h-2 w-2 rounded-full bg-teal-500"
                        ></span>
                      </span>
                    </a>
                  </li>
                </ul>
              </div>
      
              <div class="text-center sm:text-left">
                <p class="text-lg font-medium text-gray-900">Contact Us</p>
      
                <ul class="mt-8 space-y-4 text-sm">
                  <li>
                    <a
                      class="flex items-center justify-center gap-1.5 ltr:sm:justify-start rtl:sm:justify-end"
                      href="/"
                    >
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-5 w-5 shrink-0 text-gray-900"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="2"
                      >
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"
                        />
                      </svg>
      
                      <span class="flex-1 text-gray-700">john@doe.com</span>
                    </a>
                  </li>
      
                  <li>
                    <a
                      class="flex items-center justify-center gap-1.5 ltr:sm:justify-start rtl:sm:justify-end"
                      href="/"
                    >
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-5 w-5 shrink-0 text-gray-900"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="2"
                      >
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"
                        />
                      </svg>
      
                      <span class="flex-1 text-gray-700">0123456789</span>
                    </a>
                  </li>
      
                  <li
                    class="flex items-start justify-center gap-1.5 ltr:sm:justify-start rtl:sm:justify-end"
                  >
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="h-5 w-5 shrink-0 text-gray-900"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke="currentColor"
                      stroke-width="2"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"
                      />
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"
                      />
                    </svg>
      
                    <address class="-mt-0.5 flex-1 not-italic text-gray-700">
                      213 Lane, London, United Kingdom
                    </address>
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
                &copy; 2022 Company Name
              </p>
            </div>
          </div>
        </div>
      </footer>
      <script src="https://cdn.tailwindcss.com"></script>
       </body>
      
</html>
