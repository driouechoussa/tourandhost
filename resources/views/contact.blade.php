<!DOCTYPE html>
<html lang="{{App()->getLocale()}}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TourAndHost - 
        {{__('messages.tap_contact')}}
    </title>
    <meta name="description"
        content="{{__('messages.head_description')}}">
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
    <meta property="og:description"
        content="{{__('messages.head_description')}}">
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
    
    <header class="contact-header">
        <div class="container">
            <h2 class="display-4 section-title">
                {{__('messages.contact_section')}}
            </h2>
            <p class="lead">
                {{__('messages.contact_description')}}
            </p>
        </div>
    </header>
    @if(session('success'))
        <div class="alert alert-warning m-auto my-5 w-50 alert-dismissible fade show" role="alert">
            {{__('messages.message_sent')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <section class="contact-content py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="card p-5 contact-form-card">
                        <h2 class="fw-bold mb-4">
                            {{__('messages.send_a_message')}}
                        </h2>
                        <form action="{{route('Contact.Send')}}" method="post">
                            @csrf
                            <div class="mb-4">
                                <label for="name" class="form-label">
                                    {{__('messages.full_name')}}
                                </label>
                                <input name="name" type="text" class="form-control shadow-none" id="name" placeholder="{{__('messages.fullname_placeholder')}}" required>
                            </div>
                            <div class="mb-4">
                                <label for="email" class="form-label">
                                    {{__('messages.email')}}
                                </label>
                                <input name="email" type="email" class="form-control shadow-none" id="email" placeholder="{{__('messages.email_placeholder')}}"
                                    required>
                            </div>
                            <div class="mb-4">
                                <label for="phone" class="form-label">
                                    {{__('messages.phone')}}
                                </label>
                                <input name="phone" type="phone" class="form-control shadow-none" id="phone" placeholder="{{__('messages.phone_placeholder')}}"
                                    required>
                            </div>
                            <div class="mb-4">
                                <label for="message" class="form-label">
                                    {{__('messages.your_message')}}
                                </label>
                                <textarea name="message" class="form-control shadow-none" id="message" rows="6"
                                    placeholder="{{__('messages.message_placeholder')}}" required></textarea>
                            </div>
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary btn-lg">
                                    {{__('messages.send_message_button')}}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="card p-5 contact-info-card h-100">
                        <h2 class="fw-bold mb-4">
                            {{__('messages.our_details')}}
                        </h2>

                        <div class="contact-info-item">
                            <div class="d-flex align-items-center">
                                <i class='bx bxs-map'></i>
                                <p class="text-muted mb-0">123 Tourandhost St., Marrakech, Morocco</p>
                            </div>
                        </div>

                        <div class="contact-info-item">
                            <div class="d-flex align-items-center">
                                <i class='bx bxs-envelope'></i>
                                <p class="text-muted mb-0">info@tourandhost.com</p>
                            </div>
                        </div>

                        <div class="contact-info-item">
                            <div class="d-flex align-items-center">
                                <i class='bx bxs-phone'></i>
                                <p class="text-muted mb-0">+212 (615) 877-542</p>
                            </div>
                        </div>

                        <hr class="my-4">

                        <h4 class="fw-bold mb-3">
                            {{__('messages.find_us_here')}}
                        </h4>
                        <div class="map-container">
                           <iframe 
                                src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d13593.12831092005!2d-8.011931822673136!3d31.59872964295074!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sprestigia!5e0!3m2!1sen!2sma!4v1758324980284!5m2!1sen!2sma" 
                                width="600" 
                                height="500" 
                                class="mt-2"
                                allowfullscreen="" 
                                loading="lazy" 
                                referrerpolicy="no-referrer-when-downgrade">
                           </iframe>
                        </div>
                    </div>
                </div>
            </div>
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