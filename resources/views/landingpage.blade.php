@include('partials.header')
<x-landingnav :company=$company />

<x-herobanner :company=$company/>


<!-- wla JS yung navbar pag maliit na sya -->
<footer class="bg-accent-blue justify-center bottom-0 flex flex-row z-20 mt-20">
    <div class="text-gray-800 p-4 ">
      © 2022 Copyright.
      <a class="text-gray-800" href="https://tailwind-elements.com/">Property Management System</a>
    </div>
  </footer>
@include('partials.footer')

