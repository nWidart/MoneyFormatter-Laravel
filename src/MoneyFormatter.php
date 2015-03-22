<?php namespace Nwidart\MoneyFormatterLaravel;

use Illuminate\Support\Facades\Facade;

class MoneyFormatter extends Facade
{
    public static function getFacadeAccessor()
    {
        return 'money.formatter';
    }
}
