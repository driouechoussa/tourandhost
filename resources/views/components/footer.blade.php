    <footer class="footer py-5 animate__animated animate__fadeInUp">
        <div class="container container-xl">
            <div class="row g-4 m-auto">
                <div class="col-md-4">
                    <h5 class="fw-bold">TourAndHost</h5>
                    <p class="text">
                        {{__('messages.footer_description')}}
                    </p>
                    <div class="social-icons mt-3">
                        <a href="#" target="_blank" class="social-icon"><i class='bx bxl-facebook-square'></i></a>
                        <a href="https://www.instagram.com/tourandhost" target="_blank" class="social-icon"><i class='bx bxl-instagram'></i></a>
                        <a href="https://wa.me/212615877542" target="_blank" class="social-icon"><i class='bx bxl-whatsapp'></i></a>
                        <a href="https://www.tiktok.com/@tourandhost" target="_blank" class="social-icon"><i class='bx bxl-tiktok'></i></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <h5 class="fw-bold">
                        {{__('messages.quick_links')}}
                    </h5>
                    <ul class="list-unstyled footer-links">
                        <li  class="mt-3">
                            <a target="_blank" href="{{route('AboutPage')}}" class="text-decoration-none text-capitalize">{{__('messages.nav_about')}}
                        </a></li>
                        <li class="mt-3">
                            <a target="_blank" href="{{route('ResidencesPage')}}" class="text-decoration-none text-capitalize">{{__('messages.nav_residences')}}
                        </a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5 class="fw-bold">
                        {{__('messages.contact_info')}}
                    </h5>
                    <ul class="list-unstyled footer-links">
                        <li class="mt-3"><i class='bx bx-map'></i> <span class="mx-1">Marrakech, Morocco</span></li>
                        <li class="mt-3"><i class='bx bx-phone'></i> <span class="mx-1">+212 (615) 877-542</span></li>
                        <li class="mt-3"><i class='bx bx-envelope'></i><span class="mx-1">info@tourandhost.com</span></li>
                    </ul>
                </div>
                
            </div>
            <hr class="mt-4">
            <div class="text-center">
                <p class="text">© <span id="year">{{ date('Y') }}</span> TourAndHost. <span>
                    {{__('messages.rights')}}
                </span>
                <p class="text">
                    {{__('messages.developed_by')}}    
                <i class='bx bxs-heart'></i>
                    <a href="https://www.driouechoussa.com" target="_blank"
                        class="text-light text-lowercase">@driouechoussa</a>
                </p>
                </p>
            </div>
        </div>
    </footer>