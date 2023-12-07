<!DOCTYPE html>
<html lang="en" dir="ltr" data-bs-theme="light" data-color-theme="Blue_Theme">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
        <title>Tutor Provide</title>
        
        @vite(['resources/css/app.css',
        'resources/assets/css/styles.css',
        'resources/assets/jquery-jvectormap.css',
        'resources/scss/app.scss'])
       
   
<script src="https://kit.fontawesome.com/7491bed1a1.js" crossorigin="anonymous"></script>

<link rel="stylesheet" href="{{asset('main.css')}}">


</head>
    <body>
        <div id="app"></div>
        @vite(['resources/js/app.js','resources/assets/jquery.min.js','resources/assets/app.min.js','resources/assets/app.init.js','resources/assets/bootstrap.bundle.min.js','resources/assets/simplebar.min.js','resources/assets/sidebarmenu.js','resources/assets/theme.js','resources/jquery-jvectormap.min.js','resources/assets/apexcharts.min.js','resources/assets/jquery-jvectormap-us-aea-en.js','resources/assets/dashboard.js','resources/assets/iconify-icon.min.js',])

  <script>
  function handleColorTheme(e) {
    $("html").attr("data-color-theme", e);
    $(e).prop("checked", !0);
  }
</script>

<!-- bootstrap -5 js -->


    </body>
</html>