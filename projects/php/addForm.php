<!DOCTYPE html PUBLIC
"-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<link rel="stylesheet" href="LA8.css" type="text/css" />

<head>
<title> Telephone Directory </title>
</head>

<body>
   <h1>New Entry</h1>
</body>

<p>
<form method="post" action="addForm.php">

    First Name: <input type="text" name="fName" value="">
    Last Name: <input type="text" name="lName" value=""> <br><br>
    Address: <input type="text" name="address" value="">
    City: <input type="text" name="city" value=""> <br><br>
    State: <select name="state">
        <option value=""> -Select- </option>
        <option value="AL">Alabama</option>
	<option value="AK">Alaska</option>
	<option value="AZ">Arizona</option>
	<option value="AR">Arkansas</option>
	<option value="CA">California</option>
	<option value="CO">Colorado</option>
	<option value="CT">Connecticut</option>
	<option value="DE">Delaware</option>
	<option value="DC">District of Columbia</option>
	<option value="FL">Florida</option>
	<option value="GA">Georgia</option>
	<option value="HI">Hawaii</option>
	<option value="ID">Idaho</option>
	<option value="IL">Illinois</option>
	<option value="IN">Indiana</option>
	<option value="IA">Iowa</option>
	<option value="KS">Kansas</option>
	<option value="KY">Kentucky</option>
	<option value="LA">Louisiana</option>
	<option value="ME">Maine</option>
	<option value="MD">Maryland</option>
	<option value="MA">Massachusetts</option>
	<option value="MI">Michigan</option>
	<option value="MN">Minnesota</option>
	<option value="MS">Mississippi</option>
	<option value="MO">Missouri</option>
	<option value="MT">Montana</option>
	<option value="NE">Nebraska</option>
	<option value="NV">Nevada</option>
	<option value="NH">New Hampshire</option>
	<option value="NJ">New Jersey</option>
	<option value="NM">New Mexico</option>
	<option value="NY">New York</option>
	<option value="NC">North Carolina</option>
	<option value="ND">North Dakota</option>
	<option value="OH">Ohio</option>
	<option value="OK">Oklahoma</option>
	<option value="OR">Oregon</option>
	<option value="PA">Pennsylvania</option>
	<option value="RI">Rhode Island</option>
	<option value="SC">South Carolina</option>
	<option value="SD">South Dakota</option>
	<option value="TN">Tennessee</option>
	<option value="TX">Texas</option>
	<option value="UT">Utah</option>
	<option value="VT">Vermont</option>
	<option value="VA">Virginia</option>
	<option value="WA">Washington</option>
	<option value="WV">West Virginia</option>
	<option value="WI">Wisconsin</option>
	<option value="WY">Wyoming</option>
</select>
   Zip: <input type="text" name="zip" value=""> <br><br>
   Phone Number: <input type="text" name="phNum" value=""> <br><br>

  <input type="hidden" name="pr" value="1" />
  <input type="submit" value="Add Entry">

</form>
</p>

<hr />
<br />
<a href ="directory.html"> Return to Directory</a>


<?php

$setCode=0;

if($_SERVER['REQUEST_METHOD']=="POST"){

if(empty($_POST['fName'])){
$x = "Enter First Name \n <br>" ;
$setCode="1";
echo $x;
}

if(empty($_POST['lName'])){
$x = "Enter Last Name \n <br>";
$setCode="1";
echo $x;
}

if(empty($_POST['address'])){
$x = "Enter Address \n <br>";
$setCode="1";
echo $x;
}

if(empty($_POST['city'])){
$x = "Enter City \n <br>";
$setCode="1";
echo $x;
}

if(empty($_POST['state'])){
$x = "Select a State \n <br>";
$setCode="1";
echo $x;
}

if(empty($_POST['zip'])){
$x = "Enter Zip Code \n <br>";
$setCode="1";
echo $x;
}

if(empty($_POST['phNum'])){
$x = "Enter a Phone Number \n <br>";
$setCode="1";
echo $x;
}
}


$save="";

if (isset($_POST['fName'])){
$fname=$_POST['fName'];
$save=$fname;
}

if (isset($_POST['lName'])){
$lname=$_POST['lName'];
$save=$save.":".$lname;
}

if (isset($_POST['address'])){
$address=$_POST['address'];
$save=$save.":".$address;
}

if (isset($_POST['city'])){
$city=$_POST['city'];
$save=$save.":".$city;
}

if (isset($_POST['state'])){
$state=$_POST['state'];
$save=$save.":".$state;
}

if (isset($_POST['zip'])){
$zip=$_POST['zip'];
$save=$save.":".$zip;
}

if (isset($_POST['phNum'])){
$phNum=$_POST['phNum'];
$save=$save.":".$phNum."\n";
}






if((!empty($_POST['fName']))&&(!empty($_POST['lName']))&&(!empty($_POST['address']))&&(!empty($_POST['state']))&&(!empty($_POST['city']))&&(!empty($_POST['zip']))&&(!empty($_POST['phNum'])))
{
  $myfile="saveContacts.txt";
  $fh=fopen($myfile,'a+') or die("can't open file");
  if(flock ($fh, LOCK_EX)){ 
   fwrite($fh,$save);
     flock ($fh,LOCK_UN);  
    } 
  fclose($fh);

  echo "<br>Address added into text file sucessfully";
}
else{

}



?>

</body>
</html>
    