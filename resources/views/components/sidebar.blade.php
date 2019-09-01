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
            <li class=" nav-item"><a href="<?=url("home")?>"><i class="material-icons">settings_input_svideo</i><span
                        class="menu-title" data-i18n="">Dashboard</span></a>
            </li>

            <li class=" nav-item"><a href="#"><i class="material-icons">show_chart</i><span class="menu-title"
                        data-i18n="nav.chartjs.main"> Menu </span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="<?=url("blank")?>"><i class="material-icons"></i><span
                                data-i18n="nav.chartjs.chartjs_line_charts"> Blank </span></a>
                    </li>

                </ul>
            </li>
        </ul>
    </div>
</div>

<!-- END: Main Menu-->