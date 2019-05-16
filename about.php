<!DOCTYPE html>
<html>
<title>About - Tofu House A Digital Design and Marketing Agency</title>
<?php include 'header.php';?>  

<body> 
<?php include 'menu.php';?>
<style>
/* Three image containers (use 25% for four, and 50% for two, etc) */
.column {
  float: left;
  width: 50%;
  padding: 5px;
}

/* Clear floats after image containers */
.row::after {
  content: "";
  clear: both;
  display: table;
}
</style>

<!-- Header -->
<div class="bgimg-5 w3-display-container">
  <div class="w3-display-middle">
    <h1 class="w3-center"><b>What is Tofu House?</b></h1>
  </div>
</div>
    
<!-- About Us -->
<div class="bg-green" style="min-height: 600px">
    <div class="text-white" style="padding: 64px">
        <img class="serviceicon" src="images/logo-white.png" style="float:right; width:100%; max-width:400px">
        <h2><b>About Us</b></h2>
        <h1 style="font-size:1.75em"><b>As entrepreneurs, we derive our success from being able to grow your business and make it succeed.</b></h1>
        <p class="text-white">We work with you to enhance, redesign and develop your site that will help you grow your business and develop strategies to develop your online network. As technology and the internet continues to grow, having an online presence will be essential for your business to stay relevant and adapt to an evolving online market. Having a beautiful website and online presence is important for increasing your marketing channels and to reach a new audience. We create online experiences and products tailored to have your business reach an ever-growing community that relies on the internet to discover their favourite brands and businesses.</p>
    </div>
    <div style="padding:24px">
        <h1 style="font-size:2em; text-align:center"><b>Let your online presence work as hard as you are.</b></h1>
    </div>
</div>

<div class="bg-white" style="min-height: 600px">
    <div class="row text-black" style="padding: 64px">
        <h2 style="text-align:center"><b>Founders</b></h2>
        <div class="column"><img class="serviceicon" src="images/ronnie.png" style="width:100%; max-width:500px"></div>
        <div class="column"><img class="serviceicon" src="images/rohan.jpg" style="width:100%; max-width:500px"></div>
    </div>
</div>
    
<!-- The Team -->
<div class="bg-white" style="min-height: 600px">
    <div class="text-black" style="padding: 64px">
        <h2 style="text-align:center"><b>The Team</b></h2>
        <img class="serviceicon" src="images/team-photo-temp.jpg" style="width:100%; max-width:500px">
    </div>
</div>
    
<!--Services-->    
<div id="whiteBG">
    <div class="service-container">
        <h2 class="text-black" style="text-align:center"><b>Services</b></h2>
        <div class="singleservice shadow-hover">  
            <img class="serviceicon" src="http://www.iconninja.com/files/642/213/85/idea-and-creativity-symbol-of-a-lightbulb-icon.svg">
            <h2 class="servicetitle">Social Media</h2>  
            We work with businesses to grow their online presence using social media and viral marketing campaigns.
            </div>
        <div class="singleserviceb shadow-hover">  
            <img class="serviceicon" src="http://www.clipartbest.com/cliparts/Kin/L9M/KinL9MRzT.png">
            <h2>Graphic Design</h2>
            Our team of artists work with you to develop logos, graphics and designs for digital media. 
        </div>
        <div class="singleservice shadow-hover">  
            <img class="serviceicon" src="http://simpleicon.com/wp-content/uploads/computer-2.png">
            <h2 class="servicetitle">Web Development</h2>
            We make responsive and beautiful websites for both smartphones and desktops. 
        </div>
        <div class="singleserviceb shadow-hover">  
            <img class="serviceicon" src="http://www.pngmart.com/files/1/Video-Icon-PNG-Clipart.png">
            <h2 class="servicetitle">E-commerce</h2>  
            We help you consult and set up e-commerce services to expand your business.
        </div>
    </div>
</div>

<?php include 'pre-footer.php';?>
<?php include 'footer.php';?>
</body>
