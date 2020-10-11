<?php
	include "connect.php";
	$PId= $_POST['id'];
	$WId= $_POST['WId'];
	$BId= $_POST['BId'];
	$sql = "UPDATE `Bed` SET `BId`='$BId',`BStatus`='Occupied',`PId`='$PId',`WId`='$WId' WHERE 1";
	sql($conn,$sql);

	sql($conn,$sql);
function sql($conn,$sql){
	if (mysqli_query($conn, $sql)) {
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

}


mysqli_close($conn);

?>

