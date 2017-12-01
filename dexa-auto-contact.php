<?php
/**
 * Created by PhpStorm.
 * User: Mr Flash
 * Date: 10/16/2017
 * Time: 12:32 PM
 */
require_once('dexa-common-header.php');
?>
<div class=" ">
    <!-- content start -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="wrapper-content bg-white pinside40">
                    <div class="contact-form mb60">
                        <div class=" ">
                            <div class="col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
                                <div class="mb60  section-title text-center  ">
                                    <!-- section title start-->
                                    <h1>Get In Touch</h1>

                                    <p>Reach out to us &amp; we will respond as soon as we can.</p>
                                </div>
                            </div>
                            <div class="row">
                                <form class="contact-us" method="post" action="mail_to_dexa.php">
                                    <div class=" ">
                                        <!-- Text input-->
                                        <div class="col-md-4 col-sm-12 col-xs-12">
                                            <div class="form-group">
                                                <label class="sr-only control-label" for="name">name<span
                                                        class=" "> </span></label>
                                                <input id="name" name="name" type="text" placeholder="Name"
                                                       class="form-control input-md" required="">
                                            </div>
                                        </div>
                                        <!-- Text input-->
                                        <div class="col-md-4 col-sm-12 col-xs-12">
                                            <div class="form-group">
                                                <label class="sr-only control-label" for="email">Email<span
                                                        class=" "> </span></label>
                                                <input id="email" name="email" type="email" placeholder="Email"
                                                       class="form-control input-md" required="">
                                            </div>
                                        </div>
                                        <!-- Text input-->
                                        <div class="col-md-4 col-sm-12 col-xs-12">
                                            <div class="form-group">
                                                <label class="sr-only control-label" for="phone">Phone<span
                                                        class=" "> </span></label>
                                                <input id="phone" name="phone" type="text" placeholder="Phone"
                                                       class="form-control input-md" required="">
                                            </div>
                                        </div>
                                        <!-- Select Basic -->
                                        <div class="col-md-12 col-xs-12">
                                            <div class="form-group">
                                                <label class="control-label" for="message"> </label>
                                                <textarea class="form-control" id="message" rows="7" name="message"
                                                          placeholder="Message"></textarea>
                                            </div>
                                        </div>
                                        <!-- Button -->
                                        <div class="col-md-12 col-xs-12">
                                            <button type="submit" class="btn btn-default">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- /.section title start-->
                    </div>
                    <div class="contact-us mb60">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb60  section-title">
                                    <!-- section title start-->
                                    <h1>We are here to help you </h1>

                                    <p class="lead">
                                        Our Dynamic Team can assist you in finding any make and model car, within our
                                        reputable dealer network, whether new or pre-owned, at the right price.
                                    </p>
                                </div>
                                <!-- /.section title start-->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-xs-12">
                                <div class="bg-boxshadow pinside60 outline text-center mb30">
                                    <div class="mb40"><i class="icon-briefcase icon-2x icon-default"></i></div>
                                    <h2 class="capital-title">Branch Office</h2>

                                    <p>600 Luois Botha Avenue, <br/>Bramley, Johannesburg</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12">
                                <div class="bg-boxshadow pinside60 outline text-center mb30">
                                    <div class="mb40"><i class="icon-phone-call icon-2x icon-default"></i></div>
                                    <h2 class="capital-title">Call us at </h2>

                                    <h1 class="text-big">+27 11 056 6864 </h1>
                                    <h1 class="text-big">+27 11 056 7176 </h1>
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12">
                                <div class="bg-boxshadow pinside60 outline text-center mb30">
                                    <div class="mb40"><i class="icon-letter icon-2x icon-default"></i></div>
                                    <h2 class="capital-title">Email Address</h2>

                                    <p>admin@dexafieldauto.co.za</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="map" id="googleMap" style="position: relative; overflow: hidden;">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3582.129349921215!2d28.08349131462763!3d-26.12732516719664!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1e950d15ab097fc5%3A0x39fbfa1cc572b886!2s600+Louis+Botha+Ave%2C+Bramley%2C+Johannesburg%2C+2018!5e0!3m2!1sen!2sza!4v1511604949824" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
require_once('dexa-footer.php');
?>
<div id="page_data" style="visibility: hidden;">
    <b id="page_name">Contact Us</b>
    <b id="page_img">dexa-auto-images/audi.jpg</b>
</div>