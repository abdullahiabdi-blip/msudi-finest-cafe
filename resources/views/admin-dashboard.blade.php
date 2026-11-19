@include('partials.header')
  <section class="section">
    <h2>Admin Dashboard - All Orders</h2>
    <table style="width: 100%; border-collapse: collapse; margin-top: 20px; text-align: left;">
      <tr style="background: #111; color: white;">
        <th style="padding: 10px;">Order ID</th>
        <th style="padding: 10px;">Customer</th>
        <th style="padding: 10px;">Total</th>
        <th style="padding: 10px;">Update Status</th>
      </tr>
      @foreach($orders as $order)
      <tr style="border-bottom: 1px solid #ddd;">
        <td style="padding: 10px;">#{{ $order->id }}</td>
        <td style="padding: 10px;">{{ $order->user->name }}</td>
        <td style="padding: 10px;">KSh {{ number_format($order->total_amount, 0) }}</td>
        <td style="padding: 10px;">
          <form action="/admin/orders/{{ $order->id }}/status" method="POST" style="display: flex; gap: 10px;">
            @csrf
            @method('PATCH')
            <select name="status" style="padding: 5px; border-radius: 5px;">
              <option value="pending" {{ $order->status == 'pending' ? 'selected' : '' }}>Pending</option>
              <option value="packed" {{ $order->status == 'packed' ? 'selected' : '' }}>Packed</option>
              <option value="on_delivery" {{ $order->status == 'on_delivery' ? 'selected' : '' }}>On Delivery</option>
              <option value="delivered" {{ $order->status == 'delivered' ? 'selected' : '' }}>Delivered</option>
            </select>
            <button type="submit" class="btn" style="padding: 5px 10px; font-size: 0.8rem;">Update</button>
          </form>
        </td>
      </tr>
      @endforeach
    </table>
  </section>
@include('partials.footer')