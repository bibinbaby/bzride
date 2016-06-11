<?php
include("includes/db.php");

// Check connection
if (!$a) {
    echo "Not connected";
} 
else{  
//							insert values   Userid, firstname, lastname, email, pass, 
//											addr1, addr2, ph, ssn, 
//											vehicleyear, vehiclemodel, vehiclemake, vehiclecolor, 
//											regno, regstate, regdate, regexpiry,
//             								inscompany, inspolicyno, insdate, insexpiry, 
//											licenseno, licensestate, licensedate, licenseexpiry, image, Role 


											
$sql = "insert into bz_driver_details values('', 'Arya', 'Intimation', 'arya@gmail.com', '1234', 
										  'address1', 'addr2', '99478547', '999',
										  '2014', 'q4', 'audi', 'Black',
										  'KL-38D-3838', 'Kerala', '10-10-2014', '09-10-2024', 
										  'National', 'klaudi445', '10-10-2015', '09-10-2016', 
										  'lic1234', 'Kerala', '25-09-2009', '24-09-2024', 'Driver_image', 2)	";								
											
											
//echo $sql;
//exit();											
$demo = mysql_query($sql,$conn);

if ($demo == 1) {
    echo "New Driver added successfully";
} else {
    //echo "Error: " . $sql . "<br>" . $conn->error;
}

mysql_close();
//header("location:home.php");
}
?>