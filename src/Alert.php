<?php

namespace MrPaulPhan\Slack;

class Alert
{


    public function __construct()
    {

      $config = config('slack');
      $this->webhook = $config['webhook_url'];
      $this->channel = $config['channel'];
      $this->username= $config['username'];
      $this->icon = $config['icon'];

    }


    public function alert($message, $channel = '', $username = '', $icon = '') {

      if (empty($channel)) {
        $channel = $this->channel;
      }
      if (empty($username)) {
        $username = $this->username;
      }
      if (empty($icon)) {
        $icon = $this->icon;
      }

            // Create a constant to store your Slack URL
       define('SLACK_WEBHOOK', $this->webhook);
       // Make  message
       $message = array(
         'payload' => json_encode(
           array(
             'text' => $message,
             'channel' => $channel,
             'username' => $username,
             'icon_emoji' => $icon,
           )
         )
       );
       // Use curl to send  message
       $curl = curl_init(SLACK_WEBHOOK);
       curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
       curl_setopt($curl, CURLOPT_POST, true);
       curl_setopt($curl, CURLOPT_POSTFIELDS, $message);
       curl_exec($curl);
       curl_close($curl);
    }

}
