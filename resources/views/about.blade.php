<!DOCTYPE html>
<html lang="{{App()->getLocale()}}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TourAndHost - 
        {{__('messages.tap_about')}}
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
    <meta property="og:image" content="{{__('images/logo.png')}}">
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

        <!-- Hero Section -->
    <section class="hero position-relative mt-5">
        <!-- Dark Overlay -->
        <div class="overlay position-absolute top-0 start-0 w-100 h-100"></div>

        <div class="container position-relative text-center text-white">
            <h1 class="text-capitalize ">{{__('about.about_page_header')}} TourAndHost</h1>
            <p class="text">
                {{__('about.about_page_header_description')}}
            </p>
        </div>
    </section>
    <!-- Company Overview -->
    <section class="py-5">
        <div class="container text-center d-flex flex-column align-items-center">
            <h2 class="mb-4 section-title">{{__('about.who_we_are_section')}}</h2>
            <p class="text-muted w-75 mx-auto">
                {{__('about.who_we_are_section_description')}}
            </p>
        </div>
    </section>

        <div class="container ">
            <div class="row text-center d-flex justify-content-center">
                <div class="col-md-10 mx-3 mb-4  p-3 shadow-sm rounded">
                    <video controls lay class="w-100 rounded">
                        <source src="{{ asset('vedios/introduce_vedio.mp4') }}" type="video/mp4">
                    </video>
                </div>
            </div>
        </div>



    <!-- Mission & Vision -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row text-center d-flex justify-content-center">
                <div class="col-md-5 mb-4 border p-4 rounded shadow-sm mx-2">
                    <h3>
                        {{__('about.our_mission_title')}}
                    </h3>
                    <p class="text-muted">
                        {{__('about.our_mission_description')}}
                    </p>
                </div>
                <div class="col-md-5 mb-4 border p-4 rounded shadow-sm mx-2">
                    <h3>
                        {{__('about.our_vision_title')}}
                    </h3>
                    <p class="text-muted">
                        {{__('about.our_vision_description')}}
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-5 py-4 section-title">
                {{__('about.core_values_title')}}
            </h2>
            <div class="row text-center d-flex justify-content-center">
                <div class="col-md-2 mx-3 mb-4 border p-3 shadow-sm rounded">
                    <div class="value-icon mb-2">
                        <i class='bx bx-bulb'></i>
                    </div>
                    <h6>
                        {{__('about.innovation_title')}}
                    </h6>
                    <p class="text-muted small">
                        {{__('about.innovation_description')}}
                    </p>
                </div>
                <div class="col-md-2 mx-3 mb-4 border p-3 shadow-sm rounded">
                    <div class="value-icon mb-2">
                        <i class='bx bx-heart'></i>
                    </div>
                    <h6>
                        {{__('about.integrity_title')}}
                    </h6>
                    <p class="text-muted small">
                        {{__('about.integrity_description')}}
                    </p>
                </div>
                <div class="col-md-2 mx-3 mb-4 border p-3 shadow-sm rounded">
                    <div class="value-icon mb-2">
                        <i class='bx bx-world'></i>
                    </div>
                    <h6>
                        {{__('about.impact_title')}}
                    </h6>
                    <p class="text-muted small">
                        {{__('about.impact_description')}}
                    </p>
                </div>
                <div class="col-md-2 mx-3 mb-4 border p-3 shadow-sm rounded">
                    <div class="value-icon mb-2">
                        <i class='bx bx-crown'></i>
                    </div>
                    <h6>
                        {{__('about.excellence_title')}}
                    </h6>
                    <p class="text-muted small">
                        {{__('about.excellence_description')}}
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact CTA -->
    <section class="py-5 text-center">
        <div class="container">
            <h2 class="mb-4 py-3">
                {{__('messages.work_with_us')}}
            </h2>
            <a target="_blank" href="{{route('ContactPage')}}" class="btn btn-primary btn-lg">
                {{__('messages.get_in_touch_button')}}
            </a>
        </div>
    </section>


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