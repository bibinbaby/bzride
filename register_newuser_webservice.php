<?php

include("includes/db.php");


// Check connection
if (!$a) {
    echo "Not connected";
} 
else{  
//				insert values 				Userid, firstname, lastname, email, pass, 
//     										addr1, addr2, ph, mob, 
//											cardtype, subtype, cardno, expirydate,
//											billingaddr1, billingaddr2, cvv, Role
$sql = "INSERT INTO bz_user_details VALUES ('', 'Athira ', 'Intimation', 'ath@yahoo', '123456', 
											'tdpa', 'pala', '1857', '1892', 
 											'mastro', 'visa', '225875', '2018', 
											'tdpa1', 'pala1', '185','2' )";
$demo = mysql_query($sql,$conn);

if ($demo == 1) {
    echo "New User added successfully";
} else {
    //echo "Error: " . $sql . "<br>" . $conn->error;
}

mysql_close();
//header("location:home.php");
}
?>