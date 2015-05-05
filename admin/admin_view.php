<?php 
session_start();
if($_SESSION["myusername"]=="")
{	
?>
	<script type="text/javascript">
		window.location="admin_login.php";
    </script>
<?php 
}
	include "connection.php"; ?>


<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8"/>
	<title>Dashboard I Admin Panel</title>
	
	<link rel="stylesheet" href="css/layout.css" type="text/css" media="screen" />
	<style type="text/css">
	#main .module.width_full table tr td table tr td strong {
	color: #000;
}
    #main .module.width_full table tr td table tr td {
	font-size: 10px;
	text-align: center;
}
    </style>
	<!--[if lt IE 9]>
	<link rel="stylesheet" href="css/ie.css" type="text/css" media="screen" />
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<script src="js/jquery-1.5.2.min.js" type="text/javascript"></script>
	<script src="js/hideshow.js" type="text/javascript"></script>
	<script src="js/jquery.tablesorter.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="js/jquery.equalHeight.js"></script>
	<script type="text/javascript">
	$(document).ready(function() 
    	{ 
      	  $(".tablesorter").tablesorter(); 
   	 } 
	);
	$(document).ready(function() {

	//When page loads...
	$(".tab_content").hide(); //Hide all content
	$("ul.tabs li:first").addClass("active").show(); //Activate first tab
	$(".tab_content:first").show(); //Show first tab content

	//On Click Event
	$("ul.tabs li").click(function() {

		$("ul.tabs li").removeClass("active"); //Remove any "active" class
		$(this).addClass("active"); //Add "active" class to selected tab
		$(".tab_content").hide(); //Hide all tab content

		var activeTab = $(this).find("a").attr("href"); //Find the href attribute value to identify the active tab + content
		$(activeTab).fadeIn(); //Fade in the active ID content
		return false;
	});

});
    </script>
    <script type="text/javascript">
    $(function(){
        $('.column').equalHeight();
    });
</script>

</head>


<body>

	<header id="header">
		<hgroup>
			<h1 class="site_title"><a href="admin_home.php">Website Admin</a></h1>
			<h2 class="section_title">Dashboard</h2>
		</hgroup>
	</header> <!-- end of header bar -->
	
	<section id="secondary_bar">
		<div class="user">
		  <p><?php $_SESSION['myusername']; ?> (<a href="admin_home.php">Admin</a>)</p>
		  <!-- <a class="logout_user" href="#" title="Logout">Logout</a> -->
		</div>
		<div class="breadcrumbs_container">
			<article class="breadcrumbs"><a href="index.html">Website Admin</a> <div class="breadcrumb_divider"></div> <a class="current">Dashboard</a></article>
		</div>
	</section><!-- end of secondary bar -->
	<aside id="sidebar" class="column">
	  <h3>Content</h3>
	  <ul class="toggle">
	    <li><a href="admin_home.php">Home</a></li>
	    <li class="icn_new_article"><a href="admin_new.php">New Add Property</a></li>
	    <li class="icn_edit_article"><a href="admin_view.php">View Information</a></li>
	    <li class="icn_tags"><a href="map.php">Map</a></li>
      </ul>
	  <h3>Users</h3>
	  <ul class="toggle">
	    <li class="icn_add_user"><a href="add_customer.php">Add Customer</a></li>
	    <li class="icn_view_users"><a href="view_customer.php">Find Customer</a></li>
	    <li class="icn_profile"><a href="view_all.php">View All</a></li>
      </ul>
	  <h3>Admin</h3>
	  <ul class="toggle">
	    <li class="icn_jump_back"><a href="setting.php">Setting</a></li>
	    <li class="icn_jump_back"><a href="logout.php">Logout</a></li>
      </ul>
	  <footer>
	    <hr />
	    <p><strong>Copyright &copy; 2011 Website Admin</strong></p>
	    <p>&nbsp;</p>
      </footer>
</aside>
	<!-- end of sidebar -->
	
	<section id="main" class="column">
		
		<h4 class="alert_success">A Success Message</h4><!-- end of stats article --><!-- end of content manager article -->
      <!-- end of messages article --><!-- end of post new article -->

      <article class="module width_full">
	    <header><h3>Basic Styles</h3></header>
        <p>
          <?php

$host="localhost";
$username="root";
$password="";
$db_name="property";
$tbl_name="property";

mysql_connect("$host","$username","$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");
$sql="SELECT*FROM $tbl_name GROUP BY id_property DESC";
$result=mysql_query($sql);
?>
        </p>
        <table width="838" border="0" align="center" cellpadding="0" cellspacing="1">
          <tr>
<td width="836">
<center>

<table width="916" border="0" cellspacing="0" cellpadding="1">

<tr>
<td width="92" align="center" bgcolor="#999999"><font color="white"><strong>Name Property</strong></td>
<td width="107" align="center" bgcolor="#999999"><font color="white"><strong>Name Property</strong></td>
<td width="60" align="center" bgcolor="#999999"><font color="white"><strong>Type</strong></td>
<td width="116" align="center" bgcolor="#999999"><font color="white"><strong>Address</strong></td>
<td width="84" align="center" bgcolor="#999999"><font color="white"><strong>Postcode</strong></td>
<td width="65" align="center" bgcolor="#999999"><font color="white"><strong>Price</strong></td>
<td width="68" align="center" bgcolor="#999999"><font color="white"><strong>Type Price</strong></td>
<td width="60" align="center" bgcolor="#999999"><font color="white"><strong>Land Area</strong></td>
<td width="58" align="center" bgcolor="#999999"><font color="white"><strong>Groos Floor</strong></td>
<td width="54" align="center" bgcolor="#999999"><font color="white"><strong>Leasehold</strong></td>
<td width="104" align="center" bgcolor="#999999"><strong>Delete</strong></td>

</tr>

<?php
while($rows=mysql_fetch_array($result))
{
?>

<tr>
<td bgcolor="#E2E2E2"><font color="black"><center><img src="images/<?php echo $rows['name_property'];?>.jpg" width="86" height="66" /></center></td>
<td bgcolor="#E2E2E2"><font color="black"><?php echo $rows['name_property'];?></td
><td bgcolor="#E2E2E2"><font color="black"><?php echo $rows['type_property'];?></td
><td bgcolor="#E2E2E2"><font color="black"><?php echo $rows['add1'];?></td
><td bgcolor="#E2E2E2"><font color="black"><?php echo $rows['add2'];?></td
><td bgcolor="#E2E2E2"><font color="black"><?php echo $rows['price'];?></td
><td bgcolor="#E2E2E2"><font color="black"><?php echo $rows['price_type'];?></td
><td bgcolor="#E2E2E2"><font color="black"><?php echo $rows['land_area'];?></td
><td bgcolor="#E2E2E2"><font color="black"><?php echo $rows['groos_floor_area'];?></td
><td bgcolor="#E2E2E2"><font color="black"><?php echo $rows['leasehold'];?></td

><td align="center" bgcolor="#E2E2E2"><a href="delete_property.php?name_property=<?php echo $rows['name_property'];?>" onClick="alert('Are you sure want to DELETE this data????');"><img src="images/icn_trash.png"/></a><form id="form1" name="form1" method="post" action="upload.php">
        <input type="submit" name="btn_picedit" id="btn_picedit" value="UPLOAD" />
        <input name="hf_uname" type="hidden" id="hf_uname" value="<?php echo $rows['name_property']; ?>" />
      </form></td>

</tr>


<?php

}

?>

</table>

</td>

</tr>

</table>

<?php
mysql_close();
?>
	    <p>&nbsp;</p>
	    <p>&nbsp;</p>
	    <p>&nbsp;</p>
      </article><!-- end of styles article -->
		<div class="spacer"></div>
	</section>


</body>

</html>