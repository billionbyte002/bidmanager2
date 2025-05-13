<div class="backtotop-wrap position-fixed bottom-0 end-0 z-999 m-2 vstack">
                            <div class="darkmode-trigger cstack w-40px h-40px rounded-circle text-none bg-gray-100 dark:bg-gray-700 dark:text-white" data-darkmode-toggle="">
                    <label class="switch">
                        <span class="sr-only">Dark mode toggle</span>
                        <input type="checkbox">
                        <span class="slider fs-5"></span>
                    </label>
                </div>
                                        <a class="btn btn-sm bg-primary text-white w-40px h-40px rounded-circle" href="to_top" data-uc-backtotop>
                    <i class="unicon-chevron-up"></i>
                </a>
                    </div>


    		<div data-elementor-type="wp-post" data-elementor-id="261" class="elementor elementor-261">
				<div class="elementor-element elementor-element-ab17f27 e-con-full e-flex animejs-disable e-con e-parent" data-id="ab17f27" data-element_type="container">
				<div class="elementor-element elementor-element-339cb6d suitable-dark animejs-disable elementor-widget elementor-widget-tg-header" data-id="339cb6d" data-element_type="widget" data-widget_type="tg-header.default">
				<div class="elementor-widget-container">

        <header class="uc-header uc-navbar-sticky-wrap z-999 " style="--uc-nav-height: 80px" data-uc-sticky="start: 170; show-on-up: true; animation: uc-animation-slide-top; sel-target: .uc-navbar-container; cls-active: uc-navbar-sticky; cls-inactive: uc-navbar-transparent;" >
            <nav class="uc-navbar-container  ft-tertiary z-1">
                <div class="container max-w-xl">
                    <div class="uc-navbar min-h-64px lg:min-h-80px text-gray-900 dark:text-white" data-uc-navbar="animation: uc-animation-slide-top-small; duration: 150;">
                        <div class="uc-navbar-left">
                                                            <div class="uc-logo text-dark dark:text-white">
                                    <a href="{{route('pages.home')}}">
                                        <img class="dark:d-none" src="{{ asset('assets/img/Bidmanager-removebg-preview2.png') }}" alt="BidManager">
                                        <img class="d-none dark:d-block" src="{{ asset('assets/img/Bidmanager-removebg-preview (1).png') }}" alt="BidManager">
                                    </a>
                                </div>
                                                        <ul id="menu-1-339cb6d" class="uc-navbar-nav gap-3 xl:gap-4 d-none lg:d-flex fw-medium ms-5"><li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-2910" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2910 nav-item"><a title="Features" href="{{route('pages.features')}}" class="nav-links">Features</a></li>
{{-- <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-2914" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-1027 current_page_item active menu-item-2914 nav-item"><a title="Pricing" href="{{route('pages.pricing')}}" class="nav-links">Pricing</a></li> --}}
<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-2931" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2931 nav-item"><a title="About" href="{{route('pages.about')}}" class="nav-links">About</a></li>
<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-2915" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2915 nav-item"><a title="Contact" href="{{route('pages.contact')}}" class="nav-links">Contact</a></li>
{{-- <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-2933" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2933 nav-item"><a title="Career" href="{{route('pages.career')}}" class="nav-links">Career</a></li> --}}
{{-- <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-2932" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2932 nav-item"><a title="FAQ" href="{{route('pages.faq')}}" class="nav-links">FAQ</a></li> --}}
<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-2934" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2934 nav-item"><a title="Blogs" href="{{route('pages.blogs')}}" class="nav-links">Blogs</a></li>
</ul>                        </div>
                        <div class="uc-navbar-right">

                                <div class="d-none lg:d-block">
                                    <a class="text-none fw-medium color-inherit" href="{{route('pages.login')}}">
                                        <span>Log in</span>
                                    </a>
                                </div>
                                                            <a class="btn btn-sm btn-primary text-white text-none d-none lg:d-inline-flex" href="{{route('pages.signup')}}">Join for Free</a>


                            <a class="d-block lg:d-none" href="#uc-menu-panel" data-uc-navbar-toggle-icon data-uc-toggle></a>
                        </div>
                    </div>
                </div>
            </nav>
        </header>

        <div id="uc-menu-panel" data-uc-offcanvas="overlay: true;">
    <div class="uc-offcanvas-bar bg-white text-dark dark:bg-gray-900 dark:text-white">
        <header class="uc-offcanvas-header hstack justify-between items-center pb-2 bg-white dark:bg-gray-900">
                            <div class="uc-logo mobile-logo text-dark dark:text-white">
                    <a href="{{route('pages.home')}}" class="h5 text-none text-gray-900 dark:text-white">

                    </a>
                </div>
                        <button class="uc-offcanvas-close rtl:end-auto rtl:start-0 m-1 mt-2 icon-3 btn border-0 dark:text-white dark:text-opacity-50 hover:text-primary hover:rotate-90 duration-150 transition-all" type="button">
                <i class="unicon-close"></i>
            </button>
        </header>

        <div class="panel">
                            <form method="get" action="{{route('pages.home')}}" id="search-panel" class="form-icon-group vstack gap-1 mb-2" data-uc-sticky="">
                    <input type="text" name="s" value="" class="form-control form-control-sm fs-7 rounded-default" placeholder="Search..">
                    <span class="form-icon text-gray icon-1">
                        <i class="unicon-search"></i>
                    </span>
                </form>

            <ul id="menu-2-339cb6d" class="nav-y gap-narrow fw-medium fs-6 uc-nav" data-uc-nav><li id="menu-item-2239" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2239 nav-item"><a title="Features" href="{{route('pages.features')}}" class="nav-links">Features</a></li>
<li id="menu-item-2240" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-1027 current_page_item active menu-item-2240 nav-item"><a title="Pricing" href="{{route('pages.pricing')}}" class="nav-links">Pricing</a></li>
<li id="menu-item-2236" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2236 nav-item"><a title="About" href="{{route('pages.about')}}" class="nav-links">About</a></li>
<li id="menu-item-2237" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2237 nav-item"><a title="Career" href="{{route('pages.career')}}" class="nav-links">Career</a></li>
<li id="menu-item-2238" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2238 nav-item"><a title="Contact" href="{{route('pages.contact')}}" class="nav-links">Contact</a></li>
<li id="menu-item-2241" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children uc-parent menu-item-2241 nav-item"><a title="Inner Pages" href="#" class="nav-links">Inner Pages</a>
<ul class="uc-nav-sub"  role="menu" data-uc-nav>
	<li id="menu-item-2242" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children uc-parent menu-item-2242 nav-item"><a title="Blog" href="#" class="dropdown-items">Blog</a>
	<ul class="uc-nav-sub"  role="menu" data-uc-nav>
		<li id="menu-item-2246" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2246 nav-item"><a title="Blogs" href="{{route('pages.blogs')}}" class="dropdown-items">Blogs</a></li>
		<li id="menu-item-2247" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2247 nav-item"><a title="Blog Insights" href="https://bidmanager.org/?page_id=1630" class="dropdown-items">Blog Insights</a></li>
		<li id="menu-item-2243" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2243 nav-item"><a title="Grid 2 Cols" href="https://bidmanager.org/?page_id=1740" class="dropdown-items">Grid 2 Cols</a></li>
		<li id="menu-item-2244" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2244 nav-item"><a title="Grid 3 Cols" href="https://bidmanager.org/?page_id=1761" class="dropdown-items">Grid 3 Cols</a></li>
		<li id="menu-item-2245" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2245 nav-item"><a title="Grid 4 Cols" href="https://bidmanager.org/?page_id=1771" class="dropdown-items">Grid 4 Cols</a></li>
	</ul>
</li>
	<li id="menu-item-2248" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children uc-parent menu-item-2248 nav-item"><a title="Blog Details" href="#" class="dropdown-items">Blog Details</a>
	<ul class="uc-nav-sub"  role="menu" data-uc-nav>
		<li id="menu-item-2251" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-2251 nav-item"><a title="Blog details - v1" href="https://bidmanager.org/maximizing-your-reach-with-marketing-strategies/" class="dropdown-items">Blog details &#8211; v1</a></li>
		<li id="menu-item-2250" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-2250 nav-item"><a title="Blog details - v2" href="https://bidmanager.org/top-5-reasons-to-invest-in-marketing/" class="dropdown-items">Blog details &#8211; v2</a></li>
		<li id="menu-item-2249" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-2249 nav-item"><a title="Blog details - v3" href="https://bidmanager.org/a-comprehensive-guide-to-marketing/" class="dropdown-items">Blog details &#8211; v3</a></li>
	</ul>
</li>
	<li id="menu-item-2252" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children uc-parent menu-item-2252 nav-item"><a title="Useful pages" href="#" class="dropdown-items">Useful pages</a>
	<ul class="uc-nav-sub"  role="menu" data-uc-nav>
		<li id="menu-item-2253" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2253 nav-item"><a title="Career" href="https://bidmanager.org/career/" class="dropdown-items">Career</a></li>
		<li id="menu-item-2256" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2256 nav-item"><a title="Job Details" href="https://bidmanager.org/job-details/" class="dropdown-items">Job Details</a></li>
		<li id="menu-item-2255" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2255 nav-item"><a title="Integrations" href="https://bidmanager.org/integrations/" class="dropdown-items">Integrations</a></li>
		<li id="menu-item-2254" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2254 nav-item"><a title="Coming Soon" href="https://bidmanager.org/?page_id=1327" class="dropdown-items">Coming Soon</a></li>
	</ul>
</li>
	<li id="menu-item-2257" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children uc-parent menu-item-2257 nav-item"><a title="Others pages" href="#" class="dropdown-items">Others pages</a>
	<ul class="uc-nav-sub"  role="menu" data-uc-nav>
		<li id="menu-item-2268" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2268 nav-item"><a title="FAQ" href="{{route('pages.faq')}}" class="dropdown-items">FAQ</a></li>
		<li id="menu-item-2258" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2258 nav-item"><a title="Terms of use" href="{{route('pages.terms')}}" class="dropdown-items">Terms of use</a></li>
		{{-- <li id="menu-item-2259" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2259 nav-item"><a title="Privacy Policy" href="https://bidmanager.org/?page_id=2836" class="dropdown-items">Privacy Policy</a></li> --}}
	</ul>
</li>
</ul>
</li>
<li id="menu-item-2269" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children uc-parent menu-item-2269 nav-item"><a title="Shop" href="#" class="nav-links">Shop</a>
<ul class="uc-nav-sub"  role="menu" data-uc-nav>
	<li id="menu-item-2270" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children uc-parent menu-item-2270 nav-item"><a title="Shop layouts" href="#" class="dropdown-items">Shop layouts</a>
	<ul class="uc-nav-sub"  role="menu" data-uc-nav>
		<li id="menu-item-2271" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2271 nav-item"><a title="Shop 4 Cols" href="https://bidmanager.org/?page_id=2837" class="dropdown-items">Shop 4 Cols</a></li>
		<li id="menu-item-2272" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2272 nav-item"><a title="Shop 3 Cols" href="https://lexend.themegenix.com/shop/?col=4" class="dropdown-items">Shop 3 Cols</a></li>
		<li id="menu-item-2273" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2273 nav-item"><a title="Shop 2 Cols" href="https://lexend.themegenix.com/shop/?col=6" class="dropdown-items">Shop 2 Cols</a></li>
		<li id="menu-item-2274" class="menu-item menu-item-type-post_type menu-item-object-product menu-item-2274 nav-item"><a title="Shop Details" href="https://bidmanager.org/product/airpods-pro/" class="dropdown-items">Shop Details</a></li>
	</ul>
</li>
	<li id="menu-item-2275" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2275 nav-item"><a title="Archive category" href="https://lexend.themegenix.com/product-category/headphone/" class="dropdown-items">Archive category</a></li>
	<li id="menu-item-2276" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2276 nav-item"><a title="Cart" href="https://bidmanager.org/?page_id=2838" class="dropdown-items">Cart</a></li>
	<li id="menu-item-2277" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2277 nav-item"><a title="Checkout" href="https://bidmanager.org/?page_id=2839" class="dropdown-items">Checkout</a></li>
	<li id="menu-item-2278" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2278 nav-item"><a title="My account" href="https://bidmanager.org/?page_id=2840" class="dropdown-items">My account</a></li>
</ul>
</li>
</ul>
                            <ul class="nav-y gap-narrow fw-medium fs-6" data-uc-nav>
                    <li class="hr opacity-10 my-1"></li>
                                            {{-- <li><a href="https://lexend.themegenix.com/my-account/">Create an account</a></li>
                                            <li><a href="https://lexend.themegenix.com/my-account/">Log in</a></li> --}}
                                    </ul>

                            <ul class="social-icons nav-x mt-4">
                    <li>
                                                    <a href="#" class="icon-2" target="_blank">
                                <i aria-hidden="true" class="unicon-logo-medium"></i>                            </a>
                                                    <a href="#" class="icon-2" target="_blank">
                                <i aria-hidden="true" class="genix unicon-logo-x-filled"></i>                            </a>
                                                    <a href="#" class="icon-2" target="_blank">
                                <i aria-hidden="true" class="genix unicon-logo-instagram"></i>                            </a>
                                                    <a href="#" class="icon-2" target="_blank">
                                <i aria-hidden="true" class="genix unicon-logo-pinterest"></i>                            </a>
                                            </li>
                </ul>

                            <div class="py-2 hstack gap-2 mt-4 bg-white dark:bg-gray-900" data-uc-sticky="position: bottom">
                    <div class="vstack gap-1">
                        <span class="fs-7 opacity-60">Select theme:</span>
                        <div class="darkmode-trigger" data-darkmode-switch="">
                            <label class="switch">
                                <input type="checkbox">
                                <span class="slider fs-5"></span>
                            </label>
                        </div>
                    </div>
                </div>
                    </div>
    </div>
</div>

        </header>

		</div>
				</div>
				</div>
				</div>
