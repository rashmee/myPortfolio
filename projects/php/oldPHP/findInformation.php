<!DOCTYPE html PUBLIC
"-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<link rel="stylesheet" href="LA8.css" type="text/css" />

<head>
<title> Telephone Directory </title>
</head>

<body>

<hr />

<?php



if($_SERVER['REQUEST_METHOD']=="POST"){

if(empty($_POST['fName']) && (empty($_POST['lName']))){
  $x = "You must enter a value in each field. Click your browser's back button to return to the form.  \n <br>" ;
  $setCode="1";
  echo $x;
}


if(empty($_POST['fName'])){
$x = "You must enter a value in each field. Click your browser's back button to return to the form.  \n <br>" ;
$setCode="1";
echo $x;
}

if(empty($_POST['lName'])){
$x = "You must enter a value in each field. Click your browser's back button to return to the form.  \n <br>" ;
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


?>

<?php

$data=file("saveContacts.txt");
$fName=$_POST["fName"];
$lName=$_POST["lName"];
$address="";
$city="";
$state="";
$zip="";
$phNum="";

for ($i=0; $i<count($data); $i++) {
  $currentContact = explode(':', $data[$i]);
    if(($currentContact[0]==$fName)&&($currentContact[1]==$lName))
    {
      $address = $currentContact[2];
      $city = $currentContact[3];
      $state = $currentContact[4];
      $zip = $currentContact[5];
      $phNum = $currentContact[6];
      $found = true;

}
}

$stateName=array($state);

?>

<form method="post" action="addForm.php">

First Name: <input type="text" name="fName" value="<?php echo $fName;
?>">
Last Name: <input type="text" name="lName" value="<?php echo $lName;
?>"> <br><br>
Address: <input type="text" name="address" value="<?php echo $address;
?>">
City: <input type="text" name="city" value="<?php echo $city;
?>"> <br><br>
State: <select name="state">
<?php
$states=array("AL", "AK", "AZ", "AR", "CA", "CO", "CT", "DE", "DC", "FL", "GA", "HI", "ID", "IN", "IA", "KS", "KY", "LA", "ME", "MD", "MA", "MI", "MN", "MS",
"MO", "MT", "NE", "NV", "NH", "NJ", "NC", "ND", "OH", "OK", "OR", "PA", "RI", "SC", "SD", "TN" ,"TX", "UT", "VT", "VA", "WA", "WV", "WI", "WY");
foreach($states as $st){
echo '<option value = "'.$st .'"';
  if (in_array($st , $stateName)) {
    echo "selected";
  }

echo ">".$st."</option>";
}

?>
</select>
Zip: <input type="text" name="zip" value="<?php echo $zip;
?>"> <br><br>
Phone Number: <input type="text" name="phNum" value="<?php echo $phNum;
?>"> <br><br>

<input type="submit" value="Update!">



<hr />
<br />
<a href ="directory.html"> Return to Directory</a>

</body>
</html>
