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
<hr>
</div>
<table>
<table height="700px" align="center" width="1000px">
<tbody><tr valign="top"><td>
<table align="center" width="100%"><tbody><tr><td>
<tr><td>
<table style="border-collapse:collapse;table-layout:fixed;" border="2" bordercolor="#069" cellspacing="0" width="1000">
<tbody>
<tr class="title1" height="50px"><td colspan="2" align="center" bgcolor="#1E90FF"><b>Basic Info</b></td></tr>

<?php
require_once 'smrna.php';

$db_server = mysql_connect($db_hostname,$db_user,$db_password);
if(!$db_server) die ("Unable to connect with mysql". mysql_error());

mysql_select_db($db_database);
if(!$db_database) die ("Unable to connect with given database". mysql_error());

$name = $_POST['name']; 
$query = "select smrna_name from input where smrna_id ='$name'";
$result= mysql_query($query);

if(!$result) die ("database access failed". mysql_error());

$row = mysql_num_rows($result);
print "<tr><td><b> Non coding RNA</b></td>"; 
   for($j=0; $j< $row; ++$j) 
{
    $row=mysql_fetch_row($result);
   
   for($k=0; $k< 5; ++$k) print "<td>$row[$k]</td></tr>"; 
    } 

$spquery = "select species_name from species where smrna_id = '$name'";
$result= mysql_query($spquery);

if(!$result) die ("database access failed". mysql_error());

$row = mysql_num_rows($result);

print "<tr><td><b> Species </b></td>";
   for($j=0; $j< $row; ++$j) 
{
    $row=mysql_fetch_row($result);

   for($k=0; $k< 5; ++$k) print "<td>$row[$k]</td></tr>";
    }

$squery = "select smrna_type from expression where smrna_id = '$name'";
$result= mysql_query($squery);

if(!$result) die ("database access failed". mysql_error());

$row = mysql_num_rows($result);

print " <tr><td><b> Class </b></td>";  
    
   for($j=0; $j< $row; ++$j) 
{
    $row=mysql_fetch_row($result);
   for($k=0; $k< 7; ++$k) print "<td>$row[$k]</td></tr>";
    } 
$query = "select accession_no from input where smrna_id ='$name'";
$result= mysql_query($query);

if(!$result) die ("database access failed". mysql_error());

$row = mysql_num_rows($result);
	
print "<tr><td><b> Accession Number </b></td>";  
   for($j=0; $j< $row; ++$j) 
{
    $row=mysql_fetch_row($result);
 for($k=0; $k< 7; ++$k) print "<td>$row[$k]</td></tr>";
    } 
$query = "select gene_id from input where smrna_id ='$name'";
$result= mysql_query($query);

if(!$result) die ("database access failed". mysql_error());

$row = mysql_num_rows($result);
	
print "<tr><td><b> Gene Id </b></td>";  
   for($j=0; $j< $row; ++$j) 
{
    $row=mysql_fetch_row($result);
 for($k=0; $k< 7; ++$k) print "<td>$row[$k]</td></tr>";
    } 
$tquery = "select tissue_type from tissue where smrna_id ='$name'";
$result= mysql_query($tquery);

if(!$result) die ("database access failed". mysql_error());

$row = mysql_num_rows($result);

print "<tr><td><b> Tissue </b></td>";   
   for($j=0; $j< $row; ++$j) 
{
    $row=mysql_fetch_row($result); 
   for($k=0; $k< 5; ++$k) print "<td>$row[$k]</td></tr>"; 
    } 
	

$cquery = "select experiments from tissue where smrna_id ='$name'";
$result= mysql_query($cquery);

if(!$result) die ("database access failed". mysql_error());

$row = mysql_num_rows($result);
	
print "<tr><td><b>Evidence</b></td>"; 
   for($j=0; $j< $row; ++$j) 
{
    $row=mysql_fetch_row($result); 
   for($k=0; $k< 5; ++$k) print "<td>$row[$k]</td></tr>";
    } 
	
$Bquery = "select ref_id from reference where smrna_id ='$name'";
$result= mysql_query($Bquery);

if(!$result) die ("database access failed". mysql_error());

$row = mysql_num_rows($result);

print "<tr><td><b>Reference </b></td>"; 
   for($j=0; $j< $row; ++$j) 
{
    $row=mysql_fetch_row($result); 
   for($k=0; $k< 5; ++$k) print "<td>$row[$k]</td></tr>";
    }  
echo "</table>";
?>
        </tr>
</td></tr>
<table style="border-collapse:collapse;table-layout:fixed;" border="2" bordercolor="#069" cellspacing="0" width="100%">
<tbody>

<tr class="title1" height="50px"><td colspan="1" align="center" bgcolor="#1E90FF"><b>Sequence and Structure info</b></td></tr>
<tr><td colspan="1" style="word-wrap: break-word" width="990px"><p><font color="#111"><b><center>Mature sequence at 5P</center></b></font>

<?php
require_once 'smrna.php';

$db_server = mysql_connect($db_hostname,$db_user,$db_password);
if(!$db_server) die ("Unable to connect with mysql". mysql_error());

mysql_select_db($db_database);
if(!$db_database) die ("Unable to connect with given database". mysql_error());

$name = $_POST['name']; 
$query = "select mature_seq5 from expression where smrna_id ='$name'";
$result= mysql_query($query);


if(!$result) die ("database access failed". mysql_error());

$row = mysql_num_rows($result);

   for($j=0; $j< $row; ++$j) 
{
    $row=mysql_fetch_row($result);
   
   for($k=0; $k< 5; ++$k) print "$row[$k]"; 
    } 
?>
<tr><td colspan="1" style="word-wrap: break-word" width="990px"><p><font color="#111"><b><center>Mature sequence at 3P</center></b></font>
<?php
require_once 'smrna.php';

$db_server = mysql_connect($db_hostname,$db_user,$db_password);
if(!$db_server) die ("Unable to connect with mysql". mysql_error());

mysql_select_db($db_database);
if(!$db_database) die ("Unable to connect with given database". mysql_error());

$name = $_POST['name']; 
$query = "select mature_seq3 from expression where smrna_id ='$name'";
$result= mysql_query($query);

if(!$result) die ("database access failed". mysql_error());

$row = mysql_num_rows($result);

   for($j=0; $j< $row; ++$j) 
{
    $row=mysql_fetch_row($result);
   
   for($k=0; $k< 5; ++$k) print "$row[$k]"; 
    } 
?>
 </tr>
</td></tr>
<table style="border-collapse:collapse;table-layout:fixed;" border="2" bordercolor="#069" cellspacing="0" width="100%">
<tbody>

<tr class="title1" height="50px"><td colspan="2" align="center" bgcolor="#1E90FF"><b>Gene info</b></td></tr>

<?php
require_once 'smrna.php';

$db_server = mysql_connect($db_hostname,$db_user,$db_password);
if(!$db_server) die ("Unable to connect with mysql". mysql_error());

mysql_select_db($db_database);
if(!$db_database) die ("Unable to connect with given database". mysql_error());

$name = $_POST['name']; 
$query = "select chromosome from genome_loc where smrna_id ='$name'";
$result= mysql_query($query);


if(!$result) die ("database access failed". mysql_error());

$row = mysql_num_rows($result);
print "<tr><td><b> Chromosome </b></td>"; 
   for($j=0; $j< $row; ++$j) 
{
    $row=mysql_fetch_row($result);
   
   for($k=0; $k< 5; ++$k) print "<td>$row[$k]</td></tr>"; 
    } 

?>
<?php
require_once 'smrna.php';

$db_server = mysql_connect($db_hostname,$db_user,$db_password);
if(!$db_server) die ("Unable to connect with mysql". mysql_error());

mysql_select_db($db_database);
if(!$db_database) die ("Unable to connect with given database". mysql_error());

$name = $_POST['name']; 
$query = "select chr_start from genome_loc where smrna_id ='$name'";
$result= mysql_query($query);

if(!$result) die ("database access failed". mysql_error());

$row = mysql_num_rows($result);
print "<tr><td><b> Start site </b></td>"; 
   for($j=0; $j< $row; ++$j) 
{
    $row=mysql_fetch_row($result);
   
   for($k=0; $k< 5; ++$k) print "<td>$row[$k]</td></tr>"; 
    } 

?>

<?php
require_once 'smrna.php';

$db_server = mysql_connect($db_hostname,$db_user,$db_password);
if(!$db_server) die ("Unable to connect with mysql". mysql_error());

mysql_select_db($db_database);
if(!$db_database) die ("Unable to connect with given database". mysql_error());

$name = $_POST['name']; 
$query = "select chr_stop from genome_loc where smrna_id ='$name'";
$result= mysql_query($query);

if(!$result) die ("database access failed". mysql_error());

$row = mysql_num_rows($result);
print "<tr><td><b> Stop site </b></td>"; 
   for($j=0; $j< $row; ++$j) 
{
    $row=mysql_fetch_row($result);
   
   for($k=0; $k< 5; ++$k) print "<td>$row[$k]</td></tr>"; 
    } 

?>

<?php
require_once 'smrna.php';

$db_server = mysql_connect($db_hostname,$db_user,$db_password);
if(!$db_server) die ("Unable to connect with mysql". mysql_error());

mysql_select_db($db_database);
if(!$db_database) die ("Unable to connect with given database". mysql_error());

$name = $_POST['name']; 
$query = "select strand from genome_loc where smrna_id ='$name'";
$result= mysql_query($query);

if(!$result) die ("database access failed". mysql_error());

$row = mysql_num_rows($result);
print "<tr><td><b> Strand (w:watson or c:crick) </b></td>"; 
   for($j=0; $j< $row; ++$j) 
{
    $row=mysql_fetch_row($result);
   
   for($k=0; $k< 5; ++$k) print "<td>$row[$k]</td></tr>"; 
    } 

?>
<tr><td colspan="2" style="word-wrap: break-word" width="990px"><p><font color="#111"><b><center>Genome Browser information</center></b><center><a href="link">link</a></center></font>

</tr>
</td></tr>
<table style="border-collapse:collapse;table-layout:fixed;" border="2" bordercolor="#069" cellspacing="0" width="100%">
<tbody>

<tr class="title1" height="50px"><td colspan="2" align="center" bgcolor="#1E90FF"><b>Expression info</b></td></tr>
<tr><td colspan="2" style="word-wrap: break-word" width="990px"><p><font color="#111"><b><center>Expression (Read Counts)</center></b></font>

<?php
require_once 'smrna.php';

$db_server = mysql_connect($db_hostname,$db_user,$db_password);
if(!$db_server) die ("Unable to connect with mysql". mysql_error());

mysql_select_db($db_database);
if(!$db_database) die ("Unable to connect with given database". mysql_error());

$name = $_POST['name']; 
$query = "select  readcount5 from expression where smrna_id ='$name'";
$result= mysql_query($query);

if(!$result) die ("database access failed". mysql_error());

$row = mysql_num_rows($result);
print "<tr><td><b> Reads count at 5P </b></td>"; 
   for($j=0; $j< $row; ++$j) 
{
    $row=mysql_fetch_row($result);
   
   for($k=0; $k< 5; ++$k) print "<td>$row[$k]</td></tr>"; 
    } 

?>
<?php
require_once 'smrna.php';

$db_server = mysql_connect($db_hostname,$db_user,$db_password);
if(!$db_server) die ("Unable to connect with mysql". mysql_error());

mysql_select_db($db_database);
if(!$db_database) die ("Unable to connect with given database". mysql_error());

$name = $_POST['name']; 

$query = "select  readcount3 from expression where smrna_id ='$name'";
$result= mysql_query($query);

if(!$result) die ("database access failed". mysql_error());

$row = mysql_num_rows($result);
print "<tr><td><b> Reads count at 3P </b></td>"; 
   for($j=0; $j< $row; ++$j) 
{
    $row=mysql_fetch_row($result);
   
   for($k=0; $k< 5; ++$k) print "<td>$row[$k]</td></tr>"; 
} 
  
?>
<tr><td colspan="2" style="word-wrap: break-word" width="990px"><p><font color="#111"><b><center>View Expression analysis</center></b><center><a href="link">link</a></center></font>

</body>
</html>

