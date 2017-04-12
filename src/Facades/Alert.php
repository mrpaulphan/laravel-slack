<?php

namespace MrPaulPhan\Slack\Facades;

use Illuminate\Support\Facades\Facade;

class Alert extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'alert-class';
    }
}
