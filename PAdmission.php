<?php
	include "connect.php";
	include "id.php";
	$PFName = $_POST['PFName'];
	$PMName=$_POST['PMName'];
	$PLName=$_POST['PLName'];
	$Mobile1=$_POST['Mobile1'];
	$Mobile2=$_POST['Mobile2'];
	$select=$_POST['myselectbox'];
	$PChoice=$_POST['PChoice'];
	$PDOB=$_POST['PDOB'];
	$StreetNo=$_POST['StreetNo'];
	$StreetName=$_POST['StreetName'];
	$Area=$_POST['Area'];
	$Thana=$_POST['Thana'];
	$Dist=$_POST['Dist'];
	$PStreetNo=$_POST['PStreetNo'];
	$PStreetName=$_POST['PStreetName'];
	$PArea=$_POST['PArea'];
	$PThana=$_POST['PThana'];
	$PDist=$_POST['PDist'];
	$myDateTime = DateTime::createFromFormat('d/m/Y', $PDOB);
$newDateString = $myDateTime->format('Y-m-d');
	$sql = "INSERT INTO `Patient`(`PId`, `PFName`, `PMName`, `PLName`,  `PDob`, `PDiesesName`, `DiesesSeverity`, `SpNote`, `PMobile1`, `PMobile2`, `PProfession`, `PChoice`, `PDoa`) VALUES ('$id', '$PFName', '$PMName', '$PLName', '$newDateString', '', '','', '$Mobile1', '$Mobile2', '$select', '$PChoice','1/1/1111')";
	sql($conn,$sql);
	$sql = "INSERT INTO `Address`(`PId`, `StreetNo`, `StreetName`, `Area`, `Thana`, `Dist`, `AddressType`) VALUES ('$id','$StreetNo','$StreetName','$Area','$Thana','$Dist', 'Parmanent')";
	sql($conn,$sql);
	$sql = "INSERT INTO `Address`(`PId`, `StreetNo`, `StreetName`, `Area`, `Thana`, `Dist`, `AddressType`) VALUES ('$id','$PStreetNo','$PStreetName','$PArea','$PThana','$PDist','Parmanent')";
	sql($conn,$sql);
function sql($conn,$sql){
	if (mysqli_query($conn, $sql)) {
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

}


mysqli_close($conn);
include 'PAReceipt.php';

?>

