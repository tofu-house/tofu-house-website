<!DOCTYPE html>
<html>
<title>Tofu House A Digital Design and Marketing Agency</title>
<?php include 'header.php';?>  

<body id="whiteBG">    
<?php include 'menu.php';?>

<div class="w3-row w3-content w3-container w3-padding-64 text-black">  
    <h1 class="large-title w3-center text-white bg-green"><b>Hello, it's me...</b></h1>
    
    <!--- Form -->
    <div class="w3-content" style="padding: 12px">
        <form action="contact-form.php" method="post">
        <div class="row">
          <div class="col-25">
            <label for="name">Name</label>
          </div>
          <div class="col-75">
            <input type="text" id="name" name="name" placeholder="Name..">
          </div>
        </div>
        <div class="row">
          <div class="col-25">
            <label for=email>E-mail</label>
          </div>
          <div class="col-75">
            <input type="text" id="email" name="email" placeholder="E-mail..">
          </div>
        </div>
        <div class="row">
          <div class="col-25">
            <label for=number>Phone Number</label>
          </div>
          <div class="col-75">
            <input type="text" id="number" name="number" placeholder="555-555-5555..">
          </div>
        </div>
        <div class="row">
          <div class="col-25">
            <label for="message">Message</label>
          </div>
          <div class="col-75">
            <textarea id="message" name="message" placeholder="Write something.." style="height:100%; width=100%;"></textarea>
          </div>
        </div>
        <div class="row w3-center">
          <input class="button"type="submit" value="Submit">
        </div>   
        </form>  
    </div>
</div>

<?php include 'footer.php';?>  
</body>
    
