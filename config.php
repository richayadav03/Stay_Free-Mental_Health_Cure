<?php
    require('init.php');
    $publishablekey = "pk_test_51NbFwZSH4xbKCq8EXbxqaZPy4GagdBCsVbc4DzRLFjxwcpbYeKC51OmsrSw1aQU5iptxDool1FG4iY6rBv07yn6n00TIvsPaYr";
    $secretkey = "sk_test_51NbFwZSH4xbKCq8EXOoGY0G442torzFD9E2f1x3ozjOx0iahvUnEkMW066FcmE5sSSTaiq56El0B0gjdPBkxgvtB00xialGHJK";

    \Stripe\Stripe::setApiKey($secretkey);

?>