<header id="header" class="header d-none d-xl-block">
    <div class="container">
        <nav class="navbar linha-flex between row">
            <a class="col-3 navbar-brand linha-flex esquerda" href="index.php"><img src="imagens/logo-eletrons.png"></a>
            <ul class="col-8 navbar-nav linha-flex direita">
                <li class="nav-item {{ Request::path() == '/' ? 'active' : '' }} {{ Request::path() == 'home' ? 'active' : '' }}">
                    <a class="nav-link" href="index.php">INÍCIO</a>
                </li>
                <li class="nav-item {{ Request::path() == 'sobre-nos' ? 'active' : '' }}">
                    <a class="nav-link" href="sobre-nos.php">SOBRE NÓS</a>
                </li>
                <li class="nav-item {{ Request::path() == 'cadastro-iluminacao-publica' ? 'active' : '' }} {{ Request::path() == 'cadastro-uso-compartilhado' ? 'active' : '' }} {{ Request::path() == 'cadastro-arborizacao' ? 'active' : '' }} {{ Request::path() == 'emplaquetamento-dos-postes' ? 'active' : '' }}">
                    <div class="dropdown">
                        <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" aria-controls="dropdown">
                            SERVIÇOS
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <div class="fundo">

                                <a class="dropdown-item" href="cadastro-iluminacao-publica.php">CADASTRO DA ILUMINAÇÃO PÚBLICA</a>
                                <a class="dropdown-item" href="cadastro-uso-compartilhado.php">CADASTRO DO USO COMPARTILHADO</a>
                                <a class="dropdown-item" href="cadastro-arborizacao.php">CADASTRO DE ARBORIZAÇÃO</a>
                                <a class="dropdown-item" href="emplaquetamento-dos-postes.php">EMPLAQUETAMENTO DOS POSTES</a>

                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item {{ Request::path() == 'clientes' ? 'active' : '' }}">
                    <a class="nav-link" href="clientes.php">CLIENTES</a>
                </li>
                <li class="nav-item {{ Request::path() == 'contato' ? 'active' : '' }}">
                    <a class="nav-link contato" href="contato.php">CONTATO</a>
                </li>
            </ul>
        </nav>
    </div>
</header>

<header id="header1" class="header1 d-xl-none">
    <div class="container">
        <nav class="navbar linha-flex between row">
            <a class="navbar-brand linha-flex esquerda" href="index.php"><img src="imagens/logo-eletrons.png"></a>
            <button class="navbar-toggler abreMenu" type="button">
                <span class="navbar-toggler-icon d-flex flex-row align-items-center justify-content-between"><i class="fas fa-bars"></i></span>
            </button>
        </nav>
    </div>
</header>

<div id="menuHamburger" class="coluna-flex centralizado menuHamburger d-xl-none">
    <button class="menuBotaoFecha fechaMenu" type="button">
        <span class="linha-flex centralizado menuIcone"><i class="fas fa-times"></i></span>
    </button>
    <ul class="coluna-flex centralizado conteudoMenuHamburger">
        <li class="menuItem">
            <a class="menuLink" href="index.php">INÍCIO</a>
        </li>
        <li class="menuItem">
            <a class="menuLink" href="sobre-nos.php">SOBRE NÓS</a>
        </li>
        <li class="menuItem">
            <a class="menuLink servicos" href="javascript:;">SERVIÇOS</a>
            <ul>
                <li class="subMenuItem"><a class="menuSubLink" href="cadastro-iluminacao-publica.php">Cadastro da Iluminação Pública</a></li>
                <li class="subMenuItem"><a class="menuSubLink" href="cadastro-uso-compartilhado.php">Cadastro do Uso Compartilhado</a></li>
                <li class="subMenuItem"><a class="menuSubLink" href="cadastro-arborizacao.php">Cadastro de Arborização</a></li>
                <li class="subMenuItem"><a class="menuSubLink" href="emplaquetamento-dos-postes.php">Emplaquetamento dos postes</a></li>
            </ul>
        </li>
        <li class="menuItem">
            <a class="menuLink" href="clientes.php">CLIENTES</a>
        </li>
        <li class="menuItem">
            <a class="menuLink" href="contato.php">CONTATO</a>
        </li>
    </ul>
</div>