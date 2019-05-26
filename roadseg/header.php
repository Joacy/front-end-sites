<header id="header" class="header d-none d-xl-block">
	<div class="container linha-flex centralizado">
		<nav class="navbar">
			<a class="navbar-brand linha-flex centralizado" href="index.php"><img src="imagens/LOGOROAD.png"></a>

			<ul class="navbar-nav linha-flex centralizado">
				<li class="nav-item {{ Request::path() == '/' ? 'active' : '' }} {{ Request::path() == 'home' ? 'active' : '' }}">
					<a class="nav-link" href="index.php">INÍCIO</a>
				</li>
				<li class="nav-item {{ Request::path() == 'sobre' ? 'active' : '' }}">
					<a class="nav-link" href="sobre.php">SOBRE NÓS</a>
				</li>
				<li class="nav-item {{ Request::path() == 'produtos' ? 'active' : '' }}">
					<a class="nav-link" href="produtos.php">PRODUTOS</a>
				</li>
				<li class="nav-item {{ Request::path() == 'clientes' ? 'active' : '' }}">
					<a class="nav-link" href="clientes.php">CLIENTES</a>
				</li>
				<li class="nav-item {{ Request::path() == 'eventos' ? 'active' : '' }}">
					<a class="nav-link" href="eventos.php">EVENTOS</a>
				</li>
				<li class="nav-item {{ Request::path() == 'contato' ? 'active' : '' }}">
					<a class="nav-link" href="contato.php">CONTATO</a>
				</li>
				<a class="nav-link" href="cotacao.php"><button type="button" class="btn botao-header">QUERO CONTRATAR</button></a>
			</ul>
		</nav>
	</div>
</header>

<header id="header1" class="header1 d-xl-none">
	<div class="container linha-flex centralizado">
		<nav class="navbar">
			<a class="navbar-brand linha-flex centralizado" href="home"><img src="imagens/LOGOROAD.png"></a>

			<button class="navbar-toggler abreMenu" type="button">
				<span class="navbar-toggler-icon d-flex flex-row align-items-center justify-content-between"><i class="fas fa-bars"></i></span>
			</button>
		</nav>
	</div>
</header>

<div id="menuHamburger" class="menuHamburger d-xl-none">
	<button class="menuBotaoFecha fechaMenu" type="button">
		<span class="menuIcone linha-flex centralizado"><i class="fas fa-times"></i></span>
	</button>
	<ul class="conteudoMenuHamburger coluna-flex centralizado">
		<li class="menuItem">
			<a class="menuLink" href="index.php">INÍCIO</a>
		</li>
		<li class="menuItem">
			<a class="menuLink" href="sobre.php">SOBRE NÓS</a>
		</li>
		<li class="menuItem">
			<a class="menuLink" href="produtos.php">PRODUTOS</a>
		</li>
		<li class="menuItem">
			<a class="menuLink" href="clientes.php">CLIENTES</a>
		</li>
		<li class="menuItem">
			<a class="menuLink" href="eventos.php">EVENTOS</a>
		</li>
		<li class="menuItem">
			<a class="menuLink" href="contato.php">CONTATO</a>
		</li>
		<li class="menuItem">
			<a class="menuLink" href="cotacao.php">QUERO CONTRATAR</a>
		</li>
	</ul>
</div>