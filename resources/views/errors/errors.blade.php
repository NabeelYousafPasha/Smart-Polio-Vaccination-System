<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8" />
      <title>Jekoon</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
      <meta content="" name="description" />
      <meta content="" name="author" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- App favicon -->
      <link rel="shortcut icon" href="/img/favicon.ico">
            <!-- App css -->

    <link href="{{URL::asset('css/themeCSS/plugins/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
    
    <link href="{{URL::asset('css/themeCSS/style.css')}}" rel="stylesheet" type="text/css"/>
    
      
      <style>
         body,html
         {
                
               padding-bottom: 0px;
         }
         body
         {
             background: url('img/errorbg.png');
                 background-size: cover;
         }
      </style>
   </head>
   <body>
         <section id="errorPage">
            <div class="bg_clr">
               <div class="space130"></div>
               <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="row">
                        <div class="col-md-5">
                     <img src="/img/error.png" class="img-fluid" alt="">
                  </div>
                 
                  <div class="col-md-7">
                   <div class="space80"></div>
                     <h1>He's dead,<span class="themeColorPink">   {{Auth::user()?Auth::user()->name:""}}</span></h1>
                     <div class="space20"></div>
                     <p class="p_style">  {{$message}} </p>
                     <div class="space30"></div>
                    <div class="row">
                       <div class="col-md-12 text-center">
                           <a href="{{Auth::user()?route('dashboard'):route('login')}}" class="btn draw-border"><i class="fa fa-chevron-left"></i>&nbsp; Go Back</a>
                       </div>
                    </div>
                  </div>
                     </div>
                  </div>
                  
               </div>
            </div>
         </div>
         </section>


 
    <script src="{{URL::asset('js/jquery.min.js')}}" type="text/javascript" />
  
    <script src="{{URL::asset('js/bootstrap.min.js')}}" type="text/javascript" />
   
      
    
   </body>
</html>