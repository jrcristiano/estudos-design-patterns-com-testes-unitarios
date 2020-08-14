<?php

namespace Test\Unit\DesignPatterns\Structurals\Adapter\Payment;

use App\DesignPatterns\Structurals\Adapter\Payment\PagSeguro;
use App\DesignPatterns\Structurals\Adapter\Payment\PagSeguroAdapter;
use App\DesignPatterns\Structurals\Adapter\Payment\PayPal;
use PHPUnit\Framework\TestCase;

class PaymentTest extends TestCase
{
    public function testPaymentWithPayPal()
    {
        $adapter = new PagSeguroAdapter(new PayPal);
        $obj = is_a($adapter->getCard(), PayPal::class);

        $this->assertTrue($obj);
    }

    public function testPaymentWithPagSeguro()
    {
        $adapter = new PagSeguroAdapter(new PagSeguro);
        $obj = is_a($adapter->getCard(), PagSeguro::class);

        $this->assertTrue($obj);
    }
}
