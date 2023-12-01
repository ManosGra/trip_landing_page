<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap demo</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700;900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&family=Roboto:wght@400;700;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="main.scss">
    <link rel="stylesheet" href="typography.scss">
    <link rel="stylesheet" href="carousel/carousel.scss">
    <link rel="stylesheet" href="header/header.scss">
    <link rel="stylesheet" href="hero/hero.scss">
    <link rel="stylesheet" href="content/content.scss">
    <link rel="stylesheet" href="content-start/content-start.scss">
    <link rel="stylesheet" href="content-left/content-left.scss">
    <link rel="stylesheet" href="content-right/content-right.scss">
    <link rel="stylesheet" href="content-end/content-end.scss">
    <link rel="stylesheet" href="footer/footer.scss">
    <link rel="stylesheet" href="modal/modal.scss">
    <link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

<header class="header m-0 py-4 w-100">
    <div class="container-lg">
        <div class="row justify-content-center align-items-center">
            <div class="col-4">
                <div class="logo">
                    <a href="/index.php" class="m-0 text-decoration-none text-white">Logo</a>
                </div>
            </div>

            <div class="col-6">
                <ul class="p-0 m-0 text-white d-flex flex-row align-items-center justify-content-between">

                    <li class="p-0 list-unstyled"><a href="/#overview"
                            class="text-decoration-none text-white">Overview</a>
                    </li>

                    <li class="p-0 list-unstyled"><a href="/#expect" class="text-decoration-none text-white">What to
                            expect</a>
                    </li>

                    <li class="p-0 m-0 list-unstyled"><a href="/#tour" class="text-decoration-none text-white">The
                            Trip</a>
                    </li>

                    <li class="p-0  list-unstyled"><a href="/#included" class="text-decoration-none text-white">What's
                            included</a>
                    </li>
                </ul>
            </div>

            <div class="col-2 text-end">
                <button id="openModal" class="text-decoration-none button">Contact
                    us</button>

            </div>
        </div>
</header>

