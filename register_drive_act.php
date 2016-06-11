<?php
session_start();
$firstname= $_POST["txtfirstname"];
$lastname= $_POST["txtlastname"];
$email= $_POST["txtemail"];
$password= $_POST["txtpass"];

$addr1= $_POST["txtaddr1"];
$addr2= $_POST["txtaddr2"];
$ph= $_POST["txtph"];
$ssn= $_POST["txtssn"];

$vehicleyear= $_POST["txtyear"];
$vehiclemodel= $_POST["txtmodel"];
$vehiclemake= $_POST["txtmake"];
$vehiclecolor= $_POST["txtcolor"];

$regno= $_POST["txtregno"];
$regstate= $_POST["txtregstate"];
$regdate= $_POST["txtregdate"];
$regexpiry= $_POST["txtregexpiry"];

$inscompany= $_POST["txtinscompany"];
$inspolicyno= $_POST["txtpolicyno"];
$insdate= $_POST["txtinsdate"];
$insexpiry= $_POST["txtinsexpiry"];

$licenseno= $_POST["txtlicenseno"];
$licensestate= $_POST["txtlicensestate"];
$licensedate= $_POST["txtlicenseissue"];
$licenseexpiry= $_POST["txtlicenseexpiry"];

$image=$_FILES["image"]["name"];
move_uploaded_file($_FILES['image']['tmp_name'],"upload/".$_FILES['image']['name']);
/*$licence= $_POST["licence"];*/

include("includes/db.php");

$q="insert into bz_driver_details values('', '$firstname', '$lastname', '$email', '$password',
									'$addr1', '$addr2', '$ph', '$ssn',
									'$vehicleyear', '$vehiclemodel', '$vehiclemake', '$vehiclecolor',
									'$regno', '$regstate', '$regdate', '$regexpiry',
									'$inscompany', '$inspolicyno', '$insdate', '$insexpiry',
									'$licenseno', '$licensestate', '$licensedate', '$licenseexpiry',
									'$image', 2)";
									echo $q;
									exit();
$r=mysql_query($q,$conn);

if($r==1)
{
$_SESSION['msg']="Successfully Registered";
header("location:home.php");
}

?>