<header class="header_wrap">
    <div class="middle-header dark_skin">
        <div class="custom-container">
            <div class="nav_block">
                <a class="navbar-brand" href="index.html">
                    <img class="logo_light" src="{{ 'user/assets/images/logo_light.png' }}" alt="logo" />
                    <img class="logo_dark" src="{{ 'user/assets/images/logo_dark.png' }}" alt="logo" />
                </a>
                <div class="product_search_form rounded_input">
                    <form>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="custom_select">
                                    <select class="first_null">
                                        <option value="">All Category</option>
                                        <option value="Dresses">Dresses</option>
                                        <option value="Shirt-Tops">Shirt & Tops</option>
                                        <option value="T-Shirt">T-Shirt</option>
                                        <option value="Pents">Pents</option>
                                        <option value="Jeans">Jeans</option>
                                    </select>
                                </div>
                            </div>
                            <input class="form-control" placeholder="Search Product..." required="" type="text">
                            <button type="submit" class="search_btn2"><i class="fa fa-search"></i></button>
                        </div>
                    </form>
                </div>
                <ul class="navbar-nav attr-nav align-items-center">
                    @guest
                        <li><a href="{{ url('login') }}" class="nav-link"><i class="linearicons-user"></i></a></li>
                        <li><a href="#" class="nav-link"><i class="linearicons-heart"></i><span
                                    class="wishlist_count">0</span></a></li>
                                    <li class="dropdown cart_dropdown"><a class="nav-link cart_trigger" href="#"
                                        data-bs-toggle="dropdown"><i class="linearicons-bag2"></i><span
                                            class="cart_count">2</span><span class="amount"><span
                                                class="currency_symbol">$</span>159.00</span></a>
                                    <div class="cart_box cart_right dropdown-menu dropdown-menu-right">
                                        <ul class="cart_list">
                                            <li>
                                                <a href="#" class="item_remove"><i class="ion-close"></i></a>
                                                <a href="#"><img src="{{ 'user/assets/images/cart_thamb1.jpg' }}"
                                                        alt="cart_thumb1">Variable product 001</a>
                                                <span class="cart_quantity"> 1 x <span class="cart_amount"> <span
                                                            class="price_symbole">$</span></span>78.00</span>
                                            </li>
                                            <li>
                                                <a href="#" class="item_remove"><i class="ion-close"></i></a>
                                                <a href="#"><img src="{{ 'user/assets/images/cart_thamb2.jpg' }}"
                                                        alt="cart_thumb2">Ornare sed consequat</a>
                                                <span class="cart_quantity"> 1 x <span class="cart_amount"> <span
                                                            class="price_symbole">$</span></span>81.00</span>
                                            </li>
                                        </ul>
                                        <div class="cart_footer">
                                            <p class="cart_total"><strong>Subtotal:</strong> <span class="cart_price"> <span
                                                        class="price_symbole">$</span></span>159.00</p>
                                            <p class="cart_buttons"><a href="#" class="btn btn-fill-line view-cart">View
                                                    Cart</a><a href="#" class="btn btn-fill-out checkout">Checkout</a></p>
                                        </div>
                                    </div>
                                </li>
                    @else
                        <li><a href="" class="nav-link"><i class="linearicons-user"></i></a></li>
                        <li><a href="#" class="nav-link"><i class="linearicons-heart"></i><span
                                    class="wishlist_count">0</span></a></li>
                        <li class="dropdown cart_dropdown"><a class="nav-link cart_trigger" href="#"
                                data-bs-toggle="dropdown"><i class="linearicons-bag2"></i><span
                                    class="cart_count">2</span><span class="amount"><span
                                        class="currency_symbol">$</span>159.00</span></a>
                            <div class="cart_box cart_right dropdown-menu dropdown-menu-right">
                                <ul class="cart_list">
                                    <li>
                                        <a href="#" class="item_remove"><i class="ion-close"></i></a>
                                        <a href="#"><img src="{{ 'user/assets/images/cart_thamb1.jpg' }}"
                                                alt="cart_thumb1">Variable product 001</a>
                                        <span class="cart_quantity"> 1 x <span class="cart_amount"> <span
                                                    class="price_symbole">$</span></span>78.00</span>
                                    </li>
                                    <li>
                                        <a href="#" class="item_remove"><i class="ion-close"></i></a>
                                        <a href="#"><img src="{{ 'user/assets/images/cart_thamb2.jpg' }}"
                                                alt="cart_thumb2">Ornare sed consequat</a>
                                        <span class="cart_quantity"> 1 x <span class="cart_amount"> <span
                                                    class="price_symbole">$</span></span>81.00</span>
                                    </li>
                                </ul>
                                <div class="cart_footer">
                                    <p class="cart_total"><strong>Subtotal:</strong> <span class="cart_price"> <span
                                                class="price_symbole">$</span></span>159.00</p>
                                    <p class="cart_buttons"><a href="#" class="btn btn-fill-line view-cart">View
                                            Cart</a><a href="#" class="btn btn-fill-out checkout">Checkout</a></p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="{{ route('logout') }}" class="nav-link"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="linearicons-exit"></i></a>
                            <form action="{{ route('logout') }}" method="post" id="logout-form">
                                @csrf
                            </form>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </div>
    <div class="bottom_header dark_skin main_menu_uppercase border-top border-bottom">
        <div class="custom-container">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6 col-3">
                    <div class="categories_wrap">
                        <button type="button" data-bs-toggle="collapse" data-bs-target="#navCatContent"
                            aria-expanded="false" class="categories_btn">
                            <i class="linearicons-menu"></i><span>All Categories </span>
                        </button>
                        <div id="navCatContent" class="nav_cat navbar collapse">
                            <ul>
                                <li class="dropdown dropdown-mega-menu">
                                    <a class="dropdown-item nav-link dropdown-toggler" href="#"
                                        data-bs-toggle="dropdown"><i class="flaticon-tv"></i>
                                        <span>Computer</span></a>
                                    <div class="dropdown-menu">
                                        <ul class="mega-menu d-lg-flex">
                                            <li class="mega-menu-col col-lg-7">
                                                <ul class="d-lg-flex">
                                                    <li class="mega-menu-col col-lg-6">
                                                        <ul>
                                                            <li class="dropdown-header">Featured Item</li>
                                                            <li><a class="dropdown-item nav-link nav_item"
                                                                    href="#">Vestibulum sed</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item"
                                                                    href="#">Donec porttitor</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item"
                                                                    href="#">Donec vitae facilisis</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item"
                                                                    href="#">Curabitur tempus</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item"
                                                                    href="#">Vivamus in tortor</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item"
                                                                    href="#">Donec vitae ante ante</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item"
                                                                    href="#">Etiam ac rutrum</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item"
                                                                    href="#">Quisque condimentum</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="mega-menu-col col-lg-6">
                                                        <ul>
                                                            <li class="dropdown-header">Popular Item</li>
                                                            <li><a class="dropdown-item nav-link nav_item"
                                                                    href="#">Curabitur laoreet</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item"
                                                                    href="#">Vivamus in tortor</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item"
                                                                    href="#">Donec vitae facilisis</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item"
                                                                    href="#">Quisque condimentum</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item"
                                                                    href="#">Etiam ac rutrum</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item"
                                                                    href="#">Donec vitae ante ante</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item"
                                                                    href="#">Donec porttitor</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item"
                                                                    href="#">Curabitur tempus</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="mega-menu-col col-lg-5">
                                                <div class="header-banner2">
                                                    <img src="{{ 'user/assets/images/menu_banner7.jpg' }}"
                                                        alt="menu_banner">
                                                    <div class="banne_info">
                                                        <h6>20% Off</h6>
                                                        <h4>Computers</h4>
                                                        <a href="#">Shop now</a>
                                                    </div>
                                                </div>
                                                <div class="header-banner2">
                                                    <img src="{{ 'user/assets/images/menu_banner8.jpg' }}"
                                                        alt="menu_banner">
                                                    <div class="banne_info">
                                                        <h6>15% Off</h6>
                                                        <h4>Top Laptops</h4>
                                                        <a href="#">Shop now</a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="dropdown dropdown-mega-menu">
                                    <a class="dropdown-item nav-link dropdown-toggler" href="#"
                                        data-bs-toggle="dropdown"><i class="flaticon-responsive"></i> <span>Mobile &
                                            Tablet</span></a>
                                    <div class="dropdown-menu">
                                        <ul class="mega-menu d-lg-flex">
                                            <li class="mega-menu-col col-lg-7">
                                                <ul class="d-lg-flex">
                                                    <li class="mega-menu-col col-lg-6">
                                                        <ul>
                                                            <li class="dropdown-header">Featured Item</li>
                                                            <li><a class="dropdown-item nav-link nav_item"
                                                                    href="#">Vestibulum sed</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item"
                                                                    href="#">Donec porttitor</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item"
                                                                    href="#">Donec vitae facilisis</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item"
                                                                    href="#">Curabitur tempus</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item"
                                                                    href="#">Vivamus in tortor</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item"
                                                                    href="#">Donec vitae ante ante</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item"
                                                                    href="#">Etiam ac rutrum</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="mega-menu-col col-lg-6">
                                                        <ul>
                                                            <li class="dropdown-header">Popular Item</li>
                                                            <li><a class="dropdown-item nav-link nav_item"
                                                                    href="#">Curabitur laoreet</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item"
                                                                    href="#">Vivamus in tortor</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item"
                                                                    href="#">Donec vitae facilisis</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item"
                                                                    href="#">Quisque condimentum</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item"
                                                                    href="#">Etiam ac rutrum</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item"
                                                                    href="#">Donec vitae ante ante</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item"
                                                                    href="#">Donec porttitor</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="mega-menu-col col-lg-5">
                                                <div class="header-banner2">
                                                    <a href="#"><img
                                                            src="{{ 'user/assets/images/menu_banner6.jpg' }}"
                                                            alt="menu_banner"></a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="dropdown dropdown-mega-menu">
                                    <a class="dropdown-item nav-link dropdown-toggler" href="#"
                                        data-bs-toggle="dropdown"><i class="flaticon-camera"></i>
                                        <span>Camera</span></a>
                                    <div class="dropdown-menu">
                                        <ul class="mega-menu d-lg-flex">
                                            <li class="mega-menu-col col-lg-7">
                                                <ul class="d-lg-flex">
                                                    <li class="mega-menu-col col-lg-6">
                                                        <ul>
                                                            <li class="dropdown-header">Featured Item</li>
                                                            <li><a class="dropdown-item nav-link nav_item"
                                                                    href="#">Vestibulum sed</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item"
                                                                    href="#">Donec porttitor</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item"
                                                                    href="#">Donec vitae facilisis</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item"
                                                                    href="#">Curabitur tempus</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item"
                                                                    href="#">Vivamus in tortor</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item"
                                                                    href="#">Donec vitae ante ante</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item"
                                                                    href="#">Etiam ac rutrum</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="mega-menu-col col-lg-6">
                                                        <ul>
                                                            <li class="dropdown-header">Popular Item</li>
                                                            <li><a class="dropdown-item nav-link nav_item"
                                                                    href="#">Curabitur laoreet</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item"
                                                                    href="#">Vivamus in tortor</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item"
                                                                    href="#">Donec vitae facilisis</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item"
                                                                    href="#">Quisque condimentum</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item"
                                                                    href="#">Etiam ac rutrum</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item"
                                                                    href="#">Donec vitae ante ante</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item"
                                                                    href="#">Donec porttitor</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="mega-menu-col col-lg-5">
                                                <div class="header-banner2">
                                                    <a href="#"><img
                                                            src="{{ 'user/assets/images/menu_banner9.jpg' }}"
                                                            alt="menu_banner"></a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="dropdown dropdown-mega-menu">
                                    <a class="dropdown-item nav-link dropdown-toggler" href="#"
                                        data-bs-toggle="dropdown"><i class="flaticon-plugins"></i>
                                        <span>Accessories</span></a>
                                    <div class="dropdown-menu">
                                        <ul class="mega-menu d-lg-flex">
                                            <li class="mega-menu-col col-lg-4">
                                                <ul>
                                                    <li class="dropdown-header">Woman's</li>
                                                    <li><a class="dropdown-item nav-link nav_item"
                                                            href="shop-list-left-sidebar.html">Vestibulum sed</a></li>
                                                    <li><a class="dropdown-item nav-link nav_item"
                                                            href="shop-left-sidebar.html">Donec porttitor</a></li>
                                                    <li><a class="dropdown-item nav-link nav_item"
                                                            href="shop-right-sidebar.html">Donec vitae facilisis</a>
                                                    </li>
                                                    <li><a class="dropdown-item nav-link nav_item"
                                                            href="shop-list.html">Curabitur tempus</a></li>
                                                    <li><a class="dropdown-item nav-link nav_item"
                                                            href="shop-load-more.html">Vivamus in tortor</a></li>
                                                </ul>
                                            </li>
                                            <li class="mega-menu-col col-lg-4">
                                                <ul>
                                                    <li class="dropdown-header">Men's</li>
                                                    <li><a class="dropdown-item nav-link nav_item"
                                                            href="shop-cart.html">Donec vitae ante ante</a></li>
                                                    <li><a class="dropdown-item nav-link nav_item"
                                                            href="checkout.html">Etiam ac rutrum</a></li>
                                                    <li><a class="dropdown-item nav-link nav_item"
                                                            href="wishlist.html">Quisque condimentum</a></li>
                                                    <li><a class="dropdown-item nav-link nav_item"
                                                            href="compare.html">Curabitur laoreet</a></li>
                                                    <li><a class="dropdown-item nav-link nav_item"
                                                            href="order-completed.html">Vivamus in tortor</a></li>
                                                </ul>
                                            </li>
                                            <li class="mega-menu-col col-lg-4">
                                                <ul>
                                                    <li class="dropdown-header">Kid's</li>
                                                    <li><a class="dropdown-item nav-link nav_item"
                                                            href="shop-product-detail.html">Donec vitae facilisis</a>
                                                    </li>
                                                    <li><a class="dropdown-item nav-link nav_item"
                                                            href="shop-product-detail-left-sidebar.html">Quisque
                                                            condimentum</a></li>
                                                    <li><a class="dropdown-item nav-link nav_item"
                                                            href="shop-product-detail-right-sidebar.html">Etiam ac
                                                            rutrum</a></li>
                                                    <li><a class="dropdown-item nav-link nav_item"
                                                            href="shop-product-detail-thumbnails-left.html">Donec vitae
                                                            ante ante</a></li>
                                                    <li><a class="dropdown-item nav-link nav_item"
                                                            href="shop-product-detail-thumbnails-left.html">Donec
                                                            porttitor</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li><a class="dropdown-item nav-link nav_item" href="coming-soon.html"><i
                                            class="flaticon-headphones"></i> <span>Headphones</span></a></li>
                                <li><a class="dropdown-item nav-link nav_item" href="404.html"><i
                                            class="flaticon-console"></i> <span>Gaming</span></a></li>
                                <li><a class="dropdown-item nav-link nav_item" href="login.html"><i
                                            class="flaticon-watch"></i> <span>Watches</span></a></li>
                                <li><a class="dropdown-item nav-link nav_item" href="register.html"><i
                                            class="flaticon-music-system"></i> <span>Home Audio & Theater</span></a>
                                </li>
                                <li><a class="dropdown-item nav-link nav_item" href="coming-soon.html"><i
                                            class="flaticon-monitor"></i> <span>TV & Smart Box</span></a></li>
                                <li><a class="dropdown-item nav-link nav_item" href="404.html"><i
                                            class="flaticon-printer"></i> <span>Printer</span></a></li>
                                <li>
                                    <ul class="more_slide_open">
                                        <li><a class="dropdown-item nav-link nav_item" href="login.html"><i
                                                    class="flaticon-fax"></i> <span>Fax Machine</span></a></li>
                                        <li><a class="dropdown-item nav-link nav_item" href="register.html"><i
                                                    class="flaticon-mouse"></i> <span>Mouse</span></a></li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="more_categories">More Categories</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-8 col-sm-6 col-9">
                    <nav class="navbar navbar-expand-lg">
                        <button class="navbar-toggler side_navbar_toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSidetoggle" aria-expanded="false">
                            <span class="ion-android-menu"></span>
                        </button>
                        <div class="pr_search_icon">
                            <a href="javascript:void(0);" class="nav-link pr_search_trigger"><i
                                    class="linearicons-magnifier"></i></a>
                        </div>
                        <div class="collapse navbar-collapse mobile_side_menu" style="justify-content: center" id="navbarSidetoggle">
                            <ul class="navbar-nav">
                                <li><a class="nav-link nav_item" href="contact.html">Home</a></li>
                                <li><a class="nav-link nav_item" href="contact.html">Shop</a></li>
                                <li><a class="nav-link nav_item" href="contact.html">About Us</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
