<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8" />
	
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<title>$Title</title>
	$MetaTags(false)
	<% base_tag %>
	
	<!-- IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script> 
	<![endif]-->
	
</head>
<body>
	<!-- BEGIN WRAPPER -->
	<div id="wrapper">
	
		<!-- BEGIN HEADER -->
		<header id="header">
			<% include TopBar %>
			<% include MainNav %>
		</header>
		<!-- END HEADER -->
		
		$Layout
				
		<!-- BEGIN FOOTER -->
		<footer id="footer">
			<div id="footer-top" class="container">
				<div class="row">
					<div class="block col-sm-3">
						<a href="#"><img src="images/logo.png" alt="One Ring Rentals" /></a>
						<br><br>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam commodo eros nibh, et dictum elit tincidunt eget. Pellentesque volutpat quam dignissim, convallis elit id, efficitur sem. Vivamus ac scelerisque sem. Aliquam sed enim rutrum nibh gravida pellentesque nec at metus. In hac habitasse platea dictumst. Etiam in rhoncus mi. In hac habitasse platea dictumst. Mauris congue blandit venenatis.</p>
					</div>
					<div class="block col-sm-3">
						<h3>Helpful Links</h3>
						<ul class="footer-links">
							<li><a href="#">All rentals</a></li>
							<li><a href="#">List your rental</a></li>
							<li><a href="#">Read our FAQs</a></li>							
						</ul>
					</div>
					<div class="block col-sm-6">
						<h3>Popular regions</h3>
						<div class="row">
							<div class="col-sm-6">
								<ul class="footer-listings">
									<li>
										<div class="image">
											<a href="properties-detail.html"><img src="http://placehold.it/760x670" alt="" /></a>
										</div>
										<p><a href="properties-detail.html">Rhovanion</a></p>
									</li>
									<li>	
										<div class="image">
											<a href="properties-detail.html"><img src="http://placehold.it/760x670" alt="" /></a>
										</div>
										<p><a href="properties-detail.html">Eriador</a></p>
									</li>
									<li>
										<div class="image">
											<a href="properties-detail.html"><img src="http://placehold.it/760x670" alt="" /></a>
										</div>
										<p><a href="properties-detail.html">Bay of Belfalas</a></p>
									</li>
								</ul>
							</div>
							<div class="col-sm-6">
								<ul class="footer-listings">
									<li>
										<div class="image">
											<a href="properties-detail.html"><img src="http://placehold.it/760x670" alt="" /></a>
										</div>
										<p><a href="properties-detail.html">Mordor</a></p>
									</li>
									<li>
										<div class="image">
											<a href="properties-detail.html"><img src="http://placehold.it/760x670" alt="" /></a>
										</div>
										<p><a href="properties-detail.html">Arnor</a></p>
									</li>
									<li>
										<div class="image">
											<a href="properties-detail.html"><img src="http://placehold.it/760x670" alt="" /></a>
										</div>
										<p><a href="properties-detail.html">Forlindon</a></p>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			
			<!-- BEGIN COPYRIGHT -->
			<div id="copyright">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							&copy; 2014 One Ring Rentals
							
							<!-- BEGIN SOCIAL NETWORKS -->
							<ul class="social-networks">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-google"></i></a></li>
								<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
								<li><a href="#"><i class="fa fa-youtube"></i></a></li>
								<li><a href="#"><i class="fa fa-rss"></i></a></li>
							</ul>
							<!-- END SOCIAL NETWORKS -->
						
						</div>
					</div>
				</div>
			</div>
			<!-- END COPYRIGHT -->
			
		</footer>

		<!-- END FOOTER -->
	
	</div>
	<!-- END WRAPPER -->

</body>
</html>