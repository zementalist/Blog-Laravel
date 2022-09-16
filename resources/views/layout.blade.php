<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/layout.css')}}">

  <script src="{{asset('js/jquery.min.js')}}"></script>
  <script src="{{asset('js/bootstrap.min.js')}}"></script>
</head>
<body>
  <!--Main Navigation-->
  <header>

    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark scrolling-navbar">
      <div class="container">

        <!-- Brand -->
        <a class="navbar-brand waves-effect" href="#">
          <strong class="blue-text">Blogger</strong>
        </a>

        <!-- Collapse -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Links -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

          <!-- Left -->
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link waves-effect" href="/">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link waves-effect" href="/create.php">Create Post</a>
            </li>

            <li class="nav-item">
              <a class="nav-link waves-effect" href="/?posts_by_uid=">My Posts</a>
            </li>

            <li class="nav-item">
              <form action="" method="get">
                <input type="text" name="search" class="form-control" placeholder="Search">
              </form>
            </li>
          </ul>

          <!-- Right -->
          <ul class="navbar-nav nav-flex-icons">
            <li class="nav-item">
              <a href="/auth/login.php" class="nav-link waves-effect">Login</a>
            </li>
            <li class="nav-item">
              <a href="/auth/register.php" class="nav-link waves-effect">Register</a>
            </li>
          </ul>

          <ul class="navbar-nav nav-flex-icons">
            <li class="nav-item">
              <a href="" class="nav-link waves-effect"></a>
            </li>
            <li class="nav-item">
              <a href="/logout.php" class="nav-link waves-effect">Logout</a>
            </li>
          </ul>

        </div>

      </div>
    </nav>
    <!-- Navbar -->

  </header>
  <!--Main Navigation-->

  <!--Main layout-->
  <main class="mt-5 pt-5">
    <div class="container">
      <!-- Alert Message -->
      @if(isset($message))
        <div class="alert alert-info text-center">
            {{$message}}
        </div>
    @endif

      @yield("content")

      <!-- End message -->
    </div>
  </main>
  <!--Main layout-->

  <!--Footer-->
  <footer class="page-footer text-center font-small mdb-color darken-2 mt-4 wow fadeIn">

    <!--Copyright-->
    <div class="footer-copyright footer-dark py-1">
      © 2021 Copyright:
      <strong>The Last Developer</strong>
    </div>
    <!--/.Copyright-->

  </footer>
  <!--/.Footer-->
</body>

</html>