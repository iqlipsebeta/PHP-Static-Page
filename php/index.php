<?php
session_start();
if(isset($_SESSION["email"])){
header('Location: /Homapage/home/');
}
?>
<!doctype html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
	<title>Homapage</title>
	
	<!-- Font -->
	<link href='https://fonts.googleapis.com/css?family=Indie+Flower' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Chango' rel='stylesheet' type='text/css'>
	
	<!-- CSS for this page Only locally -->
	<link href="css/index.css" rel="stylesheet">
	
	<!-- BootstrapCDN Readable bootswatch CSS -->
	<link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.6/readable/bootstrap.min.css" rel="stylesheet" integrity="sha384-/x/+iIbAU4qS3UecK7KIjLZdUilKKCjUFVdwFx8ba7S/WvxbrYeQuKEt0n/HWqTx" crossorigin="anonymous">
	
	<!-- jquery -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	
	<!-- BootstrapCDN JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	
	<!-- BootstrapCDN Font Awesome -->
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-hQpvDQiCJaD2H465dQfA717v7lu5qHWtDbWNPvaTJ0ID5xnPUlVXnKzq7b8YUkbN" crossorigin="anonymous">
	
	<!-- Some Font Stuffs -->
	<link href='https://fonts.googleapis.com/css?family=Droid+Serif' rel='stylesheet' type='text/css'>
	
	<!-- Custom CSS sidebar -->
    <link href="css/simple-sidebar.css" rel="stylesheet">
    <link href="css/csshake.min.css" rel="stylesheet">
	
	<!-- Annimate wala css h -->
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/main.css">
	<script src="js/vendor/modernizr-2.6.2.min.js"></script>
</head>
	
<body>
	<div
        class="parallax-image-wrapper"
        data-anchor-target="#page-intro"
        data-bottom-top="transform:translateY(200%)"
        data-top-bottom="transform:translateY(0)">

		<div
				class="parallax-image"
				style="background-image:url(assets/images/taj.jpg)"
				data-anchor-target="#page-intro"
				data-bottom-top="transform: translateY(-80%);"
				data-top-bottom="transform: translateY(80%);">

		</div>
	</div>
	
	<div
        class="parallax-image-wrapper"
        data-anchor-target=".body-text + .gap"
        data-bottom-top="transform:translateY(200%)"
        data-top-bottom="transform:translateY(0)">

    <div
            class="parallax-image"
            style="background-image:url(assets/images/palmtrees.jpg)"
            data-anchor-target=".body-text + .gap"
            data-bottom-top="transform: translateY(-80%);"
            data-top-bottom="transform: translateY(80%);"
            >

    </div>
</div>

<div
        class="parallax-image-wrapper"
        data-anchor-target=".gallery + .gap"
        data-bottom-top="transform:translateY(200%)"
        data-top-bottom="transform:translateY(0)">

    <div
            class="parallax-image"
            style="background-image:url(assets/images/bay.jpg)"
            data-anchor-target=".gallery + .gap"
            data-bottom-top="transform: translateY(-80%);"
            data-top-bottom="transform: translateY(80%);"
            >

    </div>
</div>
<div
        class="parallax-image-wrapper"
        data-anchor-target=".features-list + .gap"
        data-bottom-top="transform:translateY(200%)"
        data-top-bottom="transform:translateY(0)">

    <div
            class="parallax-image"
            style="background-image:url(assets/images/sea.jpg)"
            data-anchor-target=".features-list + .gap"
            data-bottom-top="transform: translateY(-80%);"
            data-top-bottom="transform: translateY(80%);"
            >

    </div>
</div>

	<?php
	require "/navBar/navBarB4.php";
	?>
	
	<!-- Annimate b4 load 
	<div id="loader-wrapper">
		<div id="loader"></div>

		<div class="loader-section section-left"></div>
		<div class="loader-section section-right"></div>

	</div> -->


<div id="skrollr-body">
	<!--Parallax-->
    <div id="page-intro" class="gap" style="background-image:url(assets/images/taj.jpg); ">
        <h1><i>Pleasure</i>,<br>To Have You Here</h1>
        <a href="#body" class="btn">Let's Get Started</a>
    </div>
	
	<!-- Body -->
	<div class="body-text" id="body">

        <h2><strong>Technologies</strong> Everyone's Life</h2>

        <p data-300-center-top="transform: scale(0.8); opacity: 0" data-300-center-center="transform: scale(1); opacity: 1">
			<i class="fa fa-quote-left fa-3x" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;
				We all have a <strong>Technologies</strong> in our life. From whom we take advice before buying things like <b>SmartPhone</b>, <b>Tablets</b>, <b>Laptops</b>, <b>PC</b>, etc. We are here to take that place in your life. Be your life Companion, and help to take the correct decision.
				So that you get the best <b>Tech</b> in today confusing world.
        </p>

        <p data-200-center-top="transform: scale(0.8); opacity: 0" data-200-center-center="transform: scale(1); opacity: 1">
			<img src="assets/images/tech.png" alt="The Tech Guy" height="500" width="200">
        </p>

        <p data-100-center-top="transform: scale(0.8); opacity: 0" data-100-center-center="transform: scale(1); opacity: 1">
            Meet your guide <b><q>Technologies</q></b> he has came from really very vary far way....<br>He is here to help, to guide so that you get the best Tech in you're hands.
        </p>

    </div>
	<!-- 2nd Parallax -->
	 <div id="page-intro" class="gap" style="background-image:url(assets/images/palmtrees.jpg); "><h1>We Have Covered You</h1></div>
	
	<!-- Horizontal image gallery -->
	<div class="gallery"><h1>With Wide Rage Of SmartPhone & tablets</h1></div>
	
	<!-- 3rd Parallax -->
	<div id="page-intro" class="gap" style="background-image:url(assets/images/bay.jpg); "><h1>So The You Get The Best Tech In You're Hands</h1></div>
		
		<!-- Features -->
	    <div class="features-list">

        <h2>Why We, Why <strong>Technologies</strong> ?</h2>

        <div data-100-bottom-top="transform: translateX(-200px); opacity: 0" data-center-top="transform: translateX(0px); opacity: 1">
            <i class="fa fa-check-square-o" aria-hidden="true"></i>
            <h4>Updated And <b>Correct Information</b></h4>
        </div>

        <div data-100-bottom-top="transform: translateY(200px); opacity: 0" data-center-top="transform: translateY(0px); opacity: 1">
            <i class="fa fa-pie-chart" aria-hidden="true"></i>
            <h4>Easy To <b>Understand</b></h4>
        </div>

        <div data-100-bottom-top="transform: translateX(200px); opacity: 0" data-center-top="transform: translateX(0px); opacity: 1">
            <i class="fa fa-heart" aria-hidden="true"></i>
            <h4>And Most Importantly, We Love To <b>Help You</b></h4>
        </div>

    </div>
	
	<!-- 4th Parallax -->
	<div id="page-intro" class="gap" style="background-image:url(assets/images/sea.jpg);">
		<h1>Just One Click away</h1><a href="../" class="btn">SmartPhone's</a><a href="../" class="btn">Tablet's</a>
	</div>
	
	<!-- footer -->
	<footer>

        <div class="footer-left">

            <h3>Technologies</h3>

            <p class="footer-links">
                <a href="../Home/">Home</a>
                ·
                <a href="../login_sgniup/">Log In/Sign Up</a>
                
                <a href="#">Term & Condition</a>
                ·
                <a href="#">Privacy Policy</a>
                ·
                <a href="#">Credit List</a>
                ·
                <a href="#">Contact</a>
            </p>

            <p class="footer-company-name">Homapage &copy; 2018</p>
        </div>
		<div class="footer-right" data-bottom-top="max-width: 200px;" data-bottom-bottom="max-width: 600px;">
			<a href="https://www.fb.com"><i class="fa fa-facebook-official fa-3x" aria-hidden="true"></i></a>&nbsp;&nbsp;
			
			&nbsp;<a href="https://www.twitter.com"><i class="fa fa-twitter fa-3x" aria-hidden="true"></i></a>&nbsp; 

			&nbsp;&nbsp;<a href="https://www.google.com"><i class="fa fa-google-plus fa-3x" aria-hidden="true"></i></a>
			<br><br>
			<i class="fa fa-envelope" aria-hidden="true"></i> - support@Technologies.xyz
			<br><br>
			<p class="footer-company-name">Made in India</p>
		</div>
    </footer>

</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>





<div class="scroll-pause" data-anchor-target=".gallery" data-100p-top-top="transform:translateY(100%);" data-top-top="transform:translateY(0%)" data--150p-top-top="" data--300p-top-top="transform:translateY(-100%)">

    <div class="row" data-anchor-target=".gallery" data-top-top="transform: translateX(0%);" data--150p-top-top="transform: translateX(-50%);">
        <div style="background-image:url(assets/images/small/coast.jpg);" ></div>

        <div style="background-image:url(assets/images/small/palmtrees.jpg);" ></div>

        <div style="background-image:url(assets/images/small/bay.jpg);" ></div>

        <div style="background-image:url(assets/images/small/sea.jpg);" ></div>

        <div style="background-image:url(assets/images/small/coast.jpg);" ></div>

        <div style="background-image:url(assets/images/small/palmtrees.jpg);" ></div>

        <div style="background-image:url(assets/images/small/bay.jpg);" ></div>

        <div style="background-image:url(assets/images/small/sea.jpg);" ></div>
    </div>


    <div class="row" data-anchor-target=".gallery" data-top-top="transform: translateX(-50%);" data--150p-top-top="transform: translateX(0);">

        <div style="background-image:url(assets/images/small/sea.jpg);" ></div>

        <div style="background-image:url(assets/images/small/bay.jpg);" ></div>

        <div style="background-image:url(assets/images/small/palmtrees.jpg);" ></div>

        <div style="background-image:url(assets/images/small/coast.jpg);" ></div>

        <div style="background-image:url(assets/images/small/sea.jpg);" ></div>

        <div style="background-image:url(assets/images/small/bay.jpg);" ></div>

        <div style="background-image:url(assets/images/small/palmtrees.jpg);" ></div>

        <div style="background-image:url(assets/images/small/coast.jpg);" ></div>

    </div>

</div>
</div>
	
	<script src="assets/skrollr.min.js"></script>

	<script>
		skrollr.init();
	</script>
	
	<script>
	$(function () {
		$('[data-toggle="tooltip"]').tooltip()
	})
	</script>
	
	<!-- Smooth Scrolling -->
	<script>
	
		var $root = $('html, body');
		$('a').click(function() {
			var href = $.attr(this, 'href');
			$root.animate({
				scrollTop: $(href).offset().top
			}, 500, function () {
					window.location.hash = href;
				});
			return false;
		});
	</script>
	
	
	
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
	<script src="js/main.js"></script>
	
</body>

</html>