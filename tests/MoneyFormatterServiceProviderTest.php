<?php namespace Nwidart\MoneyFormatterLaravel\Tests;

use Orchestra\Testbench\TestCase;

class MoneyFormatterServiceProviderTest extends TestCase
{
    protected function getPackageProviders()
    {
        return [
            'Nwidart\MoneyFormatterLaravel\MoneyFormatterServiceProvider',
        ];
    }

    /** @test */
    public function it_should_find_service_provider()
    {
    }
}
