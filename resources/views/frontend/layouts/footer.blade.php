<footer class="pt-20 pb-4" style="background-image: url({{asset('frontend/images/background_pattern.png')}});">
    <div class="section-shape top-0" style="background-image: url({{asset('frontend/images/shape8.png')}});"></div>

    <div class="footer-upper pb-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4 pe-4">
                    <div class="footer-about">
                        <img src="{{asset('frontend/images/icons/Travel-white.png') }}" alt>
                        <p class="mt-3 mb-3 white">
                            <p><strong>Discover-Connect-Explore</strong></p>
                        </p>
                        <ul>
                            <li class="white"><strong>Phone:</strong> +8801735059979</li>
                            <li class="white"><strong>Location:</strong> KUET , Fulbarigate , Khulna</li>
                            <li class="white"><strong>Email:</strong> <a
                                    href="mailto:administrator@travelMate.bd"
                                    class="__cf_email__"
                                    data-cfemail="0b62656d644b5f796a7d6e67626525686466">administrator@travelMate.bd</a></li>
                            <li class="white"><strong>Website:</strong><a href="https://travelMate.com"> www.TravelMate.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-12 mb-4">
                    <div class="footer-links">
                        <h3 class="white">Pages</h3>
                        <ul>
                            <li><a href="{{ route('tourGuide') }}">TourGuides</a></li>
                            <li><a href="{{ route('gallery.tour')}}">Gallery</a></li>
                            <li><a href="{{ url('/contact') }}">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-12 mb-4">
                    <div class="footer-links">
                        <h3 class="white">Quick Links</h3>
                        <ul>
                            <li><a href="{{ route('home')}}">Home</a></li>
                            <li><a href="{{ route('about') }}">About Us</a></li>
                            <li><a href="{{ route('bestDestination.tour') }}">Best Deals</a></li>
                            <li><a href="{{route('allDestination') }}">Destinations</a></li>
                            <li><a href="{{ route('topDestination.tour') }}">Top Picks</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                    <div class="footer-links">
                        <h3 class="white">Newsletter</h3>
                        <div class="newsletter-form ">
                            <p class="mb-3">Join our community who receives emails
                                filled with news, promotions, and other good stuff about new places , destinations .</p>
                            <form action="#" method="get" accept-charset="utf-8"
                                class="border-0 d-flex align-items-center">
                                <input type="text" placeholder="Email Address">
                                <button class="nir-btn ms-2">Subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-payment">
        <div class="container">
            <div class="row footer-pay align-items-center justify-content-between text-lg-start text-center">
                <div class="col-lg-8 footer-payment-nav mb-4">
                    <ul class>
                        <li class="me-2">We Support:</li>
                        <li class="me-2"><i class="fab fa-cc-mastercard fs-4"></i></li>
                        <li class="me-2"><i class="fab fa-cc-stripe fs-4"></i></li>
                        <li class="me-2"><i class="fab fa-cc-visa fs-4"></i></li>
                        <li class="me-2"><i class="fab fa-cc-sslcommerz fs-4"></i></li>
                    </ul>
                </div>


            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            <div class="copyright-inner rounded p-3 d-md-flex align-items-center justify-content-between">
                <div class="copyright-text">
                    <p class="m-0 white">2024 TravelMate. All rights reserved.</p>
                </div>
                <div class="social-links">
                    <ul>
                        <li><a href="{{url('https://www.facebook.com/travelMate')}}" class="white"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="{{url('https://www.twitter.com/travelMate')}}" class="white"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="{{url('https://www.instagram.com/travelMate')}}" class="white"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                        </li>
                        <li><a href="{{url('https://www.linkedin.com/in/travelMateOfficial')}}" class="white"><i class="fab fa-linkedin " aria-hidden="true"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div id="particles-js"></div>
</footer>


<div id="back-to-top">
    <a href="#"></a>
</div>


<div id="search1">
    <button type="button" class="close">×</button>
    <form>
        <input type="search" value placeholder="type keyword(s) here" />
        <button type="submit" class="btn btn-primary">Search</button>
    </form>
</div>




@yield('scripts')
<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="{{ url('frontend/js/jquery-3.5.1.min.js')}}"></script>
<script src="{{ url('frontend/js/bootstrap.min.js') }}"></script>
{{-- Other scripts --}}
<script src="{{ url('frontend/js/custom-swiper.js') }}"></script>
<script src="{{ url('frontend/js/custom-nav.js') }}"></script>
<script>
    // Swiper: slider that i use from codePen and customize it(For Top Destination)
    let next = document.querySelector('.next');
    let prev = document.querySelector('.prev');

    next.addEventListener('click', function(){
        let items = document.querySelectorAll('.item');
        document.querySelector('.slide').appendChild(items[0]);
    });

    prev.addEventListener('click', function(){
        let items = document.querySelectorAll('.item');
        document.querySelector('.slide').prepend(items[items.length - 1]);
    });
</script>
</body>



</html>
