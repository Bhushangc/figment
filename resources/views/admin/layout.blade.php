<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>@yield('title')</title>
<link rel="stylesheet" href="{{asset('css/styles.css')}}">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
	<header class = "heads">
        <a href="{{route('admin.dashboard')}}" style="color:white; text-decoration:none">
            <img width="60px" height="40px" src="{{ asset('images/admin/logo.png')}}" alt="">
          </a>
        <nav>
            <ul>
                <li><a href="{{route('admin.dashboard')}}">Dashboard</a></li>

                <li class="dropdown">
                    <a href="#" class="dropbtn">Profile</a>
                    <div class="dropdown-content">
                        <a href="{{route('logout')}}">Logout</a>
                    </div>
                </li>
            </ul>
        </nav>
    </header>
    <div style="padding: 20px">
        @yield('content')
    </div>
    
</body>

</html>