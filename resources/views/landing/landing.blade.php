@extends('layouts.include.layouts')
{{-- @section('content') --}}
    {{-- Satrt navbar --}}
    @include('layouts.include\heade')
    {{-- end navbar --}}

    {{-- Start Hero --}}
    @include('layouts.include.hero')
    {{-- end hero --}}

    {{-- Awal Jumbtron --}}

    @include('layouts.include.jumbuttron')
    {{-- End jumbtron --}}

    {{-- Start Pilihan --}}
    <div class="food_section">
        <h1 class="text-center" id="Menu">Menu</h1>
        <ul class="filters_menu">
            <li class="active" data-filter="*">All</li>
            <li data-filter=".burger">Burger</li>
            <li data-filter=".pizza">Pizza</li>
            <li data-filter=".pasta">Pasta</li>
            <li data-filter=".fries">Fries</li>
        </ul>
    </div>
    <hr class="solid">
    {{-- End pilihan --}}

    {{-- Start Menu --}}
    <!-- Swiper -->
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            @foreach ($products as $product)
                <div class="swiper-slide rounded shadow p-5 mt-2" style="background-color:#a2a2a2ee">
                    <div class="row">
                        <div class="box">
                            <div class="d-flex justify-content-center">
                                <img src="images/f4.png" alt="food" height="100px">
                            </div>
                        </div>
                        <hr class="solid" style="background-color: #000">
                        <h5 class="card-title"><strong>{{ $product->name }}</strong></h5>
                        <p class="text-start">{{ $product->description }}</p>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-8">
                                    <p class="card-text"><strong>Price: </strong>Rp {{ $product->price }}</p>
                                </div>
                                <div class="col-2">
                                    <a href="#" class="btn btn-circle btn-primary"><i class="bi bi-bag-check"></i></a>
                                </div>
                                <div class="col-2">
                                    <a href="{{ route('add_to_cart', $product->id) }}" class="btn btn-circle btn-warning"><i class="bi bi-cart-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="swiper-pagination"></div>
    </div>
    {{-- End Menu --}}

    {{-- Start About --}}
    <section class="pt-0 position-relative pull-top mb-5 mt-5" id="About">
        <div class="rounded shadow p-5">
            <div class="row">
                <div class="col-lg-4 col-md-6 mt-0 text-center">
                    <img src="/images/about-img.png" alt="food" height="280px">
                </div>
                <div class="col-lg-8 col-md-6 mt-5 mt-md-0 text-center">
                    <h4 class="menu">Wikrama Cafe</h4>
                    <hr class="solid mb-3">
                    <p class="regular" style="color:#ffffff;">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                        Mollitia iste modi non quis esse illo qui reprehenderit sunt aliquam sit debitis dolore
                        et incidunt vel molestiae dignissimos voluptate autem, iusto cumque similique possimus
                        tempora, excepturi, deserunt atque. Distinctio dolorum exercitationem qui tempora culpa
                        officia aut soluta minus error cupiditate, accusantium illo unde explicabo blanditiis,
                        repellendus doloribus praesentium non rem autem! Culpa quasi maxime, officia possimus
                        totam sapiente sunt dolor vero quidem, qui sit nihil? Harum illo error veniam ipsam
                        autem doloribus minus facilis, porro unde et deserunt numquam obcaecati quas laborum.
                        Est, maxime. Quia voluptates dignissimos sunt fuga nobis ab?</p>
                </div>
            </div>
        </div>
        </div>
        </div>
    </section>
    {{-- End About --}}

    {{-- Start Contact --}}
    @include('layouts.include.contact')
    {{-- End Contact --}}

    {{-- Start footer --}}
    <footer class="bg-dark text-center py-3">
        <p class="" style="color:#ffffff">&copy; 2023 Ryan</p>
    </footer>
    {{-- end footer --}}
{{-- @endsection --}}
