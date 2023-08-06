<?php
    require('config.php');
?>

<form action="submit.php" method="post">
    <script
        src="https://checkout.stripe.com/checkout.js" class="stripe-button"
        data-key="<?php echo $publishablekey?>"
        data-amount="500"
        data-name="Stay free"
        data-description="Payment for session on stay free"
        data-image=""
        data-currency="inr"  
    >   
    </script>
</form>