<!doctype html>
<html lang="en">
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>@yield('title', 'MedTrack | Doctor Panel')</title>
      <link rel="shortcut icon" href="{{ asset('/sbjhicon.ico') }}" />
      
      <!-- CSS -->
      <link href="{{ asset('css/bootstrap_5.0.2.css') }}" rel="stylesheet">
      <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
      <link href="{{ asset('css/radio.css') }}" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

      <!-- Datepicker -->
      <link href="{{ asset('bootstrap-datepicker-1.9.0-dist/css/bootstrap-datepicker.min.css') }}" rel="stylesheet">
      <link href="{{ asset('bootstrap-datepicker-1.9.0-dist/css/datepicker_custom.css') }}" rel="stylesheet">
      {{-- bootstrap icon --}}
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
      <!-- JS -->
      
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
      <script src="{{ asset('js/bootstrap_5.0.2.js') }}"></script>
      <script src="{{ asset('bootstrap-datepicker-1.9.0-dist/js/bootstrap-datepicker.min.js') }}"></script>
      <!-- Custom inline CSS (optional) -->
          @yield('custom-style')
  </head>

  <body>
    <div class="">@include('layout.header')</div>
    <div class="main-wrapper  d-flex align-items-stretch">
        <!-- Mobile Sidebar -->
        <div class="offcanvas offcanvas-start d-lg-none" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title">MedTrack | Doctor Panel</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body sidenavbar">
                @include('layout.sidebar')
            </div>
        </div>

        <!-- Desktop Sidebar -->
        <div class="d-none d-lg-block p-2 sidenavbar" style="min-width: 200px;">
            @include('layout.sidebar')
        </div>

        <div class="main-content flex-grow-1">
            @yield('content')
        </div>
    </div>

    <div class="footer">@include('layout.footer')</div>
      <!-- Scripts -->
      @yield('scripts')
</body>
</html>
