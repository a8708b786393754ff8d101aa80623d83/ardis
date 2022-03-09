{if isset($smarty.session.pseudo) && $smarty.session.pseudo === '4dm1n4rd1s'}
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="description " content="Hotel ardis ,l 'hotel du 'climats ' ">
		<meta name="description " content="Decouvrez nos hotels sur tout les climats, nous avons des hotel sur les 4 coin du globe.
		Nous avons 3 hotel a dubai, 2 en suise est 2 a punt cana tousse ">
		<link rel="stylesheet" href="{base_url('assets/css/bootstrap.css')}">
		<link rel="stylesheet" href="{base_url('assets/css/admin/admin.css')}">
		<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <title>Panel admin</title>
</head>
<body>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<!------ Include the above in your HEAD tag ---------->
	
	<nav class="navbar navbar-default navbar-static-top">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle navbar-toggle-sidebar collapsed">
				MENU
				</button>
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<label>
					Administrateur
				</label>
			</div>
	
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">      
				<form class="navbar-form navbar-left" method="GET" role="search">
					<div class="form-group">
						<input type="text" name="q" class="form-control" placeholder="Search">
					</div>
					<button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>
				</form>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="{base_url('pages/')}" target="_blank">Visiter le site</a></li>
					</ul>
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container-fluid -->
		</nav>  	<div class="container-fluid main-container">
			  <div class="col-md-2 sidebar">
				  <div class="row">
		<!-- uncomment code for absolute positioning tweek see top comment in css -->
		<div class="absolute-wrapper"> </div>
		<!-- Menu -->
		<div class="side-menu">
			<nav class="navbar navbar-default" role="navigation">
				<!-- Main Menu -->
				<div class="side-menu-container">
					<ul class="nav navbar-nav">
						<li class="active"><a href="#"><span class="glyphicon glyphicon-dashboard"></span> Tableau de bord</a></li>
						<li><a href="#"><span class="glyphicon glyphicon-plane"></span> Lien Actif</a></li>
						<li><a href="#"><span class="glyphicon glyphicon-cloud"></span> Lien</a></li>
	
						<!-- Dropdown-->
						<li class="panel panel-default" id="dropdown">
							<a data-toggle="collapse" href="#dropdown-lvl1">
								<span class="glyphicon glyphicon-user"></span> Sous-menu <span class="caret"></span>
							</a>
	
							<!-- Dropdown level 1 -->
							<div id="dropdown-lvl1" class="panel-collapse collapse">
								<div class="panel-body">
									<ul class="nav navbar-nav">
										<li><a href="#">Lien</a></li>
										<li><a href="#">Lien</a></li>
										<li><a href="#">Lien</a></li>
	
										<!-- Dropdown level 2 -->
										<li class="panel panel-default" id="dropdown">
											<a data-toggle="collapse" href="#dropdown-lvl2">
												<span class="glyphicon glyphicon-off"></span> Nos hotels <span class="caret"></span>
											</a>
											<div id="dropdown-lvl2" class="panel-collapse collapse">
												<div class="panel-body">
													<ul class="nav navbar-nav">
													{foreach from=$nom_hotel item=item}
														<li><a href="{base_url('admin/hotel/')|cat:'/'}{$item|lower}">{$item}</a></li>														
													{/foreach}
													</ul>
												</div>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</li>
	
						<li><a href="#"><span class="glyphicon glyphicon-signal"></span> Lien</a></li>
	
					</ul>
				</div><!-- /.navbar-collapse -->
			</nav>
	
		</div>
	</div>
		Tableau de bord
		</div>
		<div class="panel-body">
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		</div>
<footer class=" card-footer d-flex align-items-center ">
    <div class="container ">
        <div class="row ">
            <div class="d-flex ">
                <p class=" "> © 2021 Hotel ardis|Mention legale</p>
                <p>| Email: hotel@ardis.com |  Numero mobile: 06 06 06 06 06</p>
                <img src="{base_url('assets/Images/Objet dynamique vectoriel.webp')}" alt="logo_icone " height="30">
            </div>
        </div>
    </div>
</footer>   
</body>
    <script src="assets/js/bootstrap.bundle.js"></script>
	<script>
		$(function () {
  	$('.navbar-toggle-sidebar').click(function () {
  		$('.navbar-nav').toggleClass('slide-in');
  		$('.side-body').toggleClass('body-slide-in');
  		$('#search').removeClass('in').addClass('collapse').slideUp(200);
  	});

  	$('#search-trigger').click(function () {
  		$('.navbar-nav').removeClass('slide-in');
  		$('.side-body').removeClass('body-slide-in');
  		$('.search-input').focus();
  	});
  });
	</script>
</html>	
{else}
	403 FORBIDDEN
{/if}