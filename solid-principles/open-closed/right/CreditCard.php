<?php

class CreditCard implements PaymentMethodInterface {
    public function processPayment(){
        var_dump('Pay with credit card');
    }
}