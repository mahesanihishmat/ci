<!doctype html>
<html class="no-js" lang="en">

  <head>
     @include('back.partials._head')
  </head>

<body>
    <div class="page">
      <!-- Main Navbar-->
        @include('back.partials._header')
         <div class="page-content d-flex align-items-stretch"> 
         @include('back.partials._sidebar')
        {{-- @include('partials._messages') --}}

        @yield('content')
         
         @include('back.partials._footer')
         


       </div> <!-- end container -->
     </div>
  @include('back.partials._javascripts')
     
      @yield('scripts')

  </body>

  </html>