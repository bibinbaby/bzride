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
$q="insert into bz_user_details values('', '$firstname', '$lastname', '$email', '$password',
									'$addr1', '$addr2', '$ph', '$mob',
									'$cardtype', '$subtype', '$cardno', '$expirydate',
									'$billingaddr1', '$billingaddr2', '$cvv', 2)";
$r=mysql_query($q,$conn);
/*if($r==1)
{
	$q="select max(loinID) from login";
	$r=mysqli_query($con,$q);
	$f=mysqli_fetch_row($r);
	$q="insert into register values($f[0], '$name', $age, '$add', '$dist', '$gender', $ph, $txtmob, '$img', '$imgpf', '$quaf',0)";
	$r1=mysqli_query($conn,$q);
}*/
if($r==1)
{
$_SESSION['msg']="Successfully Registered";
header("location:home.php");
}

?>