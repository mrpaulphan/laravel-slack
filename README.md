# Still in Development

## Instaliastion
composer require mrpaulphan/laravel-slack

```
'providers' => [

MrPaulPhan\Slack\SlackServiceProvider::class,

]

'aliases' => [

'Slack' => MrPaulPhan\Slack\Facades\Alert::class,

]
```


## Config
Run `php artisan vendor:publish` and go to `config/slack.php` and edit replace the values.

```
'webhook_url' => env('SLACK_WEBHOOK_URL'),
'channel' => env('SLACK_CHANNEL', '#general'),
'username' => env('SLACK_USERNAME', 'Laravel App'),
'icon' => env('SLACK_ICON', ':ghost:'),
```

## Usage
`Slack::alert('hey')`
