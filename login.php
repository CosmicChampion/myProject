<?php
const ADMIN_LOGIN = 'admin';
const ADMIN_PASSWORD = 'admin';

function login($login, $password)
{
    if ($login === ADMIN_LOGIN && $password === ADMIN_PASSWORD) {
        $_SESSION['authorized'] = true;
        return true;
    }
    return false;
}

function isAuthorized()
{
    return isset($_SESSION['authorized']) && $_SESSION['authorized'] === true;
}

function logout()
{
    unset($_SESSION['authorized']);
}

if (isset($_POST['login']) && isset($_POST['password'])) {
    login($_POST['login'], $_POST['password']);
}

if (isAuthorized()) {
    header("Location: admin.php");
    exit;
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>Auth</title>
    <link href="https://getbootstrap.com/docs/4.4/dist/css/bootstrap.min.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>WebStudio</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link rel="stylesheet" href="FGames.css" />
    <link rel="stylesheet" href="Cards.css" />
    <link rel="stylesheet" href="slidergpt.css" />

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="styles/footer.css" />
<link rel="stylesheet" href="formLog.css">
</head>

<body>
<div>
    <a class="btn btn-light" href="index.php" role="button">Home page</a>
</div>
<div class="row no-gutters align-items-center justify-content-center text-center h-100">
    <div class="col-md-6">
        <form method="post" class="form-signin">
            <h1 class="h3 mb-3 font-weight-normal">Sign In</h1>
            <div class="form-group">
                <label for="inputEmail" class="sr-only">Login</label>
                <input id="inputEmail" autocomplete="off" type="text" name="login" placeholder="Login" class="form-control">
            </div>
            <div class="form-group">
                <label for="inputPassword" class="sr-only">Password</label>
                <input id="inputPassword" autocomplete="off" type="password" name="password" placeholder="password" class="form-control">
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        </form>
    </div>
</div>

    <?php
    if (isAuthorized()) {
        header("Location: admin.php");
        exit;
    }
    ?>
 
    <script src="https://kit.fontawesome.com/5e376815bd.js" crossorigin="anonymous"></script>
</body>

</html>