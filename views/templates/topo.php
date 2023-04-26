<nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">

                    <div class="navbar-logo">
                        <a class="mobile-menu" id="mobile-collapse" href="#!">
                            <i class="feather icon-menu"></i>
                        </a>
                        <a href="<?php echo BASE_URL;?>">
                            <img class="img-fluid" src="..\assets\images\logo.png" alt="Theme-Logo">
                        </a>
                        <a class="mobile-options">
                            <i class="feather icon-more-horizontal"></i>
                        </a>
                    </div>

                    <div class="navbar-container container-fluid">
                        <ul class="nav-left">
                            <li>
                                <a href="#!" onclick="javascript:toggleFullScreen()">
                                    <i class="feather icon-maximize full-screen"></i>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav-right">
                            <li class="header-notification">
                                <div class="dropdown-primary dropdown">
                                    <div class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="feather icon-bell"></i>
                                        <span class="badge bg-c-pink">2</span>
                                    </div>
                                    <ul class="show-notification notification-view dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                        <li>
                                            <h6>Alertas</h6>
                                        </li>
                                        <li>
                                            <div class="media">
                                                <img class="d-flex align-self-center img-radius" src="..\assets\images\avatar-4.jpg" alt="Generic placeholder image">
                                                <div class="media-body">
                                                    <h5 class="notification-user">Cliente 1</h5>
                                                    <p class="notification-msg">NXFilter Vencendo.</p>
                                                    <span class="notification-time">Agora</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media">
                                                <img class="d-flex align-self-center img-radius" src="..\assets\images\avatar-3.jpg" alt="Generic placeholder image">
                                                <div class="media-body">
                                                    <h5 class="notification-user">Cliente 2</h5>
                                                    <p class="notification-msg">Office365 vencendo.</p>
                                                    <span class="notification-time">30 minutos</span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="user-profile header-notification">
                                <div class="dropdown-primary dropdown">
                                    <div class="dropdown-toggle" data-toggle="dropdown">
                                        <img src="..\assets\images\avatar-4.jpg" class="img-radius" alt="User-Profile-Image">
                                        <span>nome.usuario</span>
                                        <i class="feather icon-chevron-down"></i>
                                    </div>
                                    <ul class="show-notification profile-notification dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                        <li>
                                            <a href="<?php echo BASE_URL;?>configuracoes">
                                                <i class="feather icon-settings"></i> Configurações
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo BASE_URL;?>perfil">
                                                <i class="feather icon-user"></i> Perfil
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo BASE_URL;?>logout">
                                                <i class="feather icon-log-out"></i> Sair
                                            </a>
                                        </li>
                                    </ul>

                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>