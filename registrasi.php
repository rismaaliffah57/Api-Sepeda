<?php
    $noktp = $_POST['noktp'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$nama = $_POST['nama'];
	$nohp = $_POST['nohp'];
	$alamat = $_POST['alamat'];
	$roleuser = $_POST['roleuser'];
	$con = mysqli_connect("localhost","root","","dbrentalsepeda");
	$sql = "insert into tbuser(noktp, email, password, nama, nohp, alamat, roleuser)
values ('$noktp' , '$email' , '$password' , '$nama' , '$nohp' , '$alamat', '$roleuser' )";
	$json["hasil"]=array();
	//$result = mysqli_query($con,$sql);
	//$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	//$count = mysqli_num_rows($result);
	if($con->query($sql) === TRUE) {
		$json["hasil"]["respon"]=true;
    }else{
		$json["hasil"]["respon"]=false;
	}
    echo json_encode($json);
	//echo $sql;
?>