<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gym Management</title>

    <!--Fontawesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!--Bootstrap CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <!--Side Bar-->
    <div class="container-fluid">
        <div class="row min-vh-100 flex-column flex-md-row">
            <aside class="col-12 col-md-3 col-xl-2 p-0 flex-shrink-1 bg-secondary ">
                <nav class="navbar navbar-expand-md navbar-primary bd-primary flex-md-column flex-row align-items-center py-2 text-center sticky-top" id="sidebar">
                    <div class="text-center p-3">
                        <p class="fs-2 fw-bold">Gym Management</p>
                    </div>

                    <button type="button" class="navbar-toggler border-0 order-1" data-bs-toggle="collapse" data-bs-target="#nav" aria-controls="nav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse order-last" id="nav">
                        <ul class="navbar-nav flex-column w-100 justify-content-center">
                            <li class="nav-item mt-3">
                                <a href="/" class="nav-link active mt-3">
                                    <i class="fa-sharp fa-solid fa-house-chimney fs-1 text-white"></i>
                                </a>
                            </li>
                            <li class="nav-item mt-3">
                                <a href="/trainer" class="nav-link active mt-3">
                                    <i class="fa-solid fa-dumbbell fs-1 text-white"></i>
                                </a>
                            </li>
                            <li class="nav-item mt-3">
                                <a href="/member" class="nav-link active mt-3">
                                    <i class="fa-solid fa-people-group fs-1 text-white"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </aside>
            <main class="col">
                <h1>MAIN</h1>
            </main>
        </div>
    </div>
        <!--Bootstrap JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>