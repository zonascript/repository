<?php
@session_start();
include_once('./global.inc.php');
//include_once($configVars['ClassesBasePath'].'test.class.php');
//$ObjTest = new Test();
?>
<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Welcome to Coinxoom</title>
<link rel="stylesheet" type="text/css" href="<?php echo $configVars['CssUrlPath']; ?>style.css"/>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

</head>
<body class="login-bg">
<div id="wrapper">
<?php include($configVars['SiteBasePath'].'indexheader.php') ?>
<div class="main-content">
	<div class="home-banner">
		<div class="container">
			<!--<div class="buy-box">
				<h2>Buy and sell bitcoins</h2>
				<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt </p>
				<span class="making-btn">START Making Money</span>
				
			</div>-->
		</div>
	</div><!--BANNER END-->

	<div class="tab-main">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-7">
					<ul class="clearfix tab1">
						<li><a href="#">REMITTANCE</a></li>
						<li class="active"><a href="#">Make Money</a></li>
						<li><a href="#">ACCEPT PAYMENT</a></li>
					</ul>
				</div>
				<div class="col-sm-6 col-md-5">
					<div class="appbox">
						<span>APP AVAILABLE AT:</span>
						<span><a href="#"><img src="<?php echo $configVars['ImageUrlPath'];?>app1.jpg" alt="" title="" ></a></span>
						<span><a href="#"><img src="<?php echo $configVars['ImageUrlPath'];?>googl1.jpg" alt="" title=""></a></span>
					</div>
				</div>
			</div>
		</div>
	</div><!--TAB-MAIN-->

	<div class="tab-article-main">
		<div class="tab-article">
			<div class="tab-content">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 col-md-6">
							<article>
								<h2> What is COINXOOM?</h2>
								<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. </p>
							</article>
							<ul class="tab-check">
								<li>Duis sed odio sit amet nibh vulputate cursus a sit amet</li>
								<li>Nam nec tellus a odio tincidunt auctor a ornare odio.</li>
								<li>Sed non  mauris vitae erat consequat auctor eu in elit.</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--TAB-ARTICLE END-->
		<div class="tab-article" style="display:block;">
			<div class="tab-content">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 col-md-6">
							<article>
								<h2> What is COINXOOM?</h2>
								<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. </p>
							</article>
							<ul class="tab-check">
								<li>Duis sed odio sit amet nibh vulputate cursus a sit amet</li>
								<li>Nam nec tellus a odio tincidunt auctor a ornare odio.</li>
								<li>Sed non  mauris vitae erat consequat auctor eu in elit.</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--TAB-ARTICLE END-->
		<div class="tab-article">
			<div class="tab-content">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 col-md-6">
							<article>
								<h2> What is COINXOOM?</h2>
								<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. </p>
							</article>
							<ul class="tab-check">
								<li>Duis sed odio sit amet nibh vulputate cursus a sit amet</li>
								<li>Nam nec tellus a odio tincidunt auctor a ornare odio.</li>
								<li>Sed non  mauris vitae erat consequat auctor eu in elit.</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--TAB-ARTICLE END-->
	</div><!--tab-article-main end-->

	<span class="coinxoom-show coinxoom-btn1"><i class="fa fa-sort-desc"></i></span></span>
	<div class="boxwrapper1">
		<div class="container icon-adjust1">
			<div class="row">
				<div class="col-sm-12 col-md-12">
					<div class="coinxoom-benifit">
						<h2> Benefits of Using COINXOOM</h2>
						<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec </p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12 col-md-12">
					<ul class="blobal-box">
						<li>
							<span class="bg-radius"><img src="<?php echo $configVars['ImageUrlPath'];?>blobal.png"></span>
							<div><span>Global Local <span>Access</span></span>
								<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean</p>
							</div>
						</li>
						<li>
							<span class="bg-radius"><img src="<?php echo $configVars['ImageUrlPath'];?>unlimited.png"></span>
							<div><span> Unlimited <span>Liquidity</span></span>
								<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean</p>
							</div>
						</li>
						<li>
							<span class="bg-radius"><img src="<?php echo $configVars['ImageUrlPath'];?>valum.png"></span>
							<div><span>Unlimited <span>Volume</span></span>
								<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida</p>
							</div>
						</li>
						<li>
							<span class="bg-radius"><img src="<?php echo $configVars['ImageUrlPath'];?>anumet.png"></span>
							<div><span> Varying levels of <span>anonymity</span></span>
								<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean</p>
							</div>
						</li>
						<li>
							<span class="bg-radius"><img src="<?php echo $configVars['ImageUrlPath'];?>trasintion.png"></span>
							<div><span>  Much lower money<span>tansaction fees</span></span>
								<p> This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor </p>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div><!--icon-adjust1 end-->

		<div class="slider-wrapper">
			<span class="quote1 coinxoom-show"><i class="fa fa-quote-left"></i></span>
			<div class="container">
				<div class="flexslider1">
					<ul class="slides">
						<li>
							<figure><img src="<?php echo $configVars['ImageUrlPath'];?>img1.png" alt=""></figure>
							<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem </p>
						</li>
						<li>
							<figure><img src="<?php echo $configVars['ImageUrlPath'];?>img1.png" alt=""></figure>
							<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem </p>
						</li>
						<li>
							<figure><img src="<?php echo $configVars['ImageUrlPath'];?>img1.png" alt=""></figure>
							<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem </p>
						</li>
					</ul>
				</div>
			</div>
		</div><!--lider-wrapper end-->
	</div><!--boxwrapper1 end-->

	<div class="invite">
		<div class="container">
			<div class="invite-box">
				<h2>Earn Money by inviting friends</h2>
				<p>Copy  your referral link.  This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel <span>velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit </span></p>
			</div>
			<div class="invite-form">
				<form action="#" method="post">
					<input type="text" placeholder="http://pixabay.com/en/photos/?orientation=&image">
				</form>
				<span class="share-btn fb-btn"><a href="#" title="Share With Friends"><i class="fa fa-facebook"></i> Share With Friends</a></span>
				<span class="share-btn twit-btn"><a href="#" title="Twit With Friends"><i class="fa fa-twitter"></i> Twit With Friends</a></span>
				<span class="share-btn emai-btn"><a href="#" title="Email Code"><i class="fa fa-envelope"></i> Email Code</a></span>
			</div>
			<p class="sinup-text"><span>SIGNUP NOW</span> and earn as much as 2 BIT</p>
		</div>
	</div><!--invite end-->

	<div class="user-box">
		<div class="userbox-shadow">
		<div class="container userbox-heading">
			<h2>top rated users</h2>
			<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. <span>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem</span></p>
		</div>
	</div>
		<div class="user-map">
			<div class="container">
				<div class="topcrowsel-wrapper">
					<div class="topcrowsel">
					  <ul class="slides">
					    <li>
					    	<div><img src="<?php echo $configVars['ImageUrlPath'];?>crosel1.jpg"><span><small class="crowsel-border"><small>Jayson C.</small></small></span></div>
					    </li>
					    <li class="active">
					    	<div><img src="<?php echo $configVars['ImageUrlPath'];?>crowsel5.jpg"><span><small class="crowsel-border"><small>Trusted by: 2 Users</small></small></span></div>
					    </li>
					    <li>
					    	<div><img src="<?php echo $configVars['ImageUrlPath'];?>crowsel3.jpg"><span><small class="crowsel-border"><small>Jayson C.</small></small></span></div>
					    </li>
					    <li>
					    	<div><img src="<?php echo $configVars['ImageUrlPath'];?>crowsel4.jpg"><span><small class="crowsel-border"><small>Jayson C.</small></small></span></div>
					    </li>
					    <li>
					    	<div><img src="<?php echo $configVars['ImageUrlPath'];?>crowsel5.jpg"><span><small class="crowsel-border"><small>Jayson C.</small></small></span></div>
					    </li>
					    <li>
					    	<div><img src="<?php echo $configVars['ImageUrlPath'];?>crosel1.jpg"><span><small class="crowsel-border"><small>Jayson C.</small></small></span></div>
					    </li>
					    <li>
					    	<div><img src="<?php echo $configVars['ImageUrlPath'];?>crowsel4.jpg"><span><small class="crowsel-border"><small>Jayson C.</small></small></span></div>
					    </li>
					    <li>
					    	<div><img src="<?php echo $configVars['ImageUrlPath'];?>crowsel3.jpg"><span><small class="crowsel-border"><small>Jayson C.</small></small></span></div>
					    </li>
					    <li>
					    	<div><img src="<?php echo $configVars['ImageUrlPath'];?>crowsel4.jpg"><span><small class="crowsel-border"><small>Jayson C.</small></small></span></div>
					    </li>
					    <li>
					    	<div><img src="<?php echo $configVars['ImageUrlPath'];?>crowsel5.jpg"><span><small class="crowsel-border"><small>Jayson C.</small></small></span></div>
					    </li>
					  </ul>
					</div>
				</div>
			</div>
		</div>
	</div><!--user-box end-->

</div><!--main-content-->
</div><!--wrapper end-->
<?Php include($configVars['SiteBasePath'].'footer.php') ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>document.jquery || document.write('<script src="<?php echo $configVars['JsUrlPath']; ?>jquery-1.11.2.min.js"></script>')</script>
<script type="text/javascript" src="<?php echo $configVars['JsUrlPath']; ?>jquery-ui.js"></script>
<script type="text/javascript" src="<?php echo $configVars['JsUrlPath']; ?>jquery.flexslider.js"></script>
<script type="text/javascript" src="<?php echo $configVars['JsUrlPath']; ?>custome.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$('.tab1 li').on('click', function(){
		var num = $(this).index();
		$(this).addClass('active').siblings('li').removeClass('active');
		$('.tab-article:eq('+num+')').slideDown().siblings('.tab-article').slideUp();
		return false;
	}); //TAB

	$('.coinxoom-btn1').on('click',function(){
		$('.boxwrapper1').slideToggle();
		$('.flexslider1').flexslider({
		    animation: "slide",
		    slideshowSpeed: 4000,
		    directionNav: false
		  }); 
	});  
  // SLIDER

  $('.topcrowsel').flexslider({
    animation: "slide",
    animationLoop: false,
    controlNav: false,
    itemWidth:150,
    itemMargin:0,
    minItems: 1,
    maxItems: 5
  });
  // CROWSEL



});
</script>
</body>
</html>