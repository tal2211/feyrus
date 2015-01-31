<!DOCTYPE html>
<html>
  <head>
    <title>Feyrus</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="fonts/foundation-icons/foundation-icons.css" />
    <script src="js/jquery-2.1.3.js"></script>
  </head>
  <body oncontextmenu="return true;">
  <script type="text/javascript">
      function fullscreenOn(element) {
          if(element.requestFullScreen) {
              element.requestFullScreen();
          } else if(element.mozRequestFullScreen) {
              element.mozRequestFullScreen();
          } else if(element.webkitRequestFullScreen) {
              element.webkitRequestFullScreen();
          }
      }
      function fullscreenOf(element) {
          if(document.cancelFullScreen) {
              document.cancelFullScreen();
          } else if(document.mozCancelFullScreen) {
              document.mozCancelFullScreen();
          } else if(document.webkitCancelFullScreen) {
              document.webkitCancelFullScreen();
          }
      }
      jQuery(function(){
          jQuery("#full-screen").click(function(){
              if(jQuery(this).hasClass("fi-arrows-out")){
                  fullscreenOn(document.documentElement);
                  jQuery(this).removeClass();
                  jQuery(this).addClass("fi-arrows-in");
              }else if(jQuery(this).hasClass("fi-arrows-in")){
                  fullscreenOf(document.documentElement);
                  jQuery(this).removeClass();
                  jQuery(this).addClass("fi-arrows-out")
              }
              return false;
          });
      });
      //fullscreen3(document.documentElement);
  </script>

  <div class="feyrus-convas" >
      <div class="fi-arrows-out" id="full-screen"></div>
        <?php require_once("register.php");?>
    </div>
  </body>
</html>
