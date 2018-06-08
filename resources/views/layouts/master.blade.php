
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>To do Task</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">

</head>
  <body>
    <nav>
    <div class="nav-wrapper">
      <a style="text-decoration: none" href="#" class="brand-logo">To Do Task</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="badges.html">Developer</a></li>
        <li><a href="collapsible.html">About Us</a></li>
      </ul>
    </div>
  </nav>
    <div class="container">

      <form action="{{ route('logout') }}" method="POST">
          @csrf
          <p>Signin as <b>{{ Auth::User()->name }} </b> <button type="submit" class="waves-effect waves-light btn">Logout</button></p>
      </form>

    @isAdmin
    @if ($invitations->count() > 0)
      <ul class="collapsible">

        <li>
          <div class="collapsible-header">
            <i class="material-icons">person_add</i>
                ফ্রেন্ড রিকুয়েস্ট
              <span class="new badge">{{ $invitations->count() }}</span></div>
              <div class="collapsible-body">
                @foreach ($invitations as $invitation)
                  <p>
                    <span class="green-text"> {{ $invitation->worker->name }} </span> <span class="right"><a  href="{{ route('acceptInvitation', ['id'=>$invitation->id]) }}"> কানেক্ট করুন <i class="Large material-icons"> check </i>  </a> অথবা  <a href="{{ route('rejectInvitation', ['id'=>$invitation->id]) }}"> বাদ দিন <i class="material-icons"> not_interested </i></a></span>
                  </p>
                @endforeach


              </div>
        </li>

      </ul>
    @endif

    @endisAdmin


    <h1 class="center-align blue-text text-darken-2"><b>To Do List</b>  </h1>
    @yield('content')
  </div>

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

  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      var elems = document.querySelectorAll('.collapsible');
      var options;
      var instances = M.Collapsible.init(elems, options);
    });

    document.addEventListener('DOMContentLoaded', function() {
  var elems = document.querySelectorAll('select');
  var instances = M.FormSelect.init(elems);
});
  </script>

  </body>
</html>
