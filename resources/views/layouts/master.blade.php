<!DOCTYPE html>
<html lang="en">
<head>
  @include('layouts.meta')

  @yield('title')

  @include('layouts.css')

  @yield('css')

</head>

<body role="document">


 


  <div class="container theme-showcase" role="main">

    @yield('content')



  </div> <!-- /container -->

  @include('layouts.scripts')


  @yield('scripts')

</body>
</html>