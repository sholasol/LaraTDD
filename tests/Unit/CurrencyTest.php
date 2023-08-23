<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Services\CurrencyService;

class CurrencyTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_convert_usd_to_euro_successful(): void
    {
        $this->assertEquals(98, (new CurrencyService())->convert(amount: 100, currencyFrom: 'usd', currencyTo:'eur'));
    }


     public function test_convert_usd_to_gbp_returns_zero(): void
    {
        $this->assertEquals(0, (new CurrencyService())->convert(amount: 100, currencyFrom: 'usd', currencyTo:'gbp'));
    }
}