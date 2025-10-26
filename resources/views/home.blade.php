<!DOCTYPE html>
<html lang="{{App()->getLocale()}}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TourAndHost -
        {{__('messages.tap_title')}}
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

    <!-- pacifico  (english ...)-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">

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

<script type="application/ld+json">
{
    "@type": "Organization",
    "name": "tourandhost",
    "url": "https://tourandhost.com",
    "logo": "https://tourandhost.com/images//logo.png",
    "contactPoint": {
        "@type": "ContactPoint",
        "telephone": "+212-615877542",
        "contactType": "customer service",
        "areaServed": "MA",
        "availableLanguage": ["fr", "en", "es"]
    },
    "sameAs": [
        "https://www.facebook.com/p/Kechliving-Marrakech-61578336983831",
        "https://www.instagram.com/kechliving_marrakech/"
    ]
}
</script>



</head>

<body>
    @include('components.navbar')
    <header class="hero-section" id="hero">
        <video autoplay lay muted loop class="hero-video-bg">
            <source src="{{ asset('images/bgs/hero_bg.mp4') }}" type="video/mp4">
        </video>
        <div class="hero-overlay"></div>
        <div class="hero-content container-xl text-center">
            <h1 class="display-3 fw-bold my-3 animate__animated animate__fadeInUp">{{__('messages.hero_title')}}</h1>
            <a href="{{route('ResidencesPage')}}" target="_blank"
                class="btn btn-primary btn-lg mt-5 animate__animated animate__fadeInUp animate__delay-2s">
                {{__('messages.hero_button')}}
            </a>
        </div>
    </header>
    <section class="section-filter-search col-sm-12" id="filter-search">
        <div class="container container-xl animate__animated animate__fadeInUp animate__delay-3s">
            <div class="filter-card p-4 rounded-3 shadow-sm">
                <h2 class="h5 fw-bold mb-3">
                    {{ __('messages.filter_title')}}
                </h2>
                <form action="{{route('ResidencesPage')}}" method="get" class="row g-3" id="property-filter-form">
                    @csrf
                    <div class="col-md-2">
                        <label for="filterGuests" class="form-label text-center">
                            {{__('messages.guests')}}
                        </label>
                        <select name="guests" class="form-select form-control shadow-none">
                            <option value="">{{__('messages.select')}}</option>
                            @foreach ($guests as $guest)
                            <option value="{{$guest}}">{{$guest}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-2">
                        <label for="filterType" class="form-label text-center">
                            {{__('messages.property_type')}}
                        </label>
                        <select name="type" id="filterType" class="form-select form-control  shadow-none">
                            <option value="">{{__('messages.select')}}</option>
                            <option value="Apartment">Appartment</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label for="checkInDate" class="form-label text-center">
                            {{__('messages.check_out')}}
                        </label>
                        <input name="checkout" type="date" class="form-control shadow-none" id="checkInDate">
                    </div>
                    <div class="col-md-3">
                        <label for="checkOutDate" class="form-label text-center">
                            {{__('messages.check_in')}}
                        </label>
                        <input name="checkin" type="date" class="form-control shadow-none" id="checkOutDate">
                    </div>
                    <div class="col-md-2 d-flex align-items-end">
                        <button type="submet" class="w-100 btn-primary rounded ">
                            {{__('messages.search_button')}}
                        </button>
                    </div>
                </form>
            </div>
        </div>


        <main>
            <section id="about" class="container-fluid py-5">
                <div class="row">
                    <div class="col-md-5 m-auto align-items-center g-5">
                        <div class="order-lg-1 animate__animated animate__fadeInLeft"
                            data-animation-delay="0.5s">
                            <h2 class="section-title text-center">{{__('messages.about_section_title')}}</h2>
                            <p class="lead text-center">
                                {{__('messages.about_section_description')}}
                            </p>
                            <a target="_blank" href="{{route('AboutPage')}}" class="btn btn-outline-primary mt-3 w-25 d-block m-auto mt-3">
                                {{__('messages.read_more_button')}}
                            </a>
                        </div>
                    </div>
                    
                </div>
            </section>

            <hr class="section-divider">

            <section id="apartments" class="py-5 bg-light">
                <div class="container container-xl">
                    <div class="text-center mb-5 animate__animated animate__fadeInDown">
                        <h2 class="section-title">
                            {{__('messages.Featured_apartments_section')}}
                        </h2>
                        <p class="text-muted lead">
                            {{__('messages.Featured_apartments_description')}}
                        </p>
                    </div>
                    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-2 row-cols-xl-4 g-4"
                        id="apartment-cards-container">
                        @foreach ($products as $product)
                        <div class="col">
                            <div class="card apartment-card shadow-sm animate__animated animate__fadeInUp">

                                @if ($product->firstImage)
                                <img src="{{ asset($product->firstImage->image_path) }}"
                                    class="card-img-top apartment-card-img" alt="property cover" loading="lazy"
                                    width="400" height="250">
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
                </div>
            </section>

            <hr class="section-divider">

            <section id="amenities" class="py-5">
                <div class="container container-xl">
                    <div class="text-center mb-5 animate__animated animate__fadeInDown">
                        <h2 class="section-title">
                            {{__('messages.amenities_section')}}
                        </h2>
                        <p class="text-muted lead">
                            {{__('messages.amenities_section_description')}}
                        </p>
                    </div>
                    <div class="row text-center g-4" id="amenities-grid">
                        <div class="col-lg-2 col-md-4 col-sm-6 d-flex align-items-stretch animate__animated animate__fadeInUp"
                            data-animation-delay="0s">
                            <div class="amenity-card w-100 p-4 rounded-3 shadow-sm">
                                <i class='bx bx-wifi'></i>
                                <h5 class="">
                                    {{__('messages.free_wifi')}}
                                </h5>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6 d-flex align-items-stretch animate__animated animate__fadeInUp"
                            data-animation-delay="0.2s">
                            <div class="amenity-card w-100 p-4 rounded-3 shadow-sm">
                                <i class='bx bx-wind'></i>
                                <h5 class="">
                                    {{__('messages.air_conditioning')}}
                                </h5>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6 d-flex align-items-stretch animate__animated animate__fadeInUp"
                            data-animation-delay="0.4s">
                            <div class="amenity-card w-100 p-4 rounded-3 shadow-sm">
                                <i class='bx bx-chair'></i>
                                <h5 class="">
                                    {{__('messages.rooftop_terrace')}}
                                </h5>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6 d-flex align-items-stretch animate__animated animate__fadeInUp"
                            data-animation-delay="0.6s">
                            <div class="amenity-card w-100 p-4 rounded-3 shadow-sm">
                                <i class='bx bx-swim'></i>
                                <h5 class="">
                                    {{__('messages.swimming_pool')}}
                                </h5>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6 d-flex align-items-stretch animate__animated animate__fadeInUp"
                            data-animation-delay="0.8s">
                            <div class="amenity-card w-100 p-4 rounded-3 shadow-sm">
                                <i class='bx bxs-car'></i>
                                <h5 class="">
                                    {{__('messages.free_parking')}}
                                </h5>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6 d-flex align-items-stretch animate__animated animate__fadeInUp"
                            data-animation-delay="1s">
                            <div class="amenity-card w-100 p-4 rounded-3 shadow-sm">
                                <i class='bx bxs-bell-ring'></i>
                                <h5 class="">
                                    {{__('messages.concierge_service')}}
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <hr class="section-divider">


            <section id="faq" class="py-5">
                <div class="container container-xl animate__animated animate__fadeInUp shadow-none">
                    <div class="text-center mb-5 shadow-none">
                        <h2 class="section-title shadow-none">
                            {{__('messages.faqs_section')}}
                        </h2>
                        <p class="text-muted lead">
                            {{__('messages.amenities_section_description')}}
                        </p>
                    </div>
                    <div class="accordion" id="faqAccordion">
                        <div class="accordion-item animate__animated animate__fadeInUp" data-animation-delay="0s">
                            <h3 class="accordion-header" id="headingOne">
                                <button class="accordion-button shadow-none" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    {{__('messages.q1')}}
                                </button>
                            </h3>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    {{__('messages.q1_ansewer')}}
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item animate__animated animate__fadeInUp" data-animation-delay="0.2s">
                            <h3 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed shadow-none" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                    aria-controls="collapseTwo">
                                    {{__('messages.q2')}}
                                </button>
                            </h3>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    {{__('messages.q2_ansewer')}}
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item animate__animated animate__fadeInUp" data-animation-delay="0.4s">
                            <h3 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed shadow-none" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                                    aria-controls="collapseThree">
                                    {{__('messages.q3')}}
                                </button>
                            </h3>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    {{__('messages.q3_ansewer')}}
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item animate__animated animate__fadeInUp" data-animation-delay="0.4s">
                            <h3 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed shadow-none" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false"
                                    aria-controls="collapseFoure">
                                    {{__('messages.q4')}}
                                </button>
                            </h3>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    {{__('messages.q4_ansewer')}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <hr class="section-divider">

            <section id="contact" class="py-5 bg-light">
                <div class="container container-xl">
                    <div class="text-center mb-5 animate__animated animate__fadeInDown">
                        <h2 class="section-title">
                            {{__('messages.contact_section')}}
                        </h2>
                        <p class="text-muted lead">
                            {{__('messages.contact_description')}}
                        </p>
                    </div>
                    <div class="row g-5">
                        <div class="col-lg-6 animate__animated animate__fadeInLeft" data-animation-delay="0.5s">
                            <form action="{{route('Contact.Send')}}" method="post">
                                @csrf
                                <div class="mb-3">
                                    <label for="name" class="form-label">
                                        {{__('messages.full_name')}}
                                    </label>
                                    <input type="text" name="name" placeholder="{{__('messages.fullname_placeholder')}}"
                                        class="form-control shadow-none" id="name" required>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">{{__('messages.email')}}</label>
                                    <input type="email" name="email" placeholder="{{__('messages.email_placeholder')}}"
                                        class="form-control shadow-none" id="email" required>
                                </div>
                                <div class="mb-3">
                                    <label for="phone" class="form-label">{{__('messages.phone')}}</label>
                                    <input type="tel" name="phone" placeholder="{{__('messages.phone_placeholder')}}"
                                        class="form-control shadow-none" id="phone">
                                </div>
                                <div class="mb-3">
                                    <label for="message" class="form-label">{{__('messages.your_message')}}</label>
                                    <textarea name="message" placeholder="{{__('messages.message_placeholder')}}"
                                        class="form-control shadow-none" id="message" rows="5" required></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary w-100">
                                    {{__('messages.send_message_button')}}
                                </button>
                            </form>
                        </div>
                        <div class="col-lg-6 animate__animated animate__fadeInRight" data-animation-delay="0.5s">
                            <div class="contact-info">
                                <p class="h5 fw-bold mb-3">Our Office</p>
                                <p>
                                    <i class='bx bx-map me-2'></i>
                                    Prestigia, Marrakech, Morocco
                                </p>
                                <p>
                                    <i class='bx bx-phone me-2'></i>
                                    <a href="tel:+212612345678" class="text-decoration-none">+212 (615) 877-542</a>
                                </p>
                                <p>
                                    <i class='bx bx-envelope me-2'></i>
                                    <a href="mailto:info@tourandhost.com"
                                        class="text-decoration-none text-lowercase">info@tourandhost.com</a>
                                </p>
                                <a href="https://wa.me/212615877542" target="_blank"
                                    class="btn btn-whatsapp btn-success mt-3">
                                    <i class='bx bxl-whatsapp'></i> <span>
                                        {{__('messages.whatsapp_button')}}
                                    </span>
                                </a>
                                <div class="map-placeholder mt-4">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d13593.12831092005!2d-8.011931822673136!3d31.59872964295074!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sprestigia!5e0!3m2!1sen!2sma!4v1758324980284!5m2!1sen!2sma"
                                        width="600" height="290" class="mt-2" allowfullscreen="" loading="lazy"
                                        referrerpolicy="no-referrer-when-downgrade">
                                    </iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </main>


        @include('components.footer')
    <script src="{{asset('js/main.js')}}"></script>
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