<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8"/>
	<title>Dashboard I Admin Panel</title>
	
	<link rel="stylesheet" href="css/layout.css" type="text/css" media="screen" />
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
			<h1 class="site_title"><a href="index.html">Website Admin</a></h1>
			<h2 class="section_title">Dashboard</h2>
		</hgroup>
	</header> <!-- end of header bar -->
	
	<section id="secondary_bar">
		<div class="user">
			<p>John Doe (<a href="#">3 Messages</a>)</p>
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
		
		<!-- end of stats article --><!-- end of content manager article --><!-- end of messages article -->
		
	  <div class="clear"></div>
		
		<article class="module width_full">
			<header><h3>Post New Article</h3></header>
			<p>
			  <?php
include("connection.php");
$name=$_POST["name"];
$myusername=$_POST["myusername"];
$mypassword=$_POST["mypassword"];

$insert_sql="INSERT INTO admin VALUES('', '$name', '$myusername', '$mypassword')";

$sql_result=mysql_query($insert_sql) or die("Error in inserting data due to
".mysql_error());

if($sql_result)
echo "<a href='admin_home.php'><h4 class='alert_success'>A Success Message</h4></a>";
else
echo "Error in inserting new data";
?>

			<p>&nbsp;</p>
			<footer>
		  </footer>
		</article><!-- end of post new article --><!-- end of styles article -->
	  <div class="spacer"></div>
	</section>


</body>

</html>