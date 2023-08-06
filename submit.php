<?php
require('config.php');

if (isset($_POST['stripeToken'])) {
    \Stripe\Stripe::setVerifySslCerts(false);
    $token = $_POST['stripeToken'];
    $intent = \Stripe\PaymentIntent::create([
        "amount" => 500,
        "currency" => "inr",
        "description" => "Payment for session on stay free",
        "payment_method_data" => [
            "type" => "card",
            "card" => [
                "token" => $token,
            ],
        ],
    ]);

    try {
        $intent->confirm();
        // echo "<pre>";
        // print_r($intent);
        echo "$intent->id";
        // include 'payment_success.php';

    } catch (\Stripe\Exception\CardException $e) {
        // Handle card processing error
        echo "Error: " . $e->getMessage();
    }
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Payment Success</title>
  <!-- <link rel="stylesheet" href="style.css"> -->
  <!-- Add Font Awesome icons -->
  <style>
    body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background-color: #f0f3f7; /* Pastel blue background */
  }
  
  .container {
    text-align: center;
    max-width: 400px;
    padding: 20px;
    border: 1px solid #ccc;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  }
  
  h1 {
    margin-top: 0;
    color: #5f6e86; /* Pastel gray */
  }
  
  p {
    margin-bottom: 10px;
    color: #6e7d97; /* Slightly darker pastel gray */
  }
  
  #transactionId {
    font-weight: bold;
    color: #2d4053; /* Darker pastel blue */
  }
  
  .success-icon {
    font-size: 60px;
    color: #34c759; /* Pastel green */
    margin-bottom: 20px;
  }
  
  </style>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
  <div class="container">
    <i class="fas fa-check-circle success-icon"></i>
    <h1>Payment successfully initiated</h1>
    <p>Your transaction ID is: <?php  
        echo $intent->id; ?></p>
    <p>Your payment is successfully initiated and will be completed in a short time.</p>
    <p>Thanks for trusting us and being a part of Stay Free family!</p>
  </div>
</body>
</html>


<!-- Stripe\PaymentIntent Object
(
    [id] => pi_3NbmtrSH4xbKCq8E1Ae2w08O
    [object] => payment_intent
    [amount] => 500
    [amount_capturable] => 0
    [amount_details] => Stripe\StripeObject Object
        (
            [tip] => Array
                (
                )

        )

    [amount_received] => 0
    [application] => 
    [application_fee_amount] => 
    [automatic_payment_methods] => 
    [canceled_at] => 
    [cancellation_reason] => 
    [capture_method] => automatic
    [client_secret] => pi_3NbmtrSH4xbKCq8E1Ae2w08O_secret_2FIFELnhXYlupfaEYpFlAUNfx
    [confirmation_method] => automatic
    [created] => 1691251219
    [currency] => inr
    [customer] => 
    [description] => Payment for session on stay free
    [invoice] => 
    [last_payment_error] => 
    [latest_charge] => 
    [livemode] => 
    [metadata] => Stripe\StripeObject Object
        (
        )

    [next_action] => Stripe\StripeObject Object
        (
            [type] => use_stripe_sdk
            [use_stripe_sdk] => Stripe\StripeObject Object
                (
                    [source] => src_1NbmtsSH4xbKCq8EDeYbpOmd
                    [stripe_js] => https://hooks.stripe.com/redirect/authenticate/src_1NbmtsSH4xbKCq8EDeYbpOmd?client_secret=src_client_secret_cLZK2NnYvznGDqecfKdW2Ukz&source_redirect_slug=test_YWNjdF8xTmJGd1pTSDR4YktDcThFLF9PT2E0Y0xZVEp5ZWpVWTBpWDB0QkpWQTZvYVNzaUNF0100TiJHqikk
                    [type] => three_d_secure_redirect
                )

        )

    [on_behalf_of] => 
    [payment_method] => pm_1NbmtrSH4xbKCq8Ej6Jm7jSk
    [payment_method_options] => Stripe\StripeObject Object
        (
            [card] => Stripe\StripeObject Object
                (
                    [installments] => 
                    [mandate_options] => 
                    [network] => 
                    [request_three_d_secure] => automatic
                )

        )

    [payment_method_types] => Array
        (
            [0] => card
        )

    [processing] => 
    [receipt_email] => 
    [review] => 
    [setup_future_usage] => 
    [shipping] => 
    [source] => 
    [statement_descriptor] => 
    [statement_descriptor_suffix] => 
    [status] => requires_action
    [transfer_data] => 
    [transfer_group] => 
) -->