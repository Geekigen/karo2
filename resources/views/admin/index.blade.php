<x-app-layout>
    <div
  class="rounded-2xl bg-gradient-to-r from-pink-500 via-red-500 to-yellow-500 p-1 shadow-xl mb-4"
>
  <a class="block rounded-xl bg-white p-4 sm:p-6 lg:p-8" href="">
    <div class="mt-16">
      <h3 class="text-lg font-bold text-gray-900 sm:text-xl">
    Welcome to admin panel
      </h3>

      <p class="mt-2 text-sm text-gray-500">
        Select the action you wanna take by clicking on the buttons below
      </p>
    </div>
  </a>
</div>


    <div class="flex justify-center ">
        <!-- Student Form -->
        <div class="w-1/2">


        

<!-- Pill -->

<a
class="inline-block rounded-full bg-gradient-to-r from-pink-500 via-red-500 to-yellow-500 p-[2px] hover:text-white focus:outline-none focus:ring active:text-opacity-75"
href="{{ route('student.portal') }}" 
>
<span
  class="block rounded-full bg-white px-8 py-3 text-sm font-medium hover:bg-transparent"
>
Student Management
</span>
</a>
    
<a
class="inline-block rounded-full bg-gradient-to-r from-pink-500 via-red-500 to-yellow-500 p-[2px] hover:text-white focus:outline-none focus:ring active:text-opacity-75 mb-4"
href="{{ route('structure.portal') }}" 
>
<span
  class="block rounded-full bg-white px-8 py-3 text-sm font-medium hover:bg-transparent"
>
  Fee Management
</span>
</a>
<a
class="inline-block rounded-full bg-gradient-to-r from-pink-500 via-red-500 to-yellow-500 p-[2px] hover:text-white focus:outline-none focus:ring active:text-opacity-75 mb-4"
href="{{ route('fee.portal') }}"
>
<span
  class="block rounded-full bg-white px-8 py-3 text-sm font-medium hover:bg-transparent"
>
  Record payment
</span>
</a>
<a
class="inline-block rounded-full bg-gradient-to-r from-pink-500 via-red-500 to-yellow-500 p-[2px] hover:text-white focus:outline-none focus:ring active:text-opacity-75 mb-4"
href="{{ route('statement.portal') }}"
>
<span
  class="block rounded-full bg-white px-8 py-3 text-sm font-medium hover:bg-transparent"
>
  Fee statements
</span>
</a>
<a
class="inline-block rounded-full bg-gradient-to-r from-pink-500 via-red-500 to-yellow-500 p-[2px] hover:text-white focus:outline-none focus:ring active:text-opacity-75 mb-4"
href="/announcement/portal"
>
<span
  class="block rounded-full bg-white px-8 py-3 text-sm font-medium hover:bg-transparent"
>
 Make announcements
</span>
</a>
<a
class="inline-block rounded-full bg-gradient-to-r from-pink-500 via-red-500 to-yellow-500 p-[2px] hover:text-white focus:outline-none focus:ring active:text-opacity-75 mb-4"
href="/blog"
>
<span
  class="block rounded-full bg-white px-8 py-3 text-sm font-medium hover:bg-transparent"
>
  Write a Blog
</span>
</a>
<a
class="inline-block rounded-full bg-gradient-to-r from-pink-500 via-red-500 to-yellow-500 p-[2px] hover:text-white focus:outline-none focus:ring active:text-opacity-75 mb-4"
href="/expenses"
>
<span
  class="block rounded-full bg-white px-8 py-3 text-sm font-medium hover:bg-transparent"
>
  Record expenses
</span>
</a>
</div>
</div>
</x-app-layout>