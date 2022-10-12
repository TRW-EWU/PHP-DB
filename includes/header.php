<!DOCTYPE html>
<html>
    <head>
        <title>My blog</title>
        <meta charset="utf-b">
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" 
                rel="stylesheet" 
                integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
                crossorigin="anonymous">
        <link rel="stylesheet" href="/css/jquery.datetimepicker.min.css">
        <link rel="stylesheet" href="/css/styles.css">
    </head>
    <body>
        <header>
            <h1>My blog</h1>
        </header>

        <nav>
            <ul class="nav">
                <li class="nav-item"><a class="nav-link" href="/">Home</a></li>

                <?php if (Auth::isLoggedIn()) : ?>

                    <li class="nav-item"><a class="nav-link"  href="/admin/">Admin</a></li>
                    <li class="nav-item"><a class="nav-link"  href="/logout.php">Log out</a></li>

                <?php else: ?>

                    <li class="nav-item"><a class="nav-link"  href="/login.php">Log in</a></li>

                <?php endif; ?>
            </ul>

        </nav>


        <main>
