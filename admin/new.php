<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<table border="0" style="border-style:double">
<form method="post" action="new_success.php">	<tr>
    	<td width="105">Name Property :</td>
        <td width="296"><input type="text" name="name_property"> </td>
    	<td width="73">Type Property:</td>
        <td width="169"><select name="type_property" id="room" type="text" />
                    <option>Condominium</option>
                    <option>Terraced House</option>
                    <option>Shop / Office</option>
                    <option>Bungalow House</option>
                    <option>Hotel / Resort</option>
                    <option>Semi-Detached House</option>
                    <option>Penthouse</option>
                  </select></td>
    </tr>
    <tr>
    	<td>Address:</td>
        <td><input type="text" name="add1"></td>
    	<td>Postcode:</td>
        <td><input type="text" name="add2"></td>
    </tr>
    <tr>
    	<td>Price:</td>
        <td><input type="text" name="price"></td>
		<td>Price Type:</td>
		<td><select name="price_type" id="room" type="text" />
        	<option>....</option>
            <option>Guide Price</option>
            <option>Negotiable</option>
            </select></td>
    </tr>
    <tr>
    	<td>Land Area:</td>
        <td><input type="text" name="land_area"></td></tr>
        <tr>
		<td>Groos Floor Area:</td>
		<td><input type="text" name="groos_floor_area"></td>
    </tr>
    <tr>
    	<td>Leasehold:</td>
        <td><input type="text" name="leasehold"></td></tr>
        <tr>
		<td>Bedrooms:</td>
		<td><select type="text" name="beds">
        	<option></option>
            <option>1</option>
            <option>2</option>
        	<option>3</option>
            <option>4</option>
            <option>5</option>
        	<option>6</option>
            <option>7</option>
            <option>8</option>
        	<option>9</option>
            <option>10</option>
        </select></td>
		<td>Bathrooms:</td>
		<td><SELECT type="text" name="baths">
                	<option></option>
            <option>1</option>
            <option>2</option>
        	<option>3</option>
            <option>4</option>
            <option>5</option>
        	<option>6</option>
            <option>7</option>
            <option>8</option>
        	<option>9</option>
            <option>10</option>

        </SELECT></td>
    </tr>
    <tr>
        <tr>
		<td>Contact Number:</td>
		<td><input type="text" name="contact_no"></td></tr>
        <tr>
		<td>Per Square Feet:</td>
		<td><input type="text" name="per_square_feet"></td>
    </tr>
            <tr>
		<td>Square Feet:</td>
		<td><input type="text" name="square_feet"></td>
    </tr>
        <tr>
		<td height="103">Text:</td>
		<td><label for="textarea"></label>
		  <textarea name="text" id="textarea" cols="45" rows="5"></textarea></td>
    </tr>
	<tr>
    <td>&nbsp;</td>
        <td><input type="submit" name="submit" value="Submit">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" value="Reset"></td>
    </tr>
    
</form>
</table>


</body>
</html>