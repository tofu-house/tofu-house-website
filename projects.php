<!DOCTYPE html>
<html>
<title>Projects - Tofu House A Digital Design and Marketing Agency</title>
<?php include 'header.php';?>  
<style>

    .card::-webkit-scrollbar {
      display: none;
    }

    .card--content {
      display:none;
      min-width: 100%;
    }

    /* Three columns side by side */
    .column {
        float: left;
        width: 33.3%;
        margin-bottom: 16px;
        padding: 0 8px;
    }

    /* Display the columns below each other instead of side by side on small screens */
    @media screen and (max-width: 650px) {
        .column {
            width: 100%;
            display: block;
        }
    }

    /* Clear floats */
    .container::after, .row::after {
        content: "";
        clear: both;
        display: table;
    }


    .logo {
        width: 100%;
        max-width: 400px;
        height: auto;
        padding: 10px;
    }


</style>  
<body>
<?php include 'menu.php';?>

<section class="card">
    <!--Header-->
    <div class="card--content w3-animate-top bg-green">
        <div class="logos" style="padding:64px">
            <h1 class="w3-center" style="font-size: 2.5em">Ongoing Projects</h1> 
            <div class="card"><img class="logo" src="images/logo-eds-white-small.png"></div>
            <div class="card"><img class="logo" src="images/logo-ubuntu.png"></div>
            <div class="card"><img class="logo" src="images/logo-ubctg.png"></div>
            <div class="card"><img class="logo" src="images/logo-baja-trans.png"></div>
            <div class="card"><img class="logo" src="images/balila.png"></div>
        </div>
    </div>


    <!-- Evolution Dental Studio -->
    <div class="w3-display-container card--content w3-animate-top" style="min-height: 100%; background-color:dimgrey">
        <div style="padding: 64px">
        <div><img src="images/logo-eds-white-small.png" style="width: 100%; max-width: 450px;"></div>
            <div class="container">
                <p class="text-white">Evolution Dental Studio provides quality products and customer service. They develop dentures, repairs and relines for dental offices in the Winnipeg area. They pride themselves on their award-winning craftsmanship and their solid reputation.</p>
                <p class="text-white">Tofu House is currently working with Evolution Dental Studio to launch a fully functional and responsive website to help legitimise their online presence.</p>
            </div>
            <p class="text-white">Services Used</p>
            <p class="text-white">Website Development and Design</p>
        </div>
    </div>

    <!-- Ubuntu String Quartet -->
    <div class="w3-display-container card--content w3-animate-top" style="min-height: 100%; background-color:black">
        <div style="padding: 64px">
            <div><img src="images/ubuntu.jpg" style="width: 100%; max-width: 400px;"></div>
            <h1 style="font-size: 2.5em"><b>Ubuntu String Quartet</b></h1>
            <div class="container">
                <p class="text-white">The Ubuntu String Quartet specializes in non-conventional repertoire, such as folk tunes and mainstream songs in addition to their classical collection. Ubuntu is South African for “human compassion”, and is also the idiom “I am what I am through each of us,” which strongly reflects their chemistry. USQ has performed for company events, formals, weddings, and even comedy shows.</p>
                <p class="text-white">Tofu House built a responsive and beautiful website to help showcase some of the quartet's work.
            </div>
            <p class="text-white">Services Used</p>
            <p class="text-white">Website Development and Design</p>
            <a class="text-white hover-effect" href="https://ubuntusq.bitballoon.com">View more of Ubuntu String Quartet</a>
        </div>
    </div>
    
     <!-- UBC TRADING GROUP -->
    <div class="w3-display-container card--content w3-animate-top" style="min-height: 100%; background-color:skyblue">
        <div style="padding: 64px">
        <div><img src="images/logo-ubctg.png" style="width: 100%; max-width: 400px;"></div>
        <div class="container">
            <p class="text-black">The UBC Trading Group is a student group established in March 2011 to bring together retail investors and traders within the UBC community and beyond. Their mission is to "To supplement and facilitate the learning process of trading or investing in the capital markets.”</p>
            <p class="text-black">Working with the executives of the UBC Trading Group, we built a beautiful and feature rich website where you can read articles written by club members and find out about the next UBC Trading Group event.</p>
        </div>
        <p class="text-black">Services Used</p>
        <p class="text-black">Website Development and Design</p>
        <a class="text-black hover-effect" href="http://ubctg.ca/">View more of UBC Trading Group</a>
        </div>
    </div>
    
    <!-- UBC BAJA -->
    <div    class="w3-display-container card--content w3-animate-top" style="min-height: 100%;  background-color:rgba(50,18,81)">
        <div style="padding: 64px">
        <div><img src="images/logo-baja-trans.png" style="width: 100%; max-width: 200px;"></div>
        <div class="container">
            <p class="text-white">UBC BAJA is a student-run engineering design team focused on designing, building and racing an off-road vehicle. The UBC BAJA team is full of knowledge and ambition, and Baja is an outlet for their passion and engineering.</p>
            <p class="text-white">Tofu House helped redesign their website to help attract sponsor's and increase the team's online presence.</p>
        </div>
        <p class="text-white">Services Used</p>
        <p class="text-white">Website Development and Design</p>
        <a class="text-white hover-effect" href="http://www.ubcbaja.com/">View more of UBC BAJA</a>
        </div>
    </div>
    
    <!-- Balila Hummus -->
    <div    class="w3-display-container card--content w3-animate-top" style="min-height: 100%;  background-color:rgba(128,128,128)">
        <div style="padding: 64px">
        <div><img src="images/balila.png" style="width: 100%; max-width: 450px;"></div>
        <div class="container">
            <p class="text-white">Balila Hummus is a restaurant in downtown Vancouver.</p>
            <p class="text-white">Tofu House helped consult with the marketing company Tangoo on implementing changes to the website. Our advice and consultations helped to improve the functionality of the website. Some of the changes implemented include adding a more obvious way to order from the restaurant on the landing page to help bolster website engagement and sales.</p>
        </div>
        <p class="text-white">Services Used</p>
        <p class="text-white">Website Development and Design</p>
        <a class="text-white hover-effect" href="http://www.ubcbaja.com/">View more of UBC BAJA</a>
        </div>
    </div>
    
    
<div class='prev' style="float:left" onclick="plusDivs(-1)"><a>&#8249</a></div>
<div class='next' style="float:right" onclick="plusDivs(1)">&#8250</div>
</section>
    
    
<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("card--content");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>
<?php include 'footer.php';?>
</body>