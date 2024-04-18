<?php

namespace src\class;

interface PaymentInterface {
  public function pay();
}

class Paypal implements PaymentInterface
{
  public function pay()
  {
    return 'pay with Paypal';
  }
}

class Pagseguro implements PaymentInterface
{
  public function pay()
  {
    return 'pay with Pagseguro';
  }
}

class Payment
{
  public function pay(PaymentInterface $payment)
  {
    var_dump ($payment->pay());
  }
}

$payment = new Payment;
$payment->pay(new Paypal);