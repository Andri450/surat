     <nav class="navbar navbar-header navbar-expand navbar-light">
                <a class="sidebar-toggler" href="#">
                    <span class="navbar-toggler-icon"></span>
                </a>

                <button class="btn navbar-toggler" type="button" data-toggle="collapse"    data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav d-flex align-items-center navbar-light ml-auto">

                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                            <div class="avatar mr-1">
                                <img src="<?= base_url('assets/images/avatar/avatar-user.svg') ?>" alt="" srcset="">
                            </div>
                            <div class="user-txt">Hi, User</div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="profile-saya.php">
                                <i data-feather="user"></i> Profile Saya
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#"  data-toggle="modal" data-target="#border-less-logout">
                                <i data-feather="log-out"></i> Logout
                            </a>
                        </div>
                    </li>
                    
                   

                </ul>
            </div>
        </nav>