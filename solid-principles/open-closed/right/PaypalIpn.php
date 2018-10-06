<?php

class PaypalIpn implements PaymentMethodInterface{
    public function processPayment(){
        //...process the payment with PayPal
        var_dump('pay with paypal');
    }
}