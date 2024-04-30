<footer class="pt-20 pb-4" style="background-image: url(frontend/images/background_pattern.png);">
    <div class="section-shape top-0" style="background-image: url(frontend/images/shape8.png);"></div>

    <div class="footer-upper pb-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4 pe-4">
                    <div class="footer-about">
                        <img src="{{ url('frontend/images/logo-white.png') }}" alt>
                        <p class="mt-3 mb-3 white">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Odio suspendisse leo neque
                            iaculis molestie sagittis maecenas aenean eget molestie sagittis.
                        </p>
                        <ul>
                            <li class="white"><strong>PO Box:</strong> +47-252-254-2542</li>
                            <li class="white"><strong>Location:</strong> Kathmandu, Nepal</li>
                            <li class="white"><strong>Email:</strong> <a
                                    href="https://htmldesigntemplates.com/cdn-cgi/l/email-protection"
                                    class="__cf_email__"
                                    data-cfemail="0b62656d644b5f796a7d6e67626525686466">travelin12@gmail.com</a></li>
                            <li class="white"><strong>Website:</strong> www.Travelin.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-12 mb-4">
                    <div class="footer-links">
                        <h3 class="white">Quick link</h3>
                        <ul>
                            <li><a href="{{ url('/booking') }}">Booking</a></li>
                            <li><a href="{{ url('/service') }}">Services</a></li>
                            <li><a href="{{ url('/gallery') }}">Gallery</a></li>
                            <li><a href="{{ url('/contact') }}">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-12 mb-4">
                    <div class="footer-links">
                        <h3 class="white">Categories</h3>
                        <ul>
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li><a href="{{ url('/about') }}">About Us</a></li>
                            <li><a href="{{ url('/tour') }}">Tours</a></li>
                            <li><a href="{{ url('/destination') }}">Destination</a></li>
                            <li><a href="{{ url('/blog') }}">Blogs</a></li>
                            <li><a href="{{ url('/contact') }}">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                    <div class="footer-links">
                        <h3 class="white">Newsletter</h3>
                        <div class="newsletter-form ">
                            <p class="mb-3">Jin our community of over 200,000 global readers who receives emails
                                filled with news, promotions, and other good stuff.</p>
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
                        <li class="me-2"><i class="fab fa-cc-paypal fs-4"></i></li>
                        <li class="me-2"><i class="fab fa-cc-stripe fs-4"></i></li>
                        <li class="me-2"><i class="fab fa-cc-visa fs-4"></i></li>
                        <li class="me-2"><i class="fab fa-cc-discover fs-4"></i></li>
                    </ul>
                </div>


            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            <div class="copyright-inner rounded p-3 d-md-flex align-items-center justify-content-between">
                <div class="copyright-text">
                    <p class="m-0 white">2023 Travelin. All rights reserved.</p>
                </div>
                <div class="social-links">
                    <ul>
                        <li><a href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
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

<div class="modal fade log-reg" id="exampleModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="post-tabs">

                    <ul class="nav nav-tabs nav-pills nav-fill" id="postsTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button aria-controls="login" aria-selected="false" class="nav-link active"
                                data-bs-target="#login" data-bs-toggle="tab" id="login-tab" role="tab"
                                type="button">Login</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button aria-controls="register" aria-selected="true" class="nav-link"
                                data-bs-target="#register" data-bs-toggle="tab" id="register-tab" role="tab"
                                type="button">Register</button>
                        </li>
                    </ul>

                    <div class="tab-content blog-full" id="postsTabContent">

                        <div aria-labelledby="login-tab" class="tab-pane fade active show" id="login"
                            role="tabpanel">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="blog-image rounded">
                                        <a href="#"
                                            style="background-image: url(frontend/images/trending/trending5.jpg);"></a>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <h4 class="text-center border-b pb-2">Login</h4>
                                    <div class="log-reg-button d-flex align-items-center justify-content-between">
                                        <button type="submit" class="btn btn-fb">
                                            <i class="fab fa-facebook"></i> Login with Facebook
                                        </button>
                                        <button type="submit" class="btn btn-google">
                                            <i class="fab fa-google"></i> Login with Google
                                        </button>
                                    </div>
                                    <hr class="log-reg-hr position-relative my-4 overflow-visible">
                                    <form method="post" action="#" name="contactform" id="contactform">
                                        <div class="form-group mb-2">
                                            <input type="text" name="user_name" class="form-control"
                                                id="fname" placeholder="User Name or Email Address">
                                        </div>
                                        <div class="form-group mb-2">
                                            <input type="password" name="password_name" class="form-control"
                                                id="lpass" placeholder="Password">
                                        </div>
                                        <div class="form-group mb-2">
                                            <input type="checkbox" class="custom-control-input" id="exampleCheck">
                                            <label class="custom-control-label mb-0" for="exampleCheck1">Remember
                                                me</label>
                                            <a class="float-end" href="#">Lost your password?</a>
                                        </div>
                                        <div class="comment-btn mb-2 pb-2 text-center border-b">
                                            <input type="submit" class="nir-btn w-100" id="submit"
                                                value="Login">
                                        </div>
                                        <p class="text-center">Don't have an account? <a href="#"
                                                class="theme">Register</a></p>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div aria-labelledby="register-tab" class="tab-pane fade" id="register" role="tabpanel">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="blog-image rounded">
                                        <a href="#"
                                            style="background-image: url(frontend/images/trending/trending5.jpg);"></a>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <h4 class="text-center border-b pb-2">Register</h4>
                                    <div class="log-reg-button d-flex align-items-center justify-content-between">
                                        <button type="submit" class="btn btn-fb">
                                            <i class="fab fa-facebook"></i> Login with Facebook
                                        </button>
                                        <button type="submit" class="btn btn-google">
                                            <i class="fab fa-google"></i> Login with Google
                                        </button>
                                    </div>
                                    <hr class="log-reg-hr position-relative my-4 overflow-visible">
                                    <form method="post" action="#" name="contactform1" id="contactform1">
                                        <div class="form-group mb-2">
                                            <input type="text" name="user_name" class="form-control"
                                                id="fname1" placeholder="User Name">
                                        </div>
                                        <div class="form-group mb-2">
                                            <input type="text" name="user_name" class="form-control"
                                                id="femail" placeholder="Email Address">
                                        </div>
                                        <div class="form-group mb-2">
                                            <input type="password" name="password_name" class="form-control"
                                                id="lpass1" placeholder="Password">
                                        </div>
                                        <div class="form-group mb-2">
                                            <input type="password" name="password_name" class="form-control"
                                                id="lrepass" placeholder="Re-enter Password">
                                        </div>
                                        <div class="form-group mb-2 d-flex">
                                            <input type="checkbox" class="custom-control-input" id="exampleCheck1">
                                            <label class="custom-control-label mb-0 ms-1 lh-1" for="exampleCheck1">I
                                                have read and accept the Terms and Privacy Policy?</label>
                                        </div>
                                        <div class="comment-btn mb-2 pb-2 text-center border-b">
                                            <input type="submit" class="nir-btn w-100" id="submit1"
                                                value="Register">
                                        </div>
                                        <p class="text-center">Already have an account? <a href="#"
                                                class="theme">Login</a></p>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="{{ url('frontend/js/jquery-3.5.1.min.js')}}"></script>
<script src="{{ url('frontend/js/bootstrap.min.js') }}"></script>
<script src="{{ url('frontend/js/particles.js') }}"></script>
<script src="{{ url('frontend/js/particlerun.js') }}"></script>
<script src="{{ url('frontend/js/plugin.js') }}"></script>
<script src="{{ url('frontend/js/main.js') }}"></script>
<script src="{{ url('frontend/js/custom-swiper.js') }}"></script>
<script src="{{ url('frontend/js/custom-nav.js') }}"></script>

</body>


</html>
