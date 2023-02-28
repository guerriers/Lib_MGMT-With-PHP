<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Kanit&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/login.css">
    <title>Login Lib</title>
</head>

<body class="body-login">

    <div class="container">

        <form name="form" class=" form-signin" method="post" action="Checkloginlib.php">
            <!-- <img class="mb-4" src="/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> -->
            <h1 class="h1-text">Login</h1>
            <h2 class="h2-text">Librarian</h2>
            <label for="username" class="visually-hidden">&nbsp;Username</label>
            <input name="username" type="username" id="username" class="form-control" placeholder="Username" required="" autofocus="">
            <label for="password" class="visually-hidden">&nbsp;Password</label>
            <input name="password" type="password" id="password" class="form-control" placeholder="Password" required="">
            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me"> Remember me
                </label>
            </div>
            <button class="w-50 btn btn-lg btn-secondary" type="submit">Login</button>
            <br>
            <br>
            <a class="mt-5 mb-3 text-danger" href="Login.php">Login For Member</a>
            <p class="mt-5 mb-3 text-muted">&copy; ระบบยืมคืนหนังสือ</p>
            <a class="mt-5 mb-3 text-light" href=" ../../librarys/Index.php">Go back</a>
        </form>





    </div>
</body>

</html>