@include('partials.header')
  <section class="section">
    <h2>My Orders</h2>
    @if($orders->isEmpty())
      <p>You have not placed any orders yet.</p>
    @else
      <table style="width: 100%; border-collapse: collapse; margin-top: 20px; text-align: left;">
        <tr style="background: #111; color: white;">
          <th style="padding: 10px;">Order ID</th>
          <th style="padding: 10px;">Total</th>
          <th style="padding: 10px;">Status</th>
          <th style="padding: 10px;">Date</th>
        </tr>
        @foreach($orders as $order)
        <tr style="border-bottom: 1px solid #ddd;">
          <td style="padding: 10px;">#{{ $order->id }}</td>
          <td style="padding: 10px;">KSh {{ number_format($order->total_amount, 0) }}</td>
          <td style="padding: 10px;"><strong>{{ ucfirst($order->status) }}</strong></td>
          <td style="padding: 10px;">{{ $order->created_at->format('M d, Y') }}</td>
        </tr>
        @endforeach
      </table>
    @endif
  </section>
@include('partials.footer')