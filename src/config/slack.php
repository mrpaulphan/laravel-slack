<?php

return [
      'webhook_url' => env('SLACK_WEBHOOK_URL', '#'),
      'channel' => env('SLACK_CHANNEL', '#general'),
      'username' => env('SLACK_USERNAME', 'Laravel App'),
      'icon' => env('SLACK_ICON', ':ghost:'),
];
