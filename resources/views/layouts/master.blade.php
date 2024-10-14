<!DOCTYPE html>

<html
  lang="en"
  class="light-style layout-navbar-fixed layout-menu-fixed layout-compact"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../../assets/"
  data-template="vertical-menu-template-no-customizer">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Trend Kinerja | Biro Manajemen BMN dan Pengadaan</title>

    <meta name="description" content="Trend Kinerja Biromadan" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../../assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&ampdisplay=swap"
      rel="stylesheet" />

    <!-- Icons -->
    <link rel="stylesheet" href="../../assets/vendor/fonts/materialdesignicons.css" />
    <link rel="stylesheet" href="../../assets/vendor/fonts/flag-icons.css" />

    <!-- Menu waves for no-customizer fix -->
    <link rel="stylesheet" href="../../assets/vendor/libs/node-waves/node-waves.css" />

    {{-- CSS --}}
    @include('layouts.css')
    {{-- END CSS --}}

    {{-- HELPER --}}
    @include('layouts.helper')
    {{-- END HELPER --}}
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
   {{-- CONFIG --}}
   @include('layouts.config')
   {{-- END CONFIG --}}
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        {{-- MENU --}}
        @include('layouts.menu')
        {{-- END MENU --}}

        <!-- Layout container -->
        <div class="layout-page">
         {{-- NAVBAR --}}
         @include('layouts.navbar')
         {{-- END NAVBAR --}}

          <!-- Content wrapper -->
          <div class="content-wrapper">
           @yield('content')

           {{-- FOOTER --}}
            @include('layouts.footer')
           {{-- END FOOTER --}}

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>

      <!-- Drag Target Area To SlideIn Menu On Small Screens -->
      <div class="drag-target"></div>
    </div>
    <!-- / Layout wrapper -->

    {{-- SCRIPT --}}
    @include('layouts.script')
    {{-- END SCRIPT --}}
  </body>
</html>
