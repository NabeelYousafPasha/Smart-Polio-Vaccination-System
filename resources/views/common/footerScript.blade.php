	<script src="{{asset('js/jquery.min.js')}}"></script>
      <script src="{{asset('js/popper.min.js')}}"></script>
      <script src="{{asset('js/bootstrap.min.js')}}"></script>
      <script src="{{asset('js/metisMenu.min.js')}}"></script>
      <script src="{{asset('js/jquery.slimscroll.js')}}"></script>
      <script src="{{asset('js/jquery.app.js')}}"></script>
      <script type="text/javascript">
        $(document).ready(function(){

          $(window).on("resize",function(){
           if($(window).width() > "1024")
                      {
                            $(".side-menu").css("left","0");
                      }
                      else
                      {
                            $(".side-menu").css("left","");
                      }
                });
                                   


          $(".button-menu-mobile").click(function(){
            $(".side-menu").toggleClass("active");


            if($(".side-menu").hasClass("active"))
            {

              $(".side-menu").animate({left:"0"},"fast");
              $(".blackOpacity").addClass("visibleNow");
                              $("body").css("overflow","hidden");
            }

            else
            {

              $(".side-menu").animate({left:"-240"},"fast");
              $(".blackOpacity").removeClass("visibleNow");
                              $("body").css("overflow","initial");
            }
                        
            
          });




            
            $('body,html').on('click touchstart',function(e){
             if (!$(e.target).closest('.side-menu').length && !$(e.target).closest('.navbar-custom').length) {

                              
              if($(".side-menu").hasClass("active"))
              {
                $(".side-menu").removeClass("active");
              $(".side-menu").animate({left:"-240"},"fast");
              $(".blackOpacity").removeClass("visibleNow");
                                   $("body").css("overflow","initial");
           }
              }
              
            
        
      });

        

      // if ($(".card-box").height() > $(window).height())

      // {
      //     $(".card-box").css("height","initial");
      // }
      // else
         
      // {
      //       $(".card-box").css("height","calc(100% - 30px)");

      // }




          
        });

      </script>
       <script>




         $(function () {
         if($(window).width() > "768")
         {
         var tableRow = '.longTable .table  tbody  tr';
         var tableRowAllData = ".longTable .table  tbody  tr  td:not(:last-child)";
         var tableRowAction = ".longTable .table  tbody  tr  td:last-child";
         
         $(tableRow).after("<div class='lineForBorder'></div>");
         
         
         $(tableRowAction).mouseenter(function(){
         $(tableRow).css("transform","initial");

         
            
         
         }).mouseleave(function()
           {
         
           
             if($(".dropdown-menu.dropdown-menu-right").hasClass("show") && $(".btn-group.dropdown").hasClass("show"))
            {
            
         $(".show > .dropdown-menu").click();
      }
         
            $(tableRow).css("transform","scale(1,1)");
         
         
           });
         
         
         
           $(tableRowAllData).mouseenter(function()
           {

            if(!$(this).text() == "")
            {
                var data=$(this).html();
         
               $(this).append("<div class='toolTip'></div>");
         
               $(this).find(".toolTip").html(data);
            }
               
          
            
         
         
           })
           .mouseleave(function()
           {
            $(this).find("div").remove();
           });
         }
         
         
         
         });
           
      </script>

      