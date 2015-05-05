					<?php
if (isset($_POST['btn_uploadpic']));
{
	$id=$_POST['hf_uname'];
	move_uploaded_file($_FILES["file"] ["tmp_name"], "profile/".$id.".jpg");
	echo "Successfully Uploaded!";
}
?>


<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <p>
    <label for="file">Select Picture</label>
    <input type="file" name="file" id="file" />
    <input type="submit" name="btn_uploadpic" id="btn_uploadpic" value="UPLOAD" />
  </p>
  <p> 
    <input name="hf_uname" type="hidden" id="hf_uname" value="<?php echo $_POST['hf_uname']?>" />
  </p>
</form>
</p>
