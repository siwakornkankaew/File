 <?php
  

function send_LINE($msg){
 $access_token = 'HehNyXTjXtU3JBuD6 + ovQPMvP1pmFytkeRq7AWmhMmORV3hzoVWSp6ePtTjpz / RtuhwjoszbxUKoEo24geUYTymni6r + 0IPNFSu7TIJZp4tJ9c1YsQlvm7sR7pYTfLSFgj6TWyA + + oJByFA1ub1 M1QdB04t89 / 1O / w1cDnyilFU =
'; 

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'to' => '787449e29017f7a7e9ae84e8d6eaf255',
        'messages' => [$messages],
      ];
      $post = json_encode($data);
      $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
      $result = curl_exec($ch);
      curl_close($ch);

      echo $result . "\r\n"; 
}

?>
