<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link href="{{ (asset('css/app.css'))}}" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <script src="{{ asset('js/app.js')}}" type="text/javascript"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Familia Moderna</title>
        <meta name="csrf-token" content="{ { csrf_toke() } }">
    </head>
    <style>
        .container{
            margin-top:80px;
            margin-bottom:80px;
        }
    </style>
    <body>
    @component('../componentes/navBar', ["current" => $current])
        @endcomponent
        <div class="container">
            <main role="main">
                @hasSection('body')
                    @yield('body')
                @endif    
            </mains>
        </div>
        <!-- Footer -->
<footer class="page-footer font-small bg-info pt-4">
<!-- Footer Links -->
<div class="container-fluid text-center text-md-left">
  <!-- Grid row -->
  <div class="row">
    <!-- Grid column -->
    <div class="col-md-6 mt-md-0 mt-3">
      <!-- Content -->
      <h5 class="text-uppercase">Footer Content</h5>
      <p>Here you can use rows and columns here to organize your footer content.</p>
    </div>
    <!-- Grid column -->
    <hr class="clearfix w-100 d-md-none pb-3">
    <!-- Grid column -->
    <div class="col-md-3 mb-md-0 mb-3">
        <!-- Links -->
        <h5 class="text-uppercase">Social</h5>
        <ul class="list-unstyled">
          <li>
            <a href="#!">Link 1</a>
          </li>
          <li>
            <a href="#!">Link 2</a>
          </li>
          <li>
            <a href="#!">Link 3</a>
          </li>
          <li>
            <a href="#!">Link 4</a>
          </li>
        </ul>
      </div>
      <!-- Grid column -->
      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3">
        <!-- Links -->
        <h5 class="text-uppercase">Contato</h5>
        <ul class="list-unstyled">
            <li>
               Santos-SP
            </li>
            <li>
                (13)997125069
            </li>
        </ul>
      </div>
      <!-- Grid column -->
  </div>
  <!-- Grid row -->
</div>
<!-- Footer Links -->
<!-- Copyright -->
<div class="footer-copyright text-center py-3 bg-primary">© 2018 Copyright: IBico Solutions
  <a href="https://mdbootstrap.com/education/bootstrap/"> www.ibico.com.br</a>
</div>
<!-- Copyright -->
</footer>
<!-- Footer -->
    </body>
</html>