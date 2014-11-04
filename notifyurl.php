<?php
$to  = 'support@domain.com' . ', ';
#need to change when will be in production
#$to .= 'my@domain.com';

$subject = "קורא כרטיסים - הזמנה חדשה: " . $_POST['Response'] . " " .  "איש מכירות: " . " " . $_POST['salesman'];

#test subject str_replace
#$subject = str_replace(array("\n", "\r"), '', $_GET['sum']);

#$comment = $_POST['message'];

// To send HTML mail, the Content-type header must be set

$headers = "From: " . strip_tags($_POST['email']) . "\r\n" .
        "Reply-To: " . strip_tags($_POST['email']) . "\r\n" .
       	'MIME-Version: 1.0' . "\r\n" .
		"Content-Type: text/html; charset=utf-8\r\n" . 
		"Content-Transfer-Encoding: 8bit\r\n\r\n";	
$message = print_r($_POST, true);

// message
$message = "סוג עיסקה: " .strip_tags($_POST['Response']) . " " .  "מייל: " . " " . $_POST['email'] . " " .  "איש מכירות: " . " " . $_POST['salesman'] . " " .  "כתובת: " . " " . $_POST['address'] . " " .  "טלפון: " . " " . $_POST['phone'] . " " .  "תאור מוצר: " . " " . $_POST['pdesc'];
   
mail($to,$subject,$message,$headers);

#test

#test

#print to array
echo '<pre>';
print_r($_POST);
echo '</pre>';
?>
