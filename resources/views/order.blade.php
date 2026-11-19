@include('partials.header')

  <section class="page-banner">
    <h1>Place Your Order</h1>
    <p>Choose your favourite meals and fill in your details below.</p>
  </section>

  <section class="section">
    <div style="max-width: 600px; margin: 0 auto; background: #fff; padding: 30px; border-radius: 10px; box-shadow: 0 3px 10px rgba(0,0,0,0.1); text-align: left;">
      
      <!-- We add the action and method here -->
      <form action="/place-order" method="POST">
        @csrf
        
        <div style="margin-bottom: 15px;">
          <label style="font-weight: bold; display: block; margin-bottom: 5px;">Full Name</label>
          <input type="text" name="name" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;" placeholder="John Doe" required>
        </div>

        <div style="margin-bottom: 15px;">
          <label style="font-weight: bold; display: block; margin-bottom: 5px;">Email Address</label>
          <input type="email" name="email" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;" placeholder="john@example.com" required>
          <small style="color: #666; font-size: 0.8rem;">We will send your login details here.</small>
        </div>

        <div style="margin-bottom: 15px;">
          <label style="font-weight: bold; display: block; margin-bottom: 5px;">Phone Number</label>
          <input type="tel" name="phone" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;" placeholder="+254 700 000 000" required>
        </div>

        <div style="margin-bottom: 15px;">
          <label style="font-weight: bold; display: block; margin-bottom: 5px;">Method</label>
          <div style="display: flex; gap: 20px;">
            <label><input type="radio" name="order_type" value="delivery" checked> Delivery</label>
            <label><input type="radio" name="order_type" value="pickup"> Pickup</label>
          </div>
        </div>

        <div style="margin-bottom: 15px;">
          <label style="font-weight: bold; display: block; margin-bottom: 5px;">Delivery Address (Leave blank if Pickup)</label>
          <input type="text" name="delivery_address" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;" placeholder="Your address...">
        </div>

        <div style="margin-bottom: 15px;">
          <label style="font-weight: bold; display: block; margin-bottom: 5px;">Select Item & Quantity</label>
          <div style="display: flex; gap: 10px; margin-bottom: 10px;">
            <select name="product_id" style="width: 70%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
              <option value="1">Kisra with Bamia - KSh 400</option>
              <option value="2">Asida with Mulah - KSh 450</option>
              <option value="3">Ful Medames - KSh 300</option>
              <option value="4">Grilled Tilapia - KSh 650</option>
              <option value="5">Jebena Spiced Coffee - KSh 150</option>
              <option value="6">Karkade (Hibiscus) - KSh 150</option>
              <option value="7">Dawa Tea - KSh 220</option>
              <option value="8">Beef Pilau - KSh 450</option>
              <option value="9">Burger &amp; Fries - KSh 600</option>
              <option value="10">Margherita Pizza - KSh 800</option>
              <option value="11">Chicken Shawarma - KSh 550</option>
            </select>
            <input type="number" name="quantity" value="1" min="1" style="width: 30%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
          </div>
        </div>

        <div style="margin-bottom: 15px;">
          <label style="font-weight: bold; display: block; margin-bottom: 5px;">Special Notes</label>
          <textarea name="special_note" rows="3" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;" placeholder="Any special requests..."></textarea>
        </div>

        <button type="submit" class="btn" style="width: 100%;">Place Order</button>

      </form>

    </div>
  </section>

@include('partials.footer')