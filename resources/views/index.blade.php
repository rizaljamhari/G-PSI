<!DOCTYPE Html>

<Html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>GATES-PSI</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />

  <?php echo $headerscript; ?>
    
    <link rel="shortcut icon" href="{{URL('/public/favicon.ico')}}" />
    </head>

    <body class="page-container-bg-solid page-sidebar-closed-hide-logo page-md page-header-fixed page-footer-fixed  page-sidebar-fixed">

  @include('header')
  <div class="clearfix"></div>
    <div class="page-container" id="page_container1">
      @include('sidebar')
      <div class="page-content-wrapper" id="page_content_wrapper">
        <?php echo $content; ?>
      </div>
    </div>
  <?php echo $footerscript; ?>
    @include('footer')
    </body>
</html>
