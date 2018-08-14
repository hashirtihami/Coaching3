<?php
require 'templates/top.inc.php';
?>

<script src="https://js.stripe.com/v3/"></script>
<link rel="stylesheet"  href="layout/styles/payment.css">

<div class="container" style="padding-bottom:50px; padding-top:50px; text-align:center;">
<h6>You can pay it by visiting our office or you can also complete the payment online below.</h6>
   <a  href="index.php" style="float:center;" class="btn btn-primary" >Pay it later</a>
</div>
<hr>
<div class="container" style="padding-bottom:150px; padding-top:50px;">
  <h1></h1>
  <form action="payment.php" method="post" id="payment-form">
    <div class="form-row">
      
      <input type="email" required name="email" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="Email">
      <input type="email" required name="bankname" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="Bank Name">
      
      <label for="card-element">
        Credit or debit card
      </label>
      <div id="card-element"  class="form-control">
        <!-- A Stripe Element will be inserted here. -->
      </div>

      <!-- Used to display form errors. -->
      <div id="card-errors" role="alert"></div>
    </div>
    
    <div style="padding-top:20px">
      <a  href="paymentdone.php" style="float:center;" class="btn btn-primary" >Submit Payment</a>
    </div>

  </form>
</div>
<script type="text/javascript" src="layout/js/charge.js"></script>

<?php
  require 'templates/bottom.inc.php';
?>