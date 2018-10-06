<?php

class PaymentManager {
    
    protected $paypal;

    public function __construct(PayPalIpn $paypal) //what if we want to go for credit card
    {
        $this->paypal = $paypal;
    }

    public function process()
    {
        $this->paypal->processPayment();

    }

}