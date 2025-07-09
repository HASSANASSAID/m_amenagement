   <footer>
        <div id="footer" class="container">

            <div class="row">
                <div class="footer-blocks">

                    <div class="col-sm-3 column contact-block">
                        <h5>Contact</h5>
                        <ul>
                            <li>
                                <i class="fa fa-map-marker"></i>
                                <span>AGADIR &amp; LIRAKE </span>
                            </li>
                            <li>
                                <i class="fa fa-phone"></i>
                                <span>+212 655 502 068</span>
                            </li>
                            <li>
                                <i class="fa fa-fax"></i>
                                <span>6/7</span>
                            </li>
                            <li>
                                <i class="fa fa-envelope-o"></i>
                                <span>maamenagement.ma@gmail.com</span>
                            </li>
                        </ul>
                    </div>



                    <div class="col-sm-3 column">
                        <div class="block-links">
                            <h5>Information</h5>
                           Nous travaillons pour assurer le bonheur de nos clients tout en offrant la meilleure qualité.
                        </div>
                    </div>






                    <div class="col-sm-3 footer-newsletter">
                        <script>
                            function subscribe() {
                                var emailpattern = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
                                var email = $('#txtemail').val();
                                if (email != "") {
                                    if (!emailpattern.test(email)) {
                                        $('.text-danger').remove();
                                        var str = '<span class="error">Invalid Email</span>';
                                        $('#txtemail').after('<div class="text-danger">Invalid Email</div>');

                                        return false;
                                    }
                                    else {
                                        $.ajax({
                                            url: 'index.php?route=extension/module/newsletters/news',
                                            type: 'post',
                                            data: 'email=' + $('#txtemail').val(),
                                            dataType: 'json',


                                            success: function (json) {

                                                $('.text-danger').remove();
                                                $('#txtemail').after('<div class="text-danger">' + json.message + '</div>');

                                            }

                                        });
                                        return false;
                                    }
                                }
                                else {
                                    $('.text-danger').remove();
                                    $('#txtemail').after('<div class="text-danger">Email Is Require</div>');
                                    $(email).focus();

                                    return false;
                                }
                            }
                        </script>
                        <div class="newsletter">
                            <h5 class="news-title">Newsletter</h5>
                            <div class="newsletter-message">
                                Join us for get latest updates
                            </div>
                            <div class="newsright">
                                <form action="" method="post">
                                    <div class="form-group required">
                                        <label class="col-sm-2 control-label" for="input-firstname">Email</label>
                                        <div class="input-news">
                                            <input type="email" name="txtemail" id="txtemail" value=""
                                                placeholder="Enter Your Email Address" class="form-control input-lg" />
                                        </div>
                                        <div class="subscribe-btn">
                                            <button type="submit" class="btn btn-default btn-lg"
                                                onclick="return subscribe();">Subscribe</i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>


                    </div>
                    <div class="foottercenter">
                        <div class="social-block">
                            <ul>
                                <li class="facebook">
                                    <a class="_blank" href="#">
                                        <span>Facebook</span>
                                    </a>
                                </li>
                                <li class="twitter">
                                    <a class="_blank" href="#">
                                        <span>Twitter</span>
                                    </a>
                                </li>
                               
                                <li class="google-plus">
                                    <a class="_blank" href="#">
                                        <span>Google Plus</span>
                                    </a>
                                </li>
                                <li class="instagram">
                                    <a class="_blank" href="#">
                                        <span>Instagram</span>
                                    </a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>


            </div>
        </div>

        <div id="bottom-footer" class="bottomfooter">
            <div class="container">
                <div class="row">

                   


                    <p id="powered" class="powered">Dévlopper par <a href="#">HASSAN </a> Aménagement
                        - maison &copy; 2025</p>
                </div>
            </div>
        </div>
    </footer>