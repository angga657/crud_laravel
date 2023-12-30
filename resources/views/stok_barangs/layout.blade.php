<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
    <title>How To Create CRUD Operation In Laravel 10 - Leravio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
</head>
<body>
  
<div class="container" style="margin-top: 15px;">
    <div class="container" style="margin-top: 15px;">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <ul class="navbar-nav ms-auto ml-md-0 d-flex">
                <li class="nav-item dropdown">
                    <a
                        class="nav-link dropdown-toggle"
                        id="userDropdown"
                        href="#"
                        role="button"
                        data-bs-toggle="dropdown"
                        aria-haspopup="false"
                        aria-expanded="false">
                        <i class="fas fa-user fa-fw"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                       <li> <a class="dropdown-item" href="{{url('logout')}}">Logout</a></li>
                    </div>
                </li>
            </ul>
        </nav>
        <br>
    @yield('content')

    <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

        <script src="{{ asset('js/script.js') }}"></script>
</div>
   
</body>
</html>