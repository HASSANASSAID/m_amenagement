 <header>
        <div class="header-container">

            <div class="row">
                <div class="header-main">


                    <div class="header-top-wrapper">
                        <div class="head-right-bottom">
                            <div class="container">
                                <div class="header-logo">
                                    <div id="logo">
                                        <a
                                            href="#sectionhome"><img
                                                src="assets/image/catalog/ma_logo.png" title="Cactuplan - Plant Store"
                                                alt="Cactuplan - Plant Store" class="img-responsive" /></a>
                                    </div>
                                </div>

                                <div class="dropdown myaccount">
                                    <a href="https://codezeel.com/opencart/OPC02/OPC020044/index.php?route=account/account"
                                        title="My Account" class="dropdown-toggle" data-toggle="dropdown">
                                        <span class="hidden-xs hidden-sm hidden-md">My Account</span><i
                                            class="fa fa-angle-down" aria-hidden="true"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-right myaccount-menu">
                                        <li><a
                                                href="https://codezeel.com/opencart/OPC02/OPC020044/index.php?route=account/register">Register</a>
                                        </li>
                                        <li><a
                                                href="https://codezeel.com/opencart/OPC02/OPC020044/index.php?route=account/login">Login</a>
                                        </li>
                                        <li><a href="https://codezeel.com/opencart/OPC02/OPC020044/index.php?route=account/wishlist"
                                                id="wishlist-total" title="Wish List (0)">Wish List (0)</a></li>
                                        <li><a href="https://codezeel.com/opencart/OPC02/OPC020044/index.php?route=checkout/cart"
                                                title="Shopping Cart">Shopping Cart</a></li>
                                        <li><a href="https://codezeel.com/opencart/OPC02/OPC020044/index.php?route=checkout/checkout"
                                                title="Checkout">Checkout</a></li>

                                        <li class="lang-curr">
                                            <div class="pull-left">
                                                <form
                                                    action="https://codezeel.com/opencart/OPC02/OPC020044/index.php?route=common/language/language"
                                                    method="post" enctype="multipart/form-data" id="form-language">
                                                    <div class="btn-group">
                                                        <button class="btn btn-link">
                                                            Language

                                                            <img src="assets/image/catalog/language/en-gb/en-gb.png"
                                                                alt="English" title="English">
                                                        </button>
                                                        <ul class="language-menu">
                                                            <li>
                                                                <button class="btn btn-link btn-block language-select"
                                                                    type="button" name="en-gb"><img
                                                                        src="assets/image/catalog/language/en-gb/en-gb.png"
                                                                        alt="English" title="English" />
                                                                    English</button>
                                                            </li>
                                                            <li>
                                                                <button class="btn btn-link btn-block language-select"
                                                                    type="button" name="ar">
                                                                    <img src="assets/image/catalog/language/ar/ar.png"

                                                                        alt="Arabic" title="Arabic" /> Arabic</button>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <input type="hidden" name="code" value="" />
                                                    <input type="hidden" name="redirect"
                                                        value="https://codezeel.com/opencart/OPC02/OPC020044/index.php?route=common/home" />
                                                </form>
                                            </div>

                                            <div class="pull-left">
                                                <form
                                                    action="https://codezeel.com/opencart/OPC02/OPC020044/index.php?route=common/currency/currency"
                                                    method="post" enctype="multipart/form-data" id="form-currency">
                                                    <div class="btn-group">
                                                        <button class="btn btn-link">
                                                            Currency
                                                            <strong>$</strong>

                                                        </button>
                                                        <ul class="currency-menu">
                                                            <li>
                                                                <button class="currency-select btn btn-link btn-block"
                                                                    type="button" name="EUR">€</button>
                                                            </li>
                                                            <li>
                                                                <button class="currency-select btn btn-link btn-block"
                                                                    type="button" name="GBP">£</button>
                                                            </li>
                                                            <li>
                                                                <button class="currency-select btn btn-link btn-block"
                                                                    type="button" name="USD">$</button>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <input type="hidden" name="code" value="" />
                                                    <input type="hidden" name="redirect"
                                                        value="https://codezeel.com/opencart/OPC02/OPC020044/index.php?route=common/home" />
                                                </form>
                                            </div>

                                        </li>
                                    </ul>
                                </div> 
                                <div id="search" class="input-group">
                                    <span class="search_button"></span>
                                    <div class="search_toggle">
                                        <div id="searchbox">
                                            <input type="text" name="search" value="" placeholder="Search Products Here"
                                                class="form-control input-lg" />
                                            <span class="input-group-btn">
                                                <button type="button" class="btn btn-default btn-lg"><i
                                                        class="fa fa-search"></i></button>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <nav class="nav-container" role="navigation">
                                    <div class="nav-inner">
                                        <!-- ======= Menu Code START ========= -->
                                        <!-- Opencart 3 level Category Menu-->
                                        <div id="menu" class="main-menu">

                                            <ul class="nav navbar-nav">
                                                <li class="top_level home"><a href="{{ route('home') }}#sectionhome">Accueil</a>
                                                </li>
                                                <li class="top_level"><a href="#section1">À propos </a>
                                                </li>
                                                <li class="top_level"><a href="#section2">Cuisine</a>
                                                </li>
                                                <li class="top_level"><a href="#section21">Optimisation intérieur</a>
                                                </li>
                                                <li class="top_level"><a href="#section4">Promo</a>
                                                </li>
                                                <li class="top_level"><a href="#section6">évènement</a>
                                                </li>
                                                  <li class="top_level"><a href="{{ route('contact.index') }}">Contact</a>
                                                </li>

                                            </ul>
                                        </div>

                                    </div>



                                    <!--  =============================================== Mobile menu start  =============================================  -->
                                    <div id="res-menu" class="main-menu nav-container1 container">
                                        <div class="nav-responsive"><span>Menu</span>
                                            <div class="expandable"></div>
                                        </div>
                                        <ul class="main-navigation">
                                            <li class="top_level home"><a href="#sectionhome">Home</a>
                                            </li>
                                            <li class="top_level"><a href="#section1">Section 1</a>
                                            </li>
                                            <li class="top_level"><a href="#section2">Section 2</a>
                                            </li>
                                            <li class="top_level"><a href="#section3">Section 3</a>
                                            </li>
                                            <li class="top_level"><a href="#section4">Section 4</a>
                                            </li>
                                            <li class="top_level"><a href="#section5">Section 5</a>
                                            </li>
                                            <li class="top_level"><a href="#section6">Section 6</a>
                                            </li>

                                        </ul>
                                    </div>


                                </nav>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </header>