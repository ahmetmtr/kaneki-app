<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Anasikiş</title>
</head>

<body>

<header class="p-3">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="index.php" class="nav-logo d-flex align-items-center mb-2 mb-lg-0 text-decoration-none">
                <svg id="Capa_1" enable-background="new 0 0 546.551 546.551" viewBox="0 0 546.551 546.551" class="bi me-2" width="40" height="32" xmlns="http://www.w3.org/2000/svg"><path d="m273.283 512.39c-6.105 0-11.743-3.253-14.796-8.54l-256.198-444.068c-3.053-5.288-3.053-11.793 0-17.081s8.691-8.54 14.796-8.54h512.38c6.105 0 11.743 3.253 14.796 8.54 3.052 5.288 3.052 11.793 0 17.081l-256.181 444.068c-3.053 5.288-8.691 8.54-14.797 8.54zm-226.623-444.068 226.624 392.809 226.606-392.809z"/></svg>
            </a>

            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="index.php" class="nav-link px-2">Home</a></li>
                <li><a href="#" class="nav-link px-2">Features</a></li>
                <li><a href="#" class="nav-link px-2">Pricing</a></li>
                <li><a href="#" class="nav-link px-2">FAQs</a></li>
                <li><a href="#" class="nav-link px-2">About</a></li>
            </ul>

            <div class="text-end">
                <a href="login.php" class="nav-login-btn btn me-2">Login</a>
                <button type="button" class="nav-register-btn btn">Sign-up</button>
            </div>
        </div>
    </div>
</header>

<div class="form-element">
<div class="container form-container">
    <div class="info">
        <div class="thumbnail">
            <svg id="Capa_1" enable-background="new 0 0 546.551 546.551" viewBox="0 0 546.551 546.551" class="bi me-2" width="92" height="67" xmlns="http://www.w3.org/2000/svg"><path d="m273.283 512.39c-6.105 0-11.743-3.253-14.796-8.54l-256.198-444.068c-3.053-5.288-3.053-11.793 0-17.081s8.691-8.54 14.796-8.54h512.38c6.105 0 11.743 3.253 14.796 8.54 3.052 5.288 3.052 11.793 0 17.081l-256.181 444.068c-3.053 5.288-8.691 8.54-14.797 8.54zm-226.623-444.068 226.624 392.809 226.606-392.809z"/></svg>
        </div>
        <h1>Kaneki Login ⚡</h1>
    </div>
</div>
<div class="form">
    <form method="post" class="login-form">
        <input type="text" name="username" placeholder="Username"/>
        <input type="password" name="password" placeholder="Password"/>
        <button type="submit">Login</button>
        <p class="message">Not registered? <a href="#">Create an account</a></p>
    </form>
</div>
</div>

</body>

<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>