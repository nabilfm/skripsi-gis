
<!DOCTYPE html>
  <html lang="en">
    <!--<base href="http://localhost/kh/"></base>-->
    <head>
    	<title>@yield('title')</title>
    	@include('template.head')
        <script src="{{asset('smbr/js/appv.js')}}"></script>
        <script src="{{asset('smbr/js/dist/jquery.validate.js')}}"></script>
        <script src="{{asset('smbr/js/dist/additional-methods.js')}}"></script>
        <style type="text/css">
          .input-field div.error{
            position: relative;
            top: -1rem;
            left: 0rem;
            font-size: 0.8rem;
            color:#FF4081;
            -webkit-transform: translateY(0%);
            -ms-transform: translateY(0%);
            -o-transform: translateY(0%);
            transform: translateY(0%);
          }
          .input-field label.active{
              width:100%;
          }
          .left-alert input[type=text] + label:after,
          /*.left-alert input[type=checkbox] + label:after,*/
          .left-alert input[type=password] + label:after,
          .left-alert input[type=email] + label:after,
          .left-alert input[type=url] + label:after,
          .left-alert input[type=time] + label:after,
          .left-alert input[type=date] + label:after,
          .left-alert input[type=datetime-local] + label:after,
          .left-alert input[type=tel] + label:after,
          .left-alert input[type=number] + label:after,
          .left-alert input[type=search] + label:after,
          .left-alert textarea.materialize-textarea + label:after{
              left:0px;
          }
          .right-alert input[type=text] + label:after,
          .right-alert input[type=password] + label:after,
          .right-alert input[type=email] + label:after,
          .right-alert input[type=url] + label:after,
          .right-alert input[type=time] + label:after,
          .right-alert input[type=date] + label:after,
          .right-alert input[type=datetime-local] + label:after,
          .right-alert input[type=tel] + label:after,
          .right-alert input[type=number] + label:after,
          .right-alert input[type=search] + label:after,
          .right-alert textarea.materialize-textarea + label:after{
              right:70px;
          }
        </style>
        @yield('head')
    </head>

    <body bgcolor="#0D47A1">
    @include('template.header')
			@yield('content')
    @yield('footer')
    </body>
  </html>


<!--Footer HTML code-->