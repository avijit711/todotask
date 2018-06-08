<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>

  </head>
  <body background="{{ asset('/pic.jpeg')}}">
    <nav>
    <div class="nav-wrapper">
      <a style="text-decoration: none" href="#" class="brand-logo">To Do Task</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="badges.html">Developer</a></li>
        <li><a href="collapsible.html">About Us</a></li>
      </ul>
    </div>
  </nav>


      <br><br>
          <br><br><br><br><br>
          <br><br>
          <h1 class="center-align">Make Your Time Easy and Smart</h1>

          <h1 class="center-align">

            <a  href="{{ route('register') }}" class="center-align btn btn-primary btn-lg">Get Started</a><br>
            {{-- <form action="{{ route('register') }}" method="post">
              <button type="submit" href="#" class="center-align btn btn-primary btn-lg">Get Started</button>
            </form> --}}

          </h1>

          <p class="center-align">Already Have an ID??? <a  href="{{ route('login') }}" >Login</a></p>
          <br><br><br>

            <br><br><br>
              <br><br><br>
              <br><br><br><br>

  <footer class="page-footer">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Developer</h5>
                <p class="grey-text text-lighten-1"> Avijit Biswas </p>
                <p class="grey-text text-lighten-1"> CSE,RUET </p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">About</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Project</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Developer Profile</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Facebook</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2018 Copyright Text
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
          </div>
        </footer>
  </body>
</html>
