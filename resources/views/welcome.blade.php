<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
        <title>Tutor Provide</title>


        @vite(['resources/css/app.css',
        'resources/assets/css/styles.css',
        'resources/assets/libs/jvectormap/jquery-jvectormap.css'])

   
        <script src="https://kit.fontawesome.com/7491bed1a1.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="{{asset('main.css')}}">

</head>
    <body>
        <div id="app"></div>
        @vite(['resources/js/app.js','resources/assets/libs/jquery/dist/jquery.min.js','resources/assets/js/app.min.js','resources/assets/js/app.init.js','resources/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js','resources/assets/libs/simplebar/dist/simplebar.min.js','resources/assets/js/sidebarmenu.js','resources/assets/js/theme.js','resources/assets/libs/jvectormap/jquery-jvectormap.min.js','resources/assets/libs/apexcharts/dist/apexcharts.min.js','resources/assets/js/extra-libs/jvectormap/jquery-jvectormap-us-aea-en.js','resources/assets/js/dashboards/dashboard.js'])

  <script>
  function handleColorTheme(e) {
    $("html").attr("data-color-theme", e);
    $(e).prop("checked", !0);
  }
</script>

<!-- bootstrap -5 js -->


    </body>
</html>