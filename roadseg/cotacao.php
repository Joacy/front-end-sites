<!doctype html>
<html lang="pt_BR">

<?php include('head.php'); ?>

<body>
	<div class="wrapper">

		<?php include('header.php'); ?>

		<!-- Conteúdo -->
		<section class="principal-cotacao coluna-flex centralizado">
			<div class="container">
				<div class="coluna-flex centralizado">
					<h1>LOREM IPSUM DOLOR SIT AMET</h1>
					<a class="btn botao-laranja2" href="javascript:;">Lorem ipsum</a>   
				</div>
			</div>
		</section>

		<section class="formulario-cotacao linha-flex centralizado">
			<div class="container coluna-flex centralizado">
				<h1>FAÇA UMA COTAÇÃO</h1>
				<nav>
					<div class="nav nav-tabs opcoes" id="nav-tab" role="tablist">
						<a class="nav-item nav-link opcao active" id="nav-automovel-tab" data-toggle="tab" href="#nav-automovel" role="tab" aria-controls="nav-automovel" aria-selected="true">Seguro para Automóvel</a>
						<a class="nav-item nav-link opcao" id="nav-vida-tab" data-toggle="tab" href="#nav-vida" role="tab" aria-controls="nav-vida" aria-selected="false">Seguro de Vida</a>
						<a class="nav-item nav-link opcao" id="nav-residencia-tab" data-toggle="tab" href="#nav-residencia" role="tab" aria-controls="nav-residencia" aria-selected="false">Seguro de Residência</a>
						<a class="nav-item nav-link opcao" id="nav-empresas-tab" data-toggle="tab" href="#nav-empresas" role="tab" aria-controls="nav-empresas" aria-selected="false">Seguro para Empresas</a>
						<a class="nav-item nav-link opcao" id="nav-plano-tab" data-toggle="tab" href="#nav-plano" role="tab" aria-controls="nav-plano" aria-selected="false">Plano de Saúde Empresarial</a>
					</div>
				</nav>

				<div class="tab-content conteudo-tab" id="nav-tabContent">
					<div class="tab-pane formularios-tab fade show active" id="nav-automovel" role="tabpanel" aria-labelledby="nav-automovel-tab">
						<form action="enviar-cotacao-veiculo" method="post">
							
							<div class="linha-flex">
								<h2 class="titulo-form">Dados pessoais</h2>
							</div>
							<div class="linha-flex row">
								<div class="col-12 col-md-6">
									<div class="form-group">
										<input required type="text" name="nome" class="form-control" id="nome1" aria-describedby="emailHelp" placeholder="*Nome">
									</div>
								</div>
								<div class="col-12 col-md-6">
									<div class="form-group">
										<input required type="text" pattern="^[0-9]{11}$" name="cpf" class="form-control" id="cpf1" aria-describedby="emailHelp" placeholder="*CPF">
									</div>
								</div>
								<div class="col-12 col-md-6">
									<div class="form-group">
										<input required type="email" name="email" class="form-control" id="email1" aria-describedby="emailHelp" placeholder="*Email">
									</div>
								</div>
								<div class="col-12 col-md-6">
									<div class="form-group">
										<input required type="text" pattern="^[0-9]{2}[0-9]{8,9}$" name="telefone1" class="form-control" id="telefone" aria-describedby="emailHelp" placeholder="*Telefone (com DDD)">
									</div>
								</div>
								<div class="col-12 col-md-6">
									<div class="linha-flex">
										<h1 class="linha-flex centralizado">Nascimento: </h1>
										<div class="linha-flex esquerda form-group">
											<input required type="date" name="data_nascimento" class="form-control" id="data_nascimento1" aria-describedby="emailHelp">
										</div>
									</div>
								</div>
								<div class="col-12 col-md-6">

								</div>
							</div>

							<div class="linha-flex">
								<h2 class="titulo-form">Endereço</h2>
							</div>
							<div class="linha-flex row">
								<div class="col-12 col-md-3">
									<div class="form-group">
										<input required type="text" pattern="^[0-9]{8}$" name="cep" class="form-control" id="cep" aria-describedby="emailHelp" placeholder="*Cep">
									</div>
								</div>
								<div class="col-12 col-md-7">
									<div class="form-group">
										<input required type="text" name="rua" class="form-control" id="rua" aria-describedby="emailHelp" placeholder="*Rua">
									</div>
								</div>
								<div class="col-12 col-md-2">
									<div class="form-group">
										<input required type="text" name="numero" class="form-control" id="numero" aria-describedby="emailHelp" placeholder="*Nº">
									</div>
								</div>
							</div>
							<div class="linha-flex row">
								<div class="col-12 col-md-4">
									<div class="form-group">
										<input required type="text" name="bairro" class="form-control" id="bairro" aria-describedby="emailHelp" placeholder="*Bairro">
									</div>
								</div>
								<div class="col-12 col-md-6">
									<div class="form-group">
										<input required type="text" name="cidade" class="form-control" id="cidade" aria-describedby="emailHelp" placeholder="*Cidade">
									</div>
								</div>
								<div class="col-12 col-md-2">
									<div class="form-group">
										<input required type="text" name="estado" class="form-control" id="estado" aria-describedby="emailHelp" placeholder="*UF">
									</div>
								</div>
							</div>

							<div class="linha-flex">
								<h2 class="titulo-form">Dados do Veículo</h2>
							</div>
							<div class="linha-flex row">
								<div class="col-12 col-md-2">
									<div class="form-group">
										<input required type="text" pattern="^[a-zA-Z]{3}[0-9]{4}$" name="placa" class="form-control" id="placa" aria-describedby="emailHelp" placeholder="*Placa">
									</div>
								</div>
								<div class="col-12 col-md-5">
									<div class="form-group">
										<input required type="text" pattern="^[0-9]{17}$" name="chassi" class="form-control" id="chassi" aria-describedby="emailHelp" placeholder="*Chassi">
									</div>
								</div>
								<div class="col-12 col-md-5">
									<div class="form-group">
										<input required type="text" pattern="^[0-9]{9,11,13,15}$" name="renavam" class="form-control" id="renavam" aria-describedby="emailHelp" placeholder="*Renavam">
									</div>
								</div>
							</div>

							<button type="submit" class="btn botao-azul">Enviar</button>
						</form>
					</div>
					<div class="tab-pane formularios-tab fade" id="nav-vida" role="tabpanel" aria-labelledby="nav-vida-tab">
						<form action="enviar-cotacao-vida" method="post">
							
							<div class="linha-flex">
								<h2 class="titulo-form">Dados pessoais</h2>
							</div>
							<div class="linha-flex row">
								<div class="col-12 col-md-6">
									<div class="form-group">
										<input required type="text" name="nome" class="form-control" id="nome2" aria-describedby="emailHelp" placeholder="*Nome">
									</div>
								</div>
								<div class="col-12 col-md-6">
									<div class="form-group">
										<input required type="text" pattern="^[0-9]{11}$" name="cpf" class="form-control" id="cpf2" aria-describedby="emailHelp" placeholder="*CPF">
									</div>
								</div>
								<div class="col-12 col-md-6">
									<div class="form-group">
										<input required type="email" name="email" class="form-control" id="email2" aria-describedby="emailHelp" placeholder="*Email">
									</div>
								</div>
								<div class="col-12 col-md-6">
									<div class="form-group">
										<input required type="text" pattern="^[0-9]{2}[0-9]{8,9}$" name="telefone" class="form-control" id="telefone2" aria-describedby="emailHelp" placeholder="*Telefone (com DDD)">
									</div>
								</div>
								<div class="col-12 col-md-6">
									<div class="linha-flex">
										<h1 class="linha-flex centralizado">Nascimento: </h1>
										<div class="linha-flex esquerda form-group">
											<input required type="date" name="data_nascimento" class="form-control" id="data_nascimento2" aria-describedby="emailHelp">
										</div>
									</div>
								</div>
								<div class="col-12 col-md-6">

								</div>
							</div>

							<div class="linha-flex">
								<h2 class="titulo-form">Endereço</h2>
							</div>
							<div class="linha-flex row">
								<div class="col-12 col-md-3">
									<div class="form-group">
										<input required type="text" pattern="^[0-9]{8}$" name="cep" class="form-control" id="cep2" aria-describedby="emailHelp" placeholder="*Cep">
									</div>
								</div>
								<div class="col-12 col-md-7">
									<div class="form-group">
										<input required type="text" name="rua" class="form-control" id="rua2" aria-describedby="emailHelp" placeholder="*Rua">
									</div>
								</div>
								<div class="col-12 col-md-2">
									<div class="form-group">
										<input required type="text" name="numero" class="form-control" id="numero2" aria-describedby="emailHelp" placeholder="*Nº">
									</div>
								</div>
							</div>
							<div class="linha-flex row">
								<div class="col-12 col-md-4">
									<div class="form-group">
										<input required type="text" name="bairro" class="form-control" id="bairro2" aria-describedby="emailHelp" placeholder="*Bairro">
									</div>
								</div>
								<div class="col-12 col-md-6">
									<div class="form-group">
										<input required type="text" name="cidade" class="form-control" id="cidade2" aria-describedby="emailHelp" placeholder="*Cidade">
									</div>
								</div>
								<div class="col-12 col-md-2">
									<div class="form-group">
										<input required type="text" name="estado" class="form-control" id="estado2" aria-describedby="emailHelp" placeholder="*UF">
									</div>
								</div>
							</div>

							<button type="submit" class="btn botao-azul">Enviar</button>
						</form>
					</div>

					<div class="tab-pane formularios-tab fade" id="nav-residencia" role="tabpanel" aria-labelledby="nav-residencia-tab">
						<form action="enviar-cotacao-residencia" method="post">
							
							<div class="linha-flex">
								<h2 class="titulo-form">Dados pessoais</h2>
							</div>
							<div class="linha-flex row">
								<div class="col-12 col-md-6">
									<div class="form-group">
										<input required type="text" name="nome" class="form-control" id="nome3" aria-describedby="emailHelp" placeholder="*Nome">
									</div>
								</div>
								<div class="col-12 col-md-6">
									<div class="form-group">
										<input required type="text" pattern="^[0-9]{11}$" name="cpf" class="form-control" id="cpf3" aria-describedby="emailHelp" placeholder="*CPF">
									</div>
								</div>
								<div class="col-12 col-md-6">
									<div class="form-group">
										<input required type="email" name="email" class="form-control" id="email3" aria-describedby="emailHelp" placeholder="*Email">
									</div>
								</div>
								<div class="col-12 col-md-6">
									<div class="form-group">
										<input required type="text" pattern="^[0-9]{2}[0-9]{8,9}$" name="telefone" class="form-control" id="telefone3" aria-describedby="emailHelp" placeholder="*Telefone (com DDD)">
									</div>
								</div>
								<div class="col-12 col-md-6">
									<div class="linha-flex">
										<h1 class="linha-flex centralizado">Nascimento: </h1>
										<div class="linha-flex esquerda form-group">
											<input required type="date" name="data_nascimento" class="form-control" id="data_nascimento3" aria-describedby="emailHelp">
										</div>
									</div>
								</div>
								<div class="col-12 col-md-6">

								</div>
							</div>

							<div class="linha-flex">
								<h2 class="titulo-form">Endereço</h2>
							</div>
							<div class="linha-flex row">
								<div class="col-12 col-md-3">
									<div class="form-group">
										<input required type="text" pattern="^[0-9]{8}$" name="cep" class="form-control" id="cep3" aria-describedby="emailHelp" placeholder="*Cep">
									</div>
								</div>
								<div class="col-12 col-md-7">
									<div class="form-group">
										<input required type="text" name="rua" class="form-control" id="rua3" aria-describedby="emailHelp" placeholder="*Rua">
									</div>
								</div>
								<div class="col-12 col-md-2">
									<div class="form-group">
										<input required type="text" name="numero" class="form-control" id="numero3" aria-describedby="emailHelp" placeholder="*Nº">
									</div>
								</div>
							</div>
							<div class="linha-flex row">
								<div class="col-12 col-md-4">
									<div class="form-group">
										<input required type="text" name="bairro" class="form-control" id="bairro3" aria-describedby="emailHelp" placeholder="*Bairro">
									</div>
								</div>
								<div class="col-12 col-md-6">
									<div class="form-group">
										<input required type="text" name="cidade" class="form-control" id="cidade3" aria-describedby="emailHelp" placeholder="*Cidade">
									</div>
								</div>
								<div class="col-12 col-md-2">
									<div class="form-group">
										<input required type="text" name="estado" class="form-control" id="estado3" aria-describedby="emailHelp" placeholder="*UF">
									</div>
								</div>
							</div>

							<button type="submit" class="btn botao-azul">Enviar</button>
						</form>
					</div>

					<div class="tab-pane formularios-tab fade" id="nav-empresas" role="tabpanel" aria-labelledby="nav-empresas-tab">
						<form action="enviar-cotacao-empresas" method="post">
							
							<div class="linha-flex">
								<h2 class="titulo-form">Dados da Empresa</h2>
							</div>
							<div class="linha-flex row">
								<div class="col-12 col-md-6">
									<div class="form-group">
										<input required type="text" name="nome" class="form-control" id="nome4" aria-describedby="emailHelp" placeholder="*Nome">
									</div>
								</div>
								<div class="col-12 col-md-6">
									<div class="form-group">
										<input required type="text" pattern="^[0-9]{14}$" name="cnpj" class="form-control" id="cnpj4" aria-describedby="emailHelp" placeholder="*CNPJ">
									</div>
								</div>
								<div class="col-12 col-md-6">
									<div class="form-group">
										<input required type="email" name="email" class="form-control" id="email4" aria-describedby="emailHelp" placeholder="*Email">
									</div>
								</div>
								<div class="col-12 col-md-6">
									<div class="form-group">
										<input required type="text" pattern="^[0-9]{2}[0-9]{8,9}$" name="telefone" class="form-control" id="telefone4" aria-describedby="emailHelp" placeholder="*Telefone (com DDD)">
									</div>
								</div>
								<div class="col-12 col-md-6">
									<div class="form-group">
										<input required type="text" name="atividade" class="form-control" id="atividade4" aria-describedby="emailHelp" placeholder="*Atividade">
									</div>
								</div>
								<div class="col-12 col-md-6">

								</div>
							</div>

							<div class="linha-flex">
								<h2 class="titulo-form">Endereço</h2>
							</div>
							<div class="linha-flex row">
								<div class="col-12 col-md-3">
									<div class="form-group">
										<input required type="text" pattern="^[0-9]{8}$" name="cep" class="form-control" id="cep4" aria-describedby="emailHelp" placeholder="*Cep">
									</div>
								</div>
								<div class="col-12 col-md-7">
									<div class="form-group">
										<input required type="text" name="rua" class="form-control" id="rua4" aria-describedby="emailHelp" placeholder="*Rua">
									</div>
								</div>
								<div class="col-12 col-md-2">
									<div class="form-group">
										<input required type="text" name="numero" class="form-control" id="numero4" aria-describedby="emailHelp" placeholder="*Nº">
									</div>
								</div>
							</div>
							<div class="linha-flex row">
								<div class="col-12 col-md-4">
									<div class="form-group">
										<input required type="text" name="bairro" class="form-control" id="bairro4" aria-describedby="emailHelp" placeholder="*Bairro">
									</div>
								</div>
								<div class="col-12 col-md-6">
									<div class="form-group">
										<input required type="text" name="cidade" class="form-control" id="cidade4" aria-describedby="emailHelp" placeholder="*Cidade">
									</div>
								</div>
								<div class="col-12 col-md-2">
									<div class="form-group">
										<input required type="text" name="estado" class="form-control" id="estado4" aria-describedby="emailHelp" placeholder="*UF">
									</div>
								</div>
							</div>

							<button type="submit" class="btn botao-azul">Enviar</button>
						</form>
					</div>
					<div class="tab-pane formularios-tab fade" id="nav-plano" role="tabpanel" aria-labelledby="nav-plano-tab">
						<form action="enviar-cotacao-plano" method="post">
							
							<div class="linha-flex">
								<h2 class="titulo-form">Dados da Empresa</h2>
							</div>
							<div class="linha-flex row">
								<div class="col-12 col-md-6">
									<div class="form-group">
										<input required type="text" name="nome" class="form-control" id="nome5" aria-describedby="emailHelp" placeholder="*Nome">
									</div>
								</div>
								<div class="col-12 col-md-6">
									<div class="form-group">
										<input required type="text" pattern="^[0-9]{14}$" name="cnpj" class="form-control" id="cnpj5" aria-describedby="emailHelp" placeholder="*CNPJ">
									</div>
								</div>
								<div class="col-12 col-md-6">
									<div class="form-group">
										<input required type="email" name="email" class="form-control" id="email5" aria-describedby="emailHelp" placeholder="*Email">
									</div>
								</div>
								<div class="col-12 col-md-6">
									<div class="form-group">
										<input required type="text" pattern="^[0-9]{2}[0-9]{8,9}$" name="telefone5" class="form-control" id="telefone" aria-describedby="emailHelp" placeholder="*Telefone (com DDD)">
									</div>
								</div>
							</div>

							<div class="linha-flex">
								<h2 class="titulo-form">Idades (a partir de 3 pessoas)</h2>
							</div>
							<div class="linha-flex row">
								<div class="col-12 col-md-6">
									<div class="form-group">
										<input required type="text" pattern="^[0-9]{2,3}, [0-9]{2,3}(, [0-9]{2,3})+$" name="idades" class="form-control" id="idades" aria-describedby="emailHelp" placeholder="*Idades (separadas por vírgula e espaço)">
									</div>
								</div>
								<div class="col-12 col-md-6">

								</div>
							</div>

							<button type="submit" class="btn botao-azul">Enviar</button>
						</form>
					</div>
				</div>
			</div>
		</section>

		<section class="sempre-mais">
			<img src="imagens/B5.png">
		</section>

		<section class="entrar-em-contato">
			<div class="container coluna-flex centralizado">
				<h1>
					Contato
				</h1>
				<a href="contato.php"><button type="button"class="btn botao-contato">Entre em Contato</button></a>
			</div>
		</section>

		<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>

		<script type="text/javascript">

			$(document).ready(function() {

				function limpa_formulário_cep() {
                // Limpa valores do formulário de cep.
                $("#rua").val("");
                $("#bairro").val("");
                $("#cidade").val("");
                $("#estado").val("");
            }
            
            //Quando o campo cep perde o foco.
            $("#cep").blur(function() {

                //Nova variável "cep" somente com dígitos.
                var cep = $(this).val().replace(/\D/g, '');

                //Verifica se campo cep possui valor informado.
                if (cep != "") {

                    //Expressão regular para validar o CEP.
                    var validacep = /^[0-9]{8}$/;

                    //Valida o formato do CEP.
                    if(validacep.test(cep)) {

                        //Preenche os campos com "..." enquanto consulta webservice.
                        $("#rua").val("...");
                        $("#bairro").val("...");
                        $("#cidade").val("...");
                        $("#estado").val("...");

                        //Consulta o webservice viacep.com.br/
                        $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

                        	if (!("erro" in dados)) {
                                //Atualiza os campos com os valores da consulta.
                                $("#rua").val(dados.logradouro);
                                $("#bairro").val(dados.bairro);
                                $("#cidade").val(dados.localidade);
                                $("#estado").val(dados.uf);
                            } //end if.
                            else {
                                //CEP pesquisado não foi encontrado.
                                limpa_formulário_cep();
                                alert("CEP não encontrado.");
                            }
                        });
                    } //end if.
                    else {
                        //cep é inválido.
                        limpa_formulário_cep();
                        alert("Formato de CEP inválido.");
                    }
                } //end if.
                else {
                    //cep sem valor, limpa formulário.
                    limpa_formulário_cep();
                }
            });
        });

    </script>

    <script type="text/javascript">

    	$(document).ready(function() {

    		function limpa_formulário_cep() {
                // Limpa valores do formulário de cep.
                $("#rua2").val("");
                $("#bairro2").val("");
                $("#cidade2").val("");
                $("#estado2").val("");
            }
            
            //Quando o campo cep perde o foco.
            $("#cep2").blur(function() {

                //Nova variável "cep" somente com dígitos.
                var cep = $(this).val().replace(/\D/g, '');

                //Verifica se campo cep possui valor informado.
                if (cep != "") {

                    //Expressão regular para validar o CEP.
                    var validacep = /^[0-9]{8}$/;

                    //Valida o formato do CEP.
                    if(validacep.test(cep)) {

                        //Preenche os campos com "..." enquanto consulta webservice.
                        $("#rua2").val("...");
                        $("#bairro2").val("...");
                        $("#cidade2").val("...");
                        $("#estado2").val("...");

                        //Consulta o webservice viacep.com.br/
                        $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

                        	if (!("erro" in dados)) {
                                //Atualiza os campos com os valores da consulta.
                                $("#rua2").val(dados.logradouro);
                                $("#bairro2").val(dados.bairro);
                                $("#cidade2").val(dados.localidade);
                                $("#estado2").val(dados.uf);
                            } //end if.
                            else {
                                //CEP pesquisado não foi encontrado.
                                limpa_formulário_cep();
                                alert("CEP não encontrado.");
                            }
                        });
                    } //end if.
                    else {
                        //cep é inválido.
                        limpa_formulário_cep();
                        alert("Formato de CEP inválido.");
                    }
                } //end if.
                else {
                    //cep sem valor, limpa formulário.
                    limpa_formulário_cep();
                }
            });
        });

    </script>

    <script type="text/javascript">

    	$(document).ready(function() {

    		function limpa_formulário_cep() {
                // Limpa valores do formulário de cep.
                $("#rua3").val("");
                $("#bairro3").val("");
                $("#cidade3").val("");
                $("#estado3").val("");
            }
            
            //Quando o campo cep perde o foco.
            $("#cep3").blur(function() {

                //Nova variável "cep" somente com dígitos.
                var cep = $(this).val().replace(/\D/g, '');

                //Verifica se campo cep possui valor informado.
                if (cep != "") {

                    //Expressão regular para validar o CEP.
                    var validacep = /^[0-9]{8}$/;

                    //Valida o formato do CEP.
                    if(validacep.test(cep)) {

                        //Preenche os campos com "..." enquanto consulta webservice.
                        $("#rua3").val("...");
                        $("#bairro3").val("...");
                        $("#cidade3").val("...");
                        $("#estado3").val("...");

                        //Consulta o webservice viacep.com.br/
                        $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

                        	if (!("erro" in dados)) {
                                //Atualiza os campos com os valores da consulta.
                                $("#rua3").val(dados.logradouro);
                                $("#bairro3").val(dados.bairro);
                                $("#cidade3").val(dados.localidade);
                                $("#estado3").val(dados.uf);
                            } //end if.
                            else {
                                //CEP pesquisado não foi encontrado.
                                limpa_formulário_cep();
                                alert("CEP não encontrado.");
                            }
                        });
                    } //end if.
                    else {
                        //cep é inválido.
                        limpa_formulário_cep();
                        alert("Formato de CEP inválido.");
                    }
                } //end if.
                else {
                    //cep sem valor, limpa formulário.
                    limpa_formulário_cep();
                }
            });
        });

    </script>

    <script type="text/javascript">

    	$(document).ready(function() {

    		function limpa_formulário_cep() {
                // Limpa valores do formulário de cep.
                $("#rua4").val("");
                $("#bairro4").val("");
                $("#cidade4").val("");
                $("#estado4").val("");
            }
            
            //Quando o campo cep perde o foco.
            $("#cep4").blur(function() {

                //Nova variável "cep" somente com dígitos.
                var cep = $(this).val().replace(/\D/g, '');

                //Verifica se campo cep possui valor informado.
                if (cep != "") {

                    //Expressão regular para validar o CEP.
                    var validacep = /^[0-9]{8}$/;

                    //Valida o formato do CEP.
                    if(validacep.test(cep)) {

                        //Preenche os campos com "..." enquanto consulta webservice.
                        $("#rua4").val("...");
                        $("#bairro4").val("...");
                        $("#cidade4").val("...");
                        $("#estado4").val("...");

                        //Consulta o webservice viacep.com.br/
                        $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

                        	if (!("erro" in dados)) {
                                //Atualiza os campos com os valores da consulta.
                                $("#rua4").val(dados.logradouro);
                                $("#bairro4").val(dados.bairro);
                                $("#cidade4").val(dados.localidade);
                                $("#estado4").val(dados.uf);
                            } //end if.
                            else {
                                //CEP pesquisado não foi encontrado.
                                limpa_formulário_cep();
                                alert("CEP não encontrado.");
                            }
                        });
                    } //end if.
                    else {
                        //cep é inválido.
                        limpa_formulário_cep();
                        alert("Formato de CEP inválido.");
                    }
                } //end if.
                else {
                    //cep sem valor, limpa formulário.
                    limpa_formulário_cep();
                }
            });
        });

    </script>
    <!-- Fim do Conteúdo -->

    <?php include('footer.php'); ?>

</div>
<?php include('script.php'); ?>
</body>
</html>