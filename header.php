<?php ?>
<script>

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 40 || document.documentElement.scrollTop > 40) {
        document.getElementById("call-h").style.display = "block";
    } else {
        document.getElementById("call-h").style.display = "none";
    }
}
</script>
<header id="header" class="site-header">
	<div class="header-middle">
		<div class="container">
			<a class="site-logo" href="./">
				<img class="logo2" src="images/logo-t.png" alt="50Uniform">
				<img class="logo1" src="images/logo-t.png" alt="50Uniform">
			</a>
			<!-- end .site-logo -->
			
			<div id="call-h">
				<p><a href="tel:+971 50 8643676">Call 050uniform(050 8643676)</a></p>
			</div>

			<button class="nav-hamburger hidden-md hidden-lg">
				<span>toggle menu</span>
			</button>

			<!-- end .header-right -->

			<nav class="primary-nav clear">
				<ul class="menu-list nav-hover-1 sf-menu list-none">
					<li>
						<a href="index.php">Home</a>
					</li>
					<li>
						<a href="aboutus.php">About us</a>
					</li>
					<li>
						<a href="services.php">Services</a>
					</li>
					<li>
						<a href="contactus.php">Contact us</a>
					</li>
				</ul>
			</nav>
			<!-- end .primary-nav -->
		</div>
	</div>
</header>