<?php
session_start();
error_reporting(0);

include('includes/dbconnection.php');
?>
<!DOCTYPE HTML>
<html>
<head>
<title>ZOOTOPIA | Home Page</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
</head>
<body>
		<?php include_once('includes/header.php');?>
			<div class="header-banner">
				<div class="container">
					<div class="head-banner">
						<h3>WELCOME TO THE WORLD OF ZOOTOPIA!</h3>
						<p>We at Zootopia, give you the bliss of blessing your eyes with the exotic wildlife and birds from all over the world.From the Bengal Tiger to the Sambar deer , from the Asian Koel to the Indian Cobra our zoo is a treasure that has all the wide variety of animals and birds"</p>
					</div>
					<div class="banner-grids">
						<div class="col-md-6 banner-grid">
							<h4>Come Visit Us!</h4>
							<p>A zoo is a place where many animals, especially the wild ones, live in enclosed boundaries.</p>
						</div>
						<div class="col-md-6 banner-grid">
						<h4>Safari and more!</h4>
							<p>Animal Safari is one of the most famous activities where visitors can drive inside and can watch and feed the animals.</p>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		<!--header-->
			<!--welcome-->
			<div class="content">
				<div class="welcome">
					<div class="container">
						<h2>It's all fun here!</h2>
							<div class="welcome-grids">
								
								<?php 
 $query=mysqli_query($con,"select * from tblanimal order by rand() limit 4");
 while ($row=mysqli_fetch_array($query)) {
 ?>
								<div class="col-md-3 welcome-grid" >
									<img src="admin/images/<?php echo $row['AnimalImage'];?>" width='220' height='200' alt=" " class="img-responsive" />
									<div class="wel-info">
										<h4><a href="animal-detail.php?anid=<?php echo $row['ID'];?>"><?php echo $row['AnimalName'];?>(<?php echo $row['Breed'];?>)</a></h4>
										<p><?php echo substr($row['Description'],0,100);?>.</p>
									</div>
								</div><?php }?>
								<br>
								<div class="clearfix"></div>
							</div>
					</div>
				</div>
			<!--welcome-->
			
				<!--animals-->
					<div class="animals">
						<div class="container">
							<h3>Our  Wide Range of Animals</h3>
							<div class="clients">
								<ul id="flexiselDemo3">
									<?php 
 $query=mysqli_query($con,"select * from tblanimal");
 while ($row=mysqli_fetch_array($query)) {
 ?>
									<li><img src="admin/images/<?php echo $row['AnimalImage'];?>" width='220' height='200' alt=" " class="img-responsive" /></li><?php }?>
								</ul>
									<script type="text/javascript">
								$(window).load(function() {
									
								  $("#flexiselDemo3").flexisel({
										visibleItems: 5,
										animationSpeed: 1000,
										autoPlay: true,
										autoPlaySpeed: 3000,    		
										pauseOnHover: true,
										enableResponsiveBreakpoints: true,
										responsiveBreakpoints: { 
											portrait: { 
												changePoint:480,
												visibleItems: 1
											}, 
											landscape: { 
												changePoint:640,
												visibleItems: 2
											},
											tablet: { 
												changePoint:768,
												visibleItems: 3
											}
										}
									});
									});
								</script>
								<script type="text/javascript" src="js/jquery.flexisel.js"></script>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
			<!--models-->
		
				
						<!--events-->
						<!--specials-->
				 <?php include_once('includes/special.php');?>
			</div>
			<!--footer-->
			<?php include_once('includes/footer.php');?>
</body>
</html>
