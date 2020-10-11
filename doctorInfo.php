<?php
	include "connect.php";
	$DOB=$_POST['dateofbirth'];
	$myDateTime = DateTime::createFromFormat('d/m/Y', $DOS);
	$DOB = $myDateTime->format('Y-m-d');
	$DOA=$_POST['date_of_appointment'];
	$myDateTime = DateTime::createFromFormat('d/m/Y', $DOA);
	$DOA = $myDateTime->format('Y-m-d');
	$nurse_id=$_POST['nurse_id'];
	$bori1=$_POST['bori1'];
	$bori2=$_POST['bori2'];
	$bori3=$_POST['bori3'];
	$year1=$_POST['year1'];
	$year2=$_POST['year2'];
	$year3=$_POST['year3'];
	$dorc1=$_POST['dorc1'];
	$dorc2=$_POST['dorc2'];
	$dorc3=$_POST['dorc3'];
	$position1=$_POST['position1'];
	$position2=$_POST['position2'];
	$position3=$_POST['position3'];
	$fname=$_POST['firstname'];
	$mname=$_POST['middlename'];
	$lname=$_POST['lastname'];
	$DId=$_POST['doctore_id'];
	$sql = "INSERT INTO `Doctor`(`DId`, `DFName`, `DMName`, `DLName`, `DDOB`, `DDOA`, `DWorkDay`, `DSpecialized`, `DMobile`, `DExperience`) VALUES ('$DId','$fname','$mname','$lname','$DOB','$DOA','','','','')";
	sql($conn,$sql);
	
		$sql = "INSERT INTO `Education`(`Id`, `Degree`, `Board`, `Year`, `Division`, `Position`) VALUES ('$DId','SSC','$bori1','$year1','$dorc1','$position1')";
	sql($conn,$sql);
	$sql = "INSERT INTO `Education`(`Id`, `Degree`, `Board`, `Year`, `Division`, `Position`) VALUES ('$DId','HSC','$bori2','$year2','$dorc2','$position2')";
	sql($conn,$sql);
	$sql = "INSERT INTO `Education`(`Id`, `Degree`, `Board`, `Year`, `Division`, `Position`) VALUES ('$DId','SSC','$bori3','$year3','$dorc3','$position3')";
	sql($conn,$sql);
	
isset($_POST['degree4']){
		
		$degree4=$_POST['degree4'];
		$bori4=$_POST['bori4'];
		$year4=$_POST['year4'];
		$dorc4=$_POST['dorc4'];
		$position4=$_POST['position4'];
		
		$sql = "INSERT INTO `Education`(`Id`, `Degree`, `Board`, `Year`, `Division`, `Position`) VALUES ('$DId','$degree4','$bori4','$year4','$dorc4','$position4')";
		sql($conn,$sql);
	
	}
	isset($_POST['degree5']){
		$degree5=$_POST['degree5'];
		$bori5=$_POST['bori5'];
		$year5=$_POST['year5'];
		$dorc5=$_POST['dorc5'];
		$position5=$_POST['position5'];
		
		$sql = "INSERT INTO `Education`(`Id`, `Degree`, `Board`, `Year`, `Division`, `Position`) VALUES ('$DId','$degree5','$bori5','$year5','$dorc5','$position5')";
		sql($conn,$sql);
	
	}



	isset($_POST['jobtitle1']){
		
		$jobtitle1=$_POST['jobtitle1'];
		$form1=$_POST['form1'];
		$tol1=$_POST['to1'];
		$organization1=$_POST['organization1'];
		
		$sql = "INSERT INTO `Experience`(`Id`, `JobTitle`, `From`, `To`, `Organization`) VALUES ('$DId','$jobtitle1','$form1','$tol1','$organization1')";
		sql($conn,$sql);
	
	}	
	isset($_POST['jobtitle2']){
		
		$jobtitle2=$_POST['jobtitle2'];
		$form2=$_POST['form2'];
		$tol2=$_POST['to2'];
		$organization2=$_POST['organization2'];
		
		$sql = "INSERT INTO `Experience`(`Id`, `JobTitle`, `From`, `To`, `Organization`) VALUES ('$DId','$jobtitle2','$form2','$tol2','$organization2')";
		sql($conn,$sql);
	
	}	
	isset($_POST['jobtitle3']){
		
		$jobtitle3=$_POST['jobtitle3'];
		$form3=$_POST['form3'];
		$tol3=$_POST['to3'];
		$organization3=$_POST['organization3'];
		
		$sql = "INSERT INTO `Experience`(`Id`, `JobTitle`, `From`, `To`, `Organization`) VALUES ('$DId','$jobtitle3','$form3','$tol3','$organization3')";
		sql($conn,$sql);
	
	}	
	isset($_POST['jobtitle4']){
		
		$jobtitle4=$_POST['jobtitle4'];
		$form4=$_POST['form4'];
		$tol4=$_POST['to4'];
		$organization4=$_POST['organization4'];
		
		$sql = "INSERT INTO `Experience`(`Id`, `JobTitle`, `From`, `To`, `Organization`) VALUES ('$DId','$jobtitle4','$form4','$tol4','$organization4')";
		sql($conn,$sql);
	
	}	
	isset($_POST['jobtitle5']){
	$jobtitle5=$_POST['jobtitle5'];
		$form5=$_POST['form5'];
		$tol5=$_POST['to5'];
		$organization5=$_POST['organization5'];
		
		$sql = "INSERT INTO `Experience`(`Id`, `JobTitle`, `From`, `To`, `Organization`) VALUES ('$DId','$jobtitle5','$form5','$tol5','$organization5')";
		sql($conn,$sql);
	
	}


	function sql($conn,$sql){
		if (mysqli_query($conn, $sql)) {
 	   echo "New record created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}

	}

<!DOCTYPE html PUBLIC "-//W