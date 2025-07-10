{{-- resources/views/pages/dashboard-app.blade.php --}}

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite([
              'resources/css/app.css',
              'resources/css/style.css',
                'resources/js/app.js',
                'resources/js/index.js',
               ])

        @endif
    </head>
    <body 
    x-data="{ page: 'ecommerce', 'loaded': true, 'darkMode': false, 'stickyMenu': false, 'sidebarToggle': false, 'scrollTop': false }"
    x-init="
         darkMode = JSON.parse(localStorage.getItem('darkMode'));
         $watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))"
    :class="{'dark bg-gray-900': darkMode === true}"
  >
    <!-- ===== Preloader Start ===== -->
      @include('pages.partials.preloader')

    <!-- ===== Preloader End ===== -->

    <!-- ===== Page Wrapper Start ===== -->
    <div class="flex h-screen overflow-hidden">
      <!-- ===== Sidebar Start ===== -->
      @include('pages.partials.sidebar')
      <!-- ===== Sidebar End ===== -->

      <!-- ===== Content Area Start ===== -->
      <div
        class="relative flex flex-col flex-1 overflow-x-hidden overflow-y-auto"
      >
        <!-- Small Device Overlay Start -->
        {{-- <include src="./partials/overlay.html" /> --}}
      {{-- @include('pages.partials.overlay') --}}

        <!-- Small Device Overlay End -->

        <!-- ===== Header Start ===== -->
         @include('pages.partials.header')
        <!-- ===== Header End ===== -->

        <!-- ===== Main Content Start ===== -->
        <main>
         <div class="p-4 mx-auto max-w-(--breakpoint-2xl) md:p-6">
            <div class="grid grid-cols-12 gap-4 md:gap-6">
              <div class="col-span-12 space-y-6 xl:col-span-7">
                <!-- Metric Group One -->         
                    @include('pages.partials.metric-group.metric-group-01')

                <!-- Metric Group One -->

                <!-- ====== Chart One Start -->
                @include('pages.partials.chart.chart-01')

                <!-- ====== Chart One End -->
              </div>
              <div class="col-span-12 xl:col-span-5">
                <!-- ====== Chart Two Start -->       
                    @include('pages.partials.chart.chart-02')
                <!-- ====== Chart Two End -->
              </div>

              <div class="col-span-12">
                <!-- ====== Chart Three Start -->
                   @include('pages.partials.chart.chart-03')

                <!-- ====== Chart Three End -->
              </div>

              <div class="col-span-12 xl:col-span-5">
                <!-- ====== Map One Start -->
                
                 @include('pages.partials.map-01')

                <!-- ====== Map One End -->
              </div>

              <div class="col-span-12 xl:col-span-7">
                <!-- ====== Table One Start -->
               
                  @include('pages.partials.table.table-01')

                <!-- ====== Table One End -->
              </div>
              <div class="col-span-12 xl:col-span-7">
                <!-- ====== Table One Start -->              
                  @include('pages.partials.table.table-06')
                <!-- ====== Table One End -->
              </div>
            </div>
          </div>
        </main>
        <!-- ===== Main Content End ===== -->
      </div>
      <!-- ===== Content Area End ===== -->
    </div>
    <!-- ===== Page Wrapper End ===== -->
  </body>
</html>
