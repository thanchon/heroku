    <?php 
    $hubVerifyToken = "bot_message_demo";
    $accessToken = "EAAC5ZCbbwnhoBACG96ckZCvNVXCEMNeDFl73sUyBaug60XRsK40KrzuVbc9Bf7mbpSOaWZBWwN7JuKfE97RP3D7xI8nF4bpIIfVwXBsnLl0yJzxhmCZCFbs88TwdOP1sypOG2iU6ZCo15OOpt1KOHM3NZCeuYXXwFsuoIC9RftGQZDZD";
    if($_REQUEST['hub_verify_token'] === $hubVerifyToken) {
        echo $_REQUEST['hub_challenge'];
        exit;
    }  else {
        echo ('Invalid verify token');    
    }
    ?>
    <!-- end menu left -->
    <!-- content right -->
    <div>
        <h3>Facebook Messenger Box</h3>
        <!-- Load Facebook SDK for JavaScript -->
        <div id="fb-root"></div>
        <script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js#xfbml=1&version=v2.12&autoLogAppEvents=1';
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>

        <!-- Your customer chat code -->
        <div class="fb-customerchat"
          attribution=setup_tool
          page_id="473522732832060">
        </div>
    </div>