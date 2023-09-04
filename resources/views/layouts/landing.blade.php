
<!doctype html>
<html lang="fr">
  @include('components.landing.head')

  <body>
    @php
        use Carbon\Carbon;
    @endphp
    <div id="page-container" class="page-header-fixed main-content-boxed">

      @include('components.landing.header')

      <!-- Main Container -->
      <main id="main-container" style="padding-top: 0 !important;">


        @yield('content')

        @include('components.landing.footer')
      </main>
      <!-- END Main Container -->
    </div>
    <!-- END Page Container -->


    <script src="{{asset('assets/js/oneui.app.min.js')}}"></script>
  </body>
</html>
