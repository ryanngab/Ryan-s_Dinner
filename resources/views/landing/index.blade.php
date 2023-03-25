@extends('layouts.main')
@section('section')
    <main class="vh-100">
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-6 mt-5">
                    {{-- <div class="row d-flex justify-content-center align-items-center h-100">
                        <img src="img/download.jfif" alt="" style="width: 455px">
                    </div> --}}
                </div>

                <div class="col-lg-6 mt-5">
                    <h5 class="center">Welcome To </h5>
                    <h1>Cafe </h1>
                    <p>Jika anda mencari cafe dengan nuansa pedesaan, Maka Cafe adalah solusinya ,silahakan reserveasi di
                        sini</p>
                    <a href="/login" class="btn btn-outline-danger">Reserveasi</a>
                </div>

            </div>
        </div>

    </main>

    <style>
        main {
            background-image: url(/img/bannerbg.jpg)
        }
    </style>
@endsection
