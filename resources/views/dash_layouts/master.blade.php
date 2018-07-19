<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Dashboard Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="/css/dash.css" rel="stylesheet">

</head>

<body>
<nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
    @if (Auth::check())
        <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Welcome: {{Auth::user()->name}}</a>
        <a class="navbar-brand col-sm-9 col-md-10 ml-0 ml-auto" href="\logout">Logout</a>

    @else
        <a class="navbar-brand col-sm-12 col-md-12 ml-0 ml-auto" href="\login">Login</a>
    @endif
</nav>

<div class="container-fluid">

    <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
            <div class="sidebar-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="\">
                            <span data-feather="home"></span>
                            Home <span class="sr-only">(current)</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="\students\create">
                            <span data-feather="file"></span>
                            Add new student
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="\register">
                            <span data-feather="file"></span>
                            Add new user
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="\about">
                            <span data-feather="file"></span>
                            About
                        </a>
                    </li>
                    @if(session()->has('message'))
                        <div class="alert alert-success">
                            {{ session()->get('message') }}
                        </div>
                    @endif


                </ul>

            </div>
        </nav>
    </div>

    @yield('content1 - chart')

    <h2>Section title</h2>

    @yield('content2 - table')

    </main>
</div>

@include('dash_layouts.footer')
</body>
</html>
