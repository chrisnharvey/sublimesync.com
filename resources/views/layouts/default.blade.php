<!DOCTYPE html>
<html lang="en">
  <head>
    @include('partials/head')
  </head>
  <body>
    @include('partials/nav')
    <div id="main">
        <div id="content">
            <div class="container">
                @yield('content')
            </div>
        </div>
    </div>

    @include('partials/foot')
  </body>
</html>