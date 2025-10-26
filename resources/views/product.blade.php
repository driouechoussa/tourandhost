<!DOCTYPE html>
<html lang="{{App()->getLocale()}}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TourAndHost -
        @if (App()->getLocale() == 'en')
        {{$product_details->product_name_en}}
        @elseif (App()->getLocale() == 'es')
        {{$product_details->product_name_es}}
        @elseif (App()->getLocale() == 'fr')
        {{$product_details->product_name_fr}}
        @endif
    </title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="tourandhost">
    <meta name="rebots" content="unindex , follow">

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
    <meta property="og:description"
        content="Discover and book luxury apartments and riads in Marrakech. Modern amenities, authentic experiences, and concierge services.">
    <meta property="og:image" content="">
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

    <div id="propertyCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            @foreach ($product_images->product_items as $key => $image)
            <div class="carousel-item {{ $key === 0 ? 'active' : '' }}">
                <img class="d-block w-100 imagesCarousel" loading="lazy" src="{{ asset($image->image_path) }}"
                    alt="product slide">
            </div>
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#propertyCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#propertyCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>

    <div class="container my-5">
        <div class="d-flex justify-content-between align-items-center">
            <h1 class="property-title">
                @if (App()->getLocale() == 'en')
                {{$product_details->product_name_en}}
                @elseif (App()->getLocale() == 'es')
                {{$product_details->product_name_es}}
                @elseif (App()->getLocale() == 'fr')
                {{$product_details->product_name_fr}}
                @endif
            </h1>
            <span class="price-area text-capitalize"><span id="item_price">{{$product_details->product_price}}</span>
                <span id="chosen_currency">MAD</span></span>
        </div>
        <p class="text-muted text-capitalize"><i class='bx bxs-map'></i>
            @if (App()->getLocale() == 'en')
            {{$product_details->product_address_en}}
            @elseif (App()->getLocale() == 'es')
            {{$product_details->product_address_es}}
            @elseif (App()->getLocale() == 'fr')
            {{$product_details->product_address_fr}}
            @endif
        </p>

        <!-- Features -->
        <div class="row text-center mt-5">
            <div class="col border-end">
                <div class="feature-icon mx-auto mb-2"><i class='bx bx-bed feature-icon'></i></div>
                <p class="pt-3">{{$product_details->product_beds}}</p>
            </div>
            <div class="col border-end">
                <div class="feature-icon mx-auto mb-2"><i class='bx bx-square feature-icon'></i></div>
                <p class="pt-3">{{$product_details->product_size}} <span>m<sup>2</sup></span></p>
            </div>
            <div class="col border-end">
                <div class="feature-icon mx-auto mb-2"><i class='bx bx-swim feature-icon'></i></div>
                <p class="pt-3 text-capitalize">
                    {{__('messages.swimming_pool')}}
                </p>
            </div>
            <div class="col">
                <div class="feature-icon mx-auto mb-2">
                    <i class='bx bxs-tree-alt feature-icon'></i>
                </div>
                <p class="pt-3 text-capitalize">
                    {{__('messages.garden')}}
                </p>
            </div>
        </div>

        <div class="row my-5">
            <div class="col-lg-6 my-2">
                <div class="border description-area p-4">
                    <h4 class="fw-bold mb-3">
                        {{ __('messages.description')}}
                    </h4>
                    <p class="mb-0">
                        @if (App()->getLocale() == 'en')
                        {{$product_details->product_description_en}}
                        @elseif (App()->getLocale() == 'es')
                        {{$product_details->product_description_es}}
                        @elseif (App()->getLocale() == 'fr')
                        {{$product_details->product_description_fr}}
                        @endif
                    </p>
                </div>
            </div>


            <div class="col-lg-6 my-2 booking-box border">
                <div class="">
                    <h4 class="mb-3 booking-title">
                        {{__('messages.booking')}}
                    </h4>

                    <form action="{{route('Booking')}}" method="post" class="resrervation-form ">
                        @csrf
                        <div class="mb-4">
                            <label for="name_booker" class="form-label text-secondary">
                                {{__('messages.full_name')}}
                            </label>
                            <input id="name_booker" name="fullname" type="text" class="form-control shadow-none"
                                placeholder="{{__('messages.fullname_placeholder')}}">
                        </div>
                        <div class="mb-4">
                            <label for="email_booker" class="form-label text-secondary">{{__('messages.email')}}</label>
                            <input id="email_booker" name="email" type="email" class="form-control shadow-none"
                                placeholder="{{__('messages.email_placeholder')}}">
                        </div>
                        <div class="mb-3">
                            <label for="phone_booker" class="form-label text-secondary">{{__('messages.phone')}}</label>
                            <input id="phone_booker" name="phone" type="tel" class="form-control shadow-none"
                                placeholder="{{__('messages.phone_placeholder')}}">
                        </div>
                        <div class="mb-3">
                            <select id="guest_booker" name="guests" id="guests_option" class="form-control form-select  shadow-none">
                                <option value="" disabled selected class="text-secondary">{{__('messages.guests')}}
                                </option>
                                <option value="1">1</option>
                                <option value="2">2 </option>
                                <option value="3">3 </option>
                                <option value="4">4 </option>
                                <option value="5">+5 </option>
                            </select>
                        </div>
                        <div  class="mb-4 d-flex flex-row justify-content-center ">
                            <label for="checkin_booker" class="form-label w-25 pt-3 me-2 text-secondary">
                                {{__('messages.check_in')}}
                            </label>
                            <input id="checkin_booker" name="checkin-date" type="datetime-local" class="form-control w-75 shadow-none">
                        </div>
                        <div class="mb-4 d-flex flex-row justify-content-center ">
                            <label for="checkout_booker" class="form-label w-25 pt-3 me-2 text-secondary">
                                {{__('messages.check_out')}}
                            </label>
                            <input id="checkout_booker" name="checkout-date" type="datetime-local" class="form-control w-75 shadow-none">
                        </div>
                        <div class="d-flex align-items-center ">
                            <button type="submit" id="sendWhatsApp"
                                  class="btn btn-success btn-primary w-50 mt-3">{{__('messages.booking')}}
                            </button>

                            <a target="_blank" class="w-50 mt-3 rounded mx-2 btn-outline-primary" href="https://wa.me/212615877542">
                                {{__('messages.agent')}}
                            </a>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

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

    <script>
        document.getElementById("sendWhatsApp").addEventListener("click", function() {
        // قراءة القيم من الحقول
        let fullname = document.getElementById("name_booker").value;
        let email    = document.getElementById("email_booker").value;
        let phone    = document.getElementById("phone_booker").value;
        let guests   = document.getElementById("guest_booker").value;
        let checkin  = document.getElementById("checkin_booker").value;
        let checkout = document.getElementById("checkout_booker").value;

        // رقم الواتساب الخاص بك (مع كود الدولة)
        let whatsappNumber = "212655381234";

        // صياغة الرسالة
        let message = `📌 Booking Request
        -------------------------
        👤 Name: ${fullname}
        📧 Email: ${email}
        📱 Phone: ${phone}
        👥 Guests: ${guests}
        📅 Check-in: ${checkin}
        📅 Check-out: ${checkout}
        -------------------------
        Sent from TourAndHost website`;

        // بناء الرابط
        let url = `https://wa.me/${whatsappNumber}?text=${encodeURIComponent(message)}`;

        // فتح واتساب
        window.open(url, "_blank");
        });
    </script>

</body>

</html>