<header class="header">
    <!-- Header Main -->

    <div class="header_main">
        <div class="container">
            <div class="row">

                <!-- Logo -->
                <div class="col-lg-4 col-sm-3 col-3 order-1">
                    <div class="logo_container">
                        <style>

                            .logo a sup:hover{
                                color: red !important;
                            }
                            .logo a span:hover{
                                color: red !important;
                            }
                        </style>
                        <div class="logo"><a href="/">All<span>Tech<sup style="font-size: 10px;top: -2.5em">24/7</sup></span></a></div>
                    </div>
                </div>

                <!-- Search -->
                <div class="col-lg-8 col-12 order-lg-2 order-3 text-lg-left text-right">
                    <div class="header_search">
                        <div class="header_search_content">
                            <div class="header_search_form_container">
                                <form action="#" class="header_search_form clearfix">
                                    <input type="search" required="required" class="header_search_input" placeholder="Search for products...">
                                    <div class="custom_dropdown">
                                        <div class="custom_dropdown_list">
                                            <span class="custom_dropdown_placeholder clc">All Categories</span>
                                            <i class="fas fa-chevron-down"></i>
                                            <ul class="custom_list clc">
                                                <li><a class="clc" href="#">All Categories</a></li>
                                                <li><a class="clc" href="#">Computers</a></li>
                                                <li><a class="clc" href="#">Laptops</a></li>
                                                <li><a class="clc" href="#">Cameras</a></li>
                                                <li><a class="clc" href="#">Hardware</a></li>
                                                <li><a class="clc" href="#">Smartphones</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <button type="submit" class="header_search_button trans_300" value="Submit"><img src="{{asset('front/images/search.png')}}" alt=""></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Main Navigation -->

    <nav class="main_nav">
        <div class="container">
            <div class="row">
                <div class="col">

                    <div class="main_nav_content d-flex flex-row">

                        <!-- Categories Menu -->

                        <div class="cat_menu_container">
                            <div class="cat_menu_title d-flex flex-row align-items-center justify-content-start">
                                <div class="cat_burger"><span></span><span></span><span></span></div>
                                <div class="cat_menu_text">categories</div>
                            </div>

                            <ul class="cat_menu">
                                <li><a href="#">Computers & Laptops <i class="fas fa-chevron-right ml-auto"></i></a></li>
                                <li><a href="#">Cameras & Photos<i class="fas fa-chevron-right"></i></a></li>
                                <li class="hassubs">
                                    <a href="#">Hardware<i class="fas fa-chevron-right"></i></a>
                                    <ul>
                                        <li class="hassubs">
                                            <a href="#">Menu Item<i class="fas fa-chevron-right"></i></a>
                                            <ul>
                                                <li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
                                                <li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
                                                <li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
                                                <li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
                                        <li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
                                        <li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Smartphones & Tablets<i class="fas fa-chevron-right"></i></a></li>
                                <li><a href="#">TV & Audio<i class="fas fa-chevron-right"></i></a></li>
                                <li><a href="#">Gadgets<i class="fas fa-chevron-right"></i></a></li>

                                <li><a href="#">Video Games & Consoles<i class="fas fa-chevron-right"></i></a></li>
                                <li><a href="#">Accessories<i class="fas fa-chevron-right"></i></a></li>
                            </ul>
                        </div>

                        <!-- Main Nav Menu -->

                        <div class="main_nav_menu ml-auto">
                            <ul class="standard_dropdown main_nav_dropdown">
                                <li><a href="/">Home<i class="fas fa-chevron-down"></i></a></li>

                                <li class="hassubs">
                                    <a href="#">Brands<i class="fas fa-chevron-down"></i></a>
                                    <ul>

                                        <li><a href="#">Brand 1<i class="fas fa-chevron-down"></i></a></li>
                                        <li><a href="#">Brand 2<i class="fas fa-chevron-down"></i></a></li>
                                        <li><a href="#">Brand 3<i class="fas fa-chevron-down"></i></a></li>
                                    </ul>
                                </li>
                                <li class="hassubs">
                                    <a href="#">Trending Products<i class="fas fa-chevron-down"></i></a>
                                    <ul>
                                        <li><a href="#">Item 1<i class="fas fa-chevron-down"></i></a></li>
                                        <li><a href="#">Item 1<i class="fas fa-chevron-down"></i></a></li>
                                        <li><a href="#">Item 1<i class="fas fa-chevron-down"></i></a></li>

                                    </ul>
                                </li>

                            </ul>
                        </div>

                        <!-- Menu Trigger -->

                        <div class="menu_trigger_container ml-auto">
                            <div class="menu_trigger d-flex flex-row align-items-center justify-content-end">
                                <div class="menu_burger">
                                    <div class="menu_trigger_text">menu</div>
                                    <div class="cat_burger menu_burger_inner"><span></span><span></span><span></span></div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Menu -->

    <div class="page_menu">
        <div class="container">
            <div class="row">
                <div class="col">

                    <div class="page_menu_content">

                        <div class="page_menu_search">
                            <form action="#">
                                <input type="search" required="required" class="page_menu_search_input" placeholder="Search for products...">
                            </form>
                        </div>
                        <ul class="page_menu_nav">

                            <li class="page_menu_item">
                                <a href="#">Home<i class="fa fa-angle-down"></i></a>
                            </li>

                            <li class="page_menu_item has-children">
                                <a href="#">Brands<i class="fa fa-angle-down"></i></a>
                                <ul class="page_menu_selection">
                                    <li><a href="#">Brand 1<i class="fa fa-angle-down"></i></a></li>
                                    <li><a href="#">Brand 2<i class="fa fa-angle-down"></i></a></li>
                                    <li><a href="#">Brand 3<i class="fa fa-angle-down"></i></a></li>

                                </ul>
                            </li>
                            <li class="page_menu_item has-children">
                                <a href="#">Trending Products<i class="fa fa-angle-down"></i></a>
                                <ul class="page_menu_selection">
                                    <li><a href="#">Trending Products<i class="fa fa-angle-down"></i></a></li>
                                    <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                    <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                    <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                </ul>
                            </li>

                        </ul>


                    </div>
                </div>
            </div>
        </div>
    </div>

</header>
