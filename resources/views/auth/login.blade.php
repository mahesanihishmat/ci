<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bootstrap Material Admin by Bootstrapious.com</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="../back/vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="../back/vendor/font-awesome/css/font-awesome.min.css">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="../back/css/fontastic.css">
    <!-- Google fonts - Poppins -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="../back/css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="../back/css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="../back/img/favicon.ico">
    <style type="text/css">
        
        .login-page .form-holder .info{
            background: rgba(44, 46, 148, 0.83);
        }
        .btn-primary{
                background-color: #2c2e94;
    border-color: #2c2e94;
        }
         .btn-primary:hover{
            background-color: #f28631;
    border-color: #f28631;
}

.login-page .form-holder .form a.forgot-pass, .login-page .form-holder .form a.signup{
    color: #2d2e94;
}
a{
    color: #2d2e94;
}
    </style>
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <div class="page login-page">
      <div class="container d-flex align-items-center">
        <div class="form-holder has-shadow">
          <div class="row">
            <!-- Logo & Information Panel-->
            <div class="col-lg-6">
              <div class="info d-flex align-items-center">
                <div class="content">
                  <div class="logo text-center">
                     <img src="../img/logo/color-1.png"> <br><br>
                    <h2>  CIVIL GROUP OF INSTITUTES </h2>
                  </div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
              </div>
            </div>
            <!-- Form Panel    -->
            <div class="col-lg-6 bg-white">
              <div class="form d-flex align-items-center">
                <div class="content">
                   
                    {!! Form::open(['url' => '/login', 'method'=> 'POST', 'class'=>' form-horizontal','role'=>'form', 'id'=>'register-form'])!!}
                 

                        <div class="form-group">
                            {{-- {{ Form::label('email','Email:')}} --}}
                            {{Form::email('email',  old('email'), ['placeholder'=>'Email', 'class' =>'input-material', 'required' => ''] )}}


                            @if ($errors->has('email'))
                                    <label class="error"  for="email">{{ $errors->first('email') }}
                                    </label>
                            @endif
                        </div>

                        <div class="form-group">
                            {{-- {{ Form::label('password','Password:')}} --}}
                            {{Form::password('password', ['placeholder'=>'Password', 'class' =>'input-material', 'required' => ''])}}
                            @if ($errors->has('password'))
                                    <label class="error" for="password">{{ $errors->first('password') }}
                                    </label>
                            @endif
                        </div>

                        <div class="form-group" style="margin-top: 0px;margin-bottom: 25px;">
                            {{Form::checkbox('remember')}} <span style="color: #505050"> Remeber me </span>
                        </div>

                        <div class="input input-submit">
                            {{ Form::submit('login', ['class'=> 'btn btn-primary', 'id'=> 'register'])}}
                        </div>
                      
                  
                   {{Form::close()}}

               
                  <a href="{{ url('/password/reset') }}" class="forgot-pass">Forgot Your Password?</a><br><small>Do not have an account? </small><a href={{ url('/auth/register') }} class="signup">Signup</a>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="copyrights text-center">
        <p>Copyright @ 2018 <a href="#" class="external">Civil</a></p>
        <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
      </div>
    </div>
    
   
    <!-- Javascript files-->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="../back/vendor/popper.js/umd/popper.min.js"> </script>
    <script src="../back/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="../back/vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="../back/vendor/chart.js/Chart.min.js"></script>
    <script src="../back/vendor/jquery-validation/jquery.validate.min.js"></script>
    <!-- Main File-->
    <script src="../back/js/front.js"></script>
    <!---->
   
  </body>
</html>



