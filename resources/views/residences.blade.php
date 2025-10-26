<!DOCTYPE html>
<html lang="{{App()->getLocale()}}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TourAndHost -
        {{__('messages.tap_residences')}}
    </title>
    <meta name="description" content="{{__('messages.head_description')}}">
    <meta name="keywords" content="{{__('messages.head_keywords')}}">
    <meta name="author" content="tourandhost">
    <meta name="rebots" content="index , follow">

    <!-- Poppins (english ...) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <meta property="og:title" content="Tourandhost">
    <meta property="og:description" content="{{__('messages.head_description')}}">
    <meta property="og:image" content="{{asset('images/logo.png')}}">
    <meta property="og:url" content="https://www.tourandhost.com">
    <meta property="og:type" content="website">

    <!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- animate -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- boxicon -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <link rel="stylesheet" href="{{ asset('styles/main.css') }}">


</head>

<body>
    @include('components.navbar')

    <div class="container mt-5">

        <div class="container-fluid title-section pt-5">
            <h2 class="section-title text-start">
                {{__('messages.residences_page_title')}}
            </h2>
            <p class="lead text-muted text-start">
                {{__('messages.residences_page_header_description')}}
            </p>
        </div>

        <section id="properties" class="my-5">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
                @foreach ($products as $product)
                <div class="col">
                    <div class="card apartment-card shadow-sm animate__animated animate__fadeInUp">

                        @if ($product->firstImage)
                        <img src="{{ asset($product->firstImage->image_path) }}" class="card-img-top apartment-card-img"
                            alt="property cover" loading="lazy" width="400" height="250">
                        @endif

                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">
                                @if (App()->getLocale() == 'en')
                                {{$product->product_name_en}}
                                @elseif (App()->getLocale() == 'es')
                                {{$product->product_name_es}}
                                @elseif (App()->getLocale() == 'fr')
                                {{$product->product_name_fr}}
                                @endif
                            </h5>
                            <p class="card-text text-muted text-capitalize"><i class='bx bx-map me-1'></i>
                                <span>
                                    @if (App()->getLocale() == 'en')
                                    {{$product->product_address_en}}
                                    @elseif (App()->getLocale() == 'es')
                                    {{$product->product_address_es}}
                                    @elseif (App()->getLocale() == 'fr')
                                    {{$product->product_address_fr}}
                                    @endif
                                </span>
                            </p>
                            <div class="apartment-amenities d-flex justify-content-between mb-3">
                                <span class="badge rounded-pill text-bg-light"><i class='bx bx-user'></i>
                                    <span class="px-1">{{$product->product_guests}}</span> </span>
                                <span class="badge rounded-pill text-bg-light"><i class='bx bxs-bed'></i>
                                    <span class="px-1">{{$product->product_beds}}</span></span>
                                <span class="badge rounded-pill text-bg-light"><i class='bx bxs-bath'></i>
                                    <span class="px-1">{{$product->product_baths}}</span></span>
                            </div>
                            <p class="card-text flex-grow-1 small card-description">
                                @if (App()->getLocale() == 'en')
                                {{$product->product_description_en}}
                                @elseif (App()->getLocale() == 'es')
                                {{$product->product_description_es}}
                                @elseif (App()->getLocale() == 'fr')
                                {{$product->product_description_fr}}
                                @endif
                            </p>
                            <div class="d-flex justify-content-between align-items-center mb-3 mt-auto">
                                <span class="price-tag fw-bold"><span>{{$product->product_price}}</span>
                                    <span>MAD</span></span>
                                <span class="text-muted small ">
                                    {{__('messages.per_night')}} </span>
                            </div>
                            <div class="d-grid gap-2">
                                <a target="_blank" href="{{ route('ProductPage' , $product->id) }}"
                                    class="btn btn-primary btn-sm book-now-btn">
                                    {{__('messages.see_more_button')}}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </section>

    </div>
    @include('components.reviewForm')

    @include('components.footer')


    </section>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>

</body>

</html>