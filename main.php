<?php

# Include Dependencies From Composer

include 'vendor/autoload.php';

# ROOT FILE FOR STRIPE APPLICATION

include 'secrets/get-keys.php';
include 'secrets/variables.php';

\Stripe\PaymentIntent::create([
'amount' => 1000,
'currency' => 'usd',
'payment_method_types' => ['card'],
'receipt_email' => $email,
]);




?>