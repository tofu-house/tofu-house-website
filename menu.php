<!-- Sidebar -->
<nav class="w3-sidebar w3-animate-top w3-xxlarge text-black" style="display:none;padding-top:150px" id="mySidebar">
  <a href="javascript:void(0)" onclick="closeNav()" class="w3-xxlarge w3-padding w3-display-topright hover-effect" style="padding:6px 24px">
    <i class="fa fa-remove"></i>
  </a>
  <div class="w3-bar-block w3-center">
    <a href="index.php" class="w3-bar-item hover-effect">HOME</a>
    <a href="about.php" class="w3-bar-item hover-effect">ABOUT</a>
    <a href="projects.php" class="w3-bar-item hover-effect">PROJECTS</a>
    <a href="contact.php" class="w3-bar-item hover-effect">CONTACT US</a>
  </div>
</nav>

<!-- Top -->
<div id="main" class="w3-top navbar">
  <span id="navLogoWhite" class="w3-padding w3-display-topleft hover-effect1"><a href="http://tofuhouse.ca"><img style="height: auto; width: auto; max-height: 45px; max-width: 45px;" src="images/logo-white.png"></a></span>
  <span id="navLogoGreen" class="w3-padding w3-display-topleft hover-effect1"><a href="http://tofuhouse.ca"><img style="height: auto; width: auto; max-height: 45px; max-width: 45px;"  src="images/logo-green-out.png"></a></span>
  <span id="navToggle" class="w3-padding w3-display-topright hover-effect1" onclick="openNav()">MENU</span>
</div>

<script>
// Open and close sidebar
function openNav() {
    document.getElementById("mySidebar").style.width = "100%";
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("main").style.display = "none";
}

function closeNav() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("main").style.display = "block";
}
    
$(document).ready(function() {
 
    setTimeout(function(){
        $('body').addClass('loaded');
    }, 3000);
 
});
    
//Change Menu and Home icons with white background
$(function() {
    $(window).on('scroll', function() {
        var position = window.pageYOffset;
        var scroll_pos_test = $("#whiteBG").offset().top;
        if(position > scroll_pos_test) {
            document.getElementById("navToggle").style.color = "mediumseagreen";
            document.getElementById("navLogoWhite").style.display = "none";
            document.getElementById("navLogoGreen").style.display = "block";
        }else{
            document.getElementById("navToggle").style.color = "white";
            document.getElementById("navLogoWhite").style.display = "block";
            document.getElementById("navLogoGreen").style.display = "none";
        }
    });

});
</script>