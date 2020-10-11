<?php
	include "connect.php";
	$ward_id=$_POST['ward_id'];
	$ward_name=$_POST['ward_name'];
	$register_id=$_POST['registrar_id'];
	$nurse_supervisor_id=$_POST['nurse_supervisor_id'];
	
	$sql = "INSERT INTO `Ward`(`WId`, `WName`, `WType`, `WardBed`, `Rent`, `NId`, `SId`) VALUES ('$ward_id','$ward_name','','','','$register_id','$nurse_supervisor_id')";
	sql($conn,$sql);
	isset($_POST['bedno1']){
		
		$bedno1=$_POST['bedno1'];
		$myselectbox1=$_POST['myselectbox1']; 
		$rent1=$_POST['rent1'];
		$bedtype1=$_POST['bedtype1'];
		$sql = "INSERT INTO `Bed`(`BId`, `BStatus`, `PId`, `Rent`, `BType`, `WId`) VALUES ('$bedno1','$myselectbox1','','$rent1','$bedtype1')";
		sql($conn,$sql);
	}
	isset($_POST['bedno2']){
		
		
				$bedno2=$_POST['bedno2'];
		$myselectbox2=$_POST['myselectbox2']; 
		$rent2=$_POST['rent2'];
		$bedtype2=$_POST['bedtype2'];
		$sql = "INSERT INTO `Bed`(`BId`, `BStatus`, `PId`, `Rent`, `BType`, `WId`) VALUES ('$bedno2','$myselectbox2','','$rent2','$bedtype2')";


	sql($conn,$sql);
	}
	isset($_POST['bedno3']){
				$bedno3=$_POST['bedno3'];
		$myselectbox3=$_POST['myselectbox3']; 
		$rent3=$_POST['rent3'];
		$bedtype3=$_POST['bedtype3'];
		$sql = "INSERT INTO `Bed`(`BId`, `BStatus`, `PId`, `Rent`, `BType`, `WId`) VALUES ('$bedno3','$myselectbox3','','$rent3','$bedtype3')";
	
	sql($conn,$sql);
	}
	isset($_POST['bedno4']){
				$bedno4=$_POST['bedno4'];
		$myselectbox4=$_POST['myselectbox4']; 
		$rent4=$_POST['rent4'];
		$bedtype4=$_POST['bedtype4'];
		$sql = "INSERT INTO `Bed`(`BId`, `BStatus`, `PId`, `Rent`, `BType`, `WId`) VALUES ('$bedno4','$myselectbox4','','$rent4','$bedtype4')";
		sql($conn,$sql);
	}
	isset($_POST['bedno5']){
			$bedno5=$_POST['bedno5'];
		$myselectbox5=$_POST['myselectbox5']; 
		$rent5=$_POST['rent5'];
		$bedtype5=$_POST['bedtype5'];
		$sql = "INSERT INTO `Bed`(`BId`, `BStatus`, `PId`, `Rent`, `BType`, `WId`) VALUES ('$bedno5','$myselectbox5','','$rent5','$bedtype5')";
		
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

