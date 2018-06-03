<!doctype html>
<html class="no-js" lang="en">

  <head>
     @include('partials._head')
  </head>

  <body>
  
   

       <div class="wrapper fix">
         @include('partials._nav')
        {{-- @include('partials._messages') --}}

        @yield('content')
         @include('partials._footer')

       </div> <!-- end container -->
  
      @include('partials._javascripts')
      @yield('scripts')

  </body>

  </html>