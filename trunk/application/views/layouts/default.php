<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title><?php echo $template['title'] ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php echo $template['metadata'] ?>
    </head>

    <body class="<?php echo $body_class ?>">
<script>
      window.fbAsyncInit = function() {
        FB.init({
          appId      : '461257183992787',
          xfbml      : true,
          version    : 'v2.0'
        });
        
        // In your onload handler
        FB.Event.subscribe('edge.create', page_like_or_unlike_callback);
        FB.Event.subscribe('edge.remove', page_like_or_unlike_callback);
      };

      (function(d, s, id){
         var js, fjs = d.getElementsByTagName(s)[0];
         if (d.getElementById(id)) {return;}
         js = d.createElement(s); js.id = id;
         js.src = "//connect.facebook.net/en_US/sdk.js";
         fjs.parentNode.insertBefore(js, fjs);
       }(document, 'script', 'facebook-jssdk'));
       


       
    </script>
        <div id="fb-root"></div>
<script>
    (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=461257183992787&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>
        
        <div class="container">

            <?php echo $template['partials']['header'] ?>

            <div class="main-content">
                
                <div id="alert_placeholder"></div>

                <?php echo $template['partials']['flash_messages'] ?>

                <?php echo $template['body'] ?>

                <?php echo $template['partials']['footer'] ?>

            </div> <!-- /main-content -->

        </div> <!-- /container -->

    </body>
</html>