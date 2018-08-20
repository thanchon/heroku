<?php 
$input = json_decode(file_get_contents('php://input'), true);
 print_r($input);
$senderid = $input['entry'][0]['messaging'][0]['sender']['id'];
$message = $input['entry'][0]['messaging'][0]['message']['text'];
$phone_number = '+84908066812';
$page_access_token="EAAC5ZCbbwnhoBACG96ckZCvNVXCEMNeDFl73sUyBaug60XRsK40KrzuVbc9Bf7mbpSOaWZBWwN7JuKfE97RP3D7xI8nF4bpIIfVwXBsnLl0yJzxhmCZCFbs88TwdOP1sypOG2iU6ZCo15OOpt1KOHM3NZCeuYXXwFsuoIC9RftGQZDZD";
//API Url
$url = "https://graph.facebook.com/v2.6/me/messages?access_token=$page_access_token";
//The JSON data of message (only text message).
$jsonData = '{
    "recipient":{
    "phone_number":"'.$phone_number.'"
},
"message":{
"text":"Chao duc. A check Just check"
}
}';
//call to send message function
 
//send_message($jsonData,$url);
 
function send_message($jsonData,$url)
{

    //Encode the array into JSON.
    $jsonDataEncoded = $jsonData; 
    //Initiate cURL.
    $ch = curl_init($url); 
    //Tell cURL that we want to send a POST request.
    curl_setopt($ch, CURLOPT_POST, 1); 
    //Attach our encoded JSON string to the POST fields.
    curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonDataEncoded); 
    //Set the content type to application/json
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json')); 
    //Execute the request
    $result = curl_exec($ch); 
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