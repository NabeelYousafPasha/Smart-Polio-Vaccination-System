<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8" />
      <title>SPVDS - login</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
      <meta content="" name="description" />
      <meta content="" name="author" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- App favicon -->
      <link rel="shortcut icon" href="{{asset('img/favicon.ico')}}">
      @include('common/headerScript')
   </head>
   <body class="account-pages">

      <!-- Begin page -->
      <div class="accountbg"></div>
      <div class="wrapper-page account-page-full">
      <div class="card">
         @if ($role ?? Null)
         <a class="nav-link" href="{{ route('parentregistration') }}"><button class="btn-Register">Get Register</button></a>
         @endif
         <div class="card-block">
            <div class="account-box">
               <div class="card-box p-5">
                  <h2 class="text-uppercase text-center pb-4">
                     <a href="/" class="text-success">
                     <span>SMART POLIO VACCINATION SYSTEM</span>
                     </a>
                  </h2>
                  <form action="{{ route('login') }}" class="login-form" method="POST">
                     @csrf
                     @include('errors.pageLevelErrors')
                     @error('username')
                     <div class="alert alert-danger display-hide" style="visibility: visible;">
                        <button class="close" data-close="alert">
                        </button>
                        <span>
                        {{ $message }}
                        </span>
                     </div>
                     @enderror
                     <div class="form-group mb-4 row">
                        <div class="col-12">
                           <label for="username">{{ __((($role ?? null) == 2) ? 'CNIC' : 'User Name') }}</label>
                           <input autocomplete="off" class="form-control full placeholder-no-fix" name="username" placeholder="Username" required="required" type="text"/>
                        </div>
                     </div>
                     <div class="form-group row mb-4">
                        <div class="col-12">
                           <label for="password">Password</label>
                           <input autocomplete="off" class="form-control full placeholder-no-fix" name="password" placeholder="Password" required="required" type="password"/>
                        </div>
                     </div>
                     <div class="form-actions">
                        <div class="space10">
                        </div>
                        <div class="form-group row mb-4">
                           <div class="col-sm-6">
                              <div class="checkbox checkbox-custom">
                                 <input id="remember" type="checkbox" checked="">
                                 <label for="remember">
                                 Remember me
                                 </label>
                              </div>
                           </div>
                           <div class="col-sm-6">
                              <a class="text-muted pull-right" href="{{ route('password.request') }}">
                           <small>Forgot password</small>
                           </a>
                           </div>
                           
                        </div>

                        <div class="form-group row text-center m-t-10">
                           <div class="col-12">
                              <button class="btn btn-block btn-custom waves-effect waves-light" type="submit">Sign In</button>
                           </div>
                        </div>
                  </form>
         
                  </div>
               </div>
            </div>
         </div>
         <div class="m-t-40 text-center">
            <p class="account-copyright">2020 © SPVDS</p>
         </div>
      </div>
            <script src="{{asset('js/jquery.min.js')}}"></script>
             <script src="{{asset('js/bootstrap.min.js')}}"></script>
   </body>
</html>
