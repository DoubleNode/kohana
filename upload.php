<html>
<body>
<h1>Upload Single Location Photo</h1>
<form action="http://api.madstudios.dev/Photos" method="post" enctype="multipart/form-data">
<label for="file">Filename:</label>
<input type="file" name="file" id="file"><br>
ID:<input type="text" name="id" id="id" value="323454C0-12D2-11E4-9191-0800200C9A66"><br>
Type:<input type="text" name="type" id="type" value="location"><br>
Type ID:<input type="text" name="type_id" id="type_id" value="323454C0-12D2-11E4-9191-0800200C9A64"><br>
<input type="submit" name="submit" value="Submit">
</form>

<h1>Create Location with Photo</h1>

<form action="http://api.madstudios.dev/Locations" method="post" enctype="multipart/form-data">
<label for="file">Filename:</label>
<input type="file" name="file" id="file"><br>
ID:<input type="text" name="id" id="id" value="<?php echo create_uuid(); ?>"><br>
Name:<input type="text" name="name" id="name" value="Jayeskull Studios"><br>
Address:<input type="text" name="address" id="address" value="6773 Canterbury Drive"><br>
City:<input type="text" name="city" id="city" value="Frisco"><br>
State:<input type="text" name="state" id="address" value="Tx"><br>
Postalcode:<input type="text" name="postalcode" id="postalcode" value="75035"><br>
Country:<input type="text" name="country" id="country" value="US"><br>
Location Type ID:<input type="text" name="location_type_id" id="location_type_id" value="<?php echo create_uuid(); ?>"><br>
Photo ID:<input type="text" name="photo_id" id="photo_id" value="<?php echo create_uuid(); ?>"><br>
<input type="submit" name="submit" value="Submit">
</form>

<h1>Create Person with Photo</h1>

<form action="http://api.madstudios.dev/People" method="post" enctype="multipart/form-data">
<label for="file">Filename:</label>
<input type="file" name="file" id="file"><br>
ID:<input type="text" name="id" id="id" value="<?php echo create_uuid(); ?>"><br>
First Name:<input type="text" name="firstname" id="firstname" value="Jaye"><br>
Last Address:<input type="text" name="lastname" id="lastname" value="Miller"><br>
Email:<input type="text" name="email" id="email" value="me@jayemiller.com"><br>
Password:<input type="password" name="password" id="password" value="12345"><br>
Photo ID:<input type="text" name="photo_id" id="photo_id" value="<?php echo create_uuid(); ?>"><br>
<input type="submit" name="submit" value="Submit">
</form>

</body>
</html>

<?php
function create_uuid(){
	if (function_exists('com_create_guid')){
		return com_create_guid();
	}else{
		mt_srand((double)microtime()*10000);//optional for php 4.2.0 and up.
		$charid = strtoupper(md5(uniqid(rand(), true)));
		$hyphen = chr(45);// "-"
		$uuid = substr($charid, 0, 8).$hyphen
		.substr($charid, 8, 4).$hyphen
		.substr($charid,12, 4).$hyphen
		.substr($charid,16, 4).$hyphen
		.substr($charid,20,12);
		return $uuid;
	}
}