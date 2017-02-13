<?php 
	header("Content-type: text/css"); 

	$page=$_REQUEST['page'];
	
?>

* {
	margin: 0px;
	padding: 0px;
}

body {
	font-family: Helvetica;
}

a {
	color: #962026;
	text-decoration: none;
	border-bottom: 1px dotted #962026;
	padding-left: 3px;
	padding-right: 3px;
}

a:hover {
	color: fuchsia;
	border-bottom-color: fuchsia;
}

#header {
	position: absolute;
	top: 0;
	margin: 0 auto;
	background-color: rgba(0,0,0,.8);
	-moz-border-radius-bottomleft:8px;
	-moz-border-radius-bottomright: 8px;
	-webkit-border-bottom-left-radius: 8px;
	-webkit-border-bottom-right-radius: 8px;
	color: white;
	padding: 0 10px 0px 10px;
	left: 15%;
	width: 65%;
	display: none;
}

#jumpToArtShow {
	color: white;
	position: absolute;
	top: 20px;
	right: 0px;
	background-color: rgba(255,255,255,.1);
	-moz-border-radius-bottomleft:8px;
	-moz-border-radius-topleft: 8px;
	-webkit-border-bottom-left-radius: 8px;
	-webkit-border-top-left-radius: 8px;
	padding: 5px;
	vertical-align: middle;
	border: 1px solid rgba(0,0,0,0);
	border-right-width: 0px;
}

#jumpToArtShow:hover {
	position: absolute;
	border-width: 2px;
	top: 19px;
	padding-right: 3px;
	background-color: rgba(255,255,255,.3);

}

#topNav {
	text-shadow: 0px 0px;
	border-bottom-width: 2px;
	border-bottom-color: #992222;
	height: 200px;
	background-color: #962026;
	background-image: url(gradient.php?height=200&color2=8a2332&color1=962026);
	border-bottom: 2px solid #7e1111;
	text-align: center;
	position: relative;
	min-width: 950px;
}

#mainWrapper {
	background-image: url(gradient.php?height=15&color2=fff&color1=aaa);
	background-position: 0 0px;
	background-repeat: repeat-x;
	min-height: 100px;
	padding-top: 30px;
	min-width: 950px;
	
}

#title {
	display: none;
	font-style: normal;
	font-weight: normal;
	margin: 0 auto;
	text-align: center;
	line-height: 200px;
	font-size: 72px;
	color: #2e3664;
}

#titleImage {
	margin: 0 auto;
	text-align: center;
	position: absolute;
	z-index: 2;
}

#titleImage p{
	position: absolute;
	bottom: 10px;
	color: rgba(255,255,255,.6);
	left: 189px;
	letter-spacing: .1em;
	word-spacing: 2px;
}

#content {
	margin: 0 auto;
	//background-color: #ded;
	//background-color: #f3f4ff;
	//border: 1px dotted #d7e3d6;
	min-height: 400px;
	border-bottom: 1px solid #222;
	padding-left: 50px;
}

#infoBox h3 {
	text-indent: 40px;
	clear: both;
	padding-top: 30px;
}

#footer {
	min-height: 200px;
	background-image: url(gradient.php?height=200&color2=bbb&color1=777);
	border-top: 2px solid #555;
	position: relative;
	max-height: 200px;
	clear: both;
}

#options {
	text-align: center;
	position: relative;
	
}

#options li {
	list-style-type: none;
	font-size: 28px;
	color: #bb6633;
	background-color: #ded;
	padding: 4px;
	width: 200px;
	margin-right: 20px;
	-webkit-border-radius: 10px;
	-webkit-border-bottom-right-radius: 0px;
	-webkit-border-bottom-left-radius: 0px;
	display: inline-table;
	position: relative;
	bottom: -5px;
}

#options li:hover {
	background-color: #d7e3d6;
	border: 1px dotted #a7e3a6;
	padding-bottom: 3px;
	border-bottom: 0px;
}

#policy {
	position: absolute;
	bottom: 0px;
	background-color: rgba(0,0,0,.9);
	width: 100%;
	text-align: center;
	color: #aaa;
	font-size: 11px;
}

#buttonDownload {
	position: absolute; 
	right: 100px; 
	top: 100px;
	background-image: url(button.download.png); 
	background-repeat: no-repeat;
	width: 228px; 
	height: 91px;
}

#buttonDownload p {
	color: #b5defd; 
	color: rgba(181,222,253,.5);
	position: absolute;
	bottom: -5px;
	left: 55px;
	font-size: 10px;
	display: none;
}

#buttonDownload:hover {
	background-image: url(button.download.hover.png);
	top: 94px;
	right: 104px;
}

#buttonDownload:hover p {
	display: block;
}

#sideNote {
	display: none;
}

.cBlue {
	color: #143462;
}

.cPink {
	color: fuchsia;
}

#menuItems {
	background-color: white;
	line-height: 44px;
}

#menuItems span {
	background-color: #dedede;
	padding: 10px 20px;
	font-size: 28px;
	border: 1px dotted #ccc;	
	-moz-border-radius-topleft: 10px;
	-moz-border-radius-topright: 10px;
	-webkit-border-top-left-radius: 10px;
	-webkit-border-top-right-radius: 10px;
	border-bottom-width: 0px;
	
}

#menuItems .selected {
	background-color: #f3f3f3;
	position: relative;
	padding-bottom: 12px;
	background-repeat: repeat-x;
	background-image: url(gradient.php?height=5&color1=f8ffff&color2=f3f3f3);
}

#menuItems .unselected {
	background-image: url(gradient.php?height=20&color2=bebebe&color1=ccccce);
	background-repeat: repeat-x;
	background-position-y: bottom;
	background-color: #ccccce;
	border-color: #bbb;
	padding-bottom: 6px;
	position: relative;
	bottom: -5px;
	
}

#menuItems .unselected:hover {
	cursor: pointer;
	background-image: url(gradient.php?height=53&color1=ddd&color2=bbb);
}

#menuItems .unselected:active {
	background-image: none;
	background-color: #f3f3f3;
	bottom: -6px;
}

#tutorial, #faq, #gallery {
	display: none;
}

#infoBox {
	margin-right: 250px;
	min-width: 632px;
	margin-bottom: 30px;
	position: relative;
	
}

.contentBox {
	border: 1px dotted #ccc;
	-moz-border-radius: 10px;
	-moz-border-radius-topleft: 0px;
	-moz-border-radius-topright: 0px;
	-webkit-border-bottom-left-radius: 10px;
	-webkit-border-bottom-right-radius: 10px;
	-webkit-border-top-right-radius: 10px;
	padding-left: 10px;
	padding-right: 10px;
	background-image: url(gradient.php?height=500&color1=f3f3f3&color2=fff);
	background-repeat: repeat-x;
	min-height: 400px;
}

#infoBox object {
	margin: 0 auto;
	margin-top: 30px;
	margin-left: 20px;
	margin-right: 20px;
}

#infoBox h2 {
	font-size: 36px;
	text-transform: lowercase;
	margin-bottom: 20px;
	margin-top: 50px;
	padding-left: 15px;
	border-left: 8px solid rgba(0,0,0,.1);
	background-color: #eee;
	background-image: url(http://media.eversplosion.com/gradient.php?height=44&color1=ddd&color2=f8f8f8);
	clear: both;
	letter-spacing: -2px;
}

.contentBox h2 a {
	color: rgba(0,0,0,0);
	border-bottom: 0px solid black;
}

#infoBox p {
	margin-bottom: 20px;
	margin-left: 40px;
	text-indent: 40px;
	margin-right: 40px;
	line-height: 30px;	
}

#listOfPatterns {
	margin: 0 auto;
	margin-left: 50px;
	margin-right: 70px;
	list-style: none;

}

#listOfPatterns li {
	float: left;
	margin-bottom: 10px;
	line-height: 18px;
	text-indent: -30px;
	padding-top: 10px;
}

#listOfPatterns img {
	float: left;
	border: 2px solid #aaa;
	height: 75px;
	width: 75px;
	clear: both;
	margin-right: 40px;
}

#listOfPatterns em {
	font-weight: bold;
	color: #143462;
}

#terminology {
	position: absolute;
}

#galleryBody {
	background-color: #000;		
}

#thumbs {
	position:absolute;
	bottom: 30px;
	right: 0px;
	margin: 10px;
	padding: 15px 10px 10px 15px;
	-moz-border-radius: 10px;
	background-color: rgba(0,0,0,.85);
	border: 1px solid rgba(255,255,255,.5);
}

#thumbs div {
	display: inline-block;
	padding: 2px;
	max-width: 100px;
	text-align: center;
}

#thumbs p {
	color: #555;
	font-size: 10px;
	font-style: italic;
}

#thumbs img {
	border: 1px solid black;
	cursor: pointer;
}

#thumbs img:hover {
	border: 1px solid white;
}

#fader {
	position:absolute;
	top: 0px;
	left: 0px;
	width: 100%;
	min-height: 600px;
	background-color: rgba(0,0,0,0);
}

<?php

	switch ($page) {
		
		

		
	}

?>