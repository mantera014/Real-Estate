               <?php session_start(); 
				ob_start();
				$host="localhost";         //Host Name
				$username="root";        //Mysql usernae
				$password="";              //Mysql password
				$db_name="property";       //Database name
				$tbl_name="admin";     //Table name
				
				//Connect to server and select database
				mysql_connect("$host", "$username", "$password")or die("cannot connect");
				mysql_select_db("$db_name")or die("cannot select DB");
				
				//Define $myusername and $mypassword
				$myusername=$_POST['myusername'];
				$mypassword=$_POST['mypassword'];
				
				
				//To protect MYSQL injection (more detail about MySQL injection)
				$myusername  =  stripslashes($myusername);
				$mypassword  =  stripslashes($mypassword);
				$myusername  =  mysql_real_escape_string($myusername);
				$mypassword  =  mysql_real_escape_string($mypassword);
				
				$sql="SELECT * FROM admin WHERE myusername= '$myusername'  and  mypassword= '$mypassword'";
				
				$result=mysql_query($sql);
				
				//Mysql_num_row is counting table row
				$count=mysql_num_rows($result);
				//  If  result matched $myusename  and $mypassword, table row must be 1 row
				
				if($count==1){
				//  Register  $myusername, $mypassword  and redirect to file "adminMenu.php"
$_SESSION['myusername']=$myusername;
$_SESSION['mypassword']=$mypassword;
session_start();
header("location:admin_home.php");
}
else {
echo "Wrong Username or Password";
}

ob_end_flush();
?>