
<!doctype html>
<html lang="fr">
    @include('components.dashboard.head')
  <body>

    <div id="page-container" class="sidebar-dark enable-page-overlay side-scroll page-header-fixed main-content-narrow">

        @include('components.dashboard.sidebar')

        <nav id="sidebar" aria-label="Main Navigation">
            <!-- Side Header -->
            <div class="content-header">
            <!-- Logo -->
            <a class="fw-semibold text-dual" href="index.html">
                <span class="smini-visible">
                <i class="fa fa-circle-notch text-primary"></i>
                </span>
                <span class="smini-hide fs-5 tracking-wider">OneUI</span>
            </a>

            <div>
                <button type="button" class="btn btn-sm btn-alt-secondary" data-toggle="layout" data-action="dark_mode_toggle">
                <i class="far fa-moon"></i>
                </button>

                <div class="dropdown d-inline-block ms-1">
                <button type="button" class="btn btn-sm btn-alt-secondary" id="sidebar-themes-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-brush"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end fs-sm smini-hide border-0" aria-labelledby="sidebar-themes-dropdown">

                    <a class="dropdown-item d-flex align-items-center justify-content-between fw-medium" data-toggle="theme" data-theme="default" href="#">
                    <span>Default</span>
                    <i class="fa fa-circle text-default"></i>
                    </a>
                    <a class="dropdown-item d-flex align-items-center justify-content-between fw-medium" data-toggle="theme" data-theme="assets/css/themes/amethyst.min.css" href="#">
                    <span>Amethyst</span>
                    <i class="fa fa-circle text-amethyst"></i>
                    </a>
                    <a class="dropdown-item d-flex align-items-center justify-content-between fw-medium" data-toggle="theme" data-theme="assets/css/themes/city.min.css" href="#">
                    <span>City</span>
                    <i class="fa fa-circle text-city"></i>
                    </a>
                    <a class="dropdown-item d-flex align-items-center justify-content-between fw-medium" data-toggle="theme" data-theme="assets/css/themes/flat.min.css" href="#">
                    <span>Flat</span>
                    <i class="fa fa-circle text-flat"></i>
                    </a>
                    <a class="dropdown-item d-flex align-items-center justify-content-between fw-medium" data-toggle="theme" data-theme="assets/css/themes/modern.min.css" href="#">
                    <span>Modern</span>
                    <i class="fa fa-circle text-modern"></i>
                    </a>
                    <a class="dropdown-item d-flex align-items-center justify-content-between fw-medium" data-toggle="theme" data-theme="assets/css/themes/smooth.min.css" href="#">
                    <span>Smooth</span>
                    <i class="fa fa-circle text-smooth"></i>
                    </a>

                    <div class="dropdown-divider"></div>

                    <a class="dropdown-item fw-medium" data-toggle="layout" data-action="sidebar_style_light" href="javascript:void(0)">
                    <span>Sidebar Light</span>
                    </a>
                    <a class="dropdown-item fw-medium" data-toggle="layout" data-action="sidebar_style_dark" href="javascript:void(0)">
                    <span>Sidebar Dark</span>
                    </a>

                    <div class="dropdown-divider"></div>

                    <a class="dropdown-item fw-medium" data-toggle="layout" data-action="header_style_light" href="javascript:void(0)">
                    <span>Header Light</span>
                    </a>
                    <a class="dropdown-item fw-medium" data-toggle="layout" data-action="header_style_dark" href="javascript:void(0)">
                    <span>Header Dark</span>
                    </a>
                </div>
                </div>

                <a class="d-lg-none btn btn-sm btn-alt-secondary ms-1" data-toggle="layout" data-action="sidebar_close" href="javascript:void(0)">
                <i class="fa fa-fw fa-times"></i>
                </a>
            </div>
            </div>

            @include('components.dashboard.menu')
        </nav>

      @include('components.dashboard.navbar')

      <main id="main-container">
        <div class="content">
            @yield('content')
        </div>
      </main>

      @include('components.dashboard.footer')
    </div>

    <script src="{{asset('assets/js/oneui.app.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/chart.js/chart.umd.js')}}"></script>
    <script src="{{asset('assets/js/pages/be_pages_dashboard.min.js')}}"></script>

    <script src="assets/js/lib/jquery.min.js"></script>

    <script src="{{asset('assets/js/plugins/select2/js/select2.full.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/ckeditor/ckeditor.js')}}"></script>
    <script src="{{asset('assets/js/plugins/dropzone/min/dropzone.min.js')}}"></script>

    <script>One.helpersOnLoad(['jq-select2', 'jq-maxlength', 'js-ckeditor']);</script>

  </body>
</html>
