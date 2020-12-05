<?php
 $id = $_POST['id'];
 $kode = $_POST['kode'];
	$merk = $_POST['merk'];
	$warna = $_POST['warna'];
	$hargasewa = $_POST['hargasewa'];
	
	$gambar = $_FILES['gambar']['name'];
	$asal = $_FILES['gambar']['tmp_name'];
	
	move_uploaded_file($asal, 'gambar/' .$gambar);
	
	$con = mysqli_connect("localhost","root","","dbrentalsepeda");
	$sql = "INSERT INTO tbsepeda(kode, merk, warna, hargasewa, gambar)values ('$kode' , '$merk' , '$warna' , '$hargasewa' , '$gambar')";
	$sql = "UPDATE tbsepeda SET kode='$kode', merk='$merk', warna='$warna', gambar='$gambar', hargasewa='$hargasewa' WHERE id='$id'";
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