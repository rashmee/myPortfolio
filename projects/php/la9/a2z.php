<!DOCTYPE html PUBLIC
"-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<link rel="stylesheet" href="a2z.css" type="text/css" />

<head>
<title> Guest Book  </title>

<style>
a {
	    color: #DB2645;
}
</style>


</head>

<body>
    <h1>Visitors</h1>
   
<hr />

<table border="1">

<?php
if(count($_POST) > 0) {
    $del = $_POST['delete'] - 1;
    $filesAdded = file("list.txt");
    sort($filesAdded);
    $visitors = count($filesAdded);
    $dataFound = null;
    for ($j=0; $j<$visitors; $j++) {
        if($del!=$j)
	$dataFound = $dataFound.$filesAdded[$j];
}
    $contacts = fopen("list.txt", "w");
    flock($contacts, LOCK_EX);
    fwrite($contacts, $dataFound);
    flock($contacts, LOCK_UN);
    fclose($contacts);
}

$dataFound=file("list.txt");
sort($dataFound);
for ($i=0; $i<count($dataFound); $i++)
{
  $currentContact = explode(':', $dataFound[$i]);

  $index=$i+1;
  echo "<tr> <th width='50' rowspan='2'>$index </th>";
  
  echo "<td>Name: " .$currentContact[0]."</td></tr>";
  echo "<tr><td>Email: <a href='mailto:".$currentContact[1]."?Subject=Hello%20again'  target='_top'> " .$currentContact[1]."</a></td></tr>";
 
 
}
?>

</table>

<hr />
<br />

<a href="addGuest.html">Add New Visitor</a><br>
<a href="a2z.php">Sort Visitors A-Z</a><br>
<a href="z2a.php">Sort Visitors Z-A</a>

<form method="post" action="a2z.php">
Delete visitor number:<input type="text" name="delete" size="3" maxlength="3" width="1" value=""> <input type="submit"  value="Delete">


</body>
</html>