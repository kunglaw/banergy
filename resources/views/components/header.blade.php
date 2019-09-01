   <!-- BEGIN: Header-->
   <nav
       class="header-navbar navbar-expand-lg navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-dark navbar-shadow">
       <div class="navbar-wrapper">
           <div class="navbar-header">
               <ul class="nav navbar-nav flex-row">
                   <li class="nav-item mobile-menu d-lg-none mr-auto"><a
                           class="nav-link nav-menu-main menu-toggle hidden-xs" href="<?=url("home")?>"><i
                               class="ft-menu font-large-1"></i></a></li>
                   <li class="nav-item mr-auto"><a class="navbar-brand" href="<?=url("home")?>"><img class="brand-logo"
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

                       <?php //mega menu @include("components/megamenu") ?>
                   </ul>
                   <ul class="nav navbar-nav float-right">
                       <?php // include("components/lang_dropdown") ?>
                       <?php // include("components/all_dropdown") ?>

                       <li class="dropdown dropdown-user nav-item"><a
                               class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown"><span
                                   class="mr-1 user-name text-bold-700">John Doe</span><span
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
                               <div class="dropdown-divider"></div>
                               <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i
                                       class="material-icons">power_settings_new</i>
                                   Logout</a>
                               <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                   style="display: none;">
                                   {{ csrf_field() }}
                               </form>
                           </div>
                       </li>
                   </ul>
               </div>
           </div>
       </div>
   </nav>
   <!-- END: Header-->