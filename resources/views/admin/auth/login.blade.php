<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <section class="login-form">

        <div class="login-Container" style="height: 500px">
            <div class="login-content">

                <h4>Log In</h4>
                <hr> <br>

                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="container" style="margin-left: 2rem">
                        @if ($errors->any())
                            <ul style="font-size: 15px">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                        <label>Email:</label><br>
                        <input type="text" placeholder="Enter Email" name="email" required><br>

                        <label>Password:</label><br>
                        <input type="password" placeholder="Enter Password" name="password" required><br><br>

                        <button type="submit">Login</button>
                    </div><br><br>


                </form>
            </div>
            <div class="content">
                <div class="content-header">
                    <h4>
                        Welcome back!
                    </h4><br>
                    <p>To keep connected with us please login with your valid information.</p><br>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
