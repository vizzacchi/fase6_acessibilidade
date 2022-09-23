<!DOCTYPE html>
<html lang="pt-BR" class="h-100">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="">
	<title>Accessibility</title>

	<!------ Css ------>
	<link rel="stylesheet" type="text/css"
		href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
		integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">

	<!----- Icons ----->
	<link rel="stylesheet" type="text/css"
		href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
	<link rel="stylesheet" type="text/css"
		href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body>
	<header>
		<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
			<a href="index.html" class="navbar-brand">
				<img src="" alt="...">
			</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav-navbar"
				aria-expanded="false">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="nav-navbar">
				<ul class="navbar-nav">
					<li class="nav-item"><a href="pages/deficiencias.html" class="nav-link">Deficiências</a></li>
					<li class="nav-item"><a href="pages/deficiencia_auditiva.html" class="nav-link">Auditivas</a></li>
					<li class="nav-item"><a href="pages/deficiencias_visuais.html" class="nav-link">Visuais</a></li>
					<li class="nav-item"><a href="pages/deficiencias_mentais.html" class="nav-link">Mentais</a></li>
					<li class="nav-item"><a href="pages/deficiencias_fisicas.html" class="nav-link">Físicas</a></li>
					<li class="nav-item"><a href="pages/forum.html" class="nav-link">Fórum</a></li>
				</ul>
				<ul class="navbar-nav ms-auto pe-3">
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
							aria-expanded="false">Acessibilidade</a>
						<ul class="dropdown-menu dropdown-menu-end">
							<li class="dropdown-item">
								<div class="form-check">
									<input class="form-check-input" type="checkbox" value="" id="chk">
									<label class="form-check-label" for="chk">Contraste</label>
								</div>
							</li>
							<li><a href="#" class="dropdown-item" onclick="aumenta()"><i
										class="bi bi-zoom-in text-end pe-1"></i>Aumenta Fonte</a></li>
							<li><a href="#" class="dropdown-item" onclick="diminui()"><i
										class="bi bi-zoom-out text-end pe-1"></i>Diminui Fonte</a></li>
							<li><a href="#" class="dropdown-item" onclick="dislexia()"><i
										class="bi bi-type pe-1"></i>Fonte Dislexia</a></li>
							<li><a href="#" class="dropdown-item" onclick="roboto()"><i
										class="bi bi-type pe-1"></i>Fonte Padrão</a></li>

						</ul>
					</li>
				</ul>

				<!------- Login ------->
				<ul class="navbar-nav">
					<li class="nav-item">
						<button type="button" class="btn btn-outline-info btn-sm" data-bs-toggle="offcanvas"
							data-bs-target="#offcanvas-login">Entrar</button>
					</li>
				</ul>
			</div>
		</nav>

		<!----- Offcanvas ----->
		<div class="offcanvas offcanvas-end" id="offcanvas-login">
			<div class="offcanvas-header">
				<small>MENU</small>
				<button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
					aria-label="Close"></button>
			</div>
			<div class="offcanvas-body">

			</div>
		</div>
	</header>

	<!----- Conteúdo ----->
	<main>
		<article class="article-card mb-3">
			<div class="container">
				<div class="row">
					<div class="col-md-5 accessibility-text mb-4">
						<h1>Desenvolva com Acessibilidade na Web</h1>
						<p>
							Acessibilidade Digital é a eliminação de barreiras na Web.
							O conceito pressupõe que os sites e portais sejam projetados de modo que todas as pessoas
							possam perceber,
							entender, navegar e interagir de maneira efetiva com as páginas.
						</p>
						<h2>Desenvolver com acessibilidade é respeitar o próximo</h2>
						<p>
							Segundo o IBGE, pelo menos 45 milhões de pessoas possuem algum tipo de deficiência, quase
							25% da população do país.
						</p>
					</div>
					<div class="col-md-7 d-md-flex justify-content-md-center">
						<img src="images/numeroDeficientes.png" class=" accessibility-img"
							alt="Gráfico com o número de deficientes no Brasil"
							title="Gráfico com o número de deficientes no Brasil">
					</div>
				</div>
				Veja as melhores práticas de desenvolvimento com acessibilidade, repositório de códigos, APIs e muito
				mais, compartilhe suas experiência e divulgue seus trabalhos. Ajudenos a formentar a acessibilidade cada
				vez mais.
				<div class="d-grid gap-2 d-md-flex justify-content-md-center">
					<a href="pages/deficiencias.html" class="btn btn-primary btn-lg">VAMOS LÁ</a>
				</div>
			</div>
		</article>
	</main>

	<!----- JavaScript ----->
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script type="text/javascript"
		src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
		crossorigin="anonymous"></script>

	<!--- Accessibility --->
	<div vw class="enabled">
		<div vw-access-button class="active"></div>
		<div vw-plugin-wrapper>
			<div class="vw-plugin-top-wrapper"></div>
		</div>
	</div>
	<script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
	<script>new window.VLibras.Widget('https://vlibras.gov.br/app');</script>

	<script type="text/javascript" src="js/accessibility-dark-mode.js"></script>
</body>

</html>