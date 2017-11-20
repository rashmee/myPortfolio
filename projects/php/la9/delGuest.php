<!DOCTYPE html PUBLIC
"-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<link rel="stylesheet" href="style.css" type="text/css" />

<head>
<title> Guest Book  </title>
</head>

<body>
    <h1>Visitors</h1>
   
<hr />

<table border="1">

<?php

if(isset($_POST['delete'])){
    $delGuest=$_POST['delete'];
    echo $delGuest;
    echo "<br>";
}
$index=$delGuest-1;
echo $index;
$dataFound=file("list.txt");
for ($i=0; $i<=count($dataFound); $i++)
{
    $line=$dataFound[$i];
    echo $line ."<br>";
    if($i==$index){
        unset($dataFound[$index]);
        $dataFound1=$dataFound;
 
 }
}

echo "New Data<br>";


$x="";

for ($j=0; $j<=count($dataFound1); $j++)
{
  if($j!==$index){
   $str=$dataFound1[$j];
   $x=$x.$str;
   echo $str;
   }
}

echo "<br>";
echo $x;

$d="list1.txt";
$fh=fopen($d,'w'); 
fwrite($fh,$x);
fclose($fh);

?>

</table>

<hr />
<br />

<a href="addGuest.html">Add New Visitor</a><br>
<a href="a2z.php">Sort Visitors A-Z</a><br>
<a href="z2a.php">Sort Visitors Z-A</a><br>

<form method="post" action="delGuest.php">
Delete visitor number:<input type="text" size="3" maxlength="3" width="1" value=""> <input type="submit"  value="Delete">


</body>
</html>