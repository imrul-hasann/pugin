<nav class="pcoded-navbar">
    <div class="nav-list">
        <div class="pcoded-inner-navbar main-menu">
            <ul class="pcoded-item pcoded-left-item">
                <li class="{{\Request::route()->getName() == 'admin.dashboard' ? 'active' : ''}}">
                    <a href="{{ route('admin.dashboard') }}" class="waves-effect waves-dark">
                        <span class="pcoded-micon">
                            <i class="feather icon-home"></i>
                        </span>
                        <span class="pcoded-mtext">Dashboard</span>
                    </a>
                </li>
            </ul>
            <ul class="pcoded-item pcoded-left-item">
{{--                <li class="pcoded-hasmenu @yield('products')">--}}
{{--                    <a href="javascript:void(0)" class="waves-effect waves-dark">--}}
{{--                        <span class="pcoded-micon">--}}
{{--                            <i class="feather icon-box"></i>--}}
{{--                        </span>--}}
{{--                        <span class="pcoded-mtext">Multi menu</span>--}}
{{--                    </a>--}}
{{--                    <ul class="pcoded-submenu">--}}
{{--                        <li class="{{\Request::route()->getName() == 'products.index' || \Request::route()->getName() == 'products.edit' ? 'active' : ''}}">--}}
{{--                            <a href="" class="waves-effect waves-dark">--}}
{{--                                <span class="pcoded-mtext">Sub Menu 1</span>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="{{\Request::route()->getName() == 'products.create' ? 'active' : ''}}">--}}
{{--                            <a href="" class="waves-effect waves-dark">--}}
{{--                                <span class="pcoded-mtext">Sub Menu 1</span>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
                <li class="{{\Request::route()->getName() == 'events.index' ? 'active' : ''}}">
                    <a href="{{route('events.index')}}" class="waves-effect waves-dark">
                        <span class="pcoded-micon">
                            <i class="fas fa-calendar-alt"></i>
                        </span>
                        <span class="pcoded-mtext">Events</span>
                    </a>
                </li>
                <li class="{{\Request::route()->getName() == 'rj.index' ? 'active' : ''}}">
                    <a href="{{route('rj.index')}}" class="waves-effect waves-dark">
                        <span class="pcoded-micon">
                            <i class="fas fa-list"></i>
                        </span>
                        <span class="pcoded-mtext">RJ List</span>
                    </a>
                </li>
                <li class="{{\Request::route()->getName() == 'gallery.index' ? 'active' : ''}}">
                    <a href="{{route('gallery.index')}}" class="waves-effect waves-dark">
                        <span class="pcoded-micon">
                            <i class="far fa-images"></i>
                        </span>
                        <span class="pcoded-mtext">Gallery</span>
                    </a>
                </li>
                <li class="{{\Request::route()->getName() == 'slides.index' ? 'active' : ''}}">
                    <a href="{{route('slides.index')}}" class="waves-effect waves-dark">
                        <span class="pcoded-micon">
                            <i class="far fa-images"></i>
                        </span>
                        <span class="pcoded-mtext">Slides</span>
                    </a>
                </li>
                <li class="{{\Request::route()->getName() == 'contacts.index' ? 'active' : ''}}">
                    <a href="{{route('contacts.index')}}" class="waves-effect waves-dark">
                        <span class="pcoded-micon">
                            <i class="fas fa-address-book"></i>
                        </span>
                        <span class="pcoded-mtext">Contacts</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

{{--<nav id="sidebar" class="sidebar">--}}
{{--    <div class="sidebar-content js-simplebar">--}}
{{--        <a class="sidebar-brand" href="">--}}
{{--            <span class="align-middle">{{config('app.name')}}-Admin</span>--}}
{{--        </a>--}}
{{--    </div>--}}
{{--</nav>--}}
{{--<div class="vertical-menu">--}}
{{--    <div data-simplebar class="h-100">--}}
{{--        <!--- Sidemenu -->--}}
{{--        <div id="sidebar-menu">--}}
{{--            <!-- Left Menu Start -->--}}
{{--            <ul class="metismenu list-unstyled" id="side-menu">--}}
{{--                <li class="menu-title">Menu</li>--}}
{{--                <li>--}}
{{--                    <a href="{{ route('admin.dashboard') }}" class="waves-effect @yield('dashboard')">--}}
{{--                        <i class="ri-home-line "></i>--}}
{{--                        <span>Dashboard</span>--}}
{{--                    </a>--}}
{{--                </li>--}}

{{--                <li>--}}
{{--                    <a href="{{ route('admin.orders.index') }}" class=" waves-effect @yield('orders')">--}}
{{--                        <i class="ri-shopping-cart-line "></i>--}}
{{--                        <span>Orders</span>--}}
{{--                    </a>--}}
{{--                </li>--}}

{{--                <li class="@yield('products-menu')">--}}
{{--                    <a href="javascript: void(0);" class="has-arrow waves-effect @yield('products')">--}}
{{--                        <i class="ri-store-2-line"></i>--}}
{{--                        <span>Products</span>--}}
{{--                    </a>--}}
{{--                    <ul class="sub-menu @yield('show')" aria-expanded="false">--}}
{{--                        <li class="@yield('all-products')"><a href="{{ route('products.index') }}">All Products</a></li>--}}
{{--                        <li class="@yield('add-products')"><a href="{{ route('products.create') }}">Add Product</a></li>--}}
{{--                        <li class="@yield('all-cat')"><a href="{{ route('categories.index') }}">Categories</a></li>--}}
{{--                        <li class="@yield('all-brands')"><a href="{{ route('brands.index') }}">Brands</a></li>--}}
{{--                        <li class="@yield('all-brands')"><a href="{{ route('reviews.all') }}">Product Reviews</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}

{{--                <li class="@yield('marketing')">--}}
{{--                    <a href="javascript: void(0);" class="has-arrow waves-effect @yield('products')">--}}
{{--                        <i class="mdi mdi-bullhorn"></i>--}}
{{--                        <span>Marketing</span>--}}
{{--                    </a>--}}
{{--                    <ul class="sub-menu @yield('show')" aria-expanded="false">--}}
{{--                        <li class="@yield('all-flashdel')"><a href="{{route('flashdeals.index')}}">Flash Deals</a></li>--}}
{{--                        <li class="@yield('all-flashdel')"><a href="{{route('campaigns.index')}}">Campaigns</a></li>--}}
{{--                        <li class="@yield('coupons')"><a href="{{ route('coupons.index') }}"><span>Coupons</span></a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}

{{--                <li class="@yield('blogs')">--}}
{{--                    <a href="javascript: void(0);" class="has-arrow waves-effect @yield('products')">--}}
{{--                        <i class="ri-store-2-line"></i>--}}
{{--                        <span>Blog System</span>--}}
{{--                    </a>--}}
{{--                    <ul class="sub-menu @yield('show')" aria-expanded="false">--}}
{{--                        <li class="@yield('allblog')"><a href="{{ route('blogs.index') }}">All Posts</a></li>--}}
{{--                        <li class="@yield('blogCat')"><a href="{{ route('blogscategories.index') }}">Categories</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}

{{--                <li>--}}
{{--                    <a href="{{ route('customers.index') }}" class="waves-effect @yield('cus')">--}}
{{--                        <i class="ri-user-line"></i>--}}
{{--                        <span>Customers</span>--}}
{{--                    </a>--}}
{{--                </li>--}}

{{--                <li class="@yield('pages-menu')">--}}
{{--                    <a href="javascript: void(0);" class="has-arrow waves-effect @yield('products')">--}}
{{--                        <i class="ri-store-2-line"></i>--}}
{{--                        <span>Pages</span>--}}
{{--                    </a>--}}
{{--                    <ul class="sub-menu @yield('show')" aria-expanded="false">--}}
{{--                        <li class="@yield('all-pages')"><a href="{{ route('pages.index') }}">All Pages</a></li>--}}
{{--                        <li class="@yield('all-cat')"><a href="{{ route('faqs.index') }}">FAQs</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}


{{--                <li class="menu-title">System</li>--}}

{{--                <li class="@yield('Appearance')">--}}
{{--                    <a href="javascript: void(0);" class="has-arrow waves-effect @yield('all-Appearance')">--}}
{{--                        <i class="ri-brush-fill "></i>--}}
{{--                        <span>Website Settings</span>--}}
{{--                    </a>--}}
{{--                    <ul class="sub-menu @yield('show')" aria-expanded="false">--}}
{{--                        <li><a href="{{ route('sliders.index') }}" class="waves-effect @yield('sliders')">Sliders</a></li>--}}
{{--                        <li><a href="{{ route('banners.index') }}" class="waves-effect @yield('banners')">Banners</a></li>--}}
{{--                        <li><a href="{{ route('store.front') }}" class="waves-effect @yield('storefront')">Front End</a></li>--}}
{{--                        <li><a href="{{ route('payment.index') }}" class="waves-effect @yield('paymentMethod')">Payment Method</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a href="{{ route('settings.index') }}" class="waves-effect @yield('settings')">--}}
{{--                        <i class="ri-settings-3-line"></i>--}}
{{--                        <span>Settings</span>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a href="{{ route('backup.index') }}" class="waves-effect @yield('backup')">--}}
{{--                        <i class="ri-database-2-line "></i>--}}
{{--                        <span>Backup</span>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
