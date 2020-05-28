<!DOCTYPE html>
<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<link rel="stylesheet" href="styles/main.css">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <script src="https://kit.fontawesome.com/6ce008e176.js"></script>
	<link rel="icon" href="icon.png">
	<title>Blogga</title>
</head>

<body id="home" class="scrollspy">
	<!-- Navbar -->
	<div class="navbar-fixed">
		<nav class="light-blue">
			<div class="container">
				<div class="nav-wrapper">
					<a href="#" class="brand-logo">Blogga</a>
					<a href="#" data-target="mobile-nav" class="sidenav-trigger"> 
						<i class="material-icons">menu</i>
					</a>
					<ul class="right hide-on-med-and-down">
						
						<li>
							<a href="#search">Search</a>
						</li>
						<li>
							<a href="#popular">Popular Blogs</a>
						</li>
						
						
					</ul>
				</div>
			</div>
		</nav>
	</div>
	<ul class="sidenav" id="mobile-nav">
		
		<li>
			<a href="#search">Search</a>
		</li>
		<li>
			<a href="#popular">Popular Blogs</a>
		</li>
		
	</ul>
	
	<!-- Slider -->
	<section class="slider">
	    <ul class="slides">
      <li>
        <img src="images/techcrunch.png"> 
      </li>
      <li>
        <img src="images/gizmodo.png"> 
      </li>
      <li>
        <img src="images/readwrite.png"> 
      </li>
    </ul>
	</section>
	
	<!-- Search section -->
	<section id="search" class="section section-search light-blue darken-2 
		white-text center scrollspy">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h4> Search Blogs </h4>
					<div class="input-field">
						<input class="white grey-text autocomplete" 
						id="autocomplete-input"
						placeholder="Techcrunch, Readwrite, Endgadget" >
				</div>
			</div>
		</div>
	</section>
	
	<!-- Icon Boxes Section -->
	<section class="section section-icons grey lighten-4 center">
		<div class="container">
				
				
				<div class="col ">
					<div class="card-panel">
						<i class="material-icons large light-blue-text">favorite</i>
						<a href="favorites/favorite_articles.php">
							<h4>Favourite Articles</h4>
						</a>
					</div>
				</div>
		</div>
	</section>
	
	<!-- Popular Blogs Section -->
	<section id="popular" class="section section-popular scrollspy">
		<div class="container">
			<div class="row">
				<h4 class="center">
					Popular 
					Blogs
				</h4>
				<div class="col s12 m4">
					<div class="card">
						<div class="card-image">
							<img src="images/techcrunch.png"/>
						</div>
						<div class="card-content">
						TechCrunch is an American online 
						publisher focusing on the tech 
						industry. The company specifically 
						reports on the business related to 
						tech, technology news, analysis of 
						emerging trends in tech, and 
						profiling of new tech businesses 
						and products. 
						</div>
					</div>
				</div>
				<div class="col s12 m4">
					<div class="card">
						<div class="card-image">
							<img src="images/gizmodo.jpg"/>
						</div>
						<div class="card-content">
							Gizmodo  is a design, technology, 
							science and science fiction website.
							It was originally launched as part of 
							the Gawker Media network run by Nick 
							Denton, and runs on the Kinja platform.
						</div>
					</div>
				</div>
				<div class="col s12 m4">
					<div class="card">
						<div class="card-image">
							<img src="images/readwrite.png"/>
						</div>
						<div class="card-content text-justify">
						ReadWrite is a Web technology blog launched 
						in 2003. RW covers Web 2.0 and Web 
						technology in general, and provides 
						industry news, reviews, and analysis.
						 Founded by Richard MacManus, Technorati 
						 ranked ReadWriteWeb at number 12 in its
						 list of top 100 blogs worldwide, as of 
						 October 9, 2010.
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<!-- Social Media Section -->
	<section class="section section-follow light-blue darken-2 white-text center">
		<div class="container">
			<div class="row">
				<div class="col s12">
					<h4>Follow Blogga</h4>
					<h6> Follow us on Social Media!</h6>
					<a href="https://www.facebook.com/" class="white-text">
						<i class="fab fa-facebook fa-4x"></i>
					</a>
					<a href="https://twitter.com/home" class="white-text">
						<i class="fab fa-twitter fa-4x"></i>
					</a>
					<a href="https://www.linkedin.com/" class="white-text">
						<i class="fab fa-linkedin fa-4x"></i>
					</a>

				</div>
			</div>
		</div>		
	</section>
	
	
	<!-- Footer -->
	<footer class="section light-blue darken-2 white-text center">
		<p class="flow-text">Blogga &copy; 2019</p>
	</footer>


		
	<!--JavaScript at end of body for optimized loading-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
	<script>
		// Sidenav
		const sideNav = document.querySelector('.sidenav'); 
		M.Sidenav.init(sideNav, {});
		
		// Slider
		const slider = document.querySelector('.slider'); 
		M.Slider.init(slider, {
			indicators: false,
			height: 500,
			transition: 500,
			interval: 5000
		});
		
		// Autocomplete
		const ac = document.querySelector('.autocomplete'); 
		M.Autocomplete.init(ac, {
			data: {
				"Techcrunch": null,
				"Readwrite": null,
				"Endgadet": null
				//ADD MORE LATER!!!
			},
		
			onAutocomplete: function(val) {
				let text = document.querySelector('#autocomplete-input').value;
				if(text == "Techcrunch") {
					let link = window.open("https://techcrunch.com/", "_blank");
					link.location;
				} else if(text== "Readwrite") {
					let link = window.open("https://readwrite.com/", "_blank");
					link.location;
				} else if (text == "Endgadget") {
					let link = window.open("https://endgadget.com/", "_blank");
					link.location;
				}
			}
		});
		
		// Material Boxed
		const mb = document.querySelectorAll('.materialboxed');
		M.Materialbox.init(mb, {});
		
		// Scrollspy
		const ss = document.querySelectorAll('.scrollspy');
		M.ScrollSpy.init(ss, {});
	</script>
</body>
</html>

