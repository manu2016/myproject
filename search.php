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
<h2><center>welcome to the world of smRNA</center></h2><hr>
<ul>

<li><a href="home.php">Home</a></li>
		<li>
		<a href="search.php">Search</a>
		</li>
 
  <ul style="float:right;list-style-type:none;">
    <li><a class="active" href="help.php">Help</a></li>
    
  </ul>
</ul> 
    
  </ul>
</ul> 
<hr>
<table width="940px" align="center" height="700px">

    <tbody>
        <tr valign="top">
        <td>
         <p class="title1">
          <b>
           Sequence Search:

           </b>
           </p>
<p class="table content">
This page allows you to search for miRNAs information present in the database using identified IDs.
</p>
<fieldset style="margin:0;padding:16px;position:relative;width:850px">

    <legend style="font:bold 20px Verdana;color:black">

        Search by ID

    </legend>
   <form enctype="multipart/form-data" action="id1.php" method="post" name="sigsearch">
        <table>
     <tbody>
     <tr height="35px">
      <td width="200" style="word-break:break-all">
      <font style="font: 15px Verdana, Arial;color:blue">
<b>
 Enter mirna ID:
</b>
 </font>
</td>

<td>
<input type="text" name="name"></input><br>
       
<form method="POST" action="id1.php"></br>

 
<button type="submit" value="Submit">Submit</button>
<button type="reset" value="Reset">Reset</button>

</fieldset>
</body>
</html>

