<html>
<head>
<title>welcome to homepage </title><body style="background-color:cyan">
<!DOCTYPE html>
<html>
<head>
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
</style>
</head>
<body>
<h2>welcome to the world of smRNA</h2><hr>
<ul>
 <li><a href="home.php">Home</a></li>
		<li>
			<a href="search.php">Search</a>
			</li>
			
  <li><a href="sequence and structure.php">Sequence and structure</a></li>
  <li><a href="genomic information.php">Genomic information</a></li>
<li><a href="expression information.php">Expression information</a></li>
  <ul style="float:right;list-style-type:none;">
    <li><a class="active" href="help.php">Help</a></li>
    
  </ul>
</ul> 
<hr>

</body>
</html>
 
