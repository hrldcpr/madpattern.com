<?php

include_once("library.inc");

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>

<head>
	<title>matt handler's historical butter</title>
	<style type="text/css" >
		@import url("css.php");
	</style>

	
	<script type="text/javascript">
	    
	    function allBut(Which, WhichBox) {
	    	document.getElementById(Which).className="selected";
	    	document.getElementById(WhichBox).style.display='block';

	    	if ( Which != "aboutTab" ){ 
	    		document.getElementById("aboutTab").className="unselected";
	    		document.getElementById("about").style.display='none';
	    	}
	    	if ( Which != "tutorialTab" ) { 
	    		document.getElementById("tutorialTab").className="unselected";
	    		document.getElementById("tutorial").style.display='none';
	    		}
	    	if ( Which != "faqTab" ) { 
	    		document.getElementById("faqTab").className="unselected";
	    		document.getElementById("faq").style.display='none';
	    		}
	    	if ( Which != "galleryTab" ) { 
	    		document.getElementById("galleryTab").className="unselected";
	    		document.getElementById("gallery").style.display='none';
	    		}
	    		
	    	
	    }
	</script> 
</head>
<body>
	
	<div id="header">
		some text
	</div>
	

	
	<div id="topNav">
		
		<div id="titleImage" ><img src="madpatternlogo.png" /><p><span style="color:#f5d950;;margin-right:2px">illustrator</span> templates for making crazy patterns</p></div>
		
		<div style="background-image: url(standardbg.png);height:200px;position:absolute;width:100%;top:0px;opacity: 20%;;"></div>
		<div id="buttonDownload"><p>requires adobe illustrator cs4</p></div>
	
		<div id="jumpToArtShow">
			check out the art show &raquo;
		</div>
	</div>
	<div id="mainWrapper">

<!--
		<div id="content">
			<div id="about" class="infoBox">
				<ul class="sideNote">Terminology:
					<li>select: to click on a layer (not targeting, see below)</li>
					<li>target: to click the circle that appears to the right of a layer (which selects the item on the artboard)</li>
					<li>tile: a rectangular image that can be used as the background of a website and will tile the entire pattern</li>
					<li>cell: the smallest possible unit that can create your pattern</li>
				</ul>
				<h1>About</h1>
				<h1>Tutorial</h1>
				<h1>FAQ</h1>
				<h1>Gallery</h1>
				<h3><span class="cBlue">Mad</span><span class="cPink">Pattern</span> is a set of Adobe Illustrator templates that let you easily create elaborate patterns with instant visual feedback.</h3>
				
<object width="601" height="368"><param name="allowfullscreen" value="true" /><param name="allowscriptaccess" value="always" /><param name="movie" value="http://vimeo.com/moogaloop.swf?clip_id=5852619&amp;server=vimeo.com&amp;show_title=1&amp;show_byline=0&amp;show_portrait=0&amp;color=59a5d1&amp;fullscreen=1" /><embed src="http://vimeo.com/moogaloop.swf?clip_id=5852619&amp;server=vimeo.com&amp;show_title=1&amp;show_byline=0&amp;show_portrait=0&amp;color=59a5d1&amp;fullscreen=1" type="application/x-shockwave-flash" allowfullscreen="true" allowscriptaccess="always" width="601" height="368"></embed></object>
				
				<h2>Inspiration</h2>
				<p>Normally when you draw, you are interacting with a 2d space that has no symmetry (essentially flat).  When you want to create
				a pattern, which has symmetry, you draw in this flat space.  Therein lies the problem.</p>
				<p>I spent a few years attempting to make patterns in <a href="www.adobe.com">Adobe Illustrator</a> and while i managed to do it,
				I noticed that it was extremely hard&#8212;not because of the nature of what I was doing, but because the tools weren't right.  When
				you draw in flat space, you get instant feedback as to what the image will look like.  When you are creating the tile for a pattern
				you generally don't get instant feedback because you have to actually tile the pattern before you can get a sense of what it will look like, if the colors are right, etc...  </p>
				<h2>Mathematical Background</h2>
				<p>I encourage anyone who takes an interest in patterns, this site, or my work to read the wikipedia entry on the <a href="http://en.wikipedia.org/wiki/Wallpaper_group">Wallpaper Group</a>.  Essentially it explains that using the three symmetry operations <b>mirror</b>, <b>rotation</b>, and <b>glide</b>, there are only 17 combinations that will tile in flat space.</p>  
			</div>
		</div>
-->
		<div id="content">
			<div id="sideNote">
				<ul id="terminology">Terminology:
					<li>select <p>to click on a layer (not targeting, see below)</p></li>
					<li>target <p>to click the circle that appears to the right of a layer (which selects the item on the artboard)</p></li>
					<li>tile <p>a rectangular image that can be used as the background of a website and will tile the entire pattern</p></li>
					<li>cell <p>the smallest possible unit that can create your pattern</p></li>
				</ul>
			</div>
			<div id="infoBox">
				<div id="menuItems">
					<span id="aboutTab" class="selected" onclick="allBut('aboutTab', 'about');">About</span>
					<span id="tutorialTab" class="unselected" onclick="allBut('tutorialTab', 'tutorial');">Tutorial</span>
					<span id="faqTab" class="unselected" onclick="allBut('faqTab', 'faq');">FAQ</span>
					<span id="galleryTab" class="unselected" onclick="allBut('galleryTab', 'gallery');">Gallery</span>
				</div>
				<div id="about" class="contentBox">
					
					<h3><span class="cBlue">Mad</span><span class="cPink">Pattern</span> is a set of Adobe Illustrator templates that let you easily create elaborate patterns with instant visual feedback.</h3>
					
					<object width="601" height="368"><param name="allowfullscreen" value="true" /><param name="allowscriptaccess" value="always" /><param name="movie" value="http://vimeo.com/moogaloop.swf?clip_id=5852619&amp;server=vimeo.com&amp;show_title=1&amp;show_byline=0&amp;show_portrait=0&amp;color=59a5d1&amp;fullscreen=1" /><embed src="http://vimeo.com/moogaloop.swf?clip_id=5852619&amp;server=vimeo.com&amp;show_title=1&amp;show_byline=0&amp;show_portrait=0&amp;color=59a5d1&amp;fullscreen=1" type="application/x-shockwave-flash" allowfullscreen="true" allowscriptaccess="always" width="601" height="368"></embed></object>
					
					<h2>What's Included</h2>
					
					<p>The package contains 21 <a href="http://www.adobe.com/illustrator/">Adobe Illustrator</a> template files.  Though there are <a href="#math">only 17 types of patterns</a>, I have included a few extra templates that are rotated by 45&deg;.  </p><h3>Included:</h3>
					<ul id="listOfPatterns">
						<li><img src="" /><em>p1.ai</em> - the simplest pattern space.  this is just a square the gets repeated in the x and y directions</li>
						<li><img src="" /><em>p2.ai</em> - the simplest pattern space.  this is just a square the gets repeated in the x and y directions</li>
					</ul>
					
					<h2>Inspiration</h2>
					
					<p>Normally when you draw, you are interacting with a 2d space that has no symmetry (essentially flat).  When you want to create a pattern, which has symmetry, you draw in this flat space.  Therein lies the problem.</p>
					
					<p>I spent a few years attempting to make patterns in <a href="www.adobe.com">Adobe Illustrator</a> and while i managed to do it, I noticed that it was extremely hard&#8212;not because of the nature of what I was doing, but because the tools weren't right.  When you draw in flat space, you get instant feedback as to what the image will look like.  When you are creating the tile for a pattern you generally don't get instant feedback because you have to actually tile the pattern before you can get a sense of what it will look like, if the colors are right, etc...  </p>
					
					<h2><a name="math"></a>Mathematical Background</h2>
					<p>I encourage anyone who takes an interest in patterns, this site, or my work to read the wikipedia entry on the <a href="http://en.wikipedia.org/wiki/Wallpaper_group">Wallpaper Group</a>.  Essentially it explains that using the three symmetry operations <b>mirror</b>, <b>rotation</b>, and <b>glide</b>, there are only 17 combinations that will tile in flat space.</p>  

					
				</div>
				<div id="tutorial" class="contentBox">
					tutorial
				</div>
				<div id="faq" class="contentBox">
					faq
				</div>
				<div id="gallery" class="contentBox">
					gallery
				</div>
			</div>
			<div style="clear:both"></div>
		</div>
		
		
		
	</div>
	
<?php footer(); ?>
</body>