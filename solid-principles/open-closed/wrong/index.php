<?php

require 'PaymentManager.php';
require 'PaypalIpn.php';


$paypalIpn = new PaypalIpn();
$paymentManager = new PaymentManager($paypalIpn);

$paymentManager->process();