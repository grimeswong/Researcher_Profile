<!DOCTYPE html>
<html>
    <head>
      <title>@yield('title')</title>
      <meta charset="UTF-8">  <!-- charset setting -->
       <meta name="viewport" content="width=device-width, initial-scale=1.0">  <!-- responsive setting, it doesn't spread the content that use all width -->
       <!-- <link rel="stylesheet" href="style.css"> --> <!-- external css file -->
       <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">

       <!-- Bootstrap CDN link -->
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
       <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    </head>

    <body>
      <div class="header">
          <p class="col-sm-4 offset-sm-2">University Of Queensland</p>
      </div> <!-- end of header -->

      @yield('content')

      <div class="footer">
          copyright 2017
      </div>
    </body>
</html>

<script type="text/javascript">
  var ypos, image;
  function parallax () {
      ypos = window.pageYOffset;
      image = document.getElementById('image');
      image.style.top = ypos * .8 + 'px'; //don't go above 1
  }

  //when window detect the user is scrolling, call the function parallax
  window.addEventListener('scroll', parallax)  // first parameter is event, second parameter is the function call
</script>
