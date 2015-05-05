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
	#main .module.width_full .module_content .stats_graph center table tr td table {
	font-size: 10px;
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
			<article class="breadcrumbs"><a href="index.html">Website Admin</a> <div class="breadcrumb_divider"></div>
			<a class="current">Admin</a></article>
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
	  <article class="module width_full">
		  <header>
			  <h3>ADMIN INFORMATION UPDATE</h3></header>
	    <div class="module_content">
		  <article class="stats_graph"> 
			<?php
        
        $host="localhost";
        $username="root";
        $password="";
        $db_name="property";
        $tbl_name="admin";
        
        mysql_connect("$host","$username","$password")or die("cannot connect");
        mysql_select_db("$db_name")or die("cannot select DB");
        $sql="SELECT*FROM $tbl_name";
        $result=mysql_query($sql);
        ?>
        
        
        <table width="638" height="85" border="2" cellpadding="1" cellspacing="0">
        <tr>
        <td colspan="13" align="center"><strong>Admin Information</strong></td>
        </tr>
        
        <tr>
        
        <td width="171" align="center"><font color="black"><strong>Name</strong></td>
        <td width="180" align="center"><strong>Username</strong></td>
        <td width="176" align="center"><font color="black"><strong>Password</strong></td>
        
        
        </tr>
        
        <?php
        while($rows=mysql_fetch_array ($result))
        {
        ?>
        
        <tr>
        <td height="47"><font color="black"><?php echo $rows['name'];?></td
        ><td width="180"><font color="black"><?php echo $rows['myusername'];?></td
        ><td><font color="black"><?php echo $rows['mypassword'];?></td
        ><td width="50" align="center"><a href="delete_data.php?id=<?php echo $rows['id'];?>" onClick="alert('Are you sure want to DELETE this data????');">DELETE</a></td>
        <td width="37" align="center"><form id="form1" name="form1" method="post" action="upload.php">
        <input type="submit" name="btn_picedit" id="btn_picedit" value="UPLOAD" />
        <input name="hf_uname" type="hidden" id="hf_uname" value="<?php echo $rows['myusername']; ?>" />
      </form></td>
        
        </tr>
        
        
        <?php
        
        }
        
        ?>
        
        </table>
        
        </td>
       
        </tr>
        
        </table>
        </center>
        <?php
        mysql_close();
        ?>


</table>


 </article>
			  <div class="clear">
			    <form name="form2" method="post" action="register.php">
			      <p>&nbsp;</p>
			      <p>&nbsp;</p>
			      <p>Register New Admin Form</p>
			      <table width="315" border="1">
			        <tr>
			          <td width="88"><font color="black">Name</td>
			          <td width="8">:</td>
			          <td width="197"><input type="text" name="name"></td>
		            </tr>
			        <tr>
			          <td><font color="black">Username</td>
			          <td>:</td>
			          <td><input type="text" name="myusername"></td>
		            </tr>
			        <tr>
			          <td><font color="black">Paasowrd</td>
			          <td>:</td>
			          <td><input type="password" name="mypassword"></td>
		            </tr>
		          </table>
			      <p>
			        <input type="submit" name="button" id="button" value="Submit">
			      </p>
			    </form>
		  </div>
	    </div>
		</article><!-- end of stats article --><!-- end of content manager article -->
			<?php
        
        $host="localhost";
        $username="root";
        $password="";
        $db_name="property";
        $tbl_name="message";
        
        mysql_connect("$host","$username","$password")or die("cannot connect");
        mysql_select_db("$db_name")or die("cannot select DB");
        $sql="SELECT*FROM $tbl_name ORDER BY id_message DESC";
        $result=mysql_query($sql);
        ?><!-- end of messages article -->
		
	  <div class="clear"></div><!-- end of post new article --><!-- end of styles article -->
	  <div class="spacer"></div>
	</section>


</body>

</html>