<!DOCTYPE html>
<html>
  <head>
    <title>Voice &amp; Ink</title>
    
    <? include './css_includes.php'; ?>
  </head>
  <body>

	<? include './header.php'; ?>
	<div id="content" class="container">
		<div class="row">
			<div class="span2 yourstory"></div>
			<div class="span8">
				<h1>Your Story</h1>				
				<p>
					You have a story. A story about who you are, and who you want to be. We exist to help you tell your story&mdash;your authentic story.
				</p>
				<p>
					While we can't write it for you, Voice &amp; Ink strives to make sure you’re telling the best version of yourself that you can! We 
					trust that you know yourself best and look forward to partnering with you to identify your story, polish it, and package it in a way 
					that makes you feel proud and prepared to promote yourself.
				</p>
				<div id="portfolio_carousel" class="carousel slide">
					<!-- Carousel items -->
					<!-- NOTE: Items should be the same height to avoid page jump when the slides transistion. -->
					<div class="carousel-inner">
						<div class="active item narrow_item">
							<img src="./img/example_1.jpg" />						
						</div>
						<div class="item narrow_item">
							<img src="./img/example_2.jpg" />
						</div>
					</div>
					<!-- Carousel nav -->
					<a class="carousel-control left" href="#portfolio_carousel" data-slide="prev">&lsaquo;</a>
					<a class="carousel-control right" href="#portfolio_carousel" data-slide="next">&rsaquo;</a>
				</div>
			</div>			
			<div class="offset2"></div>
		</div>	
	</div> <!-- #content END -->
	<? include './footer.php'; ?>

    <? include './js_includes.php'; ?>
  </body>
</html>