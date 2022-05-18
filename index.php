<?php require 'class.stills.php';
?><!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Adam and Sarah have Gotten Married!</title>
	<meta name="description" content="The wedding website of Adam Leis and Sarah Evans">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/main.css">

	<!--[if lt IE 9]> <script src="js/respond.js"></script> <![endif]-->
	<script src="js/modernizr-2.6.2.min.js"></script>
        <!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-43953262-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-43953262-1');
	</script>
</head>

<body>
	<!--[if lt IE 7]><p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p><![endif]-->

	<!-- (nav#theNav>ul.container>li*5>a[href="#"]+li)+(header#theHeader>.container>h1{Adam &amp; Sarah Are Getting Married})+(section#timeline>.container>h1{Heading}+#cubeInterface>(#stills>.still#still$*6)+#story)+(section#countdown>.container>h1#weddingDate{Wedding Date}+#counter)+(section#directions>.container>h1{Directions}+iframe#map+#naxInfo)+(footer#theFooter>.container>(ul#regLinks>li*5)+img.graphics*3) -->
	<nav id="theNav">
		<ul class="container">
			<li><a href="#timeline">Timeline</a></li>
			<li><a href="#countdown">Countdown</a></li>
			<li><a href="#directions">Directions</a></li>
			<li><a href="#regLinks">Registration Links</a></li>
		</ul><!-- End .container -->
	</nav>

	<header id="theHeader">
		<div class="container">
			<h1>
				Adam <span id="amp">&amp;</span> Sarah
				<span id="cursive"><span id="correction">Are Getting</span> Married!</span>
			</h1>
		</div><!-- End .container -->

		<div id="clouds">
			<div class="cloud cld1a"></div>
			<div class="cloud cld1b"></div>
			<div class="cloud cld2a"></div>
			<div class="cloud cld2b"></div>
			<div class="cloud cld3a"></div>
		</div>
	</header>

	<section id="timeline" class="hasPadding">
		<div class="container">
			<h1>Timeline</h1>
			<div id="cubeInterface">
				<div id="stills">
					<?php
					$stills = array();
					$stills[] = new Still(1,'Adam &amp; Sarah Meet','1cincoDeMayo','Adam &amp; Sarah meet at the M1 Cinco de Mayo Party. They say maybe 4 sentences to each other...');
					$stills[] = new Still(2,'The First Date','3firstDate','Adam &amp; Sarah go out on their 1<sup>st</sup> date and totally hit it off.');
					$stills[] = new Still(3,'The Toledo Museum of Art','4tmaDate','Adam &amp; Sarah finally make it to the Toledo Museum of Art.');
					$stills[] = new Still(4,'The Art Gallery','5galleryNight','Adam throws an art gallery opening (with the help of others) to propose to Sarah. (She said yes)');					

					foreach($stills as $s) { $s->outputMarkup(); }

					for($x = 1; $x <= 2; $x++) {
						$lastStory = ($x === 1)
							 ? '<h2 class="title">The Adventure Begins</h2> <p>The two are now happily planning their lives together, starting with the wedding, and continuing with their exciting adventures!</p>'
							 : '';
						echo '<div id="blank_slide'.$x.'" class="still">'.$lastStory.'</div>';
					}
					?>
				</div><!-- End #stills --> 
			</div><!-- End #cubeInterface -->
			
			<div id="timelineCtrls">
				<span id="prev" class="ctrls">&laquo; Previous</span>
				<span id="next" class="ctrls">Next &raquo;</span>
				<p id="story"></p>
			</div>
		</div><!-- End .container -->
	</section><!-- End #timeline -->

	<section id="countdown" class="hasPadding scroller" data-speed="2" data-type="background">
		<div class="container">
			<h1 id="weddingDate">May 2, 2014</h1>
			<span id="weddingTime">@ 5:30p.m. EDT</span><!-- End #weddingTime -->

			<div id="counter"></div>

			<div id="snarkyNote">(and counting!)</div>
		</div><!-- End .container -->
	</section>

	<section id="directions" class="hasPadding scroller" data-speed="2" data-type="background">
		<div class="container clearfix">
			<h1>Directions</h1>

			<nav id="dirNav">
				<a class="dirLink">Nazareth Hall</a>
				<a class="dirLink">Hampton Inn</a>
				<a class="dirLink">Super 8</a>
			</nav>

			<div id="map_container">
				<iframe id="map" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Nazareth+Hall,+21211+W+River+Rd,+Grand+Rapids,+OH&amp;aq=0&amp;oq=na&amp;sll=41.381896,-83.649281&amp;sspn=0.086941,0.209255&amp;ie=UTF8&amp;hq=Nazareth+Hall,&amp;hnear=21211+W+River+Rd,+Grand+Rapids,+Ohio+43522&amp;t=m&amp;ll=41.434216,-83.804&amp;spn=0.006295,0.01205&amp;output=embed"></iframe>
			</div><!-- End #map_container -->

			<div id="nazInfo" class="dirBox show" data-map="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Nazareth+Hall,+21211+W+River+Rd,+Grand+Rapids,+OH&amp;aq=0&amp;oq=na&amp;sll=41.381896,-83.649281&amp;sspn=0.086941,0.209255&amp;ie=UTF8&amp;hq=Nazareth+Hall,&amp;hnear=21211+W+River+Rd,+Grand+Rapids,+Ohio+43522&amp;t=m&amp;ll=41.434216,-83.804&amp;spn=0.006295,0.01205&amp;output=embed">
				<h2>Nazareth Hall</h2>
				21211 W River Rd, <br />
				Grand Rapids, OH 43522
				<p><b>Note</b>: iPhone GPSs do not always pin-point Nazareth Hall correctly.</p>
				<small><a class="target_blank" href="http://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Nazareth+Hall,+21211+W+River+Rd,+Grand+Rapids,+OH&amp;aq=0&amp;oq=na&amp;sll=41.381896,-83.649281&amp;sspn=0.086941,0.209255&amp;ie=UTF8&amp;hq=Nazareth+Hall,&amp;hnear=21211+W+River+Rd,+Grand+Rapids,+Ohio+43522&amp;t=m&amp;ll=41.434216,-83.804&amp;spn=0.006295,0.01205">View Larger Map</a></small>
				<small>Photos courtesy of <a href="http://nazarethhall.com" title="Nazareth Hall" class="target_blank">Nazareth Hall</a>.</small>
				<br />
			</div>

			<div id="hampInfo" class="dirBox" data-map="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=1409+Reynolds+Road,+Maumee,+Ohio,+43537&amp;aq=&amp;sll=41.381896,-83.649281&amp;sspn=0.09235,0.209255&amp;ie=UTF8&amp;hq=&amp;hnear=1409+S+Reynolds+Rd,+Maumee,+Ohio+43537&amp;t=m&amp;z=14&amp;ll=41.582138,-83.666004&amp;output=embed">
				<h2>Hampton Inn Toledo South Maumee</h2>
				1409 Reynolds Road, <br />
				Maumee, OH 43537<br />
				<b>Phone:</b>419-893-1004 <br />
				<b>Group Code:</b> ELW <br />
				<small><a class="target_blank" href="http://maps.google.com/maps?source=embed&amp;f=q&amp;hl=en&amp;geocode=&amp;q=1409+Reynolds+Road,+Maumee,+Ohio,+43537&amp;aq=&amp;sll=41.381896,-83.649281&amp;sspn=0.09235,0.209255&amp;ie=UTF8&amp;hq=&amp;hnear=1409+S+Reynolds+Rd,+Maumee,+Ohio+43537&amp;t=m&amp;z=14&amp;ll=41.582138,-83.666004">View Larger Map</a></small>
				<br />
			</div>

			<div id="sup8Info" class="dirBox" data-map="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=1390+Arrowhead+Road,+Dussel+Road+and+Arrowhead+Road,+Maumee,+OH+43537&amp;aq=&amp;sll=41.582138,-83.666004&amp;sspn=0.011508,0.026157&amp;g=1409+Reynolds+Road,+Maumee,+Ohio,+43537&amp;ie=UTF8&amp;hq=1390+Arrowhead+Road,+Dussel+Road+and+Arrowhead+Road,+Maumee,+OH+43537&amp;hnear=&amp;radius=15000&amp;t=m&amp;ll=41.579358,-83.685241&amp;spn=0.071946,0.071946&amp;output=embed">
				<h2>Super 8 Maumee / Arrowhead</h2>
				1390 Arrowhead Road, Dussel Road &amp; Arrowhead Road<br />
				Maumee, OH 43537 <br />
				<b>Phone:</b> 419-897-3800<br />
				<small><a class="target_blank" href="http://maps.google.com/maps?source=embed&amp;f=q&amp;hl=en&amp;geocode=&amp;q=1390+Arrowhead+Road,+Dussel+Road+and+Arrowhead+Road,+Maumee,+OH+43537&amp;aq=&amp;sll=41.582138,-83.666004&amp;sspn=0.011508,0.026157&amp;g=1409+Reynolds+Road,+Maumee,+Ohio,+43537&amp;ie=UTF8&amp;hq=1390+Arrowhead+Road,+Dussel+Road+and+Arrowhead+Road,+Maumee,+OH+43537&amp;hnear=&amp;radius=15000&amp;t=m&amp;ll=41.579358,-83.685241&amp;spn=0.046227,0.082397">View Larger Map</a></small>
				<br />
			</div>

		</div><!-- End .container -->
	</section>

	<footer id="theFooter">
		<div class="container">
			<h1>Registry Links</h1>
			<ul id="regLinks">
				<li><a href="http://www.target.com/RegistryGiftGiverCmd?isPreview=false&amp;status=completePageLink&amp;listId=eVjQ0uzqcQ9krQlUatCxSw&amp;registryType=WD&amp;cumulativeTime=-1&amp;isAjax=false&amp;noOfPings=" class="target_blank"><img src="images/logo_target.jpg" alt="Target" class="graphics" /></a></li>
				<li><a href="http://www.bedbathandbeyond.com/store/giftregistry/view_registry_guest.jsp?pwsToken=&amp;eventType=Wedding&amp;registryId=13673488&amp;pwsurl=" class="target_blank"><img src="images/logo_bedbathbeyond.jpg" alt="Bed Bath and Beyond" class="graphics" /></a></li>
				<li><a href="http://www.kohls.com/upgrade/gift_registry/kohlsgrw_home.jsp?section=list&amp;listid=2599433&amp;viewtype=listview&amp;isfromsearch=true&amp;fname=sarah&amp;lname=evans&amp;regtype=registry.wedding,registry.baby,registry.splday" class="target_blank"><img src="images/logo_kohls.jpg" alt="Kohls" class="graphics" /></a></li>
			</ul><!-- End #regLinks -->
		</div><!-- End .container -->
	</footer>

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/jquery-1.10.2.min.js"><\/script>')</script>
	<script src="js/jquery.countdown.min.js"></script>
	<script src="js/jquery.scroller.js"></script>
	<script src="js/main.js"></script>
</body>
</html>
