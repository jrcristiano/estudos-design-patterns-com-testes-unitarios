<?php

namespace Test\Integration\DesignPatterns\Structurals\Adapter\Payment;

use App\DesignPatterns\Structurals\Adapter\Payment\PagSeguro;
use App\DesignPatterns\Structurals\Adapter\Payment\PagSeguroAdapter;
use App\DesignPatterns\Structurals\Adapter\Payment\PayPal;
use App\DesignPatterns\Structurals\Adapter\Payment\PayPalAdapter;
use App\DesignPatterns\Structurals\Adapter\Payment\ProccessPayment;
use PHPUnit\Framework\TestCase;

class PaymentTest extends TestCase
{
    public function testPaymentWithPayPal()
    {
        $adapter = new PayPalAdapter(new PayPal);
        $proccessPayment = new ProccessPayment($adapter);

        $this->assertEquals(1000, $proccessPayment->finalizePayment(1000));
    }

    public function testPaymentWithPagSeguro()
    {
        $adapter = new PagSeguroAdapter(new PagSeguro);
        $proccessPayment = new ProccessPayment($adapter);

        $this->assertEquals(950, $proccessPayment->finalizePayment(1000));
    }
}
