<html>
<head>
<title>Payment App</title>
<link rel="stylesheet" href="./css/style.css">
</head>
<body>

<form action="./js/main.js" method="post" id="payment-form">
  <div class="form-row">
    <label for="card-element">
      Credit or debit card
    </label>
    <div id="card-element">
      <!-- A Stripe Element will be inserted here. -->
    </div>

    <!-- Used to display form errors. -->
    <div id="card-errors" role="alert"></div>
  </div>

  <button>Submit Payment</button>
</form>
<script src="https://js.stripe.com/v3/"></script>
<script src="./js/main.js"></script>
</body>
</html>