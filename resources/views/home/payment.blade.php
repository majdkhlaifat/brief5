<div id="payment-modal" class="modal" style="display: none;">
  <div class="modal-content">
    <span class="close">&times;</span>
    <h2>Payment</h2>
    <form id="payment-form" action="{{ route('processPayment') }}" method="POST">
      @csrf
      <div class="form-group">
        <label for="card-number">Card Number:</label>
        <input type="text" id="card-number" name="card-number" required>
      </div>
      <div class="form-group">
        <label for="card-name">Cardholder Name:</label>
        <input type="text" id="card-name" name="card-name" required>
      </div>
      <div class="form-group">
        <label for="payment-method">Payment Method:</label>
        <div>
          <input type="radio" id="payment-method-card" name="payment-method" value="card" required>
          <label for="payment-method-card">Credit Card</label>
        </div>
        <div>
          <input type="radio" id="payment-method-paypal" name="payment-method" value="paypal" required>
          <label for="payment-method-paypal">PayPal</label>
        </div>
        <div>
          <input type="radio" id="payment-method-bank" name="payment-method" value="bank" required>
          <label for="payment-method-bank">Bank Transfer</label>
        </div>
      </div>

      <button type="submit">Submit Payment</button>
    </form>
  </div>
</div>
