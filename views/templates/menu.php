<nav class="pcoded-navbar">
    <div class="pcoded-inner-navbar main-menu">
        <div class="pcoded-navigatio-lavel">NOME CLIENTE</div>
        <ul class="pcoded-item pcoded-left-item">
            <li class="">
                <a href="<?php echo BASE_URL?>dashboard">
                    <span class="pcoded-micon"><i class="fa fa-dashboard"></i></span>
                    <span class="pcoded-mtext">Dashboard</span>
                </a>
            </li>
            <li class="pcoded-hasmenu">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="fa fa-street-view"></i></span>
                    <span class="pcoded-mtext">Administração</span>
                </a>
                <ul class="pcoded-submenu">
                    <li class="">
                        <a href="<?php echo BASE_URL?>cliente">
                            <span class="pcoded-mtext">Permissões</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="<?php echo BASE_URL?>usuario">
                            <span class="pcoded-mtext">Grupos de Permissões</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>