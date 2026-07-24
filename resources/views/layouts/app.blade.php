<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ config('app.name', 'Laravel') }}</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  {{-- <link rel="stylesheet" href="./assets/css/bootstrap.css"> --}}
  @vite(['resources/css/bootstrap.css','resources/css/app.css', 'resources/js/app.js'])
  {{-- <link rel="stylesheet" href="./assets/css/style.css"> --}}
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-blur position-sticky  top-0 " id="navbar">
    <div class="container justify-content-between px-4" >
      <a class="navbar-brand" href="/">
        <img src="{{asset('logo.png')}}" style="width: 179px; margin-top: -35px;">
      </a>
      <button class="navbar-toggler" id="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" aria-current="page" href="/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ request()->is('banking-partner') ? 'active' : '' }}" href="{{ url('banking-partner') }}">Banking Partners</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ request()->is('about-us') ? 'active' : '' }}" href="{{ url('about-us') }}">About us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ request()->is('contact-us') ? 'active' : '' }}" href="{{ url('contact-us') }}">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ request()->is('loan-status') ? 'active' : '' }}" href="{{ url('loan-status') }}">Loan Status</a>
            </li>
          </ul>
      </div>
    </div>
  </nav>

  @yield('section')
  <footer class="bg-black py50">
    <div class="container">
      <div class="d-flex justify-content-center flexDirection">
            <div class="text animated-div">
                Copyright © 2004-2026, One Capital Personal Loans, All Rights Reserved.
            </div>
            </div>
    </div>
  </footer>

  @vite(['resources/js/jquery.js'])
  @vite(['resources/js/bootstrap.js'])
  @vite(['resources/js/script.js'])

</body>

</html>
