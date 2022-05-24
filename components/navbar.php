<script>
$(document).ready(function(){       
   var scroll_start = 0;
   var startchange = $('#startchange');
   var offset = startchange.offset();
   $(document).scroll(function() { 
      scroll_start = $(this).scrollTop();
      if(scroll_start > offset.top) {
          $('#myTopnav').css('background-color', '#2a2a2d');
       } else {
          $('#myTopnav').css('background-color', '#ffffff');
       }
   });
});
</script>
<nav class="stroke sticky-top navbar navbar-expand-xl" id="myTopnav" style="padding-top:10px;">
  <ul class="navbar-nav me-auto mb-2 mb-xl-0"><li class="nav-item"><a style="font: size 19.5px;" href="index.php">COPYWRITER.HK</a></li></ul>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <i class="fa-solid fa-bars"></i>
  </button>
  <div class="collapse navbar-collapse" id="navbarContent">
    <ul class="navbar-nav ms-auto mb-2 mb-xl-0">
      
      <li class="nav-item "><a href="FreelanceEnglishCopywriter.php">Freelance English copywriter</a></li>
      <li class="nav-item "><a href="WebsiteCopywriter.php">Website copywriter</a></li>
      <li class="nav-item "><a href="BrandStrategist.php">Brand strategist</a></li>
      <li class="nav-item "><a href="DesignandProjectMangement.php">Design & project management</a></li>
      <li class="nav-item "><a href="Contact.php">Contact</a></li>
      
      
      
      
    </ul>
  </div>
</nav>
