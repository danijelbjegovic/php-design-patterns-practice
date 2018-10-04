<?php
require 'User.php';
require 'Logger.php';

$logger = new Logger();

$user = new User($logger);

$user->create(array());