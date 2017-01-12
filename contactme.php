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
<title>Contact</title>
<link rel="shortcut icon" href="favicon.ico" />
<link rel="stylesheet" type="text/css" href="theCSS.css"/>
<link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>

<script>
$(function(){
var menu = $('#slide_menu'),
	menuBtn = $('#button'),
	body = $(document.body),
    menuWidth = menu.outerWidth();

    menuBtn.on('click', function(){
	body.toggleClass('open');
        if(body.hasClass('open')){
			body.animate({'left' : menuWidth }, 300);
			menu.animate({'left' : 0 }, 300);
		} else {
			menu.animate({'left' : -menuWidth }, 300);
			body.animate({'left' : 0 }, 300);
		}
    });
});
</script>

</head>

<body>


<div class="theMenu">
<nav id="slide_menu">
  <ul>
    <li><a href="index.html">About Me</a></li>
    <li><a href="projects.html">Projects</a></li>
    <li><a href="Resume-RashmeePrakash.pdf" target="_blank">R&eacute;sum&eacute;</a></li>
    <li><a href="contact.php">Contact</a></li>
  </ul>
</nav>

<input type="image" src="show-menu-icon.png" id="button" alt="Submit" width="48" height="48">
</div>

<div id="header" align="center">
	<img src="IMG_1420 copy.png" alt="myPic" width="150" height="140">
	<h1 id="name">Rashmee Prakash</h1>
    <hr />
    <h2 id="abtMe" align="center">Say Hello!</h2>
</div>

<div id="theProjects">
  <p align="center">If you would like to work with me or discuss my projects, feel free to shoot me an <a href="mailto:rashmee.prakash@gmail.com?Subject=Hello!%20I%20would%20like%20to%20discuss%20your%20portfolio" target="_top">email</a> or fill out the form below and I will get back to you as soon as possible.</p>
    <p align="center"  id="theValidate"><i><?php echo $validate; ?></i></p>
        <p align="center" id="theThankYou"><strong><?php echo $thankYou; ?></strong></p>
        <p align="center" id="theSorry"><strong><?php echo $sorryMsg; ?></strong></p>
    <fieldset align="center" id="contactFieldset">
        <form action="contactme.php" method="post" name="contact_form" id="theContactForm">
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
                <td><textarea name="message" rows="10" cols="35"></textarea></td>
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
        </fieldset>
  <p align="center">Thank you for viewing my portfolio.</p>




</div>

<div id="footer">
	<hr />
    <p>&copy; 2014 RASHMEE PRAKASH</p>

</div>
</body>
</html>
