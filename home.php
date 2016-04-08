<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel ="stylesheet" href="styles.css"/>
<script src="scripts.js"></script>
<title>welcome to homepage</title><body style="background-color: #FFE4C4">
<style>
#header {
    background-color:black;
    color:white;
    text-align:center;
    padding:5px;
}
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}
li {
float: left;
    border-right:1px solid #bbb;
}

li:last-child {
    border-right: none;
}


li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: #111;
}
li:hover ul a {
	background: #f3f3f3;
	color: #2f3036;
	height: 40px;
	line-height: 40px;
}


li a:hover:not(.active) {
    background-color: #111;
}

/*Hover state for dropdown links*/
li:hover ul a:hover {
	background: #19c589;
	color: #fff;
}

/*Hide dropdown links until they are needed*/
li ul {
	display: none;
}

/*Make dropdown links vertical*/
li ul li {
	display: block;
	float: none;
}

/*Prevent text wrapping*/
li ul li a {
	width: auto;
	min-width: 100px;
	padding: 0 20px;
}

/*Display the dropdown on hover*/
ul li a:hover + .hidden, .hidden:hover {
	display: block;
}


.active {
    background-color: #4CAF50;
}
element {
}

.footer {
    background-color: #4CAF50 ;
 height: 55px;
}

</style>
</head>
<body>
<h2><center>welcome to the world of miRNA</center></h2>
<center><img src ="image/na.jpg" style="width:80%; height:30% "></center><hr>
<ul>
  <li><a href="home.php">Home</a></li>
		<li>
			<a href="search.php">Search</a>
					</li>
 
  <ul style="float:right;list-style-type:none;">
    <li><a class="active" href="help.php">Help</a></li>
    
  </ul>
</ul> 
<hr>
<table width="940px">
<tbody><tr><td valign="top" width="700px">
<div class="newsframe"><div class="header">&nbsp;&nbsp;&nbsp;<b>ABOUT DATABASE</b></div></div>
<p class="table_content" style="text-align:justify;padding-right:20px;">&nbsp;&nbsp;&nbsp;The Nicotiana attenuata mirna database................. 
add text </p>
<p class="table_content" style="text-align:justify;padding-right:20px;">&nbsp;&nbsp;&nbsp;Our database mainly focuses on Nicotiana attenuata. </p>
</td>
<td width="300px">

<div id="NEWS">
<div class="newsframe">
	<div class="header">&nbsp;&nbsp;&nbsp;<b>Features</b></div>
	<marquee width="300px" direction="up" scrollamount="1" scrolldelay="1" onmouseover="this.stop()" onmouseout="this.start()" height="310px">
<div class="news_content"><ul>
<li><p>Your upward scrolling text goes here</p></li>
<li><p>hsjsjisuiswhsuhhewuhduheud</p></li>
</ul></div>
	</marquee>
</div></div>
</td></td>
<tr><td colspan="2" height="50px">&nbsp;</td></tr>
<tr><td valign="top" width="900px">
<div class="newsframe"><div class="header">&nbsp;&nbsp;&nbsp;<b>ABOUT US</b></div></div>

<p class="table_content" style="text-align:justify;padding-right:40px;">&nbsp;&nbsp;&nbsp;If you have any questions, comments or suggestions 
about our website, please feel free to contact us: <a href="#" class="table_content">text</a></p>
</td></tbody>
</table>

<div class ="footer">
<div id="footer">
                <div id="left_footer">© Copyright 2016</div>
                <div id="center_footer" align="center">Recommend best viewed with: Google Chrome, Safari, Firefox</div>
                <div id="right_footer">
                    <a href="#">ADD TEXT</a>,&nbsp;<a href="htTP">TEXT</a>
                </div>
            </div>

</html>
