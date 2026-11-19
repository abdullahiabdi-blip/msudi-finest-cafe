@include('partials.header')
  <section class="section" style="min-height: 60vh; display: flex; align-items: center; justify-content: center;">
    <div style="background: #fff; padding: 40px; border-radius: 10px; box-shadow: 0 4px 12px rgba(0,0,0,0.1); width: 100%; max-width: 400px;">
      <h2 style="text-align: center; margin-bottom: 20px; color: #111;">Login</h2>
      
      @if($errors->any())
        <div style="background: #da121a; color: white; padding: 10px; border-radius: 5px; margin-bottom: 15px;">
          {{ $errors->first() }}
        </div>
      @endif

      <form action="/login" method="POST">
        @csrf
        <div style="margin-bottom: 15px;">
          <label style="font-weight: bold; display: block; margin-bottom: 5px;">Email</label>
          <input type="email" name="email" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;" required>
        </div>
        <div style="margin-bottom: 15px;">
          <label style="font-weight: bold; display: block; margin-bottom: 5px;">Password</label>
          <input type="password" name="password" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;" required>
        </div>
        <button type="submit" class="btn" style="width: 100%;">Login</button>
      </form>
    </div>
  </section>
@include('partials.footer')