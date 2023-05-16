<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    {{-- <link rel="stylesheet" href="css/login.css"> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>

    <style>
        body {
            background-image: url(/images/hero-bg.jpg);
            background-repeat: no-repeat;
            background-size: cover
        }

        h1,h2,h3,h4,h6,p{
            color: #ffffff;
        }

        #tirai {
            /* background-color: hsl(0, 0%, 100%) */
        }

        .card {
            background-color: transparent !important;
            box-shadow: 5px 5px 5px 5px;
            /* transition: all 0.3s ease; */
        }

        /* .card{
            background-color: #868585
        } */
    </style>

    <!-- Section: Design Block -->
    <section class="">
        <!-- Jumbotron -->
        <div class="px-4 py-5 px-md-5 text-center text-lg-start mt-5 ms-5 me-5" id="tirai">
            <div class="container">
                {{-- Jika kita berhasil melakukan registrasi alert ini akan muncul , alert ini diatur didalam RegisterController --}}
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                @if (session('loginError'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('loginError') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <div class="row gx-lg-5 align-items-center">
                    <div class="col-lg-6 mb-5 mb-lg-0">
                        <h1 class="my-5 display-3 fw-bold ls-tight">
                            The best for You <br />
                            <span class="text-primary"></span>
                        </h1>
                        <p style="color: hsl(220, 100%, 99%)">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Eveniet, itaque accusantium odio, soluta, corrupti aliquam
                            quibusdam tempora at cupiditate quis eum maiores libero
                            veritatis? Dicta facilis sint aliquid ipsum atque?
                        </p>
                    </div>

                    <div class="col-lg-6 mb-5 mb-lg-0">
                        <div class="card">
                            <div class="card-body py-5 px-md-5">
                                <form action="/register" method="POST">
                                    @csrf
                                    <h2 class=" text-center mb-3">Register</h2>
                                        <div class="row">
                                            <div class="col-md-6 mb-4">
                                                <div class="form-floating">
                                                    <input type="text" placeholder="Name" name="name" id="name"
                                                        class="form-control" required>
                                                        <label for="Name">Name</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <div class="form-floating">
                                                    <input type="email" placeholder="Email" name="email" id="email"
                                                        class="form-control" required>
                                                        <label for="Email">Email</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 mb-4">
                                                <div class="form-floating">
                                                    <input type="tel" placeholder="phone" name="phone" id="phone"
                                                        class="form-control" required>
                                                        <label for="phone">Phone</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <div class="form-floating">
                                                    <input type="text" placeholder="Address" name="address"
                                                        id="address" class="form-control" required>
                                                        <label for="Address">Address</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 mb-4">
                                                <div class="form-floating">
                                                    <input type="text" placeholder="City" name="city" id="city"
                                                        class="form-control" required>
                                                        <label for="City">City</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <div class="form-floating">
                                                    <input type="text" placeholder="Province" name="province"
                                                        id="province" class="form-control" required>
                                                        <label for="Province">Province</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 mb-4">
                                                <div class="form-floating">
                                                    <input type="text" placeholder="Code Pos" name="zip_code"
                                                        id="zip_code" class="form-control" required>
                                                        <label for="CodePos">Code Pos</label>
                                                </div>
                                            </div>                                            
                                            
                                            <div class="col-md-6 mb-4">
                                                <div class="form-floating">
                                                    <input type="password" placeholder="password" name="password"
                                                        id="password" class="form-control" required>
                                                        <label for="Password">Password</label>
                                                </div>
                                            </div>
                                        </div>

                                    <button class="w-100 btn btn-lg btn-warning mt-4" type="submit">Daftar</button>
                                </form>
                                <div class="d-flex align-items-center justify-content-center pb-4 mt-4">
                                    <p class="mb-0 me-2">have an account?</p>
                                    <a href="/login">
                                        <button type="button" class="btn btn-outline-warning">Login</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Jumbotron -->
    </section>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
        integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous">
    </script>
</body>

</html>
