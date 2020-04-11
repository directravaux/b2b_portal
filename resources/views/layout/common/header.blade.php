<!-- start menu-area -->
<div class="menu-area menu--style2">
    <!-- start .top-menu-area -->
    <div class="top-menu-area">
        <!-- start .container -->
        <div class="container">
            <!-- start .row -->
            <div class="row">
                <!-- start .col-md-3 -->
                <div class="col-lg-3 col-md-3 col-6 v_middle">
                    <div class="logo">
                        <a href="{{url('/')}}">
                            <img src="{{asset('images/logo.png')}}" alt="logo image" class="img-fluid">
                        </a>
                    </div>
                </div>
                <!-- end /.col-md-3 -->

                <!-- start .col-md-5 -->
                <div class="col-lg-8 offset-lg-1 col-6 col-md-9 v_middle">
                    @if (Auth::check())
                        <!-- start .author-area -->
                        <div class="author-area">
                            @if($userRole=="client")
                                <a href="{{route('client.vendor')}}" class="author-area__seller-btn inline">Become a Vendor</a>
                            @endif

                            <div class="author__notification_area">
                                <ul>
                                    <li class="has_dropdown">
                                        <div class="icon_wrap">
                                            <span class="lnr lnr-alarm"></span>
                                            <span class="notification_count noti">25</span>
                                        </div>

                                        <div class="dropdowns notification--dropdown">

                                            <div class="dropdown_module_header">
                                                <h4>My Notifications</h4>
                                                <a href="notification.html">View All</a>
                                            </div>

                                            <div class="notifications_module">
                                                <div class="notification">
                                                    <div class="notification__info">
                                                        <div class="info_avatar">
                                                            <img src="{{asset('images/notification_head.png')}}" alt="">
                                                        </div>
                                                        <div class="info">
                                                            <p>
                                                                <span>Anderson</span> added to Favourite
                                                                <a href="#">Mccarther Coffee Shop</a>
                                                            </p>
                                                            <p class="time">Just now</p>
                                                        </div>
                                                    </div>
                                                    <!-- end /.notifications -->

                                                    <div class="notification__icons ">
                                                        <span class="lnr lnr-heart loved noti_icon"></span>
                                                    </div>
                                                    <!-- end /.notifications -->
                                                </div>
                                                <!-- end /.notifications -->
                                            </div>
                                            <!-- end /.dropdown -->
                                        </div>
                                    </li>

                                    <li class="has_dropdown">
                                        <div class="icon_wrap">
                                            <span class="lnr lnr-envelope"></span>
                                            <span class="notification_count msg">6</span>
                                        </div>

                                        <div class="dropdowns messaging--dropdown">
                                            <div class="dropdown_module_header">
                                                <h4>My Messages</h4>
                                                <a href="message.html">View All</a>
                                            </div>

                                            <div class="messages">
                                                <a href="message.html" class="message recent">
                                                    <div class="message__actions_avatar">
                                                        <div class="avatar">
                                                            <img src="{{asset('images/notification_head4.png')}}" alt="">
                                                        </div>
                                                    </div>
                                                    <!-- end /.actions -->

                                                    <div class="message_data">
                                                        <div class="name_time">
                                                            <div class="name">
                                                                <p>NukeThemes</p>
                                                                <span class="lnr lnr-envelope"></span>
                                                            </div>

                                                            <span class="time">Just now</span>
                                                            <p>Hello John Smith! Nunc placerat mi ...</p>
                                                        </div>
                                                    </div>
                                                    <!-- end /.message_data -->
                                                </a>
                                                <!-- end /.message -->
                                            </div>
                                        </div>
                                    </li>
                                    <li class="has_dropdown">
                                        <div class="icon_wrap">
                                            <span class="lnr lnr-cart"></span>
                                            <span class="notification_count purch">2</span>
                                        </div>

                                        <div class="dropdowns dropdown--cart">
                                            <div class="cart_area">
                                                <div class="cart_product">
                                                    <div class="product__info">
                                                        <div class="thumbn">
                                                            <img src="{{ asset('images/capro1.jpg')}}" alt="cart product thumbnail">
                                                        </div>

                                                        <div class="info">
                                                            <a class="title" href="single-product.html">Finance and
                                                                Consulting Business Theme</a>
                                                            <div class="cat">
                                                                <a href="#">
                                                                    <img src="{{ asset('images/catword.png')}}" alt="">Wordpress</a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="product__action">
                                                        <a href="#">
                                                            <span class="lnr lnr-trash"></span>
                                                        </a>
                                                        <p>$60</p>
                                                    </div>
                                                </div>

                                                <div class="total">
                                                    <p>
                                                        <span>Total :</span>$80</p>
                                                </div>
                                                <div class="cart_action">
                                                    <a class="go_cart" href="cart.html">View Cart</a>
                                                    <a class="go_checkout" href="checkout.html">Checkout</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!--start .author__notification_area -->

                            <!--start .author-author__info-->
                            <div class="author-author__info inline has_dropdown">
                                <div class="author__avatar">
                                    <img src="{{$userPhoto}}" alt="user avatar" height="50px" width="50px">
                                </div>
                                <div class="autor__info">
                                    <p class="name">
                                        {{Auth::user()->first_name}} {{Auth::user()->last_name}}
                                    </p>
                                    <p class="ammount">$20.45</p>
                                </div>

                                <div class="dropdowns dropdown--author">
                                    <ul>
                                        <li>
                                            <a href='{{url("$userRole")}}'>
                                                <span class="lnr lnr-home"></span> Dashboard</a>
                                        </li>
                                        <li>
                                            <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                <span class="lnr lnr-exit"></span>Logout</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!--end /.author-author__info-->
                        </div>
                        <!-- end .author-area -->

                        <!-- author area restructured for mobile -->
                        <div class="mobile_content">
                            <span class="lnr lnr-user menu_icon"></span>

                            <!-- offcanvas menu -->
                            <div class="offcanvas-menu closed">
                                <span class="lnr lnr-cross close_menu"></span>
                                <div class="author-author__info">
                                    <div class="author__avatar v_middle">
                                        <img src="{{$userPhoto}}" alt="user avatar" height="50px" width="50px">
                                    </div>
                                    <div class="autor__info v_middle">
                                        <p class="name">
                                            {{Auth::user()->first_name}} {{Auth::user()->last_name}}
                                        </p>
                                    </div>
                                </div>
                                <!--end /.author-author__info-->

                                <div class="author__notification_area">
                                    <ul>
                                        <li>
                                            <a href="notification.html">
                                                <div class="icon_wrap">
                                                    <span class="lnr lnr-alarm"></span>
                                                    <span class="notification_count noti">25</span>
                                                </div>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="message.html">
                                                <div class="icon_wrap">
                                                    <span class="lnr lnr-envelope"></span>
                                                    <span class="notification_count msg">6</span>
                                                </div>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="cart.html">
                                                <div class="icon_wrap">
                                                    <span class="lnr lnr-cart"></span>
                                                    <span class="notification_count purch">2</span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <!--start .author__notification_area -->

                                <div class="dropdowns dropdown--author">
                                    <ul>
                                        <li>
                                            <a href='{{url("$userRole")}}'>
                                                <span class="lnr lnr-home"></span> Dashboard</a>
                                        </li>
                                        <li>
                                            <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                <span class="lnr lnr-exit"></span>Logout</a>
                                        </li>
                                    </ul>
                                </div>

                                @if($userRole=="client")
                                    <div class="text-center">
                                        <a href="{{route('client.vendor')}}" class="author-area__seller-btn inline">Become a Vendor</a>
                                    </div>
                                @endif
                            </div>
                        </div>
                        <!-- end /.mobile_content -->
                    @else
                        <!-- start .author-area -->
                        <div class="author-area not_logged_in">
                            <div class="author__notification_area">
                                <ul>
                                    <li class="has_dropdown">
                                        <div class="icon_wrap">
                                            <span class="lnr lnr-cart"></span>
                                            <span class="notification_count purch">2</span>
                                        </div>

                                        <div class="dropdowns dropdown--cart">
                                            <div class="cart_area">
                                                <div class="cart_product">
                                                    <div class="product__info">
                                                        <div class="thumbn">
                                                            <img src="{{asset('images/images/capro1.jpg')}}"
                                                                 alt="cart product thumbnail">
                                                        </div>

                                                        <div class="info">
                                                            <a class="title" href="single-product.html">Finance and
                                                                Consulting Business Theme</a>
                                                            <div class="cat">
                                                                <a href="#">
                                                                    <img src="{{asset('images/images/catword.png')}}"
                                                                         alt="">Wordpress</a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="product__action">
                                                        <a href="#">
                                                            <span class="lnr lnr-trash"></span>
                                                        </a>
                                                        <p>$60</p>
                                                    </div>
                                                </div>
                                                <div class="cart_product">
                                                    <div class="product__info">
                                                        <div class="thumbn">
                                                            <img src="{{asset('images/images/capro2.jpg')}}"
                                                                 alt="cart product thumbnail">
                                                        </div>

                                                        <div class="info">
                                                            <a class="title" href="single-product.html">Flounce -
                                                                Multipurpose OpenCart Theme</a>
                                                            <div class="cat">
                                                                <a href="#">
                                                                    <img src="{{asset('images/images/catword.png')}}"
                                                                         alt="">Wordpress</a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="product__action">
                                                        <a href="#">
                                                            <span class="lnr lnr-trash"></span>
                                                        </a>
                                                        <p>$60</p>
                                                    </div>
                                                </div>
                                                <div class="total">
                                                    <p>
                                                        <span>Total :</span>$80</p>
                                                </div>
                                                <div class="cart_action">
                                                    <a class="go_cart" href="cart.html">View Cart</a>
                                                    <a class="go_checkout" href="checkout.html">Checkout</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="pull-right join">
                                <a href="{{route('register')}}" class="btn btn--round btn-secondary  btn--xs">Join Now</a>
                                <a href="{{route('login')}}" class="btn btn--round btn--xs">Login</a>
                            </div>
                        </div>
                        <!-- end .author-area -->

                        <!-- author area restructured for mobile -->
                        <div class="mobile_content">
                            <span class="lnr lnr-user menu_icon"></span>

                            <!-- offcanvas menu -->
                            <div class="offcanvas-menu closed">
                                <span class="lnr lnr-cross close_menu"></span>
                                <div class="author-author__info">
                                    <div class="author__avatar v_middle">
                                        <img src="{{asset('images/usr_avatar.png')}}" alt="user avatar">
                                    </div>
                                    <div class="autor__info v_middle">
                                        <p class="name">
                                            Welcome Guest
                                        </p>
                                    </div>
                                </div>
                                <!--end /.author-author__info-->

                                <div class="dropdowns dropdown--author">
                                    <ul>
                                        <li>
                                            <a href="{{route('register')}}">
                                                <span class="lnr lnr-home"></span> Join Now</a>
                                        </li>
                                        <li>
                                            <a href="{{route('login')}}">
                                                <span class="lnr lnr-exit"></span>Login</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- end /.mobile_content -->
                    @endif
                </div>
                <!-- end /.col-md-5 -->
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </div>
    <!-- end  -->

    <!-- start .mainmenu_area -->
    <div class="mainmenu">
        <!-- start .container -->
        <div class="container">
            <!-- start .row-->
            <div class="row">
                <!-- start .col-md-12 -->
                <div class="col-md-12">
                    <div class="navbar-header">
                        <!-- start mainmenu__search -->
                        <div class="mainmenu__search">
                            <form action="#">
                                <div class="searc-wrap">
                                    <input type="text" placeholder="Search product">
                                    <button type="submit" class="search-wrap__btn">
                                        <span class="lnr lnr-magnifier"></span>
                                    </button>
                                </div>
                            </form>
                        </div>
                        <!-- start mainmenu__search -->
                    </div>

                    <nav class="navbar navbar-expand-lg navbar-light mainmenu__menu">
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarNav5" aria-controls="navbarNav5" aria-expanded="false"
                                aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="navbarNav5">
                            <ul class="navbar-nav">
                                <li class="has_dropdown">
                                    <a href="index.html">ACCUEIL</a>
                                    <div class="dropdowns dropdown--menu">
                                        <ul>
                                            <li>
                                                <a href="index.html">ACCUEIL Example Sub menu</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="has_dropdown">
                                    <a href="all-products-list.html">BOUTIQUE</a>
                                    <div class="dropdowns dropdown--menu">
                                        <ul>
                                            <li>
                                                <a href="all-products.html">BOUTIQUE Example sub menu</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="has_dropdown">
                                    <a href="#">DÉPANNAGES</a>
                                    <div class="dropdowns dropdown--menu">
                                        <ul>
                                            <li>
                                                <a href="category-grid.html">DÉPANNAGES eXAMPLE SUB MENU</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="has_megamenu">
                                    <a href="#">NÉGOCIATION</a>
                                    <div class="dropdown_megamenu contained">
                                        <div class="megamnu_module">
                                            <div class="menu_items">
                                                <div class="menu_column">
                                                    <ul>
                                                        <li>
                                                            <a href="accordion.html">first column</a>
                                                        </li>
                                                    </ul>
                                                </div>

                                                <div class="menu_column">
                                                    <ul>
                                                        <li>
                                                            <a href="features.html">second column</a>
                                                        </li>
                                                    </ul>
                                                </div>

                                                <div class="menu_column">
                                                    <ul>
                                                        <li>
                                                            <a href="progressbar.html">thridh column</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="has_megamenu">
                                    <a href="#">EMPLOIS</a>
                                    <div class="dropdown_megamenu">
                                        <div class="megamnu_module">
                                            <div class="menu_items">
                                                <div class="menu_column">
                                                    <ul>
                                                        <li class="title">FIRST</li>
                                                        <li>
                                                            <a href="all-products.html">FIRST</a>
                                                        </li>
                                                    </ul>
                                                </div>

                                                <div class="menu_column">
                                                    <ul>
                                                        <li class="title">SECOND</li>
                                                        <li>
                                                            <a href="author.html">SECOND</a>
                                                        </li>
                                                    </ul>
                                                </div>

                                                <div class="menu_column">
                                                    <ul>
                                                        <li class="title">THREETH</li>
                                                        <li>
                                                            <a href="dashboard.html">THREETH</a>
                                                        </li>
                                                    </ul>
                                                </div>

                                                <div class="menu_column">
                                                    <ul>
                                                        <li class="title">FOURTH</li>
                                                        <li>
                                                            <a href="support-forum.html">FOURTH</a>
                                                        </li>
                                                    </ul>

                                                    <ul>
                                                        <li class="title">FIFTH</li>
                                                        <li>
                                                            <a href="blog1.html">FIFTH</a>
                                                        </li>
                                                    </ul>
                                                </div>

                                                <div class="menu_column">
                                                    <ul>
                                                        <li class="title">SIXTH</li>
                                                        <li>
                                                            <a href="how-it-works.html">SIXTH</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="#">DEVIS</a>
                                </li>
                                <li>
                                    <a href="#">ÉVÉNEMENTS</a>
                                </li>
                            </ul>
                        </div>
                        <!-- /.navbar-collapse -->
                    </nav>
                </div>
                <!-- end /.col-md-12 -->
            </div>
            <!-- end /.row-->
        </div>
        <!-- start .container -->
    </div>
    <!-- end /.mainmenu-->
</div>
<!-- end /.menu-area -->
