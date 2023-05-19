<nav class="pcoded-navbar">
    <div class="pcoded-inner-navbar main-menu">
        </br></br>
        <ul class="pcoded-item pcoded-left-item">
            <li class="<?php echo ($_SERVER["REQUEST_URI"] == "/" || $_SERVER["REQUEST_URI"] == "/dashboard")?"active":"";?>">
                <a href="<?php echo BASE_URL?>dashboard">
                    <span class="pcoded-micon"><i class="fa fa-dashboard"></i></span>
                    <span class="pcoded-mtext">Dashboard</span>
                </a>
            </li>
            <li class="pcoded-hasmenu <?php echo ($_SERVER["REQUEST_URI"] == "/perfil" || $_SERVER["REQUEST_URI"] == "/usuarios")?"active pcoded-trigger":"";?>">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="fa fa-street-view"></i></span>
                    <span class="pcoded-mtext">Administração</span>
                </a>
                <ul class="pcoded-submenu">
                    <li class="<?php echo ($_SERVER["REQUEST_URI"] == "/perfil")?"active":"";?>">
                        <a href="<?php echo BASE_URL?>perfil">
                            <span class="pcoded-mtext">Perfil</span>
                        </a>
                    </li>
                    <li class="<?php echo ($_SERVER["REQUEST_URI"] == "/usuarios")?"active":"";?>">
                        <a href="<?php echo BASE_URL?>usuarios">
                            <span class="pcoded-mtext">Usuários</span>
                        </a>
                    </li>
                </ul>
            </li>

            <div class="pcoded-navigatio-lavel">CHAT-4</div>
            <li class="<?php echo ($_SERVER["REQUEST_URI"] == "/dashboardChat4")?"active":"";?>">
                <a href="<?php echo BASE_URL?>dashboardChat4">
                    <span class="pcoded-micon"><i class="fa fa-dashboard"></i></span>
                    <span class="pcoded-mtext">Painel CHAT-4</span>
                </a>
            </li>
            <li class="<?php echo ($_SERVER["REQUEST_URI"] == "/usuarioChat4")?"active":"";?>">
                <a href="<?php echo BASE_URL?>usuarioChat4">
                    <span class="pcoded-micon"><i class="fa fa-user-plus"></i></span>
                    <span class="pcoded-mtext">Usuários</span>
                </a>
            </li>
            <li class="<?php echo ($_SERVER["REQUEST_URI"] == "/chat4")?"active":"";?>">
                <a href="<?php echo BASE_URL?>chat4">
                    <span class="pcoded-micon"><i class="fa fa-user-plus"></i></span>
                    <span class="pcoded-mtext">CHAT-4</span>
                </a>
            </li>

            <div class="pcoded-navigatio-lavel">BANCADA</div>
            <li class="">
                <a href="<?php echo BASE_URL?>dashboard">
                    <span class="pcoded-micon"><i class="fa fa-dashboard"></i></span>
                    <span class="pcoded-mtext">Dashboard</span>
                </a>
            </li>
            <li class="pcoded-hasmenu">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="fa fa-desktop"></i></span>
                    <span class="pcoded-mtext">Ações</span>
                </a>
                <ul class="pcoded-submenu">
                    <li class="">
                        <a href="<?php echo BASE_URL?>entradaEquipamento">
                            <span class="pcoded-mtext">Entrada de Equipamento</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="<?php echo BASE_URL?>retiradaEquipamento">
                            <span class="pcoded-mtext">Retirada de Equipamento</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>