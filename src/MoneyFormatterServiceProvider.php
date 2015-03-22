<?php namespace Nwidart\MoneyFormatterLaravel;

use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\ServiceProvider;
use Nwidart\MoneyFormatter\MoneyFormatter;

class MoneyFormatterServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->registerConfiguration();
        $this->registerAlias();

        $this->app->bindShared('Nwidart\MoneyFormatter\MoneyFormatter', function () {
            return new MoneyFormatter(config('money-formatter.locale', 'en_UK'));
        });
    }

    /**
     * Register the configuration file so Laravel can publish them
     * Also merges the published config file with original
     */
    private function registerConfiguration()
    {
        $configPath = __DIR__ . '/../config/money-formatter.php';
        $this->mergeConfigFrom($configPath, 'money-formatter');
        $this->publishes([$configPath => config_path('money-formatter.php')]);
    }

    /**
     * Register the MoneyFormatter laravel alias.
     */
    private function registerAlias()
    {
        $aliasLoader = AliasLoader::getInstance();
        $aliasLoader->alias('MoneyFormatter', 'Nwidart\MoneyFormatterLaravel\MoneyFormatter');
    }
}
