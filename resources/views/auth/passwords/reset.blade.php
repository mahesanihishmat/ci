
<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login  || Civil</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="../../img/favicon.ico">
     <!-- Styles -->
  
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
    <!-- Fonts -->
    <link href="../../fonts/lato/lato.css" rel="stylesheet">
    <!-- CSS -->
    <!-- Bootstrap CSS
    ============================================ -->
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <!-- Icon Font CSS
    ============================================ -->
    <link rel="stylesheet" href="../../css/icofont.css">
    <!-- Plugins CSS
    ============================================ -->
    <link rel="stylesheet" href="../../css/plugins.css">
    <!-- ShortCodes CSS
    ============================================ -->
    <link rel="stylesheet" href="../../css/shortcode/shortcodes.css">
    <!-- Style CSS
    ============================================ -->
    <link rel="stylesheet" href="../../style.css">
    <!-- Responsive CSS
    ============================================ -->
    <link rel="stylesheet" href="../../css/responsive.css">
    <!-- Style customizer (Remove these two lines please) -->
    <link rel="stylesheet" href="../../css/style-customizer.css">
    <link href="#" data-style="styles" rel="stylesheet">
    <!-- Modernizer JS
    ============================================ -->
    <script src="../../js/vendor/modernizr-2.8.3.min.js"></script>
</head>
<body>

<!-- Body main wrapper start -->
<div class="wrapper fix">
<!-- Header 1
============================================ -->


<!-- Contatc Area
============================================ -->
<div id="contact-area" class="contact-area bg-white">
    <div class="container pb-20 pt-20">
        <!-- Section Title -->
        <div class="row">
            <div class="section-title text-center col-xs-12 mb-45">
                <img src="../../img/logo/color-1.png">
                <br><br>
                <h3 class="heading">CIVIL GROUP OF INSTITUTES</h3>

                <div class="excerpt">
                    
                    
                </div>
                <i class="icofont icofont-traffic-light"></i>
            </div>
        </div>
        
    </div>
    
</div>



<!-- Contatc Area
============================================ -->
<div id="contact-area" class="contact-area bg-gray">
    <div class="container pb-40 pt-40">
        <!-- Section Title -->
        <div class="row">
            <div class="section-title text-center col-xs-12 mb-45">
                <h3 class="heading">Reset you Password</h3>
                <div class="excerpt">
                    <p>Lorem ipsum dolor sit amet, consectetur maksu rez do eiusmod tempor magna aliqua</p>
                </div>
                <i class="icofont icofont-traffic-light"></i>
            </div>
        </div>
        <div class="row">
            <div class="container">
       <!-- Contact Form -->
            <div class="contact-form form text-left col-md-6 col-sm-7 col-xs-12 col-md-offset-3">
                    {!! Form::open(['url' => '/password/reset', 'class'=>'form-horizontal','role'=>'form'])!!}
                 

                        <div class="input">
                            {{ Form::label('email','Email:')}}
                            {{Form::email('email',  old('email'), ['placeholder'=>''] )}}
                            @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>


                        <div class="input">
                            {{ Form::label('password','Password:')}}
                            {{Form::password('password', ['placeholder' => ''])}}
                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                        @endif
                        </div>

                        <div class="input">
                            {{ Form::label('password_confirmation','Confirm Password:')}}
                            {{Form::password('password_confirmation', ['placeholder' => ''])}}

                             @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                             @endif
                        </div>





                      
                      
                        <div class="input input-submit">
                                {{ Form::submit('Reset Password', ['class'=> 'input input-submit'])}}
                        </div>
                        
                  
                   {{Form::close()}}
                
                </div>
            </div>

        </div>
    </div>
    
</div>



</div>
<!-- Body main wrapper end -->





<!-- jQuery JS
============================================ -->
<script src="../../js/vendor/jquery-1.12.0.min.js"></script>
<!-- Bootstrap JS
============================================ -->
<script src="../../js/bootstrap.min.js"></script>
<!-- Plugins JS
============================================ -->
<script src="../../js/plugins.js"></script>
<!-- Ajax Mail JS
============================================ -->
<script src="../../js/ajax-mail.js"></script>
<!-- WOW JS
============================================ -->
<script src="../../js/wow.min.js"></script>
<!-- Google Map APi
============================================ -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAdWLY_Y6FL7QGW5vcO3zajUEsrKfQPNzI"></script>
<script src="../../js/map.js"></script>
<!-- Style Customizer JS
============================================ -->
<script src="../../js/style-customizer.js"></script>
<!-- Main JS
============================================ -->
<script src="../../js/main.js"></script>

</body>
</html>




