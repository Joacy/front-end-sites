<header id="header" class="header d-none d-xl-block coluna-flex centralizado">
	<div class="container">
		<nav class="navbar linha-flex between row">
			<a class="col-3 navbar-brand linha-flex start" href="index.php"><div class="caixa-logo linha-flex centralizado"><img src="imagens/logo-estude.png"></div></a>
			<ul class="col-8 navbar-nav linha-flex end">
				<li class="nav-item {{ Request::path() == '/' ? 'active' : '' }} {{ Request::path() == 'home' ? 'active' : '' }}">
					<a class="nav-link" href="index.php">Início</a>
				</li>
				<li class="nav-item {{ Request::path() == 'quem-somos' ? 'active' : '' }}">
					<a class="nav-link" href="quem-somos.php">Quem somos</a>
				</li>
				<li class="nav-item {{ Request::path() == 'nosso-espaco' ? 'active' : '' }}">
					<a class="nav-link" href="nosso-espaco.php">Nosso espaço</a>
				</li>
				<li class="nav-item {{ Request::path() == 'nossos-planos' ? 'active' : '' }}">
					<a class="nav-link" href="nossos-planos.php">Nossos planos</a>
				</li>
				<li class="nav-item {{ Request::path() == 'contato' ? 'active' : '' }}">
					<a class="nav-link" href="contato.php">Contato</a>
				</li>
			</ul>
		</nav>
	</div>
</header>

<header id="header1" class="header1 d-xl-none">
	<div class="container">
		<nav class="navbar linha-flex between row">
			<a class="navbar-brand linha-flex start" href="index.php"><div class="caixa-logo linha-flex centralizado"><img src="imagens/logo-estude.png"></div></a>
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
			<a class="menuLink" href="index.php">Início</a>
		</li>
		<li class="menuItem">
			<a class="menuLink" href="quem-somos.php">Quem somos</a>
		</li>
		<li class="menuItem">
			<a class="menuLink" href="nosso-espaco.php">Nosso espaço</a>
		</li>
		<li class="menuItem">
			<a class="menuLink" href="nossos-planos.php">Nossos planos</a>
		</li>
		<li class="menuItem">
			<a class="menuLink" href="contato.php">Contato</a>
		</li>
	</ul>
</div>