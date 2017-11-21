<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{ config('app.name', 'Laravel') }}</title>
  <!-- Front End Framework / Buefy -->
  <link rel="stylesheet" href="https://unpkg.com/buefy/lib/buefy.min.css">
  <!-- Front-End Framework / Font-Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Front-End Framework / Hover.css -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/hover.css/2.1.1/css/hover-min.css">
  <!-- Styles -->
  {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
  <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>
<body>
  <div id="app">
    @include('layouts.partials.header')
    <div class="container">
      @yield('content')
    </div>
    @include('layouts.partials.footer')
  </div>
  <!-- Front End Framework Script / Buefy -->
  <script src="https://unpkg.com/buefy"></script>
  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
