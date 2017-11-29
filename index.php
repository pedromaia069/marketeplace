<?php

session_start();

?>



<!DOCTYPE html>

<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->

<!--[if !IE]><!-->

<html lang="en">

<!--<![endif]-->

	<head>

		<meta charset="utf-8">

		<title>Ecomp Software</title>

            <link rel="icon" href="images/favicon.ico" />

		<meta name="description" content="Worthy a Bootstrap-based, Responsive HTML5 Template">

		<meta name="author" content="htmlcoder.me">



		<!-- Mobile Meta -->

		<meta name="viewport" content="width=device-width, initial-scale=1.0">



		<!-- Favicon -->

		<link rel="shortcut icon" href="images/favicon.ico">



		<!-- Web Fonts -->

		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,700,300&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>

		<link href='http://fonts.googleapis.com/css?family=Raleway:700,400,300' rel='stylesheet' type='text/css'>



		<!-- Bootstrap core CSS -->

		<link href="bootstrap/css/bootstrap.css" rel="stylesheet">



		<!-- Font Awesome CSS -->

		<link href="fonts/font-awesome/css/font-awesome.css" rel="stylesheet">



		<!-- Plugins -->

		<link href="css/animations.css" rel="stylesheet">



		<!-- Worthy core CSS file -->

		<link href="css/style.css" rel="stylesheet">



		<!-- Custom css --> 

		<link href="css/custom.css" rel="stylesheet">



	</head>



	<body class="no-trans">



		<!-- scrollToTop -->

		<!-- ================ -->

		<div class="scrollToTop"><i class="icon-up-open-big"></i></div>



		<!-- header start -->

		<!-- ================ --> 

		<header class="header fixed clearfix navbar navbar-fixed-top">

			<div class="container">

				<div class="row">

					<div class="col-md-4">



						<!-- header-left start -->

						<!-- ================ -->

						<div class="header-left clearfix">



							<!-- logo -->

							<div class="logo smooth-scroll">

								<a href="#banner"><img id="logo" src="images/logo.png" alt="Worthy"></a>

							</div>



						</div>

						<!-- header-left end -->



					</div>

					<div class="col-md-8">



						<!-- header-right start -->

						<!-- ================ -->

						<div class="header-right clearfix">



							<!-- main-navigation start -->

							<!-- ================ -->

							<div class="main-navigation animated">



								<!-- navbar start -->

								<!-- ================ -->

								<nav class="navbar navbar-default" role="navigation">

									<div class="container-fluid">



										<!-- Toggle get grouped for better mobile display -->

										<div class="navbar-header">

											<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">

												<span class="sr-only">Toggle navigation</span>

												<span class="icon-bar"></span>

												<span class="icon-bar"></span>

												<span class="icon-bar"></span>

											</button>

										</div>



										<!-- Collect the nav links, forms, and other content for toggling -->

										<div class="collapse navbar-collapse scrollspy smooth-scroll" id="navbar-collapse-1">

											<ul class="nav navbar-nav navbar-right">

												<li class="active"><a href="#banner">Home</a></li>

												<li><a href="#about">Sobre</a></li>

												<li><a href="#portfolio">Serviços</a></li>

												<li><a href="#contact">Contato</a></li>

                                                <?php

                                                    $l = "nome_usuario";

                                                    $log = isset($_SESSION['nome_usuario'])? "<li><a href=\"home.php\">$_SESSION[$l]</a></li> " : "<li><a href=\"auntenticar.php\">Login</a></li>";

                                                      echo $log;

                                                ?>

											</ul>

										</div>



									</div>

								</nav>

								<!-- navbar end -->



							</div>

							<!-- main-navigation end -->



						</div>

						<!-- header-right end -->



					</div>

				</div>

			</div>

		</header>

		<!-- header end -->



		<!-- banner start -->

		<!-- ================ -->

		<div id="banner" class="banner">

			<div class="banner-image"></div>

			<div class="banner-caption">

				<div class="container">

					<div class="row">

						<div class="col-md-8 col-md-offset-2 object-non-visible" data-animation-effect="fadeIn">

							<h1 class="text-center">A sua solução em <span>Tecnologia</span></h1>

							<!--<p class="lead text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos debitis provident nulla illum minus enim praesentium repellendus ullam cupiditate reiciendis optio voluptatem, recusandae nobis quis aperiam, sapiente libero ut at.</p> -->

						</div>

					</div>

				</div>

			</div>

		</div>

		<!-- banner end -->



		<!-- section start -->

		<!-- ================ -->

		<div class="section clearfix object-non-visible" data-animation-effect="fadeIn">

			<div class="container">

				<div class="row">

					<div class="col-md-12">

						<h1 id="about" class="title text-center">Sobre a  <span>Ecomp Software</span></h1>

						<p class="lead text-center">A sua solução em tecnologia da Informação</p>

						<div class="space"></div>

						<div class="row">

							<div class="col-md-6">

								<img src="images/section-image-1.png" alt="">

								<div class="space"></div>

							</div>

							<div class="col-md-6">

								<p>A Ecomp Software, possui um corpo de colaboradores especialistas nas mais diversas áreas, desde manutenção básica de microcomputadores, passando por Infraestrutura de redes, cabeamento estruturado, até servidores Windows e Linux, Virtualização, Desenvolvimento de sites responsivos, aplicativos mobile e sistemas para windows entre outros serviços na área.</p>

								<p>Além de todos esses serviços prestados, a Ecomp Tecnologia Conta com ampla rede de parceiros que possibilitam a prestação de um suporte que é muito mais do que simples reparo de máquinas. A empresa atende clientes nas mais variadas áreas da TI, como:</p>

								<ul class="list-unstyled">

                                    <li><i class="fa fa-caret-right pr-10 text-colored"></i> Manutenção de Hardware</li>

									<li><i class="fa fa-caret-right pr-10 text-colored"></i> Desenvolvimento De Softwares</li>

									<li><i class="fa fa-caret-right pr-10 text-colored"></i> Instalação de Telefonia</li>

									<li><i class="fa fa-caret-right pr-10 text-colored"></i> Instalação de Câmeras</li>

									<li><i class="fa fa-caret-right pr-10 text-colored"></i> Entre outros</li>

								</ul>

							</div>

						</div>

						<div class="space"></div>

						<h2>Atendimento rapido e diferenciado</h2>

						<div class="row">

							<div class="col-md-6">

								<p>Possuimos ainda como grande diferencial, a ideologia moderna de trabalhos ”Home Office”, em que os técnicos estão distribuídos estrategicamente em todos os pontos da cidade, para melhor e mais rápido atender os clientes na forma de entendimento “Home Care” (Serviços a domicilio). Além de uma base, que proporciona total apoio aos colaborados, um sistema de Help Desk para o melhor contato com os clientes e um alto controle de qualidade em todos os chamados realizados.</p>

                                

                                <p>A empresa possui como visão a excelência no atendimento ao cliente, proporcionando sempre as melhores, mais modernas e apropriadas soluções em tecnologia. Sempre com uma conduta ética, profissional e responsável.</p>

							</div>

							<div class="col-md-6">

								<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

									<div class="panel panel-default">

										<div class="panel-heading" role="tab" id="headingOne">

											<h4 class="panel-title">

												<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">

													Missão

												</a>

											</h4>

										</div>

										<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">

											<div class="panel-body">

												Proporcionar aos nossos clientes, sejam pessoas físicas e/ou empresas, soluções criativas, eficientes e rápidas na área da tecnologia da informação de modo a contribuir para o desenvolvimento dos mesmos.

											</div>

										</div>

									</div>

									<div class="panel panel-default">

										<div class="panel-heading" role="tab" id="headingTwo">

											<h4 class="panel-title">

												<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">

													Visão

												</a>

											</h4>

										</div>

										<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">

											<div class="panel-body">

												Aplicar conhecimentos adquiridos através de estudos na área, obtendo o reconhecimento necessário para se consolidar no mercado de tecnologia, através de uma conduta ética, profissional e responsável, levando à satisfação plena dos nossos clientes.

											</div>

										</div>

									</div>

									<div class="panel panel-default">

										<div class="panel-heading" role="tab" id="headingThree">

											<h4 class="panel-title">

												<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">

													Valores

												</a>

											</h4>

										</div>

										<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">

											<div class="panel-body">

												| Ética | Integridade | Realização | Profissionalismo | Qualidade | Iniciativa | Inovação | Comprometimento | Honestidade | Responsabilidade Social e Ambiental.

											</div>

										</div>

									</div>

								</div>

							</div>

						</div>

					</div>

				</div>

			</div>

		</div>

		<!-- section end -->



		<!-- section start -->

		<!-- ================ -->

		<div class="section">

            <div class="Servicos">

			<div class="container">

				<h1 class="text-center title" id="portfolio">Serviços</h1>

				<div class="separator"></div>

				<p class="lead text-center">Conheça alguns dos nossos serviços</p>

				<br>			

				<div class="row object-non-visible" data-animation-effect="fadeIn">

					<div class="col-md-12">



						<!-- isotope filters start -->

						<div class="filters text-center">

							<ul class="nav nav-pills">

								<li class="active"><a href="#" data-filter="*">Todos</a></li>

								<li><a href="#" data-filter=".web-design">Manutenção</a></li>

								<li><a href="#" data-filter=".app-development">Rede</a></li>

								<li><a href="#" data-filter=".site-building">Desenvolvimento</a></li>

							</ul>

						</div>

						<!-- isotope filters end -->



						<!-- Itens Serviços-->

						<div class="isotope-container row grid-space-20">

							<div class="col-sm-6 col-md-3 isotope-item web-design">

								<div class="image-box">

									<div class="overlay-container">

										<img src="images/Servico1.jpg" alt="">

										<a class="overlay" data-toggle="modal" data-target="#project-1">

											<i class="fa fa-search-plus"></i>

											<span>Visualizar Serviço</span>

										</a>

									</div>

									<a class="btn btn-default btn-block" data-toggle="modal" data-target="#project-1">Manutenção De Notebook</a>

								</div>

								<!-- Modal -->

								<div class="modal fade" id="project-1" tabindex="-1" role="dialog" aria-labelledby="project-1-label" aria-hidden="true">

									<div class="modal-dialog modal-lg">

										<div class="modal-content">

											<div class="modal-header">

												<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>

												<h4 class="modal-title" id="project-1-label">Manutenção De Notebook</h4>

											</div>

											<div class="modal-body">

												<h3>Manutenção De Notebook</h3>

												<div class="row">

													<div class="col-md-6">

														<p>Na manutenção de notebook serão realizados todos os testes de hardware e software na maquina, onde faremos uma limpeza física e lógica, e testes individualmente em cada componente do hardware. Para que você tenha um diagnostico rápido e certeiro para o reparo da sua maquina.</p>

													</div>

													<div class="col-md-6">

														<img src="images/Servico1.jpg" alt="">

													</div>

												</div>

											</div>

											<div class="modal-footer">

                                                <button type="button" onclick="autenticar(1)" class="btn btn-sm btn-primary" data-dismiss="modal">Selecionar</button>

												<button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Fechar</button>

											</div>

										</div>

									</div>

								</div>

								<!-- Modal end -->

							</div>



							<div class="col-sm-6 col-md-3 isotope-item web-design">

								<div class="image-box">

									<div class="overlay-container">

										<img src="images/Servico2.jpg" alt="">

										<a class="overlay" data-toggle="modal" data-target="#project-2">

											<i class="fa fa-search-plus"></i>

											<span>Visualizar Serviço</span>

										</a>

									</div>

									<a class="btn btn-default btn-block" data-toggle="modal" data-target="#project-2">Manutenção De Desktop</a>

								</div>

								<!-- Modal -->

								<div class="modal fade" id="project-2" tabindex="-1" role="dialog" aria-labelledby="project-2-label" aria-hidden="true">

									<div class="modal-dialog modal-lg">

										<div class="modal-content">

											<div class="modal-header">

												<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>

												<h4 class="modal-title" id="project-2-label">Manutenção De Desktop</h4>

											</div>

											<div class="modal-body">

												<h3>Manutenção De Desktop</h3>

												<div class="row">

													<div class="col-md-6">

														<p>Na manutenção de desktop serão realizados todos os testes de hardware e software na maquina, onde faremos uma limpeza física e lógica, e testes individualmente em cada componente do hardware. Para que você tenha um diagnostico rápido e certeiro para o reparo da sua maquina.</p>

													</div>

													<div class="col-md-6">

														<img src="images/Servico2.jpg" alt="">

													</div>

												</div>

											</div>

											<div class="modal-footer">

                                                <button type="button" onclick="autenticar(2)" class="btn btn-sm btn-primary" data-dismiss="modal">Selecionar</button>

												<button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Fechar</button>

											</div>

										</div>

									</div>

								</div>

								<!-- Modal end -->

							</div>

							

							<div class="col-sm-6 col-md-3 isotope-item web-design">

								<div class="image-box">

									<div class="overlay-container">

										<img src="images/Servico3.jpg" alt="">

										<a class="overlay" data-toggle="modal" data-target="#project-3">

											<i class="fa fa-search-plus"></i>

											<span>Visualizar Serviço</span>

										</a>

									</div>

									<a class="btn btn-default btn-block" data-toggle="modal" data-target="#project-3">Manutenção De Mac</a>

								</div>

								<!-- Modal -->

								<div class="modal fade" id="project-3" tabindex="-1" role="dialog" aria-labelledby="project-3-label" aria-hidden="true">

									<div class="modal-dialog modal-lg">

										<div class="modal-content">

											<div class="modal-header">

												<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>

												<h4 class="modal-title" id="project-3-label">Manutenção De Mac</h4>

											</div>

											<div class="modal-body">

												<h3>Manutenção De Mac</h3>

												<div class="row">

													<div class="col-md-6">

														<p>Na manutenção de Mac serão realizados todos os testes de hardware e software na maquina, onde faremos uma limpeza física e lógica, e testes individualmente em cada componente do hardware. Para que você tenha um diagnostico rápido e certeiro para o reparo da sua maquina.</p>

													</div>

													<div class="col-md-6">

														<img src="images/Servico3.jpg" alt="">

													</div>

												</div>

											</div>

											<div class="modal-footer">

													<button type="button" class="btn btn-sm btn-primary" onclick="autenticar(3)" data-dismiss="modal">Selecionar</button>

												<button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Fechar</button>

											</div>

										</div>

									</div>

								</div>

								<!-- Modal end -->

							</div>

							

							<div class="col-sm-6 col-md-3 isotope-item app-development">

								<div class="image-box">

									<div class="overlay-container">

										<img src="images/Servico4.jpg" alt="">

										<a class="overlay" data-toggle="modal" data-target="#project-4">

											<i class="fa fa-search-plus"></i>

											<span>Visualizar Serviço</span>

										</a>

									</div>

									<a class="btn btn-default btn-block" data-toggle="modal" data-target="#project-4">INFRAESTRUTURA DE REDE</a>

								</div>

								<!-- Modal -->

								<div class="modal fade" id="project-4" tabindex="-1" role="dialog" aria-labelledby="project-4-label" aria-hidden="true">

									<div class="modal-dialog modal-lg">

										<div class="modal-content">

											<div class="modal-header">

												<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>

												<h4 class="modal-title" id="project-4-label">INFRAESTRUTURA DE REDES DOMÉSTICAS E EMPRESARIAIS</h4>

											</div>

											<div class="modal-body">

												<h3>INFRAESTRUTURA DE REDES DOMÉSTICAS E EMPRESARIAIS</h3>

												<div class="row">

													<div class="col-md-6">

														<p>Uma infraestrutura de rede é especialmente útil quando você quer se manter conectado a servidores, conectar unidades, gerenciar usuários, armazenar e restaurar dados, além de criar conexões mais rápidas para maiores fluxos de informações, peça já um orçamento.</p>

													</div>

													<div class="col-md-6">

														<img src="images/Servico4.jpg" alt="">

													</div>

												</div>

											</div>

											<div class="modal-footer">

                                                <button type="button" onclick="autenticar(4)" class="btn btn-sm btn-primary" data-dismiss="modal">Selecionar</button>

												<button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Fechar</button>

											</div>

										</div>

									</div>

								</div>

								<!-- Modal end -->

							</div>

							

							<div class="col-sm-6 col-md-3 isotope-item app-development">

								<div class="image-box">

									<div class="overlay-container">

										<img src="images/Servico5.jpg" alt="">

										<a class="overlay" data-toggle="modal" data-target="#project-5">

											<i class="fa fa-search-plus"></i>

											<span>Visualizar Serviço</span>

										</a>

									</div>

									<a class="btn btn-default btn-block" data-toggle="modal" data-target="#project-5">CONFIGURAÇÃO DE REDE</a>

								</div>

								<!-- Modal -->

								<div class="modal fade" id="project-5" tabindex="-1" role="dialog" aria-labelledby="project-5-label" aria-hidden="true">

									<div class="modal-dialog modal-lg">

										<div class="modal-content">

											<div class="modal-header">

												<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>

												<h4 class="modal-title" id="project-5-label">CONFIGURAÇÃO DE REDES DOMÉSTICAS E EMPRESARIAIS</h4>

											</div>

											<div class="modal-body">

												<h3>CONFIGURAÇÃO DE REDES DOMÉSTICAS E EMPRESARIAIS</h3>

												<div class="row">

													<div class="col-md-6">

														<p>Tenha uma internet, rápida e segura, e mais eficiente e com o melhor preço do mercado.</p>

													</div>

													<div class="col-md-6">

														<img src="images/Servico5.jpg" alt="">

													</div>

												</div>

											</div>

											<div class="modal-footer">

                                                <button type="button" onclick="autenticar(5)" class="btn btn-sm btn-primary" data-dismiss="modal">Selecionar</button>

												<button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Fechar</button>

											</div>

										</div>

									</div>

								</div>

								<!-- Modal end -->

							</div>

							

							<div class="col-sm-6 col-md-3 isotope-item app-development">

								<div class="image-box">

									<div class="overlay-container">

										<img src="images/Servico6.jpg" alt="">

										<a class="overlay" data-toggle="modal" data-target="#project-6">

											<i class="fa fa-search-plus"></i>

											<span>Visualizar Serviço</span>

										</a>

									</div>

									<a class="btn btn-default btn-block" data-toggle="modal" data-target="#project-6">STORAGE</a>

								</div>

								<!-- Modal -->

								<div class="modal fade" id="project-6" tabindex="-1" role="dialog" aria-labelledby="project-6-label" aria-hidden="true">

									<div class="modal-dialog modal-lg">

										<div class="modal-content">

											<div class="modal-header">

												<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>

												<h4 class="modal-title" id="project-6-label">STORAGE</h4>

											</div>

											<div class="modal-body">

												<h3>STORAGE</h3>

												<div class="row">

													<div class="col-md-6">

														<p>Configure uma nuvem local, faça backup dos seus arquivos, e muito mais.</p>

													</div>

													<div class="col-md-6">

														<img src="images/Servico6.jpg" alt="">

													</div>

												</div>

											</div>

											<div class="modal-footer">

                                                <button type="button" onclick="autenticar(6)" class="btn btn-sm btn-primary" data-dismiss="modal">Selecionar</button>

												<button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Fechar</button>

											</div>

										</div>

									</div>

								</div>

								<!-- Modal end -->

							</div>

							

							<div class="col-sm-6 col-md-3 isotope-item site-building">

								<div class="image-box">

									<div class="overlay-container">

										<img src="images/Servico7.jpg" alt="">

										<a class="overlay" data-toggle="modal" data-target="#project-7">

											<i class="fa fa-search-plus"></i>

											<span>Visualizar Serviço</span>

										</a>

									</div>

									<a class="btn btn-default btn-block" data-toggle="modal" data-target="#project-7">Desenvolvimento De Sites</a>

								</div>

								<!-- Modal -->

								<div class="modal fade" id="project-7" tabindex="-1" role="dialog" aria-labelledby="project-7-label" aria-hidden="true">

									<div class="modal-dialog modal-lg">

										<div class="modal-content">

											<div class="modal-header">

												<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>

												<h4 class="modal-title" id="project-7-label">Desenvolvimento De Sites Responsivos</h4>

											</div>

											<div class="modal-body">

												<h3>Desenvolvimento De Sites Responsivos</h3>

												<div class="row">

													<div class="col-md-6">

														<p>Desenvolvimento de sites responsivos, com o que há de mais moderno para layouts web. Faça seu site com um time de especialistas, com agilidade e um preço acessível.</p>

													</div>

													<div class="col-md-6">

														<img src="images/Servico7.jpg" alt="">

													</div>

												</div>

											</div>

											<div class="modal-footer">

                                                <button type="button" onclick="autenticar(8)" class="btn btn-sm btn-primary" data-dismiss="modal">Selecionar</button>

												<button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Fechar</button>

											</div>

										</div>

									</div>

								</div>

								<!-- Modal end -->

							</div>

							

							<div class="col-sm-6 col-md-3 isotope-item site-building">

								<div class="image-box">

									<div class="overlay-container">

										<img src="images/Servico8.jpg" alt="">

										<a class="overlay" data-toggle="modal" data-target="#project-8">

											<i class="fa fa-search-plus"></i>

											<span>Visualizar Serviço</span>

										</a>

									</div>

									<a class="btn btn-default btn-block" data-toggle="modal" data-target="#project-8">Desenvolvimento de Apps</a>

								</div>

								<!-- Modal -->

								<div class="modal fade" id="project-8" tabindex="-1" role="dialog" aria-labelledby="project-8-label" aria-hidden="true">

									<div class="modal-dialog modal-lg">

										<div class="modal-content">

											<div class="modal-header">

												<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>

												<h4 class="modal-title" id="project-8-label">Desenvolvimento de Apps</h4>

											</div>

											<div class="modal-body">

												<h3>Desenvolvimento de Apps</h3>

												<div class="row">

													<div class="col-md-6">

														<p>Desenvolvimento de aplicativos para smartphone, multi plataforma, e mantenha seu projeto atualizado e na palma da mão seu cliente há onde quer que ele vá.</p>

													</div>

													<div class="col-md-6">

														<img src="images/Servico8.jpg" alt="">

													</div>

												</div>

											</div>

											<div class="modal-footer">

                                                <button type="button" onclick="autenticar(8)" class="btn btn-sm btn-primary" data-dismiss="modal">Selecionar</button>

												<button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Fechar</button>

											</div>

										</div>

									</div>

								</div>

								<!-- Modal end -->

							</div>



							<div class="col-sm-6 col-md-3 isotope-item site-building">

								<div class="image-box">

									<div class="overlay-container">

										<img src="images/Servico9.jpg" alt="">

										<a class="overlay" data-toggle="modal" data-target="#project-9">

											<i class="fa fa-search-plus"></i>

											<span>Visualizar Serviço</span>

										</a>

									</div>

									<a class="btn btn-default btn-block" data-toggle="modal" data-target="#project-9">Sistemas para Windows</a>

								</div>

								<!-- Modal -->

								<div class="modal fade" id="project-9" tabindex="-1" role="dialog" aria-labelledby="project-9-label" aria-hidden="true">

									<div class="modal-dialog modal-lg">

										<div class="modal-content">

											<div class="modal-header">

												<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>

												<h4 class="modal-title" id="project-9-label">Desenvolvimento de sistemas para Windows</h4>

											</div>

											<div class="modal-body">

												<h3>Desenvolvimento de sistemas para Windows</h3>

												<div class="row">

													<div class="col-md-6">

														<p>Mantenha o seu negocio otimizado, com sistemas desenvolvidos para melhorar o processo da sua empresa, planejado e implementado pensando em você.</p>

													</div>

													<div class="col-md-6">

														<img src="images/Servico9.jpg" alt="">

													</div>

												</div>

											</div>

											<div class="modal-footer">

                                                <button type="button" onclick="autenticar(9)" class="btn btn-sm btn-primary" data-dismiss="modal">Selecionar</button>

												<button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Fechar</button>

											</div>

										</div>

									</div>

								</div>

								<!-- Modal end -->

							</div>



							

						</div>

						<!-- portfolio items end -->

					

					</div>

				</div>

			</div>

        </div>

		</div>

		<!-- section end -->



		<!-- footer start -->

		<!-- ================ -->

		<footer id="footer">



			<!-- .footer start -->

			<!-- ================ -->

			<div class="footer section">

				<div class="container">

					<h1 class="title text-center" id="contact">Contato</h1>

					<div class="space"></div>

					<div class="row">

						<div class="col-sm-6">

							<div class="footer-content">

								<p class="large">Entre em contato com a Ecomp Software e tire suas duvidas.</p>

								<ul class="list-icons">

									<li><i class="fa fa-map-marker pr-10"></i>Av. Capitão Mor Golveia - Lagoa Nova, Natal - RN, 59078-970</li>

									<li><i class="fa fa-phone pr-10"></i>(84)30133030</li>

									<li><i class="fa fa-envelope-o pr-10"></i>contato@ecomptec.com.br</li>

								</ul>

								<ul class="social-links">

									<li class="facebook"><a target="_blank" href="https://www.facebook.com/EcompTecnologia/"><i class="fa fa-facebook"></i></a></li>

									<li class="facebook"><a target="_blank" href="https://www.instagram.com/ecomptec/"><i class="fa fa-instagram"></i></a></li>

								</ul>

							</div>

						</div>

						<div class="col-sm-6">

							<div class="footer-content">
                                <?php
                                        if (!(empty($_POST['email']) && empty($_POST['nome']) && empty($_POST['mensagem']))){
                                        // Inclui o arquivo class.phpmailer.php localizado na pasta class
                                        require_once("class/class.phpmailer.php");

                                        // Inicia a classe PHPMailer
                                        $mail = new PHPMailer(true);

                                        // Define os dados do servidor e tipo de conexão
                                        // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
                                        $mail->IsSMTP(); // Define que a mensagem será SMTP

                                        try {
                                             $mail->Host = 'mail.ecomptec.com.br'; // Endereço do servidor SMTP (Autenticação, utilize o host smtp.seudomínio.com.br)
                                             $mail->SMTPAuth   = true;  // Usar autenticação SMTP (obrigatório para smtp.seudomínio.com.br)
                                             $mail->Port       = 587; //  Usar 587 porta SMTP
                                             $mail->Username = 'contato@ecomptec.com.br'; // Usuário do servidor SMTP (endereço de email)
                                             $mail->Password = 'ecomptec@2013'; // Senha do servidor SMTP (senha do email usado)
                                             $mail->CharSet="utf-8";
                                             //Define o remetente
                                             // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=    
                                             $mail->SetFrom('contato@ecomptec.com.br', 'Contato Ecomp Software'); //Seu e-mail
                                             //$mail->AddReplyTo('seu@e-mail.com.br', 'Nome'); //Seu e-mail
                                             $mail->Subject = 'Duvida Site Ecomp Software';//Assunto do e-mail


                                             //Define os destinatário(s)
                                             //=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
                                             $mail->AddAddress('contato@ecomptec.com.br', 'Contato Ecomp Software');

                                             //Campos abaixo são opcionais 
                                             //=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
                                             //$mail->AddCC('destinarario@dominio.com.br', 'Destinatario'); // Copia
                                             //$mail->AddBCC('destinatario_oculto@dominio.com.br', 'Destinatario2`'); // Cópia Oculta
                                             //$mail->AddAttachment('images/phpmailer.gif');      // Adicionar um anexo


                                             //Define o corpo do email
                                             $mail->MsgHTML('<b>'.'Nome: '.$_POST['nome'].'</b><br><b>'.'E-mail: '.$_POST['email'].'</b><br><br>'.$_POST['mensagem']); 

                                             ////Caso queira colocar o conteudo de um arquivo utilize o método abaixo ao invés da mensagem no corpo do e-mail.
                                             //$mail->MsgHTML(file_get_contents('arquivo.html'));

                                             $mail->Send();
                                             //echo '<div class="alert alert-success">Thank You! I will be in touch</div>';

                                             echo ' <div class="alert alert-success" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>Mensagem enviada com sucesso!</div>';

                                             //caso apresente algum erro é apresentado abaixo com essa exceção.
                                             }catch (phpmailerException $e) {
                                                     echo ' <div class="alert alert-danger" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>Erro ao enviar mensagem</div>';

                                            }

                                    }
                                ?>

								<form role="form" method="post" id="frm-contato">

									<div class="form-group has-feedback">

										<label class="sr-only" for="name2">Nome</label>

										<input type="text" class="form-control" placeholder="Nome" name="nome" required>

										<i class="fa fa-user form-control-feedback"></i>

									</div>

									<div class="form-group has-feedback">

										<label class="sr-only" for="email2">E-mail</label>

										<input type="email" class="form-control" placeholder="E-mail" name="email" required>

										<i class="fa fa-envelope form-control-feedback"></i>

									</div>

									<div class="form-group has-feedback">

										<label class="sr-only" for="message2">Mensagem</label>

										<textarea class="form-control" rows="8" placeholder="Mensagem" name="mensagem"  required></textarea>

										<i class="fa fa-pencil form-control-feedback"></i>

									</div>

                                    <button type="submit" id="btn-contato" class="form-control btn btn-block btn-default btn-contato" data-loading-text="Enviando...">
                                        Enviar Mensagem
                                    </button>

								</form>

							</div>

						</div>

					</div>

				</div>

			</div>

			<!-- .footer end -->

			<!-- .subfooter start -->

			<!-- ================ -->

			<div class="subfooter">

				<div class="container">

					<div class="row">

						<div class="col-md-12">

							<p class="text-center">Ecomp Software ©. Todos os diretos reservados.</p>

						</div>

					</div>

				</div>

			</div>

			<!-- .subfooter end -->



		</footer>

		<!-- footer end -->



		<!-- JavaScript files placed at the end of the document so the pages load faster

		================================================== -->

		<!-- Jquery and Bootstap core js files -->

		<script type="text/javascript" src="plugins/jquery.min.js"></script>

		<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>



		<!-- Modernizr javascript -->

		<script type="text/javascript" src="plugins/modernizr.js"></script>



		<!-- Isotope javascript -->

		<script type="text/javascript" src="plugins/isotope/isotope.pkgd.min.js"></script>

		

		<!-- Backstretch javascript -->

		<script type="text/javascript" src="plugins/jquery.backstretch.min.js"></script>



		<!-- Appear javascript -->

		<script type="text/javascript" src="plugins/jquery.appear.js"></script>



		<!-- Initialization of Plugins -->

		<script type="text/javascript" src="js/template.js"></script>



		<!-- Custom Scripts -->

		<script type="text/javascript" src="js/custom.js"></script>



		<script type="text/javascript" src="js/index_autenticar.js"></script>
        
        <!-- Envio de E-mail -->
        
        <script src="js/email.js"></script>



	</body>

</html>

