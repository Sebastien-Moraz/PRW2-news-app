<input type="number" name="amount" placeholder="Amount">
@error('amount')
  <div class="alert alert-danger">{{ $message }}</div>
@enderror
<input type="email" name="email" placeholder="Email">
@error('email')
  <div class="alert alert-danger">{{ $message }}</div>
@enderror