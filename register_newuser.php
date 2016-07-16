<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>BZride</title>
<link href="bzride_style.css" type="text/css" rel="stylesheet" />
</head>
<body>
<div class="header">
  <div class="logo_left"> <img src="../images/imgbzride.jpg" /> </div>
  <div class="header_right">
    <div class="header_right_top"> BZride </div>
    <div class="header_right_bottom">
      <ul class="header_menu">
        <li><a href="home.php">Home</a></li>
        <!--<li><a href="register.php">Register</a></li>-->

        <li><a href="contact_us.php">Contact Us</a></li>
      </ul>
    </div>
  </div>
</div>
<div class="content">
  <div class="div_left">
    <ul class="div_left_menu">
      <li><a href="home.php">Home</a></li>
      <!--<li><a href="register.php">Register</a></li>-->

      <li><a href="contact_us.php">Contact Us</a></li>
    </ul>
  </div>
  <div class="div_center">
<!--------------------------------------------------------------------------------------------------------------->
    <table border="2" >
<caption> <h3>REGISTRATION</h3> </caption>
<form action="register_newuser_act.php" method="post" enctype="multipart/form-data">

 <tr>
<td> First Name </td>
<td> <input type="text" name="txtfirstname" id="txtfirstname" />
<br />
</td>
 </tr>
 
 <tr>
<td> Last Name </td>
<td> <input type="text" name="txtlastname" id="txtlastname" />
<br />
</td>
 </tr>
 
  <tr>
<td> Email ID </td>
<td> <input type="text" name="txtemail"id="txtemail" />
<br />
</td>
 </tr>

<tr>
<td> Password </td>
<td> <input type="password" name="txtpass"id="txtpass" />
<br />
</td>
 </tr>

 <tr>
<td> Confirm Password </td>
<td> <input type="password" name="txtconpass"id="txtconpass" />
<br />
</td>
 </tr>
 <!---------------------------------------------------------------------------------------->
  <tr>
<td> Address 1 </td>
<td> <textarea rows="4" cols="50" name="txtaddr1" id="txtaddr1" ></textarea>
<br />
</td>
 </tr>
 
   <tr>
<td> Address 2 </td>
<td> <textarea rows="4" cols="50" name="txtaddr2" id="txtaddr2" ></textarea>
<br />
</td>
 </tr>

  <tr>
<td> Telephone No: </td>
<td> <input type="text" name="txtph"id="txtph" />
<br />
</td>
 </tr>
 
  <tr>
<td> Mob No: </td>
<td> <input type="text" name="txtmob"id="txtmob" />
<br />
</td>
 </tr>
 <!---------------------------------------------------------------------------------------------->
  <tr><td></td><td><b> CARD DETAILS</td></tr></b>
  <tr>
<td> Card Type </td>
<td> <input type="radio" name="cardtype" value="credit" id="r1" />Credit Card
     <input type="radio" name="cardtype" value="debit" id="r2" />Debit Card
<br />
</td>
 </tr>
 
   <tr>
<td> Sub Type </td>
<td> <input type="radio" name="subtype" value="master" id="r3" />Master Card
     <input type="radio" name="subtype" value="Visa" id="r4" />Visa Card
<br />
</td>
 </tr>

  <tr>
<td> Card No: </td>
<td> <input type="text" name="txtcardno"id="txtcardno" />
<br />
</td>
 </tr>

  <tr>
<td> Expiry Date </td>
<td> <input type="text" name="txtexpirydate"id="txtexpirydate" />
<br />
</td>
 </tr>

<tr>
<td>Billing Address 1 </td>
<td> <textarea rows="4" cols="50" name="txtbillingaddr1" id="txtbillingaddr1" ></textarea>
<br />
</td>
 </tr>
 
<tr>
<td> Billing Address 1 </td>
<td> <textarea rows="4" cols="50" name="txtbillingaddr2" id="txtbillingaddr2" ></textarea>
<br />
</td>
 </tr> 
 
  <tr>
<td>CVV </td>
<td> <input type="text" name="txtcvv"id="txtcvv" /> 
<br />
</td>
 </tr> 

  <tr> 
<!--<td> Licence Accepted </td>
<td> <select name="licence"id="licence" >
<option value="0" selected="selected">Select</option>
<option value="True">True</option>
<option value="False">False</option>
</optgroup>
</select>-->

<br />
</td>
 </tr>

 <tr>
 <th></th>
 <td><input type="SUBMIT" value="submit" onclick="return disp()"/>
 </td>
 </tr>
 
 </form>
 </table>

<!--------------------------------------------------------------------------------------------------------------->    
    <ul class="header_menu">
        <li><a href="register_drive.php">Register To Drive </a></li>
        <li><a href="register_newuser.php">Register New User</a></li>
    </ul>
    
    
  </div>

  <!--<div class="div_right">
    <div class="latest_blog">
      <h3> Latest News</h3>
      <div class="div_blog_top">
        <div class="blog_image"></div>
        <div class="blog_heading"> Hi all</div>
      </div>
      <div class="blog_description">
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.... </p>
      </div>
    </div>
    <div class="latest_blog">
      <h3>Lattest Blog</h3>
      <div class="blog_image"></div>
      <div class="blog_heading"> new blog</div>
      <div class="blog_description">
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
      </div>
    </div>
  </div>-->
</div>
<div class="footer"> 
	<div class="footer_menu">
    	 <ul class="header_menu">
        <li><a href="home.php">Home</a></li>
        <!--<li><a href="register.php">Register</a></li>-->

        <li><a href="contact_us.php">Contact Us</a></li>
      </ul>
    </div>
copyright@bzride.com.com
</div>
</body>
</html>
