<!doctype html>
<html lang="pt_BR">

<?php include('head.php'); ?>

<body>
	<div class="wrapper">

		<?php include('header.php'); ?>

		<!-- Conteúdo -->
		<section class="principal-contato coluna-flex centralizado">
			<div class="container">
				<div class="coluna-flex centralizado">
					<h1>ESTAMOS AQUI PARA O QUE PRECISAR, ENTRE EM CONTATO!</h1> 
				</div>
			</div>
		</section>

		<section class="secao-contato linha-flex centralizado">
			<div class="container">
				<div class="row linha-flex centralizado">
					<div class="col-12 col-lg-6 frases coluna-flex justificado">
						<h1 class="linha-flex esquerda">
							Entre em contato!
						</h1>
						<div class="it linha-flex">
							<i class="coluna-flex centralizado fas fa-map-marker-alt"></i><p class="coluna-flex esquerda">R. Boticário Moncorvo, 734 - Centro, Feira de Santana - BA, 44001-304</p>
						</div>
						<div class="it linha-flex">
							<i class="coluna-flex centralizado fas fa-phone-volume"></i><p class="coluna-flex esquerda">(75) 3623-1460</p>
						</div>
						<div class="it linha-flex">
							<i class="coluna-flex centralizado far fa-envelope"></i><p class="coluna-flex erquerda">contato@roadseg.com.br</p>
						</div>
						<div class="linha-flex">
							<a class="btn" href="https://api.whatsapp.com/send?1=pt_BR&amp;phone=">
								<div class="linha-flex">
									<i class="coluna-flex centralizado fab fa-whatsapp"></i>
									<p class="coluna-flex centralizado">Contato via<br>Whatsapp</p>
								</div>
							</a>
						</div>
					</div>
					<div class="col-12 col-lg-6 formulario coluna-flex justificado">
						<form action="enviar-contato" method="post">
							<div class="form-group">
								<input required type="text" name="nome" class="form-control" id="nome" placeholder="Nome*">
							</div>
							<div class="form-group">
								<input required type="email" name="email" class="form-control" id="email" placeholder="Email*">
							</div>
							<div class="form-group">
								<input required type="text" pattern="^[0-9]{2}[0-9]{8,9}$" name="telefone" class="form-control" id="telefone" placeholder="Telefone*">
							</div>
							<div class="form-group">
								<textarea type="text" name="mensagem" class="form-control" rows="2" id="mensagem" placeholder="Mensagem"></textarea>
							</div>
							<button type="submit" class="btn botao-azul3">Enviar</button>
						</form>
					</div>
				</div>

				<div class="linha-flex centralizado">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3898.9162010267323!2d-38.95891068548275!3d-12.253949991329486!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x714378ff0a94063%3A0xc606e4a7e167aed8!2sRoadSeg!5e0!3m2!1spt-BR!2sbr!4v1549285518264" frameborder="0" allowfullscreen></iframe>
				</div>
			</div>
		</section>
		<!-- Fim do Conteúdo -->
		
		<?php include('footer.php'); ?>

	</div>
	<?php include('script.php'); ?>
</body>
</html>