<?php 

$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"myhostel");

?>

<form name="uploadform" action="" method="post" enctype="multipart/form-data">
	
	<table>

		<tr>
			<td>House Name</td>
			<td><input type="text" name="hname"></td>
		</tr>

		<tr>
			<td>House Price</td>
			<td><input type="text" name="hprice"></td>
		</tr>

		<tr>
			<td>Number of rooms</td>
			<td><input type="text" name="hrooms"></td>
		</tr>

		<tr>
			<td>House Image</td>
			<td><input type="file" name="himage"></td>
		</tr>

		<tr>
			<td>House Category</td>
			<td>
				<select name="hcategory" >
				<option value="Bedsitter">Bedsitter</option>
				<option value="One Bedroom">One Bedroom</option>
				<option value="Shared Room">Shared room</option>
				<option value="Servant Quarter">Servant Quarters</option>

				</select>
			</td>
		</tr>
			<tr>
			<td>House Desription</td>
			<td>
				<textarea cols="15" rows="10" name="hdescription"></textarea>
			</td>
		</tr>

		<tr>
			<td>Location</td>
<td>
				<select name="locate" >
				<option value="nairobi">Nairobi</option>
				<option value="nakuru">Nakuru</option>
				<option value="mombasa">Mombasa</option>
				<option value="nyeri">Nyeri</option>

				</select>
			</td>		</tr>

		<tr>
			<td colspan="2" align="center"><input type="submit" name="submit1" value="Upload"></td>
		</tr>
	</table>
</form>




<?php 

if(isset($_POST["submit1"]))
{
	$v1=rand(1111,9999);
	$v2=rand(1111,9999);
    $v3=$v1.$v2;
    $v3=md5($v3);
	$fnm=$_FILES["himage"]["name"];
	$dst="./house_images/".$v3.$fnm;
	$dst1="./house_images/".$v3.$fnm;

	move_uploaded_file($_FILES["himage"]["tmp_name"],$dst);

	mysqli_query($link,"insert into products values('','$_POST[hname]','$_POST[hprice]','$_POST[hrooms]','$dst1','$_POST[hcategory]','$_POST[hdescription]','$_POST[locate]')");
}

?>
