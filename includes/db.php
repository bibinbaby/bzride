<?php
//$conn = mysql_connect('localhost','root','') or die(mysql_error());
// mysql_select_db('bzridedb',$conn) or die(mysql_error());
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "intimation";

// Create connection
$conn =  mysql_connect($servername, $username, $password);
//select db
$a = mysql_select_db("intimation",$conn);

?>
