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
				<h1>Your Story (Page header)</h1>
				<h3>Your Story (Section header)</h3>
				<p>
					<strong>Bold text looks like this</strong>, <i>Italic text looks like this</i>You have a story. 
					A story about who you are, and who you want to be. We exist to help you tell your story&mdash;your 
					authentic story.
				</p>
				<p>
					This is how multiple paragraphs look. Curabitur laoreet faucibus tincidunt. 
					Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. 
					Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent 
					vulputate mauris sit amet massa lobortis vitae condimentum purus cursus. Nam est libero, 
					cursus in ullamcorper vulputate, dictum id augue. Quisque at libero eu massa pharetra vehicula. 
					Fusce vitae luctus massa. In hac habitasse platea dictumst. Quisque dolor elit, viverra iaculis 
					rutrum eu, malesuada at massa. Mauris sit amet libero mi. Pellentesque eu risus leo.
					Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. 
					Aenean nibh enim, fermentum sit amet dictum eget, elementum in sem. Morbi quam elit, eleifend 
					nec dictum ac, tristique quis elit. Integer at tellus justo. Pellentesque eu aliquet augue.
				</p>
				<hr />
				<p>
					<strong>This is how you do the line breaks</strong>					
				</p>
				<hr />				
			</div>
			<div class="offset2"></div>
		</div>
		<div class="row">
			<div class="span2 campers"></div>
			<div class="span8">
				<div id="portfolio_carousel" class="carousel slide">
					<!-- Carousel items -->
					<!-- NOTE: Items should be the same height to avoid page jump when the slides transistion. -->
					<div class="carousel-inner">
					<div class="active item">
						<img src="./img/Placeholder_620x698.gif" />
						<div class="carousel-caption">
						  <h4>Normal Sized Carousel Item</h4>
						  <p>By default the image space you have is 620px wide, but the images go behind the carousel controls. See next slide for a narrow option.</p>
						</div>
					</div>
					<div class="item narrow_item">
						<img src="./img/Placeholder_480x698.gif" />
						<div class="carousel-caption">
						  <h4>Narrow Carousel Item</h4>
						  <p>The narrow carousel item is 480px wide, and doesn't have anything hidden</p>
						</div>
					</div>
					</div>
					<!-- Carousel nav -->
					<a class="carousel-control left" href="#portfolio_carousel" data-slide="prev">&lsaquo;</a>
					<a class="carousel-control right" href="#portfolio_carousel" data-slide="next">&rsaquo;</a>
				</div>
				<hr />
			</div>			
			<div class="offset2"></div>
		</div>
		<div class="row">
			<div class="span2 pro"></div>
			<div class="span8">
				<h3>Lists</h3>
				<p>
					Circulating your resume and cover letters without luck? Writing your first resume in years&mdash;or ever? We will:
					<ul>
						<li>This is a list.</li>
						<li>This is how the list is styled</li>
						<li>Item 3</li>
					</ul>
				</p>
				<hr />
			</div>
			<div class="offset2"></div>
		</div>
		<div class="row">
			<div class="span2 romantic"></div>
			<div class="span8">
				<h3>Quotes</h3>
				<blockquote>
				  <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante."</p>
				  <small class="pull-right">Someone famous in <cite title="Source Title">Source Title</cite></small>
				</blockquote>
				<hr class="clearfix" />
			</div>			
			<div class="offset2"></div>
		</div>
		<div class="row">
			<div class="span2 ourstory"></div>
			<div class="span8">
				<h3>Your Story (Section header)</h3>
				<p>
					<strong>NOTE: </strong>If you want to use another pictogram, you'll have to create a new row.
				</p>
			</div>
			<div class="offset2"><!-- Leave alone --></div>
		</div>		
	</div> <!-- #content END -->
	<? include './footer.php'; ?>

    <? include './js_includes.php'; ?>
  </body>
</html>