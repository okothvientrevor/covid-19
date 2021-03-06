<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Covid-19 Management System</title>

    <link rel="stylesheet" href="{{ asset('/css/app.css')}}" >

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1"
      crossorigin="anonymous"
    >

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    >

  </head>
  <body class="bg-light">
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark" aria-label="Main navigation">
      <div class="container container-fluid">
        <a class="navbar-brand" href="/">
          Covid-19 Management System
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarTogglerDemo02"
          aria-controls="navbarTogglerDemo02"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
            <li class="nav-item active">
              <a class="nav-link" aria-current="page" href="/dashboard">Dashboard</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/patients">Patients</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/healthworkers">Health Workers</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/hospitals">Hospitals</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/districts">Districts</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/donors">Donations</a>
            </li>

            @auth
              <li class="nav-item">
                <a class="nav-link" href="/payments">Payments</a>
              </li>
              <li class="nav-item dropdown">
                <a 
                  class="nav-link dropdown-toggle" 
                  href="#" 
                  id="navbarDropdown" 
                  role="button" 
                  data-bs-toggle="dropdown" 
                  aria-expanded="false"
                >
                  <i class="fa fa-user"></i> <i class="fa fa-plus-square"></i>
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="/patients/create">Add Patient</a></li>
                  <li><a class="dropdown-item" href="/healthworkers/create">Add Health Workers</a></li>
                  <li><a class="dropdown-item" href="/hospitals/create">Add Hospital</a></li>
                  <li><a class="dropdown-item" href="/districts/create">Add District</a></li>
                  <li><a class="dropdown-item" href="/donors/create">Add Donation</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li>
                    <form action="/logout" method="POST" class="form-inline">
                      @csrf
                      <button type="submit" class="w-100 btn btn-outline-dark">Log Out</button>
                    </form>
                  </li>
                  <li><small class="dropdown-item text-center">{{ auth()->user()->name }}</small></li>
                </ul>
              </li>
            @endauth

            @guest
              <li class="nav-item dropdown">
                <a 
                  class="nav-link dropdown-toggle" 
                  href="#" 
                  id="navbarDropdown" 
                  role="button" 
                  data-bs-toggle="dropdown" 
                  aria-expanded="false"
                >
                  <i class="fa fa-user"></i>
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="/login">Log In</a></li>
                  <li><a class="dropdown-item" href="/signup">Sign Up</a></li>
                </ul>
              </li>
            @endguest
          </ul>
        </div>
      </div>
    </nav>

    <a 
      href="{{ url()->previous() }}"
      class="btn btn-primary"
      style="
        position: relative;
        top: 7rem;
        left: 70rem;
        "
    >
      Go Back
    </a>

    <main class="container mt-5">
        @yield('content')
    </main>

    <footer class='text-center'>
      <p class="mt-5 mb-3 text-muted">&copy; Covid-19 Management System</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Charting library -->
    <script src="https://unpkg.com/chart.js@2.9.3/dist/Chart.min.js"></script>
    <!-- Chartisan -->
    <script src="https://unpkg.com/@chartisan/chartjs@^2.1.0/dist/chartisan_chartjs.umd.js"></script>

    <!-- Your application script -->
    @yield('js')
  </body>
</html>
