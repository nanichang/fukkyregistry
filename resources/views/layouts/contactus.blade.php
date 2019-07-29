@extends ('layouts.master')

@section ('content')
<div class="contact-us pt-110 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-12">
                <div class="contact-us-desc">
                    <div class="get-in-touch">
                        <h3>get in touch</h3>
                        <p>Still have questions? We've got answers. Send us a Mail</p>
                    </div>
                    <div class="contact-social">
                        <a href="#"><i class="zmdi zmdi-facebook"></i></a>
                        <a href="#"><i class="zmdi zmdi-instagram"></i></a>
                        <a href="#"><i class="zmdi zmdi-rss"></i></a>
                        <a href="#"><i class="zmdi zmdi-twitter"></i></a>
                        <a href="#"><i class="zmdi zmdi-pinterest"></i></a>
                    </div>
                    <div class="contact-address">
                        <h3>address</h3>
                        <div class="contact-list">
                            <div class="single-contact-list">
                                <div class="contact-icon">
                                    <i class="zmdi zmdi-pin"></i>
                                </div>
                                <div class="conatct-desc">
                                    <p>3rd Floor, Taen Shopping complex <br> Old airport road, Opp Nitel office</p>
                                </div>
                            </div>
                            <div class="single-contact-list">
                                <div class="contact-icon">
                                    <i class="zmdi zmdi-phone"></i>
                                </div>
                                <div class="conatct-desc">
                                    <p>+234 8056 2519 23</p>
                                </div>
                            </div>
                            <div class="single-contact-list">
                                <div class="contact-icon">
                                    <i class="zmdi zmdi-email"></i>
                                </div>
                                <div class="conatct-desc">
                                    <p>info@fukkisregistry.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-12">
                <div class="map-area">
                    <div id="googleMap" style="width:100%;height:460px;"></div>
                </div>
            </div>
        </div>

        <!--Conatct form start-->
        <div class="row">
            <div class="col-lg-10 offset-lg-1 col-md-12">
                <div class="contact-form-inner pt-95">
                    <div class="contact-form-titile text-center">
                        <h3>Send Us a Message</h3>    
                    </div>
                    <div class="contat_form_inner mt-60">
                        <form id="contact-form" action="assets/mail.php" method="POST">
                            <div class="single-contact-form d-flex">
                                <div class="contact-box">
                                    <input type="text" placeholder="Your Name *" name="name">
                                </div>
                                <div class="contact-box">
                                    <input type="text" placeholder="Phone *" name="phone">
                                </div>
                            </div>
                            <div class="single-contact-form">
                                <div class="contact-box subject">
                                    <input type="email" placeholder="Email*" name="email">
                                </div>
                            </div>
                            <div class="single-contact-form">
                                <div class="contact-box message">
                                    <textarea name="message" placeholder="Message*"></textarea>
                                </div>
                            </div>
                            <div class="contact-btn">
                                <button type="submit">Send Message</button>
                            </div>

                            <p class="form-messege"></p>

                        </form>
                    </div>
                </div>
            </div>

        </div>
        <!--Conatct form end-->
    </div>
</div>
<!--Contact us end-->
@endsection