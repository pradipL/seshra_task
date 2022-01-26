<html>
    <head>
        <title>home</title>
    </head>
    <link rel="stylesheet" href="css/bootstrap.css">
    <body>
        <div class="container-fluid">
        @include('navbar')
        </div>
        <div class="container">
             @if($_SERVER['PHP_SELF']==='/index.php')
            <h1>Hello welcome to homepage</h1>
            @elseif($_SERVER['PHP_SELF']==='/index.php/registration')
            @include('registration')
            @elseif($_SERVER['PHP_SELF']==='/index.php/login')
            @include('login')
            @else
            @include('home')
            @endif
        </div>
    </body>
</html>







