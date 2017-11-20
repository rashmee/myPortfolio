<?php

    if (isset($_POST['fullName']) && isset($_POST['phNum']) && isset($_POST['emailAddress']) && isset($_POST['message'])) {

        $fullName = $_POST['fullName'];
        $phNum = $_POST['phNum'];
        $emailAddress = $_POST['emailAddress'];
        $message = $_POST['message'];
	
	
        if (!empty($fullName) && !empty($phNum) && !empty($emailAddress) && !empty($message) ) {

        $to = 'rashmee.prakash@gmail.com';
        $subject = 'Portfolio View';
        $body = $fullName."\n".$phNum."\n".$message;
        $headers = 'From: '.$emailAddress;

        if (@mail($to, $subject, $body, $headers)) {

            $thankYou =  'Thank you for contacting me. I will be in touch soon!';
        }
        else {
            $sorryMsg =  'Sorry, an error occurred. Please try again later.';
        }

        }
        else {
            $validate =  'All fields are required!';
        }
    }

?>


<html>
<head>
<meta charset="UTF-8">
<title>Contact Form</title>
<style>
    @import url('https://fonts.googleapis.com/css?family=Architects+Daughter|Cormorant+Garamond|Poiret+One|Josefin+Slab|Quicksand|Tangerine');
</style>
<link rel="stylesheet" type="text/css" href="theCSS.css"/>
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>

<script type="text/javascript">
 $(document).ready(function(){
     $("#theContactForm").on("submit", function(){
          setTimeout(function(){
              window.close();         
          }, 3000);     
          });
 });
</script>

</head>

<body>

<div id="theProjects">
    <h1 align="center"><u>Contact Form</u></h1>
    <p align="center"  id="theValidate"><i><?php echo $validate; ?></i></p>
        <p align="center" id="theThankYou"><strong><?php echo $thankYou; ?></strong></p>
        <p align="center" id="theSorry"><strong><?php echo $sorryMsg; ?></strong></p>
    
        <form action="contact.php" method="post" name="contact_form" id="theContactForm">
        <table align="center" id="contactTable">
            <tr>
                <td><strong>Name:</strong></td>
                <td><input type="text" name="fullName" id="fullName" size="35" /></td>
            </tr>
            <tr>
                <td><strong>Phone Number:</strong></td>
                <td><input type="text" name="phNum" id="phNum" size="35" /></td>
            </tr>
            <tr>
                <td><strong>Email:</strong></td>
                <td><input type="text" name="emailAddress" id="emailAddress" size="35" /></td>
            </tr>
            <tr>
                <td><strong>Message:</strong></td>
                <td><textarea name="message" rows="10" cols="34"></textarea></td>
            </tr>
            
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="submit" id="submit" value="Submit" />
                &nbsp;
                    <input type="reset" name="reset" id="reset" value="Reset" />
                </td>
            </tr>
        </table>
        </form>
        
</div>
</body>
</html>
