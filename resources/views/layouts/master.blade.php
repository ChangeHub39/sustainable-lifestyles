<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" >
    <title>Sustainable Lifestyles</title>
    <meta name="description" content="">
    <meta name="author" content="Cam Hovell">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="apple-touch-icon" href="{{ asset('apple-touch-icon.png') }}">
    <link rel="icon" type="img/ico" href="{{ asset('favicon.ico') }}">

    <link rel="stylesheet" href="//bootswatch.com/flatly/bootstrap.min.css">
    <link rel="stylesheet" href="{{ elixir('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <style>
      body {
        padding-top: 90px;
        padding-bottom: 20px;
      }
    </style>


    
    

    <script src="{{ asset('js/vendor/modernizr-2.8.3-respond-1.4.2.min.js') }}"></script>
  </head>
  <body>


 <!-- Modal -->
<div class="modal fade" id="privacyModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title" id="exampleModalLongTitle">Terms and Conditions</h5>
          
        
      </div>
      <div class="modal-body">
        <h5><strong>Data Privacy</strong></h5>
        <ul>
          <li> ChangeHub Limited (we, us, our) grant the user of this public digital platform (you, your) a non-exclusive and non-transferable right to use our digital platform and its documentation.</li>
          <li> All information we request from you is for the sole use of ChangeHub; we will not share your details with any third party.</li>
          <li> This website uses cookies solely for remembering your settings without storing any personal or sensitive information.</li>
          <li> You own all rights to the data you save in the digital platform. You have sole responsibility for the accuracy, reliability, legality, integrity, and quality of this data.</li>
          <li> You acknowledge and agree that we may retain and use your data to improve our digital platform and related services and to ensure that you are complying with the terms and conditions of this digital platform.</li>
          <li> We will not be responsible for any alteration, destruction, loss or disclosure of your data caused by any third party.</li>
          <li> While we will use reasonable endeavours to back-up your data, and take technical and organisational measures against any unlawful or unauthorised handling of your data, you acknowledge that your sole remedy in the case of any damage or loss to your data will be for us to reasonably restore the damaged or lost data from the latest back-up of such data maintained by us.</li>
        </ul>

        <h5><strong>Use and Redistribution</strong></h5>
        <ul>
           
          <li>The digital platform is a public good provided by us for use by individuals and households. It contains our intellectual property including proprietary information and data and publicly available information and data adapted by us.</li>
          <li>The digital platform may not be used by organisations, sole traders, or partnerships engaged in commercial or other similar activities.</li>
          <li>You acknowledge and agree you will not use the digital platform for commercial purposes or charge for its use.</li>
          <li>We reserve the right to recover fees for use of the digital platform where the digital platform is found to have been used for commercial purposes.</li>
          <li>You acknowledge and agree to not attempt to copy, modify, duplicate, create derivative works from, frame, mirror, republish, download, display, transmit, or distribute all or any portion of our digital platform and its documentation in any form or media; or attempt to reverse compile, disassemble, reverse engineer or otherwise reduce to human-perceivable form all or any part of our digital platform.</li>
          <li>You acknowledge and agree to not access, store, distribute or transmit any malware to the software, and agree that we may, without liability to you, disable your access to our digital platform if you are in breach of this clause.</li>
          <li>You acknowledge that we regularly update our digital platform and its documentation. Some of these changes will occur automatically, while others may require you to undertake some changes at your end; we will provide you with reasonable notice in case of any such changes.</li>
        </ul>

        <h5><strong>Intellectual Property</strong></h5>
        <ul>
        
        <li>You acknowledge and agree that ChangeHub owns all intellectual property rights in the digital platform and its documentation.</li>

        </ul>

        <h5><strong>Warranties and Liability</strong></h5>
        <ul>
<li> We warrant that the digital platform will function substantially as described in its documentation and that related services and support will be provided with reasonable care and skill.</li>
<li> If the digital platform does not function substantially in accordance with its documentation, we will at our discretion either modify it to conform to the documentation or provide a workaround.</li>
<li> We reserve the right to remove the digital platform at any time at our sole discretion.</li>
<li> We do not warrant that the digital platform and its documentation will be in customised formats specific to you, or that your use of the digital platform will be uninterrupted or error-free.</li>
<li> We do not warrant the accuracy, correctness, reliability and completeness of any information, formulae, or calculation provided through the use of our digital platform.</li>
<li> You acknowledge that the results from any calculations are for informational purposes, and that assumptions used and graphs generated are for illustration purposes only and are subject to change depending on a variety of factors which may not have been taken into account in the computation.</li>
<li> We will not be liable for any form of damage or loss resulting from your use of and reliance on the digital platform.</li>

</ul>

      </div>
      <div class="modal-footer">
        
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>






  <div id="wrap">
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>  
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/" style="padding-top: 0px">
                  <span> <img src="{{ asset('img/logo.png') }}" style="margin-top: 15px"></span>
                 Sustainable Lifestyles

                </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">

         <!--  <ul class="nav navbar-nav">
            <li class="{{ Route::currentRouteName() === 'home' ? 'active' : null }}"><a href="{{ route('home') }}">Home</a></li>
            <li class="{{ Route::currentRouteName() === 'about' ? 'active' : null }}"><a href="{{ route('about') }}">About</a></li>
          </ul>
   -->

          <ul class="nav navbar-nav navbar-right">
            @if(Auth::check())
              <li><a href="{{ route('dashboard') }}">Welcome back, {{ Auth::user()->fname}} {{ Auth::user()->lname}}.</a></li>
              <li><a href="{{ route('auth.logout') }}">Logout</a></li>
         
            @else
              <li><a href="{{ route('auth.register') }}">Register</a></li>
              <li><a href="{{ route('auth.login') }}">Login</a></li>
            @endif
          </ul>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>


    @yield('content')


    @foreach(['success', 'info', 'warning', 'danger'] as $level)
      @if(session("status.$level"))
        <div class="container">
          <div class="alert alert-{{ $level }}">
            <p>{{ session("status.$level") }}</p>
          </div>
        </div>
      @endif
    @endforeach

</div>
</div>

<div class="container">
<hr>

<div class="footer">
<span class="text-muted">&copy; ChangeHub. All Rights Reserved <?php echo date("Y") ?> <a  data-toggle="modal" href="#privacyModal">Terms and Conditions</a>
</span>
</div>
</div>

<!-- Web Development by Cam Hovell  -->
    
    

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="{{ asset('js/vendor/jquery-1.11.2.min.js') }}"><\/script>')</script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.maskedinput.min.js') }}"></script>
      <script type="text/javascript">
         jQuery(function($){
   $("#flybuys").mask("6014-9999-9999-9999",{placeholder:"6014-0000-0000-0000"});
   $("#phones").mask("");});
   $("#start-time").mask("99:99 am",{placeholder:"09:00 am"});
   $("#end-time").mask("99:99 am",{placeholder:"05:00 pm"});
   $(function () {
    $('[data-toggle="tooltip"]').tooltip()})

      </script>
    <script src="{{ asset('js/main.js') }}"></script>
  </body>
</html>
