<?php
  $pageTitle = "WTNMCBA | Calendar of Events";
  $metaDescription = "";
  include("header.php");
?>
    


   <!-- <div id="intro-banner" class="pure-u-1">
        <img src="img/hp-banner-logo.png">
        <h1 style="color:#fff; font-weight:400; margin-top:-1%; letter-spacing:.1em; font-size:28px;">SERVING THE TRADE COMMUNITY</h1>
    </div>
  -->


      <div class="container" style="">
        <div style="width:60%; margin:0px auto;float:left;">
          <h2 style="margin-left:35px;">Become a Member</h2>
          <?php include("member-form.php"); ?>
        </div>
        <div style="width:30%; margin:100px 0; background:#efefef; padding:20px; float:right;">
          <h3>About membership:</h3>
          <p>Membership with WTNMCBA is valid for a year. You will only be charged once and may renew your membership after your yearly benefits end.</p>
          <p>Though you are filling an electronic agreement, we need you to print a copy for your own records</p>
          <p>By filling the form on this page you set the start date of your membership on <? print(Date("l F d, Y")); ?></p>
          <small style="color:#999;">Once your payment has been accepted you will receive an email confirmation from us with details about how to generate your member log-in information</small>
        </div>
      </div>


        




<!-- SMOOTH SCROLL -->
<script type="text/javascript">
$(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top -10
        }, 900);
        return false;
      }
    }
  });
});
</script>



      
<?php include("footer.php"); ?>