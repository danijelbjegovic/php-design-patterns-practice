<?php
require 'PaymentMethodInterface.php';
require 'PaymentManager.php';
require 'PaypalIpn.php';
require 'CreditCard.php';

$paypalIpn = new PaypalIpn();
$paymentManager = new PaymentManager($paypalIpn);
$paymentManager->process();

$creditCard = new CreditCard();
$paymentManager = new PaymentManager($creditCard);
$paymentManager->process();