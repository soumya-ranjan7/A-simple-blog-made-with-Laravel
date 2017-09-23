
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Sports Blog</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <!-- Custom styles for this template -->
    <link href="/css/blog.css" rel="stylesheet">
  </head>


  <body>

    @include ('layouts.nav')



      <div  class="container">

        @include('flash::message')

      </div>



    <div class="blog-header">
      <div class="container">
        <h1 class="blog-title">The Sports Blog</h1>
       <!-- <p class="lead blog-description">An example blog template built with Bootstrap.</p> -->
      </div>
    </div>

    <div class="container">

      <div class="row">

        @yield('content')

        @include('layouts.sidebar')

      </div><!-- /.row -->

    </div><!-- /.container -->

    @include('layouts.footer')

    <script>
        $('div.alert').not('.alert-important').delay(3000).fadeOut(350);
    </script>
  </body>
</html>
