<?php
	$id = $_POST['id'];

    $con = mysqli_connect("localhost","root","","dbrentalsepeda");

    $sql = "DELETE FROM tbsepeda where id='$id'";
    $i=0;
        $json["result"]=array();
        if($con->query($sql) === TRUE) {
		$json["hasil"]["respon"]=true;
    }else{
		$json["hasil"]["respon"]=false;
	}
    echo json_encode($json);
?>