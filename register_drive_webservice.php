<?php
include("includes/db.php");

// Check connection
if (!$conn) {
    echo "Not connected";
} 
else{  
								
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
								//insert values: ID, FIRST NAME, LAST NAME, EMAIL, PASSWORD, 
								//ADDR1, ADDR2, PHONE, DEVICE ID , DEVICE TYPE, 
								//IS LICENCE ACCEPTED, IS ACTIVE, STATUS, CURRENT LATTITTUDE, CURRENT LONGITUDE, CREATED BY DATE  //
$driver_details="insert into bztbl_drivers values('', 'Athira', 's', 'myemail', 'newpassword',
									'myaddr1', 'myaddr2', '123456789', 'new device id', 'my device type', 
									'', '', '', '', '', '' )";
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
								// insert values: ID, DRIVER ID, VEHICLE MODEL, V MAKE, V COLOUR, V YEAR, 
								//  V REG NO, V REG STATE, V DATE REGISTERED, V EXPIRY DATE, CREATED BY DATE  //
$driver_vehicledetais = "insert into bztbl_drivervehicledetails values('', '', 'dzire', 'Maruthy', 'supreme white', '2016', 
									'KL-38D-1', 'Kerala', '', '', '')";																				
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
								//insert values: ID, DRIVER ID, INSURANCE COMPANY, INS PLICY NO, 
								//INS DATE, INS EXPIRY DATE, CREATED BY DATE  //
$driver_insdetails="insert into bztbl_driverinsurancedetails values('', '', 'National Insurance', 'hgiu87y9y', 
									'','', ''  )";
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
								//insert values: ID, DRIVER ID, LICENCE NO, LICENCE ISSUE STATE,
								// LIC ISSUE DATE, LIC EXPIRY DATE, CREATED BY DATE  //
$driver_licdetails="insert into bztbl_driverlicensedetails values('', '', 'kl454525', 'Karnataka', 
									'','', ''  )";
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////											
//echo $sql;
//exit();											
$driver_details1 = mysql_query($driver_details,$conn);
$driver_vehicledetais1 = mysql_query($driver_vehicledetais,$conn);
$driver_insdetails1 = mysql_query($driver_insdetails,$conn);
$driver_licdetails1 = mysql_query($driver_licdetails,$conn);

if ($driver_details1 == 1) {
    echo "New Driver added successfully";
} else {
    //echo "Error: " . $sql . "<br>" . $conn->error;
}

mysql_close();
//header("location:home.php");
}
?>