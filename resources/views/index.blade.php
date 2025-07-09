 
@extends('layouts.app')
<style>
    .product-thumb .product-thumb .imaage {
        width: 100%;
        height: 100%;
    }
</style>
  

    @section('content-top')
        <!-- ======= Quick view JS ========= -->
        <script>

            function quickbox() {
                if ($(window).width() > 767) {
                    $('.quickview-button').magnificPopup({
                        type: 'iframe',
                        delegate: 'a',
                        preloader: true,
                        tLoading: 'Loading image #%curr%...',
                    });
                }
            }
            jQuery(document).ready(function () { quickbox(); });
            jQuery(window).resize(function () { quickbox(); });

        </script>
        <div class="content-top">
            <div class="home-container">
                <section id="sectionhome" class="main-slider">
                    <div id="spinner"></div>
                    <div class="swiper-viewport">
                        <div id="slideshow0" class="swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide text-center"><a href="#"><img
                                            src="assets/image/amenagment_img/nf.jpg" alt="Mainbanner1"class="img-responsive" /></a></div>
    
                                            
                        </div>
                        <div class="swiper-pagination slideshow0"></div>
                        <div class="swiper-pager">
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                    </div>
                </section>
                <script type="text/javascript">

                    // $('#slideshow0').swiper({
                    // mode: 'horizontal',
                    // slidesPerView: 1,
                    // pagination: '.slideshow0',
                    // paginationClickable: true,
                    // nextButton: '.swiper-button-next',
                    // prevButton: '.swiper-button-prev',
                    // spaceBetween: 0,
                    // autoplay: 5000,
                    // autoplayDisableOnInteraction: true,
                    // loop: true
                    // });

                </script>

                <script type="text/javascript">
                    // Can also be used with $(document).ready()
                    $(window).load(function () {
                        $("#spinner").fadeOut("slow");
                    });	
                </script>

                <section id="section1">
                    <div id="czservicecmsblock">
                        <div class="service_container container">
                            <div class="service-area">
                                <div class="service-third service1">
                                    <div class="service-inner">
                                        <div class="service-icon icon1"></div>
                                        <div class="service-content">
                                            <div class="service-heading">Livraison gratuite  </div>
                                            
                                        
                                        </div>
                                    </div>
                                </div>
                                <div class="service-third service2">
                                    <div class="service-inner">
                                        <div class="service-icon icon2"></div>
                                        <div class="service-content">
                                            <div class="service-heading">+212 655 502 068</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="service-third service3">
                                    <div class="service-inner">
                                        <div class="service-icon icon3"></div>
                                        <div class="service-content">
                                            <div class="service-heading">Garantie de remboursement
                                            </div>
                                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="czaboutcmsblock" class="about-cms-block">
                        <div class="container aboutus-container">
                            <div class="hometab-heading box-heading">Pour qoui M.A_aménagment</div>
                            <div class="about-store">
                                <div class="about-store-inner">
                                    <div class="about-text1">Bienvenue chez M.A_aménagment, votre partenaire privilégié dans
                                        l'art de réinventer votre habitat. Nous croyons que chaque maison mérite un aménagement
                                        qui reflète la personnalité et le style de vie de ses occupants.
                                        Notre équipe d'experts en design d'intérieur et en aménagement d'espace s'engage à créer 
                                        des solutions fonctionnelles et esthétiques qui transformeront votre maison en un espace 
                                        harmonieux où il fait bon vivre. Que vous souhaitiez optimiser un petit appartement, réaménager
                                        une pièce à vivre ou repenser entièrement votre intérieur, nous sommes à votre écoute pour concrétiser
                                        vos rêves.</div>
                                    <div class="about-text2">Nous proposons une approche personnalisée qui commence par une consultation approfondie 
                                        pour comprendre vos besoins, votre budget et vos aspirations. Notre savoir-faire s'étend à tous les aspects
                                        de l'aménagement intérieur : mobilier sur mesure, optimisation d'espace, conseils en décoration, solutions
                                        de rangement intelligentes et coordination des travaux.
                                        Faites confiance à notre expertise pour valoriser votre patrimoine et créer un environnement qui vous ressemble.
                                        Contactez-nous dès aujourd'hui pour un devis gratuit et découvrez comment nous pouvons transformer votre maison
                                        en un espace où chaque détail compte.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>


            </div>
        </div>
    @endsection

    @section('content')
                   <div class="content-home-center">
                <section id="section2" class="hometab box">
                    <div class="container">
                        <div class="tab-head">
                            <div class="hometab-heading box-heading">service d’aménagement maison professionnel</div>
                            <div id="categorytabs" class="htabs">
                                <ul class="etabs">
                                    <li class="tab"><a href="#categorytab-33" data-toggle="tab">Sombre</a></li>
                                    <li class="tab"><a href="#categorytab-25" data-toggle="tab">milieu </a></li>
                                    <li class="tab"><a href="#categorytab-31" data-toggle="tab">lumière</a></li>
                                   
                                </ul>
                            </div>
                        </div>

                        <div id="categorytab-31" class="tab-content">
                            <div class="box">
                                <div class="box-content">


                                    <div class="box-product  productbox-grid" id="tabcategory0-grid">

                                        <div class="product-items">
                                            <div class="product-block product-thumb">
                                                <div class="product-block-inner">
                                                    <div class="image">
                                                        <a
                                                            href="detail.html">
                                                            <img src="assets/image/amenagment_img/lumier 11.jpg"
                                                                title="Accusantium Doloremque"
                                                                alt="Accusantium Doloremque" class="img-responsive" />
                                                            <img class="img-responsive hover-image ramage"
                                                                src="assets/image/amenagment_img/pink.jpg"
                                                                title="Accusantium Doloremque"
                                                                alt="Accusantium Doloremque" />
                                                        </a>
                                                        <div class="rating">
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i><i
                                                                    class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i><i
                                                                    class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i><i
                                                                    class="fa fa-star-o fa-stack-2x"></i></span>
                                                              <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i><i
                                                                    class="fa fa-star-o fa-stack-2x"></i></span>       
                                                         <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i><i
                                                                    class="fa fa-star-o fa-stack-2x"></i></span>
                                                        </div>



                                                      

                                                    </div>

                                                    <div class="product-details">
                                                        <div class="caption">
                                                            <h4><a
                                                                    href="# "><br>
                                                                    SURFACE LAQUÉE MATE SUPRAMAT<br>3016


                                                                    
                                                                </a></h4>
                                                                



                                                      

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-items">
                                            <div class="product-block product-thumb">
                                                <div class="product-block-inner">
                                                    <div class="image">
                                                        <a
                                                            href="https://codezeel.com/opencart/OPC02/OPC020044/index.php?route=product/product&amp;product_id=43">
                                                            <img src="assets/image/amenagment_img/SUPRAMAT MAT.jpg"
                                                                title="Aliquam Quaerat"
                                                                 alt="Aliquam Quaerat"
                                                                class="img-responsive" />
                                                            <img class="img-responsive hover-image ramage"
                                                                src="assets/image/amenagment_img/gri2.jpg"
                                                                title="Aliquam Quaerat" alt="Aliquam Quaerat" />
                                                        </a>


                                                        <div class="rating">
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i><i
                                                                    class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i><i
                                                                    class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i><i
                                                                    class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i><i
                                                                    class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star-o fa-stack-2x"></i></span>

                                                               
                                                           
                                                        </div>

                                                    </div>

                                                    <div class="product-details">
                                                        <div class="caption">
                                                            <h4><a
                                                                    href="https://codezeel.com/opencart/OPC02/OPC020044/index.php?route=product/product&amp;product_id=43 ">Gris intemporel
                                                                    <br>SURFACE LAQUÉE MATE SUPRAMAT<br>3017


                                                                </a></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-items">
                                            <div class="product-block product-thumb">
                                                <div class="product-block-inner">
                                                    <div class="image">
                                                        <a
                                                            href="https://codezeel.com/opencart/OPC02/OPC020044/index.php?route=product/product&amp;product_id=35">
                                                            <img src="assets/image/amenagment_img/crimi.jpg"
                                                                title="Commodi Consequatur" alt="Commodi Consequatur"
                                                                class="img-responsive" />
                                                            <img class="img-responsive hover-image ramage"
                                                                src="assets/image/amenagment_img/crimi2.jpg"
                                                                title="Commodi Consequatur" alt="Commodi Consequatur" />
                                                        </a>


                                                        <div class="rating">
                                                            <span class="fa fa-stack"><i
                                                                class="fa fa-star fa-stack-2x"></i><i
                                                                class="fa fa-star-o fa-stack-2x"></i></span>
                                                        <span class="fa fa-stack"><i
                                                                class="fa fa-star fa-stack-2x"></i><i
                                                                class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                class="fa fa-star fa-stack-2x"></i><i
                                                                class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star-o fa-stack-2x"></i></span>
                                                        </div>

                                                    </div>

                                                    <div class="product-details">
                                                        <div class="caption">
                                                            <h4><a
                                                                    href="https://codezeel.com/opencart/OPC02/OPC020044/index.php?route=product/product&amp;product_id=35 ">Latté Crème<br>PANNEAU PET PREMIUM
                                                                    <br>3054


                                                                </a></h4>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-items">
                                            <div class="product-block product-thumb">
                                                <div class="product-block-inner">
                                                    <div class="image">
                                                        <a3017
                                                            href="https://codezeel.com/opencart/OPC02/OPC020044/index.php?route=product/product&amp;product_id=42">
                                                            <img src="  assets/image/amenagment_img/Macaron Green 1.jpg"
                                                                title="Consectetur Hampden" alt="Consectetur Hampden"
                                                                class="img-responsive" />
                                                            <img class="img-responsive hover-image ramage"
                                                                src="assets/image/amenagment_img/Macaron Green 2.jpg"
                                                                title="Consectetur Hampden" alt="Consectetur Hampden" />
                                                        </a3017>


                                                        <div class="rating">
                                                            <span class="fa fa-stack"><i
                                                                class="fa fa-star fa-stack-2x"></i><i
                                                                class="fa fa-star-o fa-stack-2x"></i></span>
                                                        <span class="fa fa-stack"><i
                                                                class="fa fa-star fa-stack-2x"></i><i
                                                                class="fa fa-star-o fa-stack-2x"></i></span>
                                                                 <span class="fa fa-stack"><i
                                                                  class="fa fa-star-o fa-stack-2x"></i></span>
                                                               <span class="fa fa-stack"><i
                                                                  class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                  class="fa fa-star-o fa-stack-2x"></i></span>
                                                        </div>

                                                    </div>

                                                    <div class="product-details">
                                                        <div class="caption">
                                                            <h4><a
                                                                    href="https://codezeel.com/opencart/OPC02/OPC020044/index.php?route=product/product&amp;product_id=42 "> Macarons Verts <br>
                                                                    SURFACE LAQUÉE MAT UPRAMAT<br>3015
                                                                     </a></h4>



                                                            <div class="button-group">
                                                                <button class="wishlist" type="button"
                                                                    data-toggle="tooltip" title="Add to Wish List "
                                                                    onclick="wishlist.add('42 ');">
                                                                    <i class="fa fa-heart"></i></button>
                                                                <div class="quickview-button" data-toggle="tooltip"
                                                                    title="Quick view"> <a class="quickbox"
                                                                        href="https://codezeel.com/opencart/OPC02/OPC020044/index.php?route=product/quick_view&amp;product_id=42">
                                                                        <i class="fa fa-eye" aria-hidden="true"></i></a>
                                                                </div>
                                                                <button class="compare" type="button"
                                                                    data-toggle="tooltip" title="Add to Compare "
                                                                    onclick="compare.add('42 ');">
                                                                    <i class="fa fa-exchange"></i></button>
                                                                <button type="button" data-toggle="tooltip"
                                                                    title="Add to Cart" class="addtocart"
                                                                    onclick="cart.add('42 ');"><span>Add to
                                                                        Cart</span></button>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-items">
                                            <div class="product-block product-thumb">
                                                <div class="product-block-inner">
                                                    <div class="image">
                                                        <a
                                                            href="https://codezeel.com/opencart/OPC02/OPC020044/index.php?route=product/product&amp;product_id=30">
                                                            <img src="assets/image/amenagment_img/Ice Grey1.jpg"
                                                                title="Exercitat Virginia" alt="Exercitat Virginia"
                                                                class="img-responsive" />
                                                            <img class="img-responsive hover-image ramage"
                                                                src="assets/image/amenagment_img/Ice Grey2.jpg"
                                                                title="Exercitat Virginia" alt="Exercitat Virginia" />
                                                        </a>


                                                        <div class="rating">
                                                            <span class="fa fa-stack"><i
                                                                class="fa fa-star fa-stack-2x"></i><i
                                                                class="fa fa-star-o fa-stack-2x"></i></span>
                                                               <span class="fa fa-stack"><i
                                                                    class="fa fa-star-o fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i
                                                                    class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star-o fa-stack-2x"></i></span>
                                                        </div>

                                                    </div>

                                                    <div class="product-details">
                                                        <div class="caption">
                                                            <h4><a
                                                                    href="https://codezeel.com/opencart/OPC02/OPC020044/index.php?route=product/product&amp;product_id=30 ">Elite Grey<br>SURFACE LAQUÉE MATE SUPRAMAT
                                                               <br>3021 </a></h4>



                                                            <div class="button-group">
                                                                <button class="wishlist" type="button"
                                                                    data-toggle="tooltip" title="Add to Wish List "
                                                                    onclick="wishlist.add('30 ');">
                                                                    <i class="fa fa-heart"></i></button>
                                                                <div class="quickview-button" data-toggle="tooltip"
                                                                    title="Quick view"> <a class="quickbox"
                                                                        href="https://codezeel.com/opencart/OPC02/OPC020044/index.php?route=product/quick_view&amp;product_id=30">
                                                                        <i class="fa fa-eye" aria-hidden="true"></i></a>
                                                                </div>
                                                                <button class="compare" type="button"
                                                                    data-toggle="tooltip" title="Add to Compare "
                                                                    onclick="compare.add('30 ');">
                                                                    <i class="fa fa-exchange"></i></button>
                                                                <button type="button" data-toggle="tooltip"
                                                                    title="Add to Cart" class="addtocart"
                                                                    onclick="cart.add('30 ');"><span>Add to
                                                                        Cart</span></button>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-items">
                                            <div class="product-block product-thumb">
                                                <div class="product-block-inner">
                                                    <div class="image">
                                                        <a
                                                            href="https://codezeel.com/opencart/OPC02/OPC020044/index.php?route=product/product&amp;product_id=29">
                                                            <img src="assets/image/amenagment_img/Dolphin Grey1.jpg"
                                                                title="Laborum Eveniet" alt="Laborum Eveniet"
                                                                class="img-responsive" />
                                                            <img class="img-responsive hover-image ramage"
                                                                src="assets/image/amenagment_img/gri2.jpg"
                                                                title="Laborum Eveniet" alt="Laborum Eveniet" />
                                                        </a>


                                                        <div class="rating">
                                                           <span class="fa fa-stack"><i
                                                                    class="fa fa-star-o fa-stack-2x"></i></span>
                                                             <span class="fa fa-stack"><i
                                                                    class="fa fa-star-o fa-stack-2x"></i></span>
                                                             <span class="fa fa-stack"><i
                                                                    class="fa fa-star-o fa-stack-2x"></i></span>
                                                             <span class="fa fa-stack"><i
                                                                    class="fa fa-star-o fa-stack-2x"></i></span>
                                                             <span class="fa fa-stack"><i
                                                                    class="fa fa-star-o fa-stack-2x"></i></span>        
                                                        </div>

                                                    </div>

                                                    <div class="product-details">
                                                        <div class="caption">
                                                            <h4><a
                                                                    href="https://codezeel.com/opencart/OPC02/OPC020044/index.php?route=product/product&amp;product_id=29 ">Gris Dauphin<br>SURFACE LAQUÉE MATE SUPRAMAT<br> 3023
                                                                    </a></h4>
                                                           
                                                            <div class="button-group">
                                                                <button class="wishlist" type="button"
                                                                    data-toggle="tooltip" title="Add to Wish List "
                                                                    onclick="wishlist.add('29 ');">
                                                                    <i class="fa fa-heart"></i></button>
                                                                <div class="quickview-button" data-toggle="tooltip"
                                                                    title="Quick view"> <a class="quickbox"
                                                                        href="https://codezeel.com/opencart/OPC02/OPC020044/index.php?route=product/quick_view&amp;product_id=29">
                                                                        <i class="fa fa-eye" aria-hidden="true"></i></a>
                                                                </div>
                                                                <button class="compare" type="button"
                                                                    data-toggle="tooltip" title="Add to Compare "
                                                                    onclick="compare.add('29 ');">
                                                                    <i class="fa fa-exchange"></i></button>
                                                                <button type="button" data-toggle="tooltip"
                                                                    title="Add to Cart" class="addtocart"
                                                                    onclick="cart.add('29 ');"><span>Add to
                                                                        Cart</span></button>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                             

                            <span class="tabcategory0_default_width" style="display:none; visibility:hidden"></span>


                        </div> 
                        <div id="categorytab-25" class="tab-content">
                            <div class="box">
                                <div class="box-content"> 
                                    <div class="box-product  productbox-grid" id="tabcategory1-grid">

                                        <div class="product-items">
                                            <div class="product-block product-thumb">
                                                <div class="product-block-inner">
                                                    <div class="image">
                                                        <a
                                                            href="https://codezeel.com/opencart/OPC02/OPC020044/index.php?route=product/product&amp;product_id=35">
                                                            <img src="assets/image/amenagment_img/Pebble Grey1.jpg"
                                                                title="Commodi Consequatur" alt="Commodi Consequatur"
                                                                class="img-responsive" />
                                                            <img class="img-responsive hover-image ramage"
                                                                src="assets/image/amenagment_img/Pebble Grey2.jpg"
                                                                title="Commodi Consequatur" alt="Commodi Consequatur" />
                                                        </a>


                                                        <div class="rating">
                                                            <span class="fa fa-stack"><i
                                                                class="fa fa-star fa-stack-2x"></i><i
                                                                class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                class="fa fa-star fa-stack-2x"></i><i
                                                                class="fa fa-star-o fa-stack-2x"></i></span>
                                                           <span class="fa fa-stack"><i
                                                                 class="fa fa-star fa-stack-2x"></i><i
                                                                 class="fa fa-star-o fa-stack-2x"></i></span>
                                                           <span class="fa fa-stack"><i
                                                                class="fa fa-star fa-stack-2x"></i><i
                                                                class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                class="fa fa-star fa-stack-2x"></i><i
                                                                class="fa fa-star-o fa-stack-2x"></i></span>
                                                        </div>

                                                    </div>

                                                    <div class="product-details">
                                                        <div class="caption">
                                                            <h4><a
                                                                    href="https://codezeel.com/opencart/OPC02/OPC020044/index.php?route=product/product&amp;product_id=35 ">Gris galet<br>SURFACE LAQUÉE MATE SUPRAMAT
                                                                          <br>3024 </a></h4>



                                                            <div class="button-group">
                                                                <button class="wishlist" type="button"
                                                                    data-toggle="tooltip" title="Add to Wish List "
                                                                    onclick="wishlist.add('35 ');">
                                                                    <i class="fa fa-heart"></i></button>
                                                                <div class="quickview-button" data-toggle="tooltip"
                                                                    title="Quick view"> <a class="quickbox"
                                                                        href="https://codezeel.com/opencart/OPC02/OPC020044/index.php?route=product/quick_view&amp;product_id=35">
                                                                        <i class="fa fa-eye" aria-hidden="true"></i></a>
                                                                </div>
                                                                <button class="compare" type="button"
                                                                    data-toggle="tooltip" title="Add to Compare "
                                                                    onclick="compare.add('35 ');">
                                                                    <i class="fa fa-exchange"></i></button>
                                                                <button type="button" data-toggle="tooltip"
                                                                    title="Add to Cart" class="addtocart"
                                                                    onclick="cart.add('35 ');"><span>Add to
                                                                        Cart</span></button>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-items">
                                            <div class="product-block product-thumb">
                                                <div class="product-block-inner">
                                                    <div class="image">
                                                        <a
                                                            href="https://codezeel.com/opencart/OPC02/OPC020044/index.php?route=product/product&amp;product_id=42">
                                                            <img src="assets/image/amenagment_img/Linden.jpg"
                                                                title="Consectetur Hampden" alt="Consectetur Hampden"
                                                                class="img-responsive" />
                                                            <img class="img-responsive hover-image ramage"
                                                                src="assets/image/amenagment_img/5azi2.jpg"
                                                                title="Consectetur Hampden" alt="Consectetur Hampden" />
                                                        </a>


                                                        <div class="rating">
                                                            <span class="fa fa-stack"><i
                                                                class="fa fa-star fa-stack-2x"></i><i
                                                                class="fa fa-star-o fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i><i
                                                                    class="fa fa-star-o fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i
                                                                        class="fa fa-star fa-stack-2x"></i><i
                                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                                                        <span class="fa fa-stack"><i
                                                                            class="fa fa-star fa-stack-2x"></i><i
                                                                            class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star-o fa-stack-2x"></i></span>
                                                        </div>

                                                    </div>

                                                    <div class="product-details">
                                                        <div class="caption">
                                                            <h4><a
                                                                    href="https://codezeel.com/opencart/OPC02/OPC020044/index.php?route=product/product&amp;product_id=42 ">Tilleul <br>SURFACE LAQUÉE MATE SUPRAMAT
                                                                     <br>  3093

                                                                    </a></h4>



                                                    
                                                            <div class="button-group">
                                                                <button class="wishlist" type="button"
                                                                    data-toggle="tooltip" title="Add to Wish List "
                                                                    onclick="wishlist.add('42 ');">
                                                                    <i class="fa fa-heart"></i></button>
                                                                <div class="quickview-button" data-toggle="tooltip"
                                                                    title="Quick view"> <a class="quickbox"
                                                                        href="https://codezeel.com/opencart/OPC02/OPC020044/index.php?route=product/quick_view&amp;product_id=42">
                                                                        <i class="fa fa-eye" aria-hidden="true"></i></a>
                                                                </div>
                                                                <button class="compare" type="button"
                                                                    data-toggle="tooltip" title="Add to Compare "
                                                                    onclick="compare.add('42 ');">
                                                                    <i class="fa fa-exchange"></i></button>
                                                                <button type="button" data-toggle="tooltip"
                                                                    title="Add to Cart" class="addtocart"
                                                                    onclick="cart.add('42 ');"><span>Add to
                                                                        Cart</span></button>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-items">
                                            <div class="product-block product-thumb">
                                                <div class="product-block-inner">
                                                    <div class="image">
                                                        <a
                                                            href="https://codezeel.com/opencart/OPC02/OPC020044/index.php?route=product/product&amp;product_id=30">
                                                            <img src="{{ asset('assets/image/amenagment_img/Leaf Green1.jpg') }}"
                                                                title="Exercitat Virginia" alt="Exercitat Virginia"
                                                                class="img-responsive" />
                                                            <img class="img-responsive hover-image ramage"
                                                                src="assets/image/amenagment_img/Leaf Green2.jpg"
                                                                title="Exercitat Virginia" alt="Exercitat Virginia" />
                                                        </a>


                                                        <div class="rating">
                                                            <span class="fa fa-stack"><i
                                                                class="fa fa-star fa-stack-2x"></i><i
                                                                class="fa fa-star-o fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i><i
                                                                    class="fa fa-star-o fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i
                                                                        class="fa fa-star fa-stack-2x"></i><i
                                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star-o fa-stack-2x"></i></span>
                                                        </div>

                                                    </div>

                                                    <div class="product-details">
                                                        <div class="caption">
                                                            <h4><a
                                                                    href="https://codezeel.com/opencart/OPC02/OPC020044/index.php?route=product/product&amp;product_id=30 ">Vert feuille<br>3P PREMIUM PET PANEL
                                                                    <br>3050
                                                                     </a></h4>



                                                         
                                                            <div class="button-group">
                                                                <button class="wishlist" type="button"
                                                                    data-toggle="tooltip" title="Add to Wish List "
                                                                    onclick="wishlist.add('30 ');">
                                                                    <i class="fa fa-heart"></i></button>
                                                                <div class="quickview-button" data-toggle="tooltip"
                                                                    title="Quick view"> <a class="quickbox"
                                                                        href="https://codezeel.com/opencart/OPC02/OPC020044/index.php?route=product/quick_view&amp;product_id=30">
                                                                        <i class="fa fa-eye" aria-hidden="true"></i></a>
                                                                </div>
                                                                <button class="compare" type="button"
                                                                    data-toggle="tooltip" title="Add to Compare "
                                                                    onclick="compare.add('30 ');">
                                                                    <i class="fa fa-exchange"></i></button>
                                                                <button type="button" data-toggle="tooltip"
                                                                    title="Add to Cart" class="addtocart"
                                                                    onclick="cart.add('30 ');"><span>Add to
                                                                        Cart</span></button>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-items">
                                            <div class="product-block product-thumb">
                                                <div class="product-block-inner">
                                                    <div class="image">
                                                        <a
                                                            href="https://codezeel.com/opencart/OPC02/OPC020044/index.php?route=product/product&amp;product_id=29">
                                                            <img src="assets/image/amenagment_img/Toledo Light Wood1.jpg"
                                                                title="Laborum Eveniet" alt="Laborum Eveniet"
                                                                class="img-responsive" />
                                                            <img class="img-responsive hover-image ramage"
                                                                src="assets/image/amenagment_img/Toledo Light Wood2.jpg"
                                                                title="Laborum Eveniet" alt="Laborum Eveniet" />
                                                        </a>


                                                        <div class="rating">
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i><i
                                                                    class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i><i
                                                                    class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star-o fa-stack-2x"></i></span>
                                                        </div>

                                                    </div>

                                                    <div class="product-details">
                                                        <div class="caption">
                                                            <h4><a
                                                                    href="https://codezeel.com/opencart/OPC02/OPC020044/index.php?route=product/product&amp;product_id=29 ">Bois clair de Tolède<br>
                                                                    MIX AND MATCH TENDANCE<br>388
                                                                    </a></h4>



                                                    
                                                            <div class="button-group">
                                                                <button class="wishlist" type="button"
                                                                    data-toggle="tooltip" title="Add to Wish List "
                                                                    onclick="wishlist.add('29 ');">
                                                                    <i class="fa fa-heart"></i></button>
                                                                <div class="quickview-button" data-toggle="tooltip"
                                                                    title="Quick view"> <a class="quickbox"
                                                                        href="https://codezeel.com/opencart/OPC02/OPC020044/index.php?route=product/quick_view&amp;product_id=29">
                                                                        <i class="fa fa-eye" aria-hidden="true"></i></a>
                                                                </div>
                                                                <button class="compare" type="button"
                                                                    data-toggle="tooltip" title="Add to Compare "
                                                                    onclick="compare.add('29 ');">
                                                                    <i class="fa fa-exchange"></i></button>
                                                                <button type="button" data-toggle="tooltip"
                                                                    title="Add to Cart" class="addtocart"
                                                                    onclick="cart.add('29 ');"><span>Add to
                                                                        Cart</span></button>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-items">
                                            <div class="product-block product-thumb">
                                                <div class="product-block-inner">
                                                    <div class="image">
                                                        <a
                                                            href="https://codezeel.com/opencart/OPC02/OPC020044/index.php?route=product/product&amp;product_id=31">
                                                            <img src="assets/image/amenagment_img/Soft Touch Clay1.jpg"
                                                                title="Laudant Doloremque" alt="Laudant Doloremque"
                                                                class="img-responsive" />
                                                            <img class="img-responsive hover-image ramage"
                                                                src="assets/image/amenagment_img/Soft Touch Clay2.jpg"
                                                                title="Laudant Doloremque" alt="Laudant Doloremque" />
                                                        </a>

                                                        <span class="saleicon sale">PROMO</span>
                                                        <div class="rating">
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i><i
                                                                    class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i><i
                                                                    class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i><i
                                                                    class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i><i
                                                                    class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i><i
                                                                    class="fa fa-star-o fa-stack-2x"></i></span>
                                                        </div>

                                                    </div>

                                                    <div class="product-details">
                                                        <div class="caption">
                                                            <h4><a
                                                                    href="https://codezeel.com/opencart/OPC02/OPC020044/index.php?route=product/product&amp;product_id=31 ">Argile douce au toucher<br>MIX AND MATCH TENDANCE

                                                                    <br>738
                                                                     </a></h4>



                                                          
                                                            <div class="button-group">
                                                                <button class="wishlist" type="button"
                                                                    data-toggle="tooltip" title="Add to Wish List "
                                                                    onclick="wishlist.add('31 ');">
                                                                    <i class="fa fa-heart"></i></button>
                                                                <div class="quickview-button" data-toggle="tooltip"
                                                                    title="Quick view"> <a class="quickbox"
                                                                        href="https://codezeel.com/opencart/OPC02/OPC020044/index.php?route=product/quick_view&amp;product_id=31">
                                                                        <i class="fa fa-eye" aria-hidden="true"></i></a>
                                                                </div>
                                                                <button class="compare" type="button"
                                                                    data-toggle="tooltip" title="Add to Compare "
                                                                    onclick="compare.add('31 ');">
                                                                    <i class="fa fa-exchange"></i></button>
                                                                <button type="button" data-toggle="tooltip"
                                                                    title="Add to Cart" class="addtocart"
                                                                    onclick="cart.add('31 ');"><span>Add to
                                                                        Cart</span></button>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-items">
                                            <div class="product-block product-thumb">
                                                <div class="product-block-inner">
                                                    <div class="image">
                                                        <a
                                                            href="https://codezeel.com/opencart/OPC02/OPC020044/index.php?route=product/product&amp;product_id=36">
                                                            <img src="assets/image/amenagment_img/HG Galaxy Honey Mis1.jpg"
                                                                title="Necessitatibus" alt="Necessitatibus"
                                                                class="img-responsive" />
                                                            <img class="img-responsive hover-image ramage"
                                                                src="assets/image/amenagment_img/HG Galaxy Honey Mis2.jpg"
                                                                title="Necessitatibus" alt="Necessitatibus" />
                                                        </a>


                                                        <div class="rating">
                                                            <span class="fa fa-stack"><i
                                                                class="fa fa-star-o fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i
                                                                    class="fa fa-star-o fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i
                                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                                                        <span class="fa fa-stack"><i
                                                                            class="fa fa-star-o fa-stack-2x"></i></span>
                                                                             <span class="fa fa-stack"><i
                                                                    class="fa fa-star-o fa-stack-2x"></i></span>  
                                                        </div>  

                                                    </div>

                                                    <div class="product-details">
                                                        <div class="caption">
                                                            <h4><a
                                                                    href="https://codezeel.com/opencart/OPC02/OPC020044/index.php?route=product/product&amp;product_id=36 ">HG Galaxy Honey Mist<br>
                                                                    HG Galaxy Honey Mist<br>640
                                                                </a></h4>



                                                          
                                                            <div class="button-group">
                                                                <button class="wishlist" type="button"
                                                                    data-toggle="tooltip" title="Add to Wish List "
                                                                    onclick="wishlist.add('36 ');">
                                                                    <i class="fa fa-heart"></i></button>
                                                                <div class="quickview-button" data-toggle="tooltip"
                                                                    title="Quick view"> <a class="quickbox"
                                                                        href="https://codezeel.com/opencart/OPC02/OPC020044/index.php?route=product/quick_view&amp;product_id=36">
                                                                        <i class="fa fa-eye" aria-hidden="true"></i></a>
                                                                </div>
                                                                <button class="compare" type="button"
                                                                    data-toggle="tooltip" title="Add to Compare "
                                                                    onclick="compare.add('36 ');">
                                                                    <i class="fa fa-exchange"></i></button>
                                                                <button type="button" data-toggle="tooltip"
                                                                    title="Add to Cart" class="addtocart"
                                                                    onclick="cart.add('36 ');"><span>Add to
                                                                        Cart</span></button>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                           

                            <span class="tabcategory1_default_width" style="display:none; visibility:hidden"></span>


                        </div>
                        <div id="categorytab-33" class="tab-content">
                            <div class="box">
                                <div class="box-content">


                                    <div class="box-product  productbox-grid" id="tabcategory2-grid">

                                        <div class="product-items">
                                            <div class="product-block product-thumb">
                                                <div class="product-block-inner">
                                                    <div class="image">
                                                        <a
                                                            href="https://codezeel.com/opencart/OPC02/OPC020044/index.php?route=product/product&amp;product_id=43">
                                                            <img src="assets/image/amenagment_img/Bois de Sienne doux au toucher1.jpg"
                                                                title="Aliquam Quaerat" alt="Aliquam Quaerat"
                                                                class="img-responsive" />
                                                            <img class="img-responsive hover-image ramage"
                                                                src="assets/image/amenagment_img/Bois de Sienne doux au toucher2.jpg"
                                                                title="Aliquam Quaerat" alt="Aliquam Quaerat" />
                                                        </a>


                                                        <div class="rating">
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i><i
                                                                    class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i><i
                                                                    class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i><i
                                                                    class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i><i
                                                                    class="fa fa-star-o fa-stack-2x"></i></span>
                                                             <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i><i
                                                                    class="fa fa-star-o fa-stack-2x"></i></span>        
                                                        
                                                        </div>

                                                    </div>

                                                    <div class="product-details">
                                                        <div class="caption">
                                                            <h4><a
                                                                    href="https://codezeel.com/opencart/OPC02/OPC020044/index.php?route=product/product&amp;product_id=43 ">Chêne babylonien <br>
                                                                    MIX AND MATCH TENDANCE<br>373
                                                                     </a></h4>



                                                        
                                                            <div class="button-group">
                                                                <button class="wishlist" type="button"
                                                                    data-toggle="tooltip" title="Add to Wish List "
                                                                    onclick="wishlist.add('43 ');">
                                                                    <i class="fa fa-heart"></i></button>  
                                                                <div class="quickview-button" data-toggle="tooltip"
                                                                    title="Quick view"> <a class="quickbox"
                                                                        href="https://codezeel.com/opencart/OPC02/OPC020044/index.php?route=product/quick_view&amp;product_id=43">
                                                                        <i class="fa fa-eye" aria-hidden="true"></i></a>
                                                                </div>
                                                                <button class="compare" type="button"
                                                                    data-toggle="tooltip" title="Add to Compare "
                                                                    onclick="compare.add('43 ');">
                                                                    <i class="fa fa-exchange"></i></button>
                                                                <button type="button" data-toggle="tooltip"
                                                                    title="Add to Cart" class="addtocart"
                                                                    onclick="cart.add('43 ');"><span>Add to
                                                                        Cart</span></button>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-items">
                                            <div class="product-block product-thumb">
                                                <div class="product-block-inner">
                                                    <div class="image">
                                                        <a
                                                            href="https://codezeel.com/opencart/OPC02/OPC020044/index.php?route=product/product&amp;product_id=35">
                                                            <img src="assets/image/amenagment_img/Anthracite métallisé HG1.jpg"
                                                                title="Commodi Consequatur" alt="Commodi Consequatur"
                                                                class="img-responsive" />
                                                            <img class="img-responsive hover-image ramage"
                                                                src="assets/image/amenagment_img/Anthracite métallisé HG2.jpg"
                                                                title="Commodi Consequatur" alt="Commodi Consequatur" />
                                                        </a>


                                                        <div class="rating">
                                                            <span class="fa fa-stack"><i
                                                                class="fa fa-star fa-stack-2x"></i><i
                                                                class="fa fa-star-o fa-stack-2x"></i></span>
                                                        <span class="fa fa-stack"><i
                                                                class="fa fa-star fa-stack-2x"></i><i
                                                                class="fa fa-star-o fa-stack-2x"></i></span>
                                                        <span class="fa fa-stack"><i
                                                                class="fa fa-star fa-stack-2x"></i><i
                                                                class="fa fa-star-o fa-stack-2x"></i></span>
                                                        <span class="fa fa-stack"><i
                                                                class="fa fa-star fa-stack-2x"></i><i
                                                                class="fa fa-star-o fa-stack-2x"></i></span>
                                          
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star-o fa-stack-2x"></i></span>
                                                        </div>

                                                    </div>

                                                    <div class="product-details">
                                                        <div class="caption">
                                                            <h4><a
                                                                    href="https://codezeel.com/opencart/OPC02/OPC020044/index.php?route=product/product&amp;product_id=35 ">Anthracite métallisé<br>
                                                                    MIX AND MATCH TENDANCE <br>608


                                                                   </a></h4>



                                                            <div class="button-group">
                                                                <button class="wishlist" type="button"
                                                                    data-toggle="tooltip" title="Add to Wish List "
                                                                    onclick="wishlist.add('35 ');">
                                                                    <i class="fa fa-heart"></i></button>
                                                                <div class="quickview-button" data-toggle="tooltip"
                                                                    title="Quick view"> <a class="quickbox"
                                                                        href="https://codezeel.com/opencart/OPC02/OPC020044/index.php?route=product/quick_view&amp;product_id=35">
                                                                        <i class="fa fa-eye" aria-hidden="true"></i></a>
                                                                </div>
                                                                <button class="compare" type="button"
                                                                    data-toggle="tooltip" title="Add to Compare "
                                                                    onclick="compare.add('35 ');">
                                                                    <i class="fa fa-exchange"></i></button>
                                                                <button type="button" data-toggle="tooltip"
                                                                    title="Add to Cart" class="addtocart"
                                                                    onclick="cart.add('35 ');"><span>Add to
                                                                        Cart</span></button>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-items">
                                            <div class="product-block product-thumb">
                                                <div class="product-block-inner">
                                                    <div class="image">
                                                        <a
                                                            href="https://codezeel.com/opencart/OPC02/OPC020044/index.php?route=product/product&amp;product_id=30">
                                                            <img src="assets/image/amenagment_img/Cachemire mat doré1.jpg"
                                                                title="Exercitat Virginia" alt="Exercitat Virginia"
                                                                class="img-responsive" />
                                                            <img class="img-responsive hover-image ramage"
                                                                src="assets/image/amenagment_img/Cachemire mat doré2.jpg"
                                                                title="Exercitat Virginia" alt="Exercitat Virginia" />
                                                        </a>


                                                        <div class="rating">
                                                            <span class="fa fa-stack"><i
                                                                class="fa fa-star fa-stack-2x"></i><i
                                                                class="fa fa-star-o fa-stack-2x"></i></span>
                                                        <span class="fa fa-stack"><i
                                                                class="fa fa-star fa-stack-2x"></i><i
                                                                class="fa fa-star-o fa-stack-2x"></i></span>
                                                        <span class="fa fa-stack"><i
                                                                class="fa fa-star fa-stack-2x"></i><i
                                                                class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star-o fa-stack-2x"></i></span>
                                                        </div>

                                                    </div>

                                                    <div class="product-details">
                                                        <div class="caption">
                                                            <h4><a
                                                                    href="https://codezeel.com/opencart/OPC02/OPC020044/index.php?route=product/product&amp;product_id=30 ">Cachemire mat doré<br>
                                                                    MIX AND MATCH TENDANCE<br>384
                                                                     </a></h4>



                                                            <div class="button-group">
                                                                <button class="wishlist" type="button"
                                                                    data-toggle="tooltip" title="Add to Wish List "
                                                                    onclick="wishlist.add('30 ');">
                                                                    <i class="fa fa-heart"></i></button>
                                                                <div class="quickview-button" data-toggle="tooltip"
                                                                    title="Quick view"> <a class="quickbox"
                                                                        href="https://codezeel.com/opencart/OPC02/OPC020044/index.php?route=product/quick_view&amp;product_id=30">
                                                                        <i class="fa fa-eye" aria-hidden="true"></i></a>
                                                                </div>
                                                                <button class="compare" type="button"
                                                                    data-toggle="tooltip" title="Add to Compare "
                                                                    onclick="compare.add('30 ');">
                                                                    <i class="fa fa-exchange"></i></button>
                                                                <button type="button" data-toggle="tooltip"
                                                                    title="Add to Cart" class="addtocart"
                                                                    onclick="cart.add('30 ');"><span>Add to
                                                                        Cart</span></button>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-items">
                                            <div class="product-block product-thumb">
                                                <div class="product-block-inner">
                                                    <div class="image">
                                                        <a
                                                            href="https://codezeel.com/opencart/OPC02/OPC020044/index.php?route=product/product&amp;product_id=29">
                                                            <img src="assets/image/amenagment_img/Bois foncé de Tolède1.jpg"
                                                                title="Laborum Eveniet" alt="Laborum Eveniet"
                                                                class="img-responsive" />
                                                            <img class="img-responsive hover-image ramage"
                                                                src="assets/image/amenagment_img/Bois foncé de Tolède2.jpg"
                                                                title="Laborum Eveniet" alt="Laborum Eveniet" />
                                                        </a>


                                                        <div class="rating">
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i><i
                                                                    class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i><i
                                                                    class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star-o fa-stack-2x"></i></span>
                                                        </div>

                                                    </div>

                                                    <div class="product-details">
                                                        <div class="caption">
                                                            <h4><a
                                                                    href="https://codezeel.com/opencart/OPC02/OPC020044/index.php?route=product/product&amp;product_id=29 ">Bois foncé de Tolède<br>MIX AND MATCH TENDANCE
                                                                    <br>389
                                                                    </a></h4>



                                                           
                                                            <div class="button-group">
                                                                <button class="wishlist" type="button"
                                                                    data-toggle="tooltip" title="Add to Wish List "
                                                                    onclick="wishlist.add('29 ');">
                                                                    <i class="fa fa-heart"></i></button>
                                                                <div class="quickview-button" data-toggle="tooltip"
                                                                    title="Quick view"> <a class="quickbox"
                                                                        href="https://codezeel.com/opencart/OPC02/OPC020044/index.php?route=product/quick_view&amp;product_id=29">
                                                                        <i class="fa fa-eye" aria-hidden="true"></i></a>
                                                                </div>
                                                                <button class="compare" type="button"
                                                                    data-toggle="tooltip" title="Add to Compare "
                                                                    onclick="compare.add('29 ');">
                                                                    <i class="fa fa-exchange"></i></button>
                                                                <button type="button" data-toggle="tooltip"
                                                                    title="Add to Cart" class="addtocart"
                                                                    onclick="cart.add('29 ');"><span>Add to
                                                                        Cart</span></button>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-items">
                                            <div class="product-block product-thumb">
                                                <div class="product-block-inner">
                                                    <div class="image">
                                                        <a
                                                            href="https://codezeel.com/opencart/OPC02/OPC020044/index.php?route=product/product&amp;product_id=31">
                                                            <img src="assets/image/amenagment_img/Royal Grey 1.jpg"
                                                                title="Laudant Doloremque" alt="Laudant Doloremque"
                                                                class="img-responsive" />
                                                            <img class="img-responsive hover-image ramage"
                                                                src="assets/image/amenagment_img/Royal Grey 2.jpg"
                                                                title="Laudant Doloremque" alt="Laudant Doloremque" />
                                                        </a>

                                                        <span class="saleicon sale">PROMO</span>
                                                        <div class="rating">
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i><i
                                                                    class="fa fa-star-o fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i
                                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i
                                                                         class="fa fa-star-o fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i
                                                                          class="fa fa-star-o fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i
                                                                          class="fa fa-star-o fa-stack-2x"></i></span>
                                                        </div>

                                                    </div>

                                                    <div class="product-details">
                                                        <div class="caption">
                                                            <h4><a
                                                                    href="https://codezeel.com/opencart/OPC02/OPC020044/index.php?route=product/product&amp;product_id=31 ">Royal Grey <br>SURFACE LAQUÉE MATE SUPRAMAT 
                                                                <br>3022</a></h4>



                                                        
                                                            <div class="button-group">
                                                                <button class="wishlist" type="button"
                                                                    data-toggle="tooltip" title="Add to Wish List "
                                                                    onclick="wishlist.add('31 ');">
                                                                    <i class="fa fa-heart"></i></button>
                                                                <div class="quickview-button" data-toggle="tooltip"
                                                                    title="Quick view"> <a class="quickbox"
                                                                        href="https://codezeel.com/opencart/OPC02/OPC020044/index.php?route=product/quick_view&amp;product_id=31">
                                                                        <i class="fa fa-eye" aria-hidden="true"></i></a>
                                                                </div>
                                                                <button class="compare" type="button"
                                                                    data-toggle="tooltip" title="Add to Compare "
                                                                    onclick="compare.add('31 ');">
                                                                    <i class="fa fa-exchange"></i></button>
                                                                <button type="button" data-toggle="tooltip"
                                                                    title="Add to Cart" class="addtocart"
                                                                    onclick="cart.add('31 ');"><span>Add to
                                                                        Cart</span></button>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-items">
                                            <div class="product-block product-thumb">
                                                <div class="product-block-inner">
                                                    <div class="image">
                                                        <a
                                                            href="https://codezeel.com/opencart/OPC02/OPC020044/index.php?route=product/product&amp;product_id=36">
                                                            <img src="assets/image/amenagment_img/London Blue1.jpg"
                                                                title="Necessitatibus" alt="Necessitatibus"
                                                                class="img-responsive" />
                                                            <img class="img-responsive hover-image ramage"
                                                                src="assets/image/amenagment_img/London Blue2.jpg"
                                                                title="Necessitatibus" alt="Necessitatibus" />
                                                        </a>


                                                        <div class="rating">
                                                            <span class="fa fa-stack"><i
                                                                class="fa fa-star-o fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i
                                                                    class="fa fa-star-o fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i
                                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                                                        <span class="fa fa-stack"><i
                                                                            class="fa fa-star-o fa-stack-2x"></i></span>
                                                                            <span class="fa fa-stack"><i
                                                                                class="fa fa-star-o fa-stack-2x"></i></span>
                                                        </div>

                                                    </div>

                                                    <div class="product-details">
                                                        <div class="caption">
                                                            <h4><a
                                                                    href="https://codezeel.com/opencart/OPC02/OPC020044/index.php?route=product/product&amp;product_id=36 ">London Blue<br>
                                                                    SURFACE LAQUÉE MATE SUPRAMAT<br>3011
                                                                </a></h4>



                                                           
                                                            <div class="button-group">
                                                                <button class="wishlist" type="button"
                                                                    data-toggle="tooltip" title="Add to Wish List "
                                                                    onclick="wishlist.add('36 ');">
                                                                    <i class="fa fa-heart"></i></button>
                                                                <div class="quickview-button" data-toggle="tooltip"
                                                                    title="Quick view"> <a class="quickbox"
                                                                        href="https://codezeel.com/opencart/OPC02/OPC020044/index.php?route=product/quick_view&amp;product_id=36">
                                                                        <i class="fa fa-eye" aria-hidden="true"></i></a>
                                                                </div>
                                                                <button class="compare" type="button"
                                                                    data-toggle="tooltip" title="Add to Compare "
                                                                    onclick="compare.add('36 ');">
                                                                    <i class="fa fa-exchange"></i></button>
                                                                <button type="button" data-toggle="tooltip"
                                                                    title="Add to Cart" class="addtocart"
                                                                    onclick="cart.add('36 ');"><span>Add to
                                                                        Cart</span></button>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <span class="tabcategory2_default_width" style="display:none; visibility:hidden"></span>


                        </div>
                     
                    </div>
                </section>

                <script type="text/javascript">
                    $('#categorytabs a').tabs();
                </script>


<!-- --------------patre salle de bain -------------------------------- -->

                <section id="section21" class="hometab box">
                    <div class="container">
                        <div class="tab-head">
                            
                            <div class="hometab-heading box-heading">Optimisation Intérieur</div>
                             
                        </div>

                        <div class="box">
                            <div class="box-content">


                                <div class="box-product  productbox-grid" id="tabcategory0-grid">
                                    @foreach($services_inter as $service)  
                                    <!-- @dump($service->id) -->
                                        <div class="product-items">
                                            <div class="product-block product-thumb">
                                                <div class="product-block-inner">
                                                    <div class="image">
                                                        <a
                                                            href="#">
                                                            <img src="{{ asset(optional($service->color)->image) }}"
                                                                title="Accusantium Doloremque"
                                                                alt="Accusantium Doloremque" class="img-responsive" />
                                                            <img class="img-responsive hover-image ramage"
                                                                src="{{ asset($service->emage) }}" 
                                                                title="Accusantium Doloremque"
                                                                alt="Accusantium Doloremque" />
                                                        </a>
                                                        <div class="rating">
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i><i
                                                                    class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i><i
                                                                    class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i><i
                                                                    class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i><i
                                                                    class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i><i
                                                                    class="fa fa-star-o fa-stack-2x"></i></span>
                                                    
                                                        </div>

                                                    </div>

                                                    <div class="product-details">
                                                        <div class="caption">
                                                            <h4><a
                                                                    href="# ">{{optional($service->color)->libelle}}<br>
                                                                    {{$service->libelle}}<br>{{$service->reference}}


                                                                    
                                                                </a></h4> 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> 
                                    @endforeach 
                                </div>
                            </div>
                        </div>
                      
                         
                    </div>
                </section>

                <script type="text/javascript">
                    $('#categorytabs2 a').tabs();
                </script>
<!-- ---------------------------------------------- -->
                <section id="section3">
                    <div id="czbannercmsblock" class="block czbanners">
                        <div class="czbanner_container container">
                            <div class="cmsbanners">
                                <div class="one-half cmsbanner-part1">
                                    <div class="cmsbanner-inner">
                                        <div class="cmsbanner cmsbanner1">
                                            <video class="banner-video1" controls style="width:100%;height:500;">
                                                <source src="{{ asset('assets/image/amenagment_img/video_deco.mp4') }}" type="video/mp4">
                                                Your browser does not support the video tag.
                                            </video>
                                        </div>
                                    </div>
                                </div>
                                <div class="one-half cmsbanner-part2">
                                    <div class="cmsbanner-inner">
                                        <div class="cmsbanner cmsbanner2">
                                            <a href="#" class="banner-anchor">
                                                <img src="assets/image/amenagment_img/photo_2.jpg" alt="cms-banner2" class="banner-image2" style="width:100%;height:500;">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>   </div>
                    </div>
                  
                </section>
                

                <script type="text/javascript">


                    $(document).ready(function () {
                        $('#featured-carousel').owlCarousel({
                            items: 2,
                            singleItem: false,
                            navigation: false,
                            pagination: false,
                            itemsDesktop: [1199, 2],
                            itemsDesktopSmall: [991, 2],
                            itemsTablet: [575, 1],
                            itemsMobile: [319, 1]
                        });
                        // Custom Navigation Events
                        $(".czfeature_next").click(function () {
                            $('#featured-carousel').trigger('owl.next');
                        })
                        $(".czfeature_prev").click(function () {
                            $('#featured-carousel').trigger('owl.prev');
                        });
                    });	
                </script>

                <section id="section4">
                    <div class="feature-image">
                        <a href="#" class="feature-anchor"><img src="assets/image/catalog/feature-banner.jpg"
                                alt="feature-banner"></a>
                    </div>
                </section>

            </div>

            <div class="content-home-bottom">
                <section id="section5" class="box special">
                    <div class="container">
                        <div class="box-heading">Bon Plan</div>
                        </div>
                        <div class="box-content">
                            <div class="customNavigation">
                                <a class="fa prev fa-arrow-left">&nbsp;</a>
                                <a class="fa next fa-arrow-right">&nbsp;</a>
                            </div>

                            <div class="box-product product-carousel" id="special-carousel">
                                <div class="slider-item">
                                    <div class="product-block product-thumb transition">
                                        <div class="product-block-inner">
                                            <div class="image">
                                                <a
                                                    href="https://codezeel.com/opencart/OPC02/OPC020044/index.php?route=product/product&amp;product_id=31">
                                                    <img src="assets\image\amenagment_img\salle_de_bain.jpg"
                                                        title="Laudant Doloremque" alt="Laudant Doloremque"
                                                        class="img-responsive reg-image" />
                                                    <img class="img-responsive hover-image"
                                                        src="assets/image/cache/catalog/13-954x800.jpg"
                                                        title="Laudant Doloremque" alt="Laudant Doloremque" />
                                                </a>


                                                <span class="saleicon sale">PROMO</span>


                                                <div class="percentsaving">-30% </div>

                                                <div class="countdown">
                                                    <div class="count-down clock">
                                                        <div data-countdown="2027-03-10" class="countbox hastime"></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="product-details">
                                                <div class="caption">

                                                    <h4><a
                                                            href="https://codezeel.com/opencart/OPC02/OPC020044/index.php?route=product/product&amp;product_id=31 ">SALLE DE BAINNE </a></h4>

                                                    <p class="desc">Salle de bain – Aménagement sur mesure
                                                                    Dans le cadre de notre activité d’aménagement de maison, 
                                                                    nous concevons des salles de bain personnalisées alliant fonctionnalité,
                                                                     confort et esthétique. Que ce soit pour une rénovation ou une création, 
                                                                     notre équipe vous accompagne dans le choix des matériaux, de l’agencement,
                                                                      des équipements sanitaires et de la décoration pour faire de votre salle de bain un véritable espace de bien-être,
                                                                       parfaitement adapté à vos besoins et à votre style.</p>

                                                   
                                                    <div class="rating">
                                                        <span class="fa fa-stack"><i
                                                                class="fa fa-star fa-stack-2x"></i><i
                                                                class="fa fa-star-o fa-stack-2x"></i></span>
                                                        <span class="fa fa-stack"><i
                                                                class="fa fa-star fa-stack-2x"></i><i
                                                                class="fa fa-star-o fa-stack-2x"></i></span>
                                                        <span class="fa fa-stack"><i
                                                                class="fa fa-star fa-stack-2x"></i><i
                                                                class="fa fa-star-o fa-stack-2x"></i></span>
                                                        <span class="fa fa-stack"><i
                                                                class="fa fa-star fa-stack-2x"></i><i
                                                                class="fa fa-star-o fa-stack-2x"></i></span>
                                                        <span class="fa fa-stack"><i
                                                                class="fa fa-star fa-stack-2x"></i><i
                                                                class="fa fa-star-o fa-stack-2x"></i></span>
                                                    </div>

                                                    <div class="button-group">
                                                        <div class="top-btn">
                                                            <button class="wishlist" type="button" data-toggle="tooltip"
                                                                title="Add to Wish List "
                                                                onclick="wishlist.add('31 ');"><i
                                                                    class="fa fa-heart"></i></button>
                                                            <div class="quickview-button" data-toggle="tooltip"
                                                                title="Quick view"> <a class="quickbox"
                                                                    href="https://codezeel.com/opencart/OPC02/OPC020044/index.php?route=product/quick_view&amp;product_id=31">
                                                                    <i class="fa fa-eye" aria-hidden="true"></i></a>
                                                            </div>
                                                           
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slider-item">
                                    <div class="product-block product-thumb transition">
                                        <div class="product-block-inner">
                                            <div class="image">
                                                <a
                                                    href="https://codezeel.com/opencart/OPC02/OPC020044/index.php?route=product/product&amp;product_id=32">
                                                    <img src="assets\image\amenagment_img\salle_de_bain2.jpg"
                                                        title="Reprehenderit Aliquam" alt="Reprehenderit Aliquam"
                                                        class="img-responsive reg-image" />
                                                    <img class="img-responsive hover-image"
                                                        src="assets/image/cache/catalog/05-954x800.jpg"
                                                        title="Reprehenderit Aliquam" alt="Reprehenderit Aliquam" />
                                                </a>


                                                <span class="saleicon sale">PROMO</span>


                                                <div class="percentsaving">-37%</div>

                                                <div class="countdown">
                                                    <div class="count-down clock">
                                                        <div data-countdown="2026-03-09" class="countbox hastime"></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="product-details">
                                                <div class="caption">

                                                    <h4><a
                                                            href="https://codezeel.com/opencart/OPC02/OPC020044/index.php?route=product/product&amp;product_id=32 ">SALLE DE BAINE SIMPLE  </a></h4>
                                                     <p>Nous réalisons des salles de bain pratiques, 
                                                        modernes et confortables. Du carrelage aux meubles,
                                                         en passant par la douche, la baignoire ou le lavabo, 
                                                         nous vous aidons à créer un espace qui vous ressemble.
                                                          Notre objectif est de vous offrir une salle de bain agréable,
                                                           bien pensée et adaptée à votre quotidien.</p>
                                                

                                                    <div class="rating">
                                                        <span class="fa fa-stack"><i
                                                                class="fa fa-star fa-stack-2x"></i><i
                                                                class="fa fa-star-o fa-stack-2x"></i></span>
                                                        <span class="fa fa-stack"><i
                                                                class="fa fa-star fa-stack-2x"></i><i
                                                                class="fa fa-star-o fa-stack-2x"></i></span>
                                                        <span class="fa fa-stack"><i
                                                                class="fa fa-star fa-stack-2x"></i><i
                                                                class="fa fa-star-o fa-stack-2x"></i></span>
                                                        <span class="fa fa-stack"><i
                                                                class="fa fa-star fa-stack-2x"></i><i
                                                                class="fa fa-star-o fa-stack-2x"></i></span>
                                                        <span class="fa fa-stack"><i
                                                                class="fa fa-star fa-stack-2x"></i><i
                                                                class="fa fa-star-o fa-stack-2x"></i></span>
                                                    </div>

                                                    <div class="button-group">
                                                        <div class="top-btn">
                                                            <button class="wishlist" type="button" data-toggle="tooltip"
                                                                title="Add to Wish List "
                                                                onclick="wishlist.add('32 ');"><i
                                                                    class="fa fa-heart"></i></button>
                                                            <div class="quickview-button" data-toggle="tooltip"
                                                                title="Quick view"> <a class="quickbox"
                                                                    href="https://codezeel.com/opencart/OPC02/OPC020044/index.php?route=product/quick_view&amp;product_id=32">
                                                                    <i class="fa fa-eye" aria-hidden="true"></i></a>
                                                            </div>
                                                        
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <span class="special_default_width" style="display:none; visibility:hidden"></span>

                <section id="section6" class="box blogs">
                    <div class="container">

                        <div class="box-head">
                            <div class="box-heading">évènement </div>
                        </div>
                        <div class="box-content">
                            <div class="customNavigation">
                                <a class="fa prev czblog_prev"></a>
                                <a class="fa next czblog_next"></a>
                            </div>

                            <div class="box-product  owl-carousel blogcarousel " id="blog-carousel">

                                <div class="blog-item">
                                    <div class="product-block">
                                        <div class="product-block-inner">

                                            <div class="blog-left">
                                                <div class="blog-image">
                                                    <img src="assets\image\amenagment_img\eve1.webp"
                                                        alt="Latest News" title="Latest News" class="img-thumbnail" />
                                                    <div class="post-image-hover"> </div>
                                                    <p class="post_hover"><a class="icon zoom"
                                                            title="Click to view Full Image "
                                                            href="assets/image/cache/catalog/blog-6-892x610.jpg"
                                                            data-lightbox="example-set"><i
                                                                class="fa fa-search-plus"></i> </a>
                                                        <a class="icon readmore_link" title="Click to view Read More "
                                                            href="https://codezeel.com/opencart/OPC02/OPC020044/index.php?route=information/blogger&amp;blogger_id=6"><i
                                                                class="fa fa-link"></i></a>
                                                    </p>
                                                </div>
                                            </div>


                                            <div class="blog-right">
                                                <div class="date-comment">
                                                    <div class="date-time"> <i class="fa fa-calendar"></i> 12/12/2024
                                                    </div>
                                                </div>
                                                <h4 class="blog_title"><a
                                                        href="https://codezeel.com/opencart/OPC02/OPC020044/index.php?route=information/blogger&amp;blogger_id=6"> Casablanca
                                                    </a> </h4>
                                                <div class="blog-desc"> Un salon dédié à l'aménagement résidentiel,
                                                     où vous pouvez découvrir les dernières tendances en matière de cuisine, 
                                                     salle de bain, et autres aménagements intérieurs. </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="blog-item">
                                    <div class="product-block">
                                        <div class="product-block-inner">

                                            <div class="blog-left">
                                                <div class="blog-image">
                                                    <img src="assets\image\amenagment_img\eve2.webp"
                                                        alt="Latest News" title="Latest News" class="img-thumbnail" />
                                                    <div class="post-image-hover"> </div>
                                                    <p class="post_hover"><a class="icon zoom"
                                                            title="Click to view Full Image "
                                                            href="assets\image\amenagment_img\eve1.webp"
                                                            data-lightbox="example-set"><i
                                                                class="fa fa-search-plus"></i> </a>
                                                        <a class="icon readmore_link" title="Click to view Read More "
                                                            href="https://codezeel.com/opencart/OPC02/OPC020044/index.php?route=information/blogger&amp;blogger_id=5"><i
                                                                class="fa fa-link"></i></a>
                                                    </p>
                                                </div>
                                            </div>


                                            <div class="blog-right">
                                                <div class="date-comment">
                                                    <div class="date-time"> <i class="fa fa-calendar"></i> 9/5/2025
                                                    </div>
                                                </div>
                                                <h4 class="blog_title"><a
                                                        href="https://codezeel.com/opencart/OPC02/OPC020044/index.php?route=information/blogger&amp;blogger_id=5">Marrakech
                                                    </a> </h4>
                                                <div class="blog-desc"> Ce salon met l'accent sur l'ameublement et l'aménagement intérieur,
                                                     offrant une large gamme de produits pour les cuisines, 
                                                     les dressings et autres espaces de vie. </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="blog-item">
                                    <div class="product-block">
                                        <div class="product-block-inner">

                                            <div class="blog-left">
                                                <div class="blog-image">
                                                    <img src="assets\image\amenagment_img\eve3.jpg"
                                                        alt="Latest News" title="Latest News" class="img-thumbnail" />
                                                    <div class="post-image-hover"> </div>
                                                    <p class="post_hover"><a class="icon zoom"
                                                            title="Click to view Full Image "
                                                            href="assets/image/cache/catalog/blog-4-892x610.jpg"
                                                            data-lightbox="example-set"><i
                                                                class="fa fa-search-plus"></i> </a>
                                                        <a class="icon readmore_link" title="Click to view Read More "
                                                            href="https://codezeel.com/opencart/OPC02/OPC020044/index.php?route=information/blogger&amp;blogger_id=4"><i
                                                                class="fa fa-link"></i></a>
                                                    </p>
                                                </div>
                                            </div>


                                            <div class="blog-right">
                                                <div class="date-comment">
                                                    <div class="date-time"> <i class="fa fa-calendar"></i> 10/13/2024
                                                    </div>
                                                </div>
                                                <h4 class="blog_title"><a
                                                        href="https://codezeel.com/opencart/OPC02/OPC020044/index.php?route=information/blogger&amp;blogger_id=4">Agadir</a> </h4>
                                                <div class="blog-desc">Un salon axé sur le bâtiment et l'aménagement, 
                                                    présentant des solutions innovantes pour les cuisines,
                                                     salles de bain, et autres aménagements intérieurs.</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="blog-item">
                                    <div class="product-block">
                                        <div class="product-block-inner">

                                            <div class="blog-left">
                                                <div class="blog-image">
                                                    <img src="assets/image/cache/catalog/blog-3-892x610.jpg"
                                                        alt="Latest News" title="Latest News" class="img-thumbnail" />
                                                    <div class="post-image-hover"> </div>
                                                    <p class="post_hover"><a class="icon zoom"
                                                            title="Click to view Full Image "
                                                            href="assets/image/cache/catalog/blog-3-892x610.jpg"
                                                            data-lightbox="example-set"><i
                                                                class="fa fa-search-plus"></i> </a>
                                                        <a class="icon readmore_link" title="Click to view Read More "
                                                            href="https://codezeel.com/opencart/OPC02/OPC020044/index.php?route=information/blogger&amp;blogger_id=3"><i
                                                                class="fa fa-link"></i></a>
                                                    </p>
                                                </div>
                                            </div>


                                            <div class="blog-right">
                                                <div class="date-comment">
                                                    <div class="date-time"> <i class="fa fa-calendar"></i> 28/02/2018
                                                    </div>
                                                </div>
                                                <h4 class="blog_title"><a
                                                        href="https://codezeel.com/opencart/OPC02/OPC020044/index.php?route=information/blogger&amp;blogger_id=3">Matters
                                                        To This Principle Of Selection</a> </h4>
                                                <div class="blog-desc"> Contrary to popular belief, Lorem Ipsum is not
                                                    simply random text. It has roots in a piece of classi... </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="blog-item">
                                    <div class="product-block">
                                        <div class="product-block-inner">

                                            <div class="blog-left">
                                                <div class="blog-image">
                                                    <img src="assets/image/cache/catalog/blog-2-892x610.jpg"
                                                        alt="Latest News" title="Latest News" class="img-thumbnail" />
                                                    <div class="post-image-hover"> </div>
                                                    <p class="post_hover"><a class="icon zoom"
                                                            title="Click to view Full Image "
                                                            href="assets/image/cache/catalog/blog-2-892x610.jpg"
                                                            data-lightbox="example-set"><i
                                                                class="fa fa-search-plus"></i> </a>
                                                        <a class="icon readmore_link" title="Click to view Read More "
                                                            href="https://codezeel.com/opencart/OPC02/OPC020044/index.php?route=information/blogger&amp;blogger_id=2"><i
                                                                class="fa fa-link"></i></a>
                                                    </p>
                                                </div>
                                            </div>


                                            <div class="blog-right">
                                                <div class="date-comment">
                                                    <div class="date-time"> <i class="fa fa-calendar"></i> 28/02/2018
                                                    </div>
                                                </div>
                                                <h4 class="blog_title"><a
                                                        href="https://codezeel.com/opencart/OPC02/OPC020044/index.php?route=information/blogger&amp;blogger_id=2">Omnis
                                                        Voluptas Assumenda Est</a> </h4>
                                                <div class="blog-desc"> It is a long established fact that a reader will
                                                    be distracted by the readable content of a page whe... </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="blog-item">
                                    <div class="product-block">
                                        <div class="product-block-inner">

                                            <div class="blog-left">
                                                <div class="blog-image">
                                                    <img src="assets/image/cache/catalog/blog-1-892x610.jpg"
                                                        alt="Latest News" title="Latest News" class="img-thumbnail" />
                                                    <div class="post-image-hover"> </div>
                                                    <p class="post_hover"><a class="icon zoom"
                                                            title="Click to view Full Image "
                                                            href="assets/image/cache/catalog/blog-1-892x610.jpg"
                                                            data-lightbox="example-set"><i
                                                                class="fa fa-search-plus"></i> </a>
                                                        <a class="icon readmore_link" title="Click to view Read More "
                                                            href="https://codezeel.com/opencart/OPC02/OPC020044/index.php?route=information/blogger&amp;blogger_id=1"><i
                                                                class="fa fa-link"></i></a>
                                                    </p>
                                                </div>
                                            </div>


                                            <div class="blog-right">
                                                <div class="date-comment">
                                                    <div class="date-time"> <i class="fa fa-calendar"></i> 28/02/2018
                                                    </div>
                                                </div>
                                                <h4 class="blog_title"><a
                                                        href="https://codezeel.com/opencart/OPC02/OPC020044/index.php?route=information/blogger&amp;blogger_id=1">Praesentium
                                                        Voluptatum Deleniti</a> </h4>
                                                <div class="blog-desc"> Suspendisse posuere, diam in bibendum lobortis,
                                                    turpis ipsum aliquam risus, sit amet dictum ligula l... </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="buttons text-center">
                                <button type="button"
                                    onclick="location='https://codezeel.com/opencart/OPC02/OPC020044/index.php?route=information/blogger/blogs ';"
                                    class="btn btn-primary">See all Blogs</button>
                            </div>
                        </div>
                    </div>
                </section>  
                <span class="blog_default_width" style="display:none; visibility:hidden"></span>

                <script type="text/javascript">

                    $(document).ready(function () {
                        $('.blogcarousel').owlCarousel({
                            items: 3,
                            singleItem: false,
                            navigation: false,
                            pagination: false,
                            itemsDesktop: [1199, 3],
                            itemsDesktopSmall: [991, 2],
                            itemsTablet: [575, 1]
                        });
                        // Custom Navigation Events
                        $(".czblog_next").click(function () {
                            $('.blogcarousel').trigger('owl.next');
                        })
                        $(".czblog_prev").click(function () {
                            $('.blogcarousel').trigger('owl.prev');
                        });
                    });	
                </script>
               

            </div>
 
 @endsection