@include('partials.header')

  <section class="page-banner">
    <h2>Our Menu</h2>
    <p>Explore our wide variety of South Sudanese favourites, refreshing drinks, and international classics.</p>
  </section>

  <section class="menu-section">
    <h2 class="menu-title">South Sudanese Food</h2>
    <div class="product-grid">
      @foreach($products->where('category', 'South Sudanese Food') as $product)
        <div class="product">
          <!-- Assign unique images based on the meal name -->
          @if($product->name == 'Kisra with Bamia')
            <img src="https://images.unsplash.com/photo-1546069901-ba9599a7e63c?q=80&w=500&auto=format&fit=crop" alt="{{ $product->name }}">
          @elseif($product->name == 'Asida with Mulah')
            <img src="https://images.unsplash.com/photo-1512058564366-18510be2db19?q=80&w=500&auto=format&fit=crop" alt="{{ $product->name }}">
          @elseif($product->name == 'Ful Medames')
            <img src="https://images.unsplash.com/photo-1626200419199-391ae4be7a41?q=80&w=500&auto=format&fit=crop" alt="{{ $product->name }}">
          @elseif($product->name == 'Grilled Tilapia')
            <img src="https://images.unsplash.com/photo-1519708227418-c8fd9a32b7a2?q=80&w=500&auto=format&fit=crop" alt="{{ $product->name }}">
          @else
            <img src="https://images.unsplash.com/photo-1555396273-367ea4eb4db5?q=80&w=500&auto=format&fit=crop" alt="{{ $product->name }}">
          @endif
          
          <div class="product-info">
            <h3>{{ $product->name }}</h3>
            <p>{{ $product->description }}</p>
            <span class="price">KSh {{ number_format($product->price, 0) }}</span>
          </div>
        </div>
      @endforeach
    </div>
  </section>

  <section class="menu-section alt">
    <h2 class="menu-title">Drinks</h2>
    <div class="product-grid">
      @foreach($products->where('category', 'Drinks') as $product)
        <div class="product">
          @if($product->name == 'Jebena Spiced Coffee')
            <img src="https://images.unsplash.com/photo-1497935586351-b67a49e012bf?q=80&w=500&auto=format&fit=crop" alt="{{ $product->name }}">
          @elseif($product->name == 'Karkade (Hibiscus)')
            <img src="https://images.unsplash.com/photo-1513558161293-cdaf765ed2fd?q=80&w=500&auto=format&fit=crop" alt="{{ $product->name }}">
          @else
            <img src="https://images.unsplash.com/photo-1597318181409-cf64d0b5d8a2?q=80&w=500&auto=format&fit=crop" alt="{{ $product->name }}">
          @endif

          <div class="product-info">
            <h3>{{ $product->name }}</h3>
            <p>{{ $product->description }}</p>
            <span class="price">KSh {{ number_format($product->price, 0) }}</span>
          </div>
        </div>
      @endforeach
    </div>
  </section>

  <section class="menu-section">
    <h2 class="menu-title">International Menu</h2>
    <div class="product-grid">
      @foreach($products->where('category', 'International Menu') as $product)
        <div class="product">
          @if($product->name == 'Beef Pilau')
            <img src="https://images.unsplash.com/photo-1563379926898-05f4575a45d8?q=80&w=500&auto=format&fit=crop" alt="{{ $product->name }}">
          @elseif($product->name == 'Burger & Fries')
            <img src="https://images.unsplash.com/photo-1568901346375-23c9450c58cd?q=80&w=500&auto=format&fit=crop" alt="{{ $product->name }}">
          @elseif($product->name == 'Margherita Pizza')
            <img src="https://images.unsplash.com/photo-1574071318508-1cdbab80d002?q=80&w=500&auto=format&fit=crop" alt="{{ $product->name }}">
          @else
            <img src="https://images.unsplash.com/photo-1529006557810-274b9b2fc783?q=80&w=500&auto=format&fit=crop" alt="{{ $product->name }}">
          @endif

          <div class="product-info">
            <span class="tag">{{ $product->category }}</span>
            <h3>{{ $product->name }}</h3>
            <p>{{ $product->description }}</p>
            <span class="price">KSh {{ number_format($product->price, 0) }}</span>
          </div>
        </div>
      @endforeach
    </div>
  </section>

@include('partials.footer')