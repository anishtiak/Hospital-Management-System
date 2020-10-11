<?php
	include "connect.php";
	$DOS=$_POST['dateofsupply'];
	$myDateTime = DateTime::createFromFormat('m/d/Y', $DOS);
	$DOS = $myDateTime->format('Y-m-d');
	$DOM=$_POST['dom1'];
	$myDateTime = DateTime::createFromFormat('m/d/Y', $DOS);
	$DOM = $myDateTime->format('Y-m-d');
	$DOE=$_POST['expiryDate1'];
	$myDateTime = DateTime::createFromFormat('m/d/Y', $DOS);
	$DOE = $myDateTime->format('Y-m-d');
	$supplierId=$_POST['supplier_id'];
	$suppliername =$_POST['supplier_name'];
	$medicineid1=$_POST['medicineId1'];
	$name1=$_POST['name1'];
	$type1=$_POST['type1'];
	$unitprice1=$_POST['unitPrice1'];
	$quantity1=$_POST['quantity1'];
	
	
	
	$sql = "INSERT INTO `Medicine`(`MSId`, `MSName`, `MDOS`, `MId`, `MName`, `MType`, `MPrice`, `MQuantity`, `MDOM`, `MDOE`) VALUES ('$supplierId','$suppliername','$DOS','$medicineid1','$name1','$type1','$unitprice1','$quantity1','$DOM','$DOE']')";
	
	sql($conn,$sql);
	isset($_POST['medicineId2']){
		$DOM=$_POST['dom2'];
		$myDateTime = DateTime::createFromFormat('m/d/Y', $DOS);
		$DOM = $myDateTime->format('Y-m-d');
		$DOE=$_POST['expiryDate2'];
		$myDateTime = DateTime::createFromFormat('m/d/Y', $DOS);
		$DOE = $myDateTime->format('Y-m-d');
		
	$supplierId=$_POST['supplier_id'];
	$suppliername =$_POST['supplier_name'];
	$medicineid2=$_POST['medicineId2'];
	$name2=$_POST['name2'];
	$type2=$_POST['type2'];
	$unitprice2=$_POST['unitPrice2'];
	$quantity2=$_POST['quantity2'];
	
	
	
	$sql = "INSERT INTO `Medicine`(`MSId`, `MSName`, `MDOS`, `MId`, `MName`, `MType`, `MPrice`, `MQuantity`, `MDOM`, `MDOE`) VALUES ('$supplierId','$suppliername','$DOS','$medicineid2','$name2','$type2','$unitprice2','$quantity2','$DOM','$DOE']')";
	
	
		sql($conn,$sql);
		}

	isset($_POST['medicineId3']){
		$DOM=$_POST['dom3'];
		$myDateTime = DateTime::createFromFormat('m/d/Y', $DOS);
		$DOM = $myDateTime->format('Y-m-d');
		$DOE=$_POST['expiryDate3'];
		$myDateTime = DateTime::createFromFormat('m/d/Y', $DOS);
		$DOE = $myDateTime->format('Y-m-d');
		
			$supplierId=$_POST['supplier_id'];
	$suppliername =$_POST['supplier_name'];
	$medicineid3=$_POST['medicineId3'];
	$name3=$_POST['name3'];
	$type3=$_POST['type3'];
	$unitprice3=$_POST['unitPrice3'];
	$quantity3=$_POST['quantity3'];
	
	
	
	$sql = "INSERT INTO `Medicine`(`MSId`, `MSName`, `MDOS`, `MId`, `MName`, `MType`, `MPrice`, `MQuantity`, `MDOM`, `MDOE`) VALUES ('$supplierId','$suppliername','$DOS','$medicineid3','$name3','$type3','$unitprice3','$quantity3','$DOM','$DOE']')";
	
		sql($conn,$sql);
		}
		

	isset($_POST['medicineId4']){
		$DOM=$_POST['dom4'];
		$myDateTime = DateTime::createFromFormat('m/d/Y', $DOS);
		$DOM = $myDateTime->format('Y-m-d');
		$DOE=$_POST['expiryDate4'];
		$myDateTime = DateTime::createFromFormat('m/d/Y', $DOS);
		$DOE = $myDateTime->format('Y-m-d');
			$supplierId=$_POST['supplier_id'];
	$suppliername =$_POST['supplier_name'];
	$medicineid4=$_POST['medicineId4'];
	$name4=$_POST['name4'];
	$type4=$_POST['type4'];
	$unitprice4=$_POST['unitPrice4'];
	$quantity4=$_POST['quantity4'];
	
	
	
	$sql = "INSERT INTO `Medicine`(`MSId`, `MSName`, `MDOS`, `MId`, `MName`, `MType`, `MPrice`, `MQuantity`, `MDOM`, `MDOE`) VALUES ('$supplierId','$suppliername','$DOS','$medicineid4','$name4','$type4','$unitprice4','$quantity4','$DOM','$DOE']')";
	
	
		sql($conn,$sql);
		}

	isset($_POST['medicineId5']){
		$DOM=$_POST['dom5'];
		$myDateTime = DateTime::createFromFormat('m/d/Y', $DOS);
		$DOM = $myDateTime->format('Y-m-d');
		$DOE=$_POST['expiryDate5'];
		$myDateTime = DateTime::createFromFormat('m/d/Y', $DOS);
		$DOE = $myDateTime->format('Y-m-d');
		
			$supplierId=$_POST['supplier_id'];
	$suppliername =$_POST['supplier_name'];
	$medicineid5=$_POST['medicineId5'];
	$name5=$_POST['name5'];
	$type5=$_POST['type5'];
	$unitprice5=$_POST['unitPrice5'];
	$quantity5=$_POST['quantity5'];
	
	
	
	$sql = "INSERT INTO `Medicine`(`MSId`, `MSName`, `MDOS`, `MId`, `MName`, `MType`, `MPrice`, `MQuantity`, `MDOM`, `MDOE`) VALUES ('$supplierId','$suppliername','$DOS','$medicineid5','$name5','$type5','$unitprice5','$quantity5','$DOM','$DOE']')";
	
		
		sql($conn,$sql);
		}
		

	isset($_POST['medicineId6']){
		$DOM=$_POST['dom6'];
		$myDateTime = DateTime::createFromFormat('m/d/Y', $DOS);
		$DOM = $myDateTime->format('Y-m-d');
		$DOE=$_POST['expiryDate6'];
		$myDateTime = DateTime::createFromFormat('m/d/Y', $DOS);
		$DOE = $myDateTime->format('Y-m-d');
			$supplierId=$_POST['supplier_id'];
	$suppliername =$_POST['supplier_name'];
	$medicineid6=$_POST['medicineId6'];
	$name6=$_POST['name6'];
	$type6=$_POST['type6'];
	$unitprice6=$_POST['unitPrice6'];
	$quantity6=$_POST['quantity6'];
	
	
	
	$sql = "INSERT INTO `Medicine`(`MSId`, `MSName`, `MDOS`, `MId`, `MName`, `MType`, `MPrice`, `MQuantity`, `MDOM`, `MDOE`) VALUES ('$supplierId','$suppliername','$DOS','$medicineid6','$name6','$type6','$unitprice6','$quantity6','$DOM','$DOE']')";
	
	
		sql($conn,$sql);
		}
		
		
		
	function sql($conn,$sql){
		if (mysqli_query($conn, $sql)) {
 	   echo "New record created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}

	}


	mysqli_close($conn);
?>

