<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Msudi Finest Cafe</title>
  <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>
<body>

  <header class="navbar">
    <h1 class="logo">Msudi Finest Cafe</h1>
    <nav>
      <a href="/">Home</a>
      <a href="/our-products">Menu</a>
      <a href="/order">Order</a>
      <a href="/about">About</a>
      <a href="/contact">Contact</a>
      
      @auth
        @if(Auth::user()->role === 'admin')
          <a href="/admin/dashboard" style="color: #e0a458;">Admin Panel</a>
        @else
          <a href="/dashboard" style="color: #e0a458;">My Orders</a>
        @endif
        <form action="/logout" method="POST" style="display:inline;">
          @csrf
          <button type="submit" style="background:none; border:none; color:#eee; font-weight:bold; cursor:pointer; font-size: 1rem;">Logout</button>
        </form>
      @else
        <a href="/login" style="color: #e0a458;">Login</a>
      @endauth
    </nav>
  </header>