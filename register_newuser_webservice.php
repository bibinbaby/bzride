<?php

include("includes/db.php");


// Check connection
if (!$conn) {
    echo "Not connected";
} 
else{  
//              insert values: 		ID, FIRST NAME, LAST NAME, EMAIL, PASSWORD, 
 									//ADDR1, ADDR2, PHONE, DEVICE ID , DEVICE TYPE, 
									//IS LICENCE ACCEPTED, IS ACTIVE, CARD TYPE, CARD PROVIDER, CARD TOKEN, CREATED BY DATE ////
$rider_details="insert into bztbl_riders values('', 'Ameer', 'Amee', 'myemail', 'newpassword',
									'my addr1', 'myaddr2', '234466', '44455588', 'android', 
									'', '', 'debit', 'mastro', '', '' )";
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// insert values: ID, USER ID, TYPE, BANK NAME, AC NO, AC HOLDER NAME, ROUTING NO, CREATED BY DATE
$bank_details="insert into bztbl_userbankdetails values('', '', '', 'SIB', '15542652653', 'AMEER', '123', '' )";

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
								// insert values to ride req: ID, REQUEST TYPE, REQUESTOR ID, DRIVER ID, 
												//START LOC, END LOC, START LATITUDE, START LONGITUDE, END LAT, END LONG, 
												// STATUS, RIDE DATE, RIDE TIME, ACTUAL RIDE DATE, ACTUAL RIDETIME,CREATED BY DATE.////////

$rider_req="insert into bztbl_riderequests values('', '1', '', '', 
													'', '', '', '', '', '', 
													'a', '', '', '', '', '' )";
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////// insert values: ID, REPORT TITLE, REPORT DESCRIPTION, CREATED BY DATE.//////////
$rep_problems="insert into bztbl_reportedproblems values('', 'vehicle not clean', 'not good', '' )";									
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$rider_details1 = mysql_query($rider_details,$conn);
$bank_details1 = mysql_query($bank_details,$conn);
$rider_req1 = mysql_query($rider_req,$conn);
$rep_problems1 = mysql_query($rep_problems,$conn);

if($rider_details1==1) 
{
    echo "New User added successfully";
} else {
    //echo "Error: " . $sql . "<br>" . $conn->error;
}

mysql_close();
//header("location:home.php");
}
?>