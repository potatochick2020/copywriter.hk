<script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
<script>
    $(function(){
        $('a').each(function(){
            if ($(this).prop('href') == window.location.href) {
                $(this).addClass('active'); $(this).parents('li').addClass('active');
            }
        });
    });
</script>
<nav class="stroke sticky-top navbar navbar-expand-xl" id="myTopnav" style="padding-top:10px;">
  <ul class="navbar-nav me-auto mb-2 mb-xl-0"><li class="nav-item"><a href="index">COPYWRITER.HK</a></li></ul>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <i class="fa-solid fa-bars"></i>
  </button>
  <div class="collapse navbar-collapse" id="navbarContent">
    <ul class="navbar-nav ms-auto mb-2 mb-xl-0">
      
      <li class="nav-item "><a href="freelance-english-copywriting.php">Freelance English copywriter</a></li>
      <li class="nav-item "><a href="website-copywriting.php">Website copywriter</a></li>
      <li class="nav-item "><a href="brand-strategist.php">Brand strategist</a></li>
      <li class="nav-item "><a href="brand-design-team.php">Design & project management</a></li>
      <li class="nav-item "><a href="contact-paul-rigby.php">Contact</a></li>
      
      
      
      
    </ul>
  </div>
</nav>
