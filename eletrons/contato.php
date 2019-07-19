<!doctype html>
<html lang="pt_BR">

<?php include('head.php'); ?>

<body>
	<div class="wrapper">

		<?php include('header.php'); ?>

		<!-- Conteúdo -->
		<section class="principal-contato coluna-flex centralizado">
			<div class="container">
				<div class="row linha-principal">
					<div class="col-12 col-md-6">
						<div class="row linha-flex esquerda">
							<h1 class="titulo-principal branco">
								Especialistas em redução de perdas no setor de energia!
							</h1>
							<h2 class="texto-principal branco">
								O segredo de sermos pioneiros nesse serviço é devido a nossa equipe altamente treinada e especializada para os diversos tipos de situação, e com uma tecnologia que desenvolvemos para atualizar o seu banco de dados automaticamente.
							</h2>
						</div>
						<div class="row linha-flex esquerda">
							<a class="btn botao-principal" href="">Quero reduzir as perdas</a>
						</div>
					</div>
					<div class="col-12 col-md-6">

					</div>
				</div>
			</div>
		</section>

		<section class="formulario-contato">
			<div class="container">
				<div class="d-flex flex-row align-items-center justify-content-center">
					<h1>Tem alguma dúvida?</h1>
				</div>
				<form action="enviar-contato" method="POST">
					<div class="d-flex flex-row align-items-center justify-content-center">
						<div class="col-12">
							<div class="d-flex flex-row align-items-center justify-content-center row">
								<div class="col-12">
									<input type="text" required name="nome" placeholder="Seu nome*">
								</div>
								<div class="col-6">
									<input type="text" required name="empresa" placeholder="Sua empresa*">
								</div>
								<div class="col-6">
									<input type="text" required name="segmento" placeholder="Qual segmento?*">
								</div>
								<div class="col-12">
									<input type="email" required name="email" placeholder="E-mail*">
								</div>
							</div>
						</div>
					</div>
					<div class="d-flex flex-row align-items-center justify-content-center">
						<h1>Há algo mais que queira nos dizer?</h1>
					</div>
					<div class="col-12">
						<div class="d-flex flex-row align-items-center justify-content-center row">
							<div class="col-12">
								<textarea name="mensagem" rows="12" placeholder="Mensagem..."></textarea>
							</div>
						</div>
					</div>
					<div class="col-12">
						<div class="d-flex flex-row align-items-center justify-content-center row">
							<div class="d-flex flex-row align-items-center justify-content-center col-12">
								<button class="button btn botao-form" type="submit">Enviar</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</section>

		<section class="fale-conosco">
			<div class="container">
				<div class="d-flex flex-row align-items-center justify-content-center mt-15">
					<h1>Onde Estamos</h1>
				</div>
				<ul class="coluna-flex justify-content-center">
					<li class="d-flex flex-row align-items-center justify-content-start">
						<i class="azul-principal fas fa-map-marker-alt"></i><p>Av. João Durval Carneiro 3665, Sala 312, 3º andar, Caseb, Multiplace Empresarial (Shopping Boulevard), Feira de Santana - Bahia</p>
					</li>
					<li class="d-flex flex-row align-items-center justify-content-start">
						<i class="azul-principal fas fa-phone-volume"></i><p>75 3226.6048</p>
					</li>
					<li class="d-flex flex-row align-items-center justify-content-start">
						<i class="azul-principal fas fa-fax"></i><p>75 3223.6048</p>
					</li>
					<li class="d-flex flex-row align-items-center justify-content-start">
						<i class="azul-principal fas fa-envelope-open"></i><p>contato@eletrons.srv.br</p>
					</li>
				</ul>
			</div>
		</section>
		<!-- Fim do Conteúdo -->

		<?php include('footer1.php'); ?>

	</div>
	<?php include('script.php'); ?>
</body>
</html>