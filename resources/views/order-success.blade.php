@include('partials.header')
  <section class="section" style="min-height: 60vh; display: flex; align-items: center; justify-content: center;">
    <div style="text-align: center; background: #fff; padding: 40px; border-radius: 10px; box-shadow: 0 4px 12px rgba(0,0,0,0.1); max-width: 500px;">
      <h1 style="color: #009639; margin-bottom: 10px;">Order Received!</h1>
      <p style="margin-bottom: 20px;">Thank you, <strong>{{ $user->name }}</strong>. Your order #{{ $order->id }} for KSh {{ number_format($order->total_amount, 0) }} has been placed.</p>
      
      <div style="background: #f4f4f4; padding: 15px; border-radius: 5px; margin-bottom: 20px; text-align: left;">
        <p><strong>Your Login Details:</strong></p>
        <p>Email: {{ $user->email }}</p>
        <p>Password: <span style="color: #da121a; font-weight: bold;">{{ $plainPassword }}</span></p>
        <p style="font-size: 0.8rem; color: #666; margin-top: 10px;">(Save this password. You will need it to track your order).</p>
      </div>
      
      <a href="/login" class="btn">Go to Login</a>
    </div>
  </section>
@include('partials.footer')