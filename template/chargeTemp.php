<?php
  require_once('../vendor/autoload.php');

   session_start();

  \Stripe\Stripe::setApiKey('sk_test_bqFJS34uAvLtks7UIHwvoLHn00C2wLqRdC');

 // Sanitize POST Array
 $POST = filter_var_array($_POST, FILTER_SANITIZE_STRING);

 $first_name = $POST['first_name'];
 $last_name = $POST['last_name'];
 $email = $POST['email'];
 $token = $POST['stripeToken'];

// Create Customer In Stripe
$customer = \Stripe\Customer::create(array(
  "email" => $email,
  "source" => $token
));

// Charge Customer
$charge = \Stripe\Charge::create(array(
  "amount" => 10000,
  "currency" => "NPR",
  "description" => "HONDA CBR 600 RENT FOR 5 DAYS",
  "customer" => $customer->id
));


// Transaction Data
$transactionData = [
  'id' => $charge->id,
  'customer_id' => $_SESSION['id'],
  'customer_name' => $_SESSION['username'],
  'product' => $charge->description,
  'amount' => $charge->amount,
  'currency' => $charge->currency,
  'status' => $charge->status,
];

// Add Transaction To DB
$addtransaction->add($transactionData);
// Redirect to success
header('Location: sucess?tid='.$charge->id.'&product='.$charge->description.'&email='.$customer->email);