<?php
session_start();
$firstname= $_POST["txtfirstname"];
$lastname= $_POST["txtlastname"];
$email= $_POST["txtemail"];
$password= $_POST["txtpass"];

$addr1= $_POST["txtaddr1"];
$addr2= $_POST["txtaddr2"];
$ph= $_POST["txtph"];
$mob= $_POST["txtmob"];

$cardtype= $_POST["cardtype"];
$subtype= $_POST["subtype"];
$cardno= $_POST["txtcardno"];
$expirydate= $_POST["txtexpirydate"];

$billingaddr1= $_POST["txtbillingaddr1"];
$billingaddr2= $_POST["txtbillingaddr2"];

$cvv= $_POST["txtcvv"];
/*$licence= $_POST["licence"];*/
include("includes/db.php");
//$conn= mysql_connect("localhost","root","");
//mysql_select_db("bzridedb",$conn);
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//              insert values: 		ID, FIRST NAME, LAST NAME, EMAIL, PASSWORD, 
 									//ADDR1, ADDR2, PHONE, DEVICE ID , DEVICE TYPE, 
									//IS LICENCE ACCEPTED, IS ACTIVE, CARD TYPE, CARD PROVIDER, CARD TOKEN, CREATED BY DATE ////
$rider_details="insert into bztbl_riders values('', '$firstname', '$lastname', '$email', '$password',
									'$addr1', '$addr2', '$ph', '', '', 
									'', '', '', '', '', '' )";
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// insert values: ID, USER ID, TYPE, BANK NAME, AC NO, AC HOLDER NAME, ROUTING NO, CREATED BY DATE
$bank_details="insert into bztbl_userbankdetails values('', '', '', '', '', '', '', '', )";
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
								// insert values: ID, REQUEST TYPE, REQUESTOR ID, DRIVER ID, 
												//START LOC, END LOC, START LATITUDE, START LONGITUDE, END LAT, END LONG, 
												// STATUS, RIDE DATE, RIDE TIME, ACTUAL RIDE DATE, ACTUAL RIDETIME,CREATED BY DATE.////////

$rider_req="insert into bztbl_riderequests values('', '', '', '', 
													'', '', '', '', '', '', 
													'', '', '', '', '', '', )";
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////// insert values: ID, REPORT TITLE, REPORT DESCRIPTION, CREATED BY DATE.//////////
$rep_problems="insert into bztbl_reportedproblems values('', '', '', '' )";									
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$rider_details1 = mysql_query($rider_details,$conn);
$bank_details1 = mysql_query($bank_details,$conn);
$rider_req1 = mysql_query($rider_req,$conn);
$rep_problems1 = mysql_query($rep_problems,$conn);

if($rider_details1==1)
{
$_SESSION['msg']="Successfully Registered";
header("location:home.php");
}

?>