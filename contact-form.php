<!DOCTYPE html>
<html>
<title>Tofu House A Digital Design and Marketing Agency</title>
<?php include 'header.php';?>  
<?php include 'menu.php';?>

<body>
<div class="text-black w3-content w3-container w3-padding-64">
    
    <h1>Thanks for the Message</h1>
    <p>Review the message below. We will get back to you soon.</p>
    <?php
        $name = $_POST['name'];
        $email = $_POST['email'];
        $number = $_POST['number'];
        $message = $_POST['message'];

        $msg = <<<EOD
        The following was sent using the contact form TofuHouse.ca <br>
        Name: $name <br>
        Email: $email <br>
        Number: $number <br>
        Message: $message <br>
EOD;
    
        // use wordwrap() if lines are longer than 70 characters
        $msg = wordwrap($msg,70);

        // send email
        mail("ronniebugia@tofuhouse.ca","My subject",$msg);
        echo $msg;
    ?>
    
    
</div>
<?php include 'footer.php';?>  
</body>   
