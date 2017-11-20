<!DOCTYPE html PUBLIC
"-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<link rel="stylesheet" href="guestSignedIn.css" type="text/css" />

<head>
<title> Guest Book Signed </title>
</head>

<body>
 
<?php

$found=0;
$x="";

if(isset($_POST['name'])){
  $name=$_POST['name'];
  $x=$name;
}

if(isset($_POST['email'])){
  $EmailID=$_POST['email'];
  $x=$x.":".$EmailID."\r\n";
}


$dataFound=file("list.txt");

for ($i=0; $i<count($dataFound); $i++)
{
  $currentContact = explode(':', $dataFound[$i]); 

    if((trim($currentContact[0])==$name)&&(trim($currentContact[1])==$EmailID)) 
    {
      $found = 1;
    }
 
}

if($found==0)
{



	if(($_POST['name'])&&($_POST['email']))
	{
	  $myfile="list.txt";
	  $fh=fopen($myfile,'a+') or die("can't open file");
  	if(flock ($fh, LOCK_EX))
            {  
   	    fwrite($fh,$x);
     	    flock ($fh,LOCK_UN);  
    	    } 
       fclose($fh);

       echo"<br><h1>Name Added!</h1>";
	}

}

else
{
echo"<hr><br>You have already signed the guest book!<br><br>";
}

?>


<?php

if($found==0){
  echo "Name: ".$name ."<br>";
  echo "E-mail: ".$EmailID. "<br>";
}

?>


<hr />
<br />
<a href="addGuest.html">Add Another Visitor</a>
<a href="guestBook.php">View Guest Book</a>

</body>
</html>