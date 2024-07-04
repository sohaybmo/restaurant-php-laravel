<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<title>Grill House</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400" rel="stylesheet" />
	<link href="css/templatemo-style.css" rel="stylesheet" />


	<style>
		/* Center text and add line below */
		.centered-text {
			text-align: center;
			position: relative;
		}

		.centered-text h1 {
			margin-bottom: 10px;
		}
	</style>
</head>

<body>

	<div class="container">
		<!-- Top box -->
		<!-- Logo & Site Name -->
		<div class="placeholder">
			<div class="parallax-window" data-parallax="scroll" data-image-src="img/bkg_grillhouse.png">
				<div class="tm-header" style="background-color: rgba(0, 0, 0, 0.7)">
					<div class="row tm-header-inner">
						<div class="col-md-6 col-12">
							<img src="img/logo_grillhouse.png" alt="Logo" class="tm-site-logo" />
							<div class="tm-site-text-box">
								<h1 class="tm-site-title">Grill House</h1>
								<h6 class="tm-site-description">"Where Sizzle Meets Flavor!"</h6>
							</div>
						</div>
						<nav class="col-md-6 col-12 tm-nav">
							<ul class="tm-nav-ul">
								<li class="tm-nav-li"><a href="" class="tm-nav-link active">Home</a></li>
								<!-- <li class="tm-nav-li"><a href="about.html" class="tm-nav-link">About</a></li> -->


								<li>
									@if (Route::has('login'))
									<div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
										@auth
								<li class="tm-nav-li"><a href="/redirects" class="tm-nav-link">Dashboard</a></li>



								@else
								<li class="tm-nav-li"><a href="{{ route('login') }}" class="tm-nav-link">Log in</a></li>

								@if (Route::has('register'))
								<li class="tm-nav-li"><a href="{{ route('register') }}" class="tm-nav-link">Register</a></li>
								@endif
								@endauth
					</div>
					@endif
					</li>



					</ul>
					</nav>
				</div>
			</div>
		</div>
	</div>

	<main>
		<header class="row tm-welcome-section">
			<h2 class="col-12 text-center tm-section-title">Welcome to Grill House</h2>
			<p class="col-12 text-center">Located in the heart of Ottawa, Canada, our restaurant is a haven for food enthusiasts seeking a delightful journey through the world of grilled delicacies. As pioneers in the art of grilling, we have earned a reputation for crafting mouthwatering dishes that tantalize the taste buds and leave a lasting impression.</p>
		</header>


		@include("food");



		</div>
		<br>




	</main>

	<footer class="tm-footer text-center">
		<p>Copyright &copy; 2023 Grill House

			| Developed by: Group 24 | Vivaldo and Sohaib</p>
	</footer>
	</div>
	<script src="js/jquery.min.js"></script>
	<script src="js/parallax.min.js"></script>
</body>

</html>