<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

@include("components/head")

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern material-vertical-layout material-layout 2-columns   fixed-navbar"
    data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">

    <!-- BEGIN: Header-->
    <nav
        class="header-navbar navbar-expand-lg navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-dark navbar-shadow">
        <div class="navbar-wrapper">
            <div class="navbar-header">
                <ul class="nav navbar-nav flex-row">
                    <li class="nav-item mobile-menu d-lg-none mr-auto"><a
                            class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i
                                class="ft-menu font-large-1"></i></a></li>
                    <li class="nav-item mr-auto"><a class="navbar-brand" href="index.html"><img class="brand-logo"
                                alt="banergy logo" src="<?=url("banergy-assets/app-assets/images/logo/logo.png")?>">
                            <h3 class="brand-text"> Banergy </h3>
                        </a></li>
                    <li class="nav-item d-none d-lg-block nav-toggle"><a class="nav-link modern-nav-toggle pr-0"
                            data-toggle="collapse"><i class="toggle-icon ft-toggle-right font-medium-3 white"
                                data-ticon="ft-toggle-right"></i></a></li>
                    <li class="nav-item d-lg-none"><a class="nav-link open-navbar-container" data-toggle="collapse"
                            data-target="#navbar-mobile"><i class="material-icons mt-1">more_vert</i></a></li>
                </ul>
            </div>
            <div class="navbar-container content">
                <div class="collapse navbar-collapse" id="navbar-mobile">
                    <ul class="nav navbar-nav mr-auto float-left">
                        <li class="nav-item nav-link-search"><a class="nav-link d-none d-lg-block" href="#"><i
                                    class="material-icons search-icon">search</i>
                                <input class="round form-control search-box" type="text"
                                    placeholder="Explore Modern Admin"><a
                                    class="nav-link dropdown-toggle search-bar-toggle d-lg-none d-m-block"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                        class="material-icons">search</i></a>
                                <div class="dropdown-menu arrow"><a class="dropdown-item">
                                        <input class="round form-control" type="text" placeholder="Search Here"></a>
                                </div>
                            </a></li>
                        <li class="nav-item d-none d-lg-block d-none"><a class="nav-link nav-link-expand" href="#"><i
                                    class="ficon ft-maximize"></i></a></li>
                        <li class="dropdown nav-item mega-dropdown d-lg-block d-none"><a
                                class="dropdown-toggle nav-link" href="#" data-toggle="dropdown">Mega</a>
                            <ul class="mega-dropdown-menu dropdown-menu row">
                                <li class="col-md-2">
                                    <h6 class="dropdown-menu-header text-uppercase mb-1"><i
                                            class="material-icons">list_alt</i> News</h6>
                                    <div id="mega-menu-carousel-example">
                                        <div><img class="rounded img-fluid mb-1"
                                                src="<?=url("banergy-assts/app-assets/images/slider/slider-2.png")?>"
                                                alt="First slide"><a class="news-title mb-0 d-block" href="#">Poster
                                                Frame PSD</a>
                                            <p class="news-content"><span class="font-small-2">January 26, 2018</span>
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-3">
                                    <h6 class="dropdown-menu-header text-uppercase"><i
                                            class="material-icons">arrow_downward</i> Menu</h6>
                                    <ul>
                                        <li class="menu-list">
                                            <ul>
                                                <li><a class="dropdown-item" href="layout-fixed.html"><i
                                                            class="material-icons">content_copy</i> Page layouts</a>
                                                </li>
                                                <li><a class="dropdown-item" href="color-palette-primary.html"><i
                                                            class="material-icons">colorize</i> Color palette</a></li>
                                                <li><a class="dropdown-item" href="layout-2-columns.html"><i
                                                            class="material-icons">star_border</i> Starter kit</a></li>
                                                <li><a class="dropdown-item" href="changelog.html"><i
                                                            class="material-icons">change_history</i> Change log</a>
                                                </li>
                                                <li><a class="dropdown-item" href="https://pixinvent.ticksy.com/"><i
                                                            class="material-icons">person_outline</i> Support center</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="col-md-3">
                                    <h6 class="dropdown-menu-header text-uppercase"><i
                                            class="material-icons">list</i>Accordion</h6>
                                    <div class="mt-1" id="accordionWrap" role="tablist" aria-multiselectable="true">
                                        <div class="card border-0 box-shadow-0 collapse-icon accordion-icon-rotate">
                                            <div class="card-header p-0 pb-2 border-0" id="headingOne" role="tab"><a
                                                    data-toggle="collapse" href="#accordionOne" aria-expanded="true"
                                                    aria-controls="accordionOne">Accordion Item #1</a></div>
                                            <div class="card-collapse collapse show" id="accordionOne" role="tabpanel"
                                                aria-labelledby="headingOne" data-parent="#accordionWrap"
                                                aria-expanded="true">
                                                <div class="card-content">
                                                    <p class="accordion-text text-small-3">Caramels dessert chocolate
                                                        cake pastry jujubes bonbon. Jelly wafer jelly beans. Caramels
                                                        chocolate cake liquorice cake wafer jelly beans croissant apple
                                                        pie.</p>
                                                </div>
                                            </div>
                                            <div class="card-header p-0 pb-2 border-0" id="headingTwo" role="tab"><a
                                                    class="collapsed" data-toggle="collapse" href="#accordionTwo"
                                                    aria-expanded="false" aria-controls="accordionTwo">Accordion Item
                                                    #2</a></div>
                                            <div class="card-collapse collapse" id="accordionTwo" role="tabpanel"
                                                data-parent="#accordionWrap" aria-labelledby="headingTwo"
                                                aria-expanded="false">
                                                <div class="card-content">
                                                    <p class="accordion-text">Sugar plum bear claw oat cake chocolate
                                                        jelly tiramisu dessert pie. Tiramisu macaroon muffin jelly
                                                        marshmallow cake. Pastry oat cake chupa chups.</p>
                                                </div>
                                            </div>
                                            <div class="card-header p-0 pb-2 border-0" id="headingThree" role="tab"><a
                                                    class="collapsed" data-toggle="collapse" href="#accordionThree"
                                                    aria-expanded="false" aria-controls="accordionThree">Accordion Item
                                                    #3</a></div>
                                            <div class="card-collapse collapse" id="accordionThree" role="tabpanel"
                                                aria-labelledby="headingThree" data-parent="#accordionWrap"
                                                aria-expanded="false">
                                                <div class="card-content">
                                                    <p class="accordion-text">Candy cupcake sugar plum oat cake wafer
                                                        marzipan jujubes lollipop macaroon. Cake dragée jujubes donut
                                                        chocolate bar chocolate cake cupcake chocolate topping.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-4">
                                    <h6 class="dropdown-menu-header text-uppercase mb-1"><i
                                            class="material-icons">mail_outline</i> Contact Us</h6>
                                    <form class="form form-horizontal">
                                        <div class="form-body">
                                            <div class="form-group row">
                                                <label class="col-sm-3 form-control-label" for="inputName1">Name</label>
                                                <div class="col-sm-9">
                                                    <div class="position-relative has-icon-left">
                                                        <input class="form-control" type="text" id="inputName1"
                                                            placeholder="John Doe">
                                                        <div class="form-control-position pl-1"><i
                                                                class="material-icons">person_outline</i></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 form-control-label"
                                                    for="inputEmail1">Email</label>
                                                <div class="col-sm-9">
                                                    <div class="position-relative has-icon-left">
                                                        <input class="form-control" type="email" id="inputEmail1"
                                                            placeholder="john@example.com">
                                                        <div class="form-control-position pl-1"><i
                                                                class="material-icons">mail_outline</i></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 form-control-label"
                                                    for="inputMessage1">Message</label>
                                                <div class="col-sm-9">
                                                    <div class="position-relative has-icon-left">
                                                        <textarea class="form-control" id="inputMessage1" rows="2"
                                                            placeholder="Simple Textarea"></textarea>
                                                        <div class="form-control-position pl-1"><i
                                                                class="material-icons simple-textarea">chat_bubble_outline</i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12 mb-1">
                                                    <button class="btn btn-info float-right" type="button"><i
                                                            class="material-icons">send</i> Send </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav float-right">
                        <li class="dropdown dropdown-language nav-item"><a class="dropdown-toggle nav-link"
                                id="dropdown-flag" href="#" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false"><i class="flag-icon flag-icon-gb"></i><span
                                    class="selected-language"></span></a>
                            <div class="dropdown-menu" aria-labelledby="dropdown-flag"><a class="dropdown-item"
                                    href="#"><i class="flag-icon flag-icon-gb"></i> English</a><a class="dropdown-item"
                                    href="#"><i class="flag-icon flag-icon-fr"></i> French</a><a class="dropdown-item"
                                    href="#"><i class="flag-icon flag-icon-cn"></i> Chinese</a><a class="dropdown-item"
                                    href="#"><i class="flag-icon flag-icon-de"></i> German</a></div>
                        </li>
                        <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#"
                                data-toggle="dropdown"><i class="material-icons">notifications_none</i><span
                                    class="badge badge-pill badge-danger badge-up badge-glow">5</span></a>
                            <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                                <li class="dropdown-menu-header">
                                    <h6 class="dropdown-header m-0"><span class="grey darken-2">Notifications</span>
                                    </h6><span class="notification-tag badge badge-danger float-right m-0">5 New</span>
                                </li>
                                <li class="scrollable-container media-list w-100"><a href="javascript:void(0)">
                                        <div class="media">
                                            <div class="media-left align-self-center"><i
                                                    class="material-icons icon-bg-circle bg-cyan">add_box</i></div>
                                            <div class="media-body">
                                                <h6 class="media-heading">You have new order!</h6>
                                                <p class="notification-text font-small-3 text-muted">Lorem ipsum dolor
                                                    sit amet, consectetuer elit.</p><small>
                                                    <time class="media-meta text-muted"
                                                        datetime="2015-06-11T18:29:20+08:00">30 minutes
                                                        ago</time></small>
                                            </div>
                                        </div>
                                    </a><a href="javascript:void(0)">
                                        <div class="media">
                                            <div class="media-left align-self-center"><i
                                                    class="material-icons icon-bg-circle bg-red bg-darken-1">cloud_download</i>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="media-heading red darken-1">99% Server load</h6>
                                                <p class="notification-text font-small-3 text-muted">Aliquam tincidunt
                                                    mauris eu risus.</p><small>
                                                    <time class="media-meta text-muted"
                                                        datetime="2015-06-11T18:29:20+08:00">Five hour
                                                        ago</time></small>
                                            </div>
                                        </div>
                                    </a><a href="javascript:void(0)">
                                        <div class="media">
                                            <div class="media-left align-self-center"><i
                                                    class="material-icons icon-bg-circle bg-yellow bg-darken-3">warning</i>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="media-heading yellow darken-3">Warning notifixation</h6>
                                                <p class="notification-text font-small-3 text-muted">Vestibulum auctor
                                                    dapibus neque.</p><small>
                                                    <time class="media-meta text-muted"
                                                        datetime="2015-06-11T18:29:20+08:00">Today</time></small>
                                            </div>
                                        </div>
                                    </a><a href="javascript:void(0)">
                                        <div class="media">
                                            <div class="media-left align-self-center"><i
                                                    class="material-icons icon-bg-circle bg-cyan">check_circle</i></div>
                                            <div class="media-body">
                                                <h6 class="media-heading">Complete the task</h6><small>
                                                    <time class="media-meta text-muted"
                                                        datetime="2015-06-11T18:29:20+08:00">Last week</time></small>
                                            </div>
                                        </div>
                                    </a><a href="javascript:void(0)">
                                        <div class="media">
                                            <div class="media-left align-self-center"><i
                                                    class="material-icons icon-bg-circle bg-teal">insert_drive_file</i>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="media-heading">Generate monthly report</h6><small>
                                                    <time class="media-meta text-muted"
                                                        datetime="2015-06-11T18:29:20+08:00">Last month</time></small>
                                            </div>
                                        </div>
                                    </a></li>
                                <li class="dropdown-menu-footer"><a class="dropdown-item text-muted text-center"
                                        href="javascript:void(0)">Read all notifications</a></li>
                            </ul>
                        </li>
                        <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#"
                                data-toggle="dropdown"><i class="material-icons">mail_outline </i></a>
                            <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                                <li class="dropdown-menu-header">
                                    <h6 class="dropdown-header m-0"><span class="grey darken-2">Messages</span></h6>
                                    <span class="notification-tag badge badge-warning float-right m-0">4 New</span>
                                </li>
                                <li class="scrollable-container media-list w-100"><a href="javascript:void(0)">
                                        <div class="media">
                                            <div class="media-left"><span
                                                    class="avatar avatar-sm avatar-online rounded-circle"><img
                                                        src="<?=url("banergy-assets/app-assets/images/portrait/small/avatar-s-19.png")?>"
                                                        alt="avatar"><i></i></span></div>
                                            <div class="media-body">
                                                <h6 class="media-heading">Margaret Govan</h6>
                                                <p class="notification-text font-small-3 text-muted">I like your
                                                    portfolio, let's start.</p><small>
                                                    <time class="media-meta text-muted"
                                                        datetime="2015-06-11T18:29:20+08:00">Today</time></small>
                                            </div>
                                        </div>
                                    </a><a href="javascript:void(0)">
                                        <div class="media">
                                            <div class="media-left"><span
                                                    class="avatar avatar-sm avatar-busy rounded-circle"><img
                                                        src="<?=url("banergy-assets/app-assets/images/portrait/small/avatar-s-2.png")?>"
                                                        alt="avatar"><i></i></span></div>
                                            <div class="media-body">
                                                <h6 class="media-heading">Bret Lezama</h6>
                                                <p class="notification-text font-small-3 text-muted">I have seen your
                                                    work, there is</p><small>
                                                    <time class="media-meta text-muted"
                                                        datetime="2015-06-11T18:29:20+08:00">Tuesday</time></small>
                                            </div>
                                        </div>
                                    </a><a href="javascript:void(0)">
                                        <div class="media">
                                            <div class="media-left"><span
                                                    class="avatar avatar-sm avatar-online rounded-circle"><img
                                                        src="<?=url("banergy-assets/app-assets/images/portrait/small/avatar-s-3.png")?>"
                                                        alt="avatar"><i></i></span></div>
                                            <div class="media-body">
                                                <h6 class="media-heading">Carie Berra</h6>
                                                <p class="notification-text font-small-3 text-muted">Can we have call in
                                                    this week ?</p><small>
                                                    <time class="media-meta text-muted"
                                                        datetime="2015-06-11T18:29:20+08:00">Friday</time></small>
                                            </div>
                                        </div>
                                    </a><a href="javascript:void(0)">
                                        <div class="media">
                                            <div class="media-left"><span
                                                    class="avatar avatar-sm avatar-away rounded-circle"><img
                                                        src="<?=url("banergy-assets/app-assets/images/portrait/small/avatar-s-6.png")?>"
                                                        alt="avatar"><i></i></span></div>
                                            <div class="media-body">
                                                <h6 class="media-heading">Eric Alsobrook</h6>
                                                <p class="notification-text font-small-3 text-muted">We have project
                                                    party this saturday.</p><small>
                                                    <time class="media-meta text-muted"
                                                        datetime="2015-06-11T18:29:20+08:00">last month</time></small>
                                            </div>
                                        </div>
                                    </a></li>
                                <li class="dropdown-menu-footer"><a class="dropdown-item text-muted text-center"
                                        href="javascript:void(0)">Read all messages</a></li>
                            </ul>
                        </li>
                        <li class="dropdown dropdown-user nav-item"><a
                                class="dropdown-toggle nav-link dropdown-user-link" href="#"
                                data-toggle="dropdown"><span class="mr-1 user-name text-bold-700">John Doe</span><span
                                    class="avatar avatar-online"><img
                                        src="<?=url("banergy-assets/app-assets/images/portrait/small/avatar-s-19.png")?>"
                                        alt="avatar"><i></i></span></a>
                            <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item"
                                    href="user-profile.html"><i class="material-icons">person_outline</i> Edit
                                    Profile</a><a class="dropdown-item" href="app-email.html"><i
                                        class="material-icons">mail_outline</i> My Inbox</a><a class="dropdown-item"
                                    href="user-cards.html"><i class="material-icons">content_paste</i> Task</a><a
                                    class="dropdown-item" href="app-chat.html"><i
                                        class="material-icons">chat_bubble_outline</i> Chats</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item"
                                    href="login-with-bg-image.html"><i class="material-icons">power_settings_new</i>
                                    Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->

    <div class="main-menu material-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="user-profile">
            <div class="user-info text-center pb-2"><img class="user-img img-fluid rounded-circle w-25 mt-2"
                    src="<?=url("banergy-assets/app-assets/images/portrait/medium/avatar-m-1.png")?>" alt="" />
                <div class="name-wrapper d-block dropdown mt-1"><a class="white dropdown-toggle ml-2" id="user-account"
                        href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span
                            class="user-name">Charlie Adams</span></a>
                    <div class="text-light">UX Designer</div>
                    <div class="dropdown-menu arrow"><a class="dropdown-item"><i
                                class="material-icons align-middle mr-1">person</i><span
                                class="align-middle">Profile</span></a><a class="dropdown-item"><i
                                class="material-icons align-middle mr-1">message</i><span
                                class="align-middle">Messages</span></a><a class="dropdown-item"><i
                                class="material-icons align-middle mr-1">attach_money</i><span
                                class="align-middle">Balance</span></a><a class="dropdown-item"><i
                                class="material-icons align-middle mr-1">settings</i><span
                                class="align-middle">Settings</span></a><a class="dropdown-item"><i
                                class="material-icons align-middle mr-1">power_settings_new</i><span
                                class="align-middle">Log Out</span></a></div>
                </div>
            </div>
        </div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class=" nav-item"><a href="index.html"><i class="material-icons">settings_input_svideo</i><span
                            class="menu-title" data-i18n="">eCommerce Dashboard</span></a>
                </li>
                <li class=" navigation-header"><span data-i18n="nav.category.ecommerce">Ecommerce</span><i
                        class="material-icons nav-menu-icon" data-toggle="tooltip" data-placement="right"
                        data-original-title="Ecommerce">more_horiz</i>
                </li>
                <li class=" nav-item"><a href="ecommerce-product-shop.html"><i
                            class="material-icons">add_shopping_cart</i><span class="menu-title"
                            data-i18n="">Shop</span></a>
                </li>
                <li class=" nav-item"><a href="ecommerce-product-detail.html"><i
                            class="material-icons">format_list_numbered</i><span class="menu-title" data-i18n="">Product
                            Detail</span></a>
                </li>
                <li class=" nav-item"><a href="ecommerce-shopping-cart.html"><i
                            class="material-icons">card_travel</i><span class="menu-title" data-i18n="">Shopping
                            Cart</span></a>
                </li>
                <li class=" nav-item"><a href="ecommerce-checkout.html"><i class="material-icons">local_atm</i><span
                            class="menu-title" data-i18n="">Checkout</span></a>
                </li>
                <li class=" nav-item"><a href="ecommerce-order.html"><i class="material-icons">done</i><span
                            class="menu-title" data-i18n="">Order</span></a>
                </li>
                <li class=" nav-item"><a href="#"><i class="material-icons">content_paste</i><span class="menu-title"
                            data-i18n="nav.invoice.main">Invoice</span></a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="invoice-summary.html"><i class="material-icons"></i><span
                                    data-i18n="nav.invoice.invoice_summary">Invoice Summary</span></a>
                        </li>
                        <li class="active"><a class="menu-item" href="invoice-template.html"><i
                                    class="material-icons"></i><span data-i18n="nav.invoice.invoice_template">Invoice
                                    Template</span></a>
                        </li>
                        <li><a class="menu-item" href="invoice-list.html"><i class="material-icons"></i><span
                                    data-i18n="nav.invoice.invoice_list">Invoice List</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" navigation-header"><span data-i18n="nav.category.ui">User Interface</span><i
                        class="material-icons nav-menu-icon" data-toggle="tooltip" data-placement="right"
                        data-original-title="User Interface">more_horiz</i>
                </li>
                <li class=" nav-item"><a href="#"><i class="material-icons">straighten</i><span class="menu-title"
                            data-i18n="nav.material_components.main">Material Components</span></a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="material-component-buttons.html"><i
                                    class="material-icons"></i><span
                                    data-i18n="nav.material_components.material_buttons">Buttons</span></a>
                        </li>
                        <li><a class="menu-item" href="material-component-cards.html"><i
                                    class="material-icons"></i><span
                                    data-i18n="nav.material_components.material_cards">Cards</span></a>
                        </li>
                        <li><a class="menu-item" href="material-component-chips.html"><i
                                    class="material-icons"></i><span
                                    data-i18n="nav.material_components.material_chips">Chips</span></a>
                        </li>
                        <li><a class="menu-item" href="material-component-datatables.html"><i
                                    class="material-icons"></i><span
                                    data-i18n="nav.material_components.material_datatables">Data tables</span></a>
                        </li>
                        <li><a class="menu-item" href="material-component-dialogs.html"><i
                                    class="material-icons"></i><span
                                    data-i18n="nav.material_components.material_dialogs">Dialogs</span></a>
                        </li>
                        <li><a class="menu-item" href="material-component-elevation-shadows.html"><i
                                    class="material-icons"></i><span
                                    data-i18n="nav.material_components.material_elevation_shadows">Elevation
                                    Shadows</span></a>
                        </li>
                        <li><a class="menu-item" href="material-component-expansion-panels.html"><i
                                    class="material-icons"></i><span
                                    data-i18n="nav.material_components.material_expansion_panels">Expansion
                                    Panels</span></a>
                        </li>
                        <li><a class="menu-item" href="material-component-icons.html"><i
                                    class="material-icons"></i><span
                                    data-i18n="nav.material_components.material_icons">Icons</span></a>
                        </li>
                        <li><a class="menu-item" href="material-component-menu.html"><i class="material-icons"></i><span
                                    data-i18n="nav.material_components.material_menu">Menu</span></a>
                        </li>
                        <li><a class="menu-item" href="material-component-navigation.html"><i
                                    class="material-icons"></i><span
                                    data-i18n="nav.material_components.material_navigation">Navigation Drawer</span></a>
                        </li>
                        <li><a class="menu-item" href="material-component-pickers.html"><i
                                    class="material-icons"></i><span
                                    data-i18n="nav.material_components.material_pickers">Pickers</span></a>
                        </li>
                        <li><a class="menu-item" href="material-component-progress.html"><i
                                    class="material-icons"></i><span
                                    data-i18n="nav.material_components.material_progress">Progress</span></a>
                        </li>
                        <li><a class="menu-item" href="material-component-selection-controls.html"><i
                                    class="material-icons"></i><span
                                    data-i18n="nav.material_components.material_selection_controls">Selection
                                    Controls</span></a>
                        </li>
                        <li><a class="menu-item" href="material-component-snackbars.html"><i
                                    class="material-icons"></i><span
                                    data-i18n="nav.material_components.material_snackbars">Snackbars</span></a>
                        </li>
                        <li><a class="menu-item" href="material-component-steppers.html"><i
                                    class="material-icons"></i><span
                                    data-i18n="nav.material_components.material_steppers">Steppers</span></a>
                        </li>
                        <li><a class="menu-item" href="material-component-tabs.html"><i class="material-icons"></i><span
                                    data-i18n="nav.material_components.material_tabs">Tabs</span></a>
                        </li>
                        <li><a class="menu-item" href="material-component-textfields.html"><i class="material-icons">
                                </i><span data-i18n="nav.material_components.material_textfields">Text fields</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a href="#"><i class="material-icons">view_list</i><span class="menu-title"
                            data-i18n="nav.components.main">Components</span></a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="component-alerts.html"><i class="material-icons"></i><span
                                    data-i18n="nav.components.component_alerts">Alerts</span></a>
                        </li>
                        <li><a class="menu-item" href="component-callout.html"><i class="material-icons"></i><span
                                    data-i18n="nav.components.component_callout">Callout</span></a>
                        </li>
                        <li><a class="menu-item" href="component-buttons-basic.html"><i class="material-icons"></i><span
                                    data-i18n="nav.components.components_buttons.component_buttons_basic">Buttons</span></a>
                        </li>
                        <li><a class="menu-item" href="component-carousel.html"><i class="material-icons"></i><span
                                    data-i18n="nav.components.component_carousel">Carousel</span></a>
                        </li>
                        <li><a class="menu-item" href="component-collapse.html"><i class="material-icons"></i><span
                                    data-i18n="nav.components.component_collapse">Collapse</span></a>
                        </li>
                        <li><a class="menu-item" href="component-dropdowns.html"><i class="material-icons"></i><span
                                    data-i18n="nav.components.component_dropdowns">Dropdowns</span></a>
                        </li>
                        <li><a class="menu-item" href="component-list-group.html"><i class="material-icons"></i><span
                                    data-i18n="nav.components.component_list_group">List Group</span></a>
                        </li>
                        <li><a class="menu-item" href="component-modals.html"><i class="material-icons"></i><span
                                    data-i18n="nav.components.component_modals">Modals</span></a>
                        </li>
                        <li><a class="menu-item" href="component-pagination.html"><i class="material-icons"></i><span
                                    data-i18n="nav.components.component_pagination">Pagination</span></a>
                        </li>
                        <li><a class="menu-item" href="component-navs-component.html"><i
                                    class="material-icons"></i><span
                                    data-i18n="nav.components.component_navs_component">Navs Component</span></a>
                        </li>
                        <li><a class="menu-item" href="component-tabs-component.html"><i
                                    class="material-icons"></i><span
                                    data-i18n="nav.components.component_tabs_component">Tabs Component</span></a>
                        </li>
                        <li><a class="menu-item" href="component-pills-component.html"><i
                                    class="material-icons"></i><span
                                    data-i18n="nav.components.component_pills_component">Pills Component</span></a>
                        </li>
                        <li><a class="menu-item" href="component-tooltips.html"><i class="material-icons"></i><span
                                    data-i18n="nav.components.component_tooltips">Tooltips</span></a>
                        </li>
                        <li><a class="menu-item" href="component-popovers.html"><i class="material-icons"></i><span
                                    data-i18n="nav.components.component_popovers">Popovers</span></a>
                        </li>
                        <li><a class="menu-item" href="component-badges.html"><i class="material-icons"></i><span
                                    data-i18n="nav.components.component_badges">Badges</span></a>
                        </li>
                        <li><a class="menu-item" href="component-pill-badges.html"><i
                                    class="material-icons"></i><span>Pill Badges</span></a>
                        </li>
                        <li><a class="menu-item" href="component-progress.html"><i class="material-icons"></i><span
                                    data-i18n="nav.components.component_progress">Progress</span></a>
                        </li>
                        <li><a class="menu-item" href="component-media-objects.html"><i class="material-icons"></i><span
                                    data-i18n="nav.components.component_media_objects">Media Objects</span></a>
                        </li>
                        <li><a class="menu-item" href="component-scrollable.html"><i class="material-icons"></i><span
                                    data-i18n="nav.components.component_scrollable">Scrollable</span></a>
                        </li>
                        <li><a class="menu-item" href="component-spinners.html"><i class="material-icons"></i><span
                                    data-i18n="nav.components.component_spinners">Spinners</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a href="#"><i class="material-icons">lock_outline</i><span class="menu-title"
                            data-i18n="nav.pages.main">Authentication</span></a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="login-with-bg-image.html"><i
                                    class="material-icons"></i><span>Login</span></a>
                        </li>
                        <li><a class="menu-item" href="register-with-bg-image.html"><i
                                    class="material-icons"></i><span>SignIn</span></a>
                        </li>
                        <li><a class="menu-item" href="recover-password.html"><i class="material-icons"></i><span>Forgot
                                    Password</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a href="#"><i class="material-icons">grid_on</i><span class="menu-title"
                            data-i18n="nav.form_layouts.main">Form Layouts</span></a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="form-layout-basic.html"><i class="material-icons"></i><span
                                    data-i18n="nav.form_layouts.form_layout_basic">Basic Forms</span></a>
                        </li>
                        <li><a class="menu-item" href="form-layout-horizontal.html"><i class="material-icons"></i><span
                                    data-i18n="nav.form_layouts.form_layout_horizontal">Horizontal Forms</span></a>
                        </li>
                        <li><a class="menu-item" href="form-layout-hidden-labels.html"><i
                                    class="material-icons"></i><span
                                    data-i18n="nav.form_layouts.form_layout_hidden_labels">Hidden Labels</span></a>
                        </li>
                        <li><a class="menu-item" href="form-layout-form-actions.html"><i
                                    class="material-icons"></i><span
                                    data-i18n="nav.form_layouts.form_layout_form_actions">Form Actions</span></a>
                        </li>
                        <li><a class="menu-item" href="form-layout-row-separator.html"><i
                                    class="material-icons"></i><span
                                    data-i18n="nav.form_layouts.form_layout_row_separator">Row Separator</span></a>
                        </li>
                        <li><a class="menu-item" href="form-layout-bordered.html"><i class="material-icons"></i><span
                                    data-i18n="nav.form_layouts.form_layout_bordered">Bordered</span></a>
                        </li>
                        <li><a class="menu-item" href="form-layout-striped-rows.html"><i
                                    class="material-icons"></i><span
                                    data-i18n="nav.form_layouts.form_layout_striped_rows">Striped Rows</span></a>
                        </li>
                        <li><a class="menu-item" href="form-layout-striped-labels.html"><i
                                    class="material-icons"></i><span
                                    data-i18n="nav.form_layouts.form_layout_striped_labels">Striped Labels</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a href="#"><i class="material-icons">linear_scale</i><span class="menu-title"
                            data-i18n="nav.form_wizard.main">Form Wizard</span></a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="form-wizard-circle-style.html"><i
                                    class="material-icons"></i><span
                                    data-i18n="nav.form_wizard.form_wizard_circle_style">Circle Style</span></a>
                        </li>
                        <li><a class="menu-item" href="form-wizard-notification-style.html"><i
                                    class="material-icons"></i><span
                                    data-i18n="nav.form_wizard.form_wizard_notification_style">Notification
                                    Style</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a href="#"><i class="material-icons">format_list_numbered</i><span
                            class="menu-title" data-i18n="nav.bootstrap_tables.main">Bootstrap Tables</span></a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="table-basic.html"><i class="material-icons"></i><span
                                    data-i18n="nav.bootstrap_tables.table_basic">Basic Tables</span></a>
                        </li>
                        <li><a class="menu-item" href="table-border.html"><i class="material-icons"></i><span
                                    data-i18n="nav.bootstrap_tables.table_border">Table Border</span></a>
                        </li>
                        <li><a class="menu-item" href="table-sizing.html"><i class="material-icons"></i><span
                                    data-i18n="nav.bootstrap_tables.table_sizing">Table Sizing</span></a>
                        </li>
                        <li><a class="menu-item" href="table-styling.html"><i class="material-icons"></i><span
                                    data-i18n="nav.bootstrap_tables.table_styling">Table Styling</span></a>
                        </li>
                        <li><a class="menu-item" href="table-components.html"><i class="material-icons"></i><span
                                    data-i18n="nav.bootstrap_tables.table_components">Table Components</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a href="#"><i class="material-icons">show_chart</i><span class="menu-title"
                            data-i18n="nav.chartjs.main">Chartjs</span></a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="chartjs-line-charts.html"><i class="material-icons"></i><span
                                    data-i18n="nav.chartjs.chartjs_line_charts">Line charts</span></a>
                        </li>
                        <li><a class="menu-item" href="chartjs-bar-charts.html"><i class="material-icons"></i><span
                                    data-i18n="nav.chartjs.chartjs_bar_charts">Bar charts</span></a>
                        </li>
                        <li><a class="menu-item" href="chartjs-pie-doughnut-charts.html"><i
                                    class="material-icons"></i><span
                                    data-i18n="nav.chartjs.chartjs_pie_doughnut_charts">Pie &amp; Doughnut
                                    charts</span></a>
                        </li>
                        <li><a class="menu-item" href="chartjs-scatter-charts.html"><i class="material-icons"></i><span
                                    data-i18n="nav.chartjs.chartjs_scatter_charts">Scatter charts</span></a>
                        </li>
                        <li><a class="menu-item" href="chartjs-polar-radar-charts.html"><i
                                    class="material-icons"></i><span
                                    data-i18n="nav.chartjs.chartjs_polar_radar_charts">Polar &amp; Radar
                                    charts</span></a>
                        </li>
                        <li><a class="menu-item" href="chartjs-advance-charts.html"><i class="material-icons"></i><span
                                    data-i18n="nav.chartjs.chartjs_advance_charts">Advance charts</span></a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>

    <!-- END: Main Menu-->
    <!-- BEGIN: Content-->
    <div class="app-content content">

        <div class="content-wrapper">
            <div class="content-body">
                <section class="card">
                    <div class="card-body">
                        <h1> Content Title </h1>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light navbar-border navbar-shadow">
        <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span
                class="float-md-left d-block d-md-inline-block">Copyright &copy; 2019 <i class="ft-heart pink"></i><span
                    id="scroll-top"></span></span></p>
    </footer>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="<?=url('banergy-assets/app-assets/vendors/js/material-vendors.min.js')?>"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="<?=url('banergy-assets/app-assets/js/core/app-menu.js')?>"></script>
    <script src="<?=url('banergy-assets/app-assets/js/core/app.js')?>"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="<?=url('banergy-assets/app-assets/js/scripts/pages/material-app.js')?>"></script>
    <!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>