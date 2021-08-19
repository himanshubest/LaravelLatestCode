
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>Material Bootstrap Wizard by Creative Tim</title>

  <link rel="apple-touch-icon" sizes="76x76" href="{{asset('assets/img/apple-icon.png')}}" />
  <link rel="icon" type="image/png" href="{{asset('assets/img/favicon.png')}}" />

 

  
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

  <!-- CSS Files -->
   <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" />
  
  <link href="{{asset('assets/css/material-bootstrap-wizard.css')}}" rel="stylesheet" />

  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="{{asset('assets/css/demo.css')}}" rel="stylesheet" />
  <!-- Google Tag Manager -->
  
  <!-- End Google Tag Manager -->
  </head>

  <body>
    <!-- Google Tag Manager (noscript) -->
  
  <!-- End Google Tag Manager (noscript) -->
  <div class="image-container set-full-height" style="background-image: url('Admin_Assit/assets/img/form-image.jpg')">
      <!--   Creative Tim Branding   -->
   

    <!--  Made With Material Kit  -->
   

      <!--   Big container   -->
      <div class="container">
          <div class="row">
            <div class="col-sm-12 col-sm-offset-0">
                <!--      Wizard container        -->
                <div class="wizard-container">
                    <div class="card wizard-card" data-color="red" id="wizard">
                        <form action="" method="" id="datain">
                    <!--        You can switch " data-color="blue" "  with one of the next bright colors: "green", "orange", "red", "purple"             -->

                          <div class="wizard-header">
                              <h3 class="wizard-title">
                                Welcome to
15 Campbell Street, Amityville, NY 11701
Sign-in to get Started
                              </h3>
                  <!--<h5>This information will let us know more about you.</h5>-->
                          </div>
              

                           
                               <div class="tab-pane" id="description">
                                    <div class="row">
                                        <h2 class="info-text"> Are You Working With a Real Estate Agent?</h2>
                                        
                                        <div class="col-sm-10 col-sm-offset-1">
                                          
                                          <div class="row">
                                          <div class="form-check ">
                                              <input class="form-check-input" type="radio" name="Working_Real_Estate" id="Working_Real_Estate" value="Yes" style=" border: 0px;width: 10%;height: 2em;" onclick="step2()">
                                               <label class="form-check-label" for="inlineRadio1" style="font-size:30px;">Yes</label>
                                          </div>
                                          <div class="form-check ">
                                            <input class="form-check-input" type="radio" name="Working_Real_Estate" id="Working_Real_Estate" value="No" style=" border: 0px;width: 10%;height: 2em;" onclick="step2()">
                                            <label class="form-check-label" for="inlineRadio2" style="font-size:30px;">No</label>
                                          </div>
                                                  
                                              
                                           </div>
                                           
                                        </div>
                                       
                                    </div>
                                </div>


                               

                                
                              
                                 



                                

                          
                            <div class="wizard-footer" style="margin-top:200px">
                                <!--<div class="pull-right">
                                      <input type='button' class='btn  btn-fill btn-danger btn-wd' name='next' value='Next' onclick="step0();" />
                                      
                                  </div>-->
                                  <div class="pull-left">
                                      <input type='button' class='btn  btn-fill btn-default btn-wd' name='previous' value='Previous' onclick="backclick();"/>

                    
                                  </div>
                                  <div class="clearfix"></div>
                            </div>
                        </form>
                    </div>
                </div> <!-- wizard container -->
            </div>
        </div> <!-- row -->
    </div> <!--  big container -->

      

    
    </div>

  </div>

</body>
  <!--   Core JS Files   -->
  <script src="{{asset('assets/js/jquery-2.2.4.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('assets/js/bootstrap.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('assets/js/jquery.bootstrap.js')}}" type="text/javascript"></script>

  <!--  Plugin for the Wizard -->
  <script src="{{asset('assets/js/demo.js')}}" type="text/javascript"></script>
  <script src="{{asset('assets/js/material-bootstrap-wizard.js')}}" type="text/javascript"></script>

  <!--  More information about jquery.validate here: https://jqueryvalidation.org/   -->
  <script src="{{asset('assets/js/jquery.validate.min.js')}}" type="text/javascript"></script>

  <script type="text/javascript">
    
$(document).ready(function () {


       //alert("hello");

       fill_data();
});

function fill_data() 
{
     //alert("hello1");
     $.ajax({
            url: "{{url('/prebtn')}}",
            method: 'get',
            dataType: 'json',
     success: function (data) {
             // alert("hello2");
              console.log(data[0].Working_Real_Estate);
           //$('input[name="Home_Loan"]:checked').val(data[0].Home_Loan);
           $('input[name=Working_Real_Estate][value="'+data[0].Working_Real_Estate+'"]').attr('checked', true); 
     }



     });
}


function step2()
{
  //alert("test1");
  //alert($('input[name="Home_Loan"]:checked').val());

  var data1 =  $('input[name="Working_Real_Estate"]:checked').val();
   var _data = {
       Working_Real_Estate:  $('input[name="Working_Real_Estate"]:checked').val(),
       
     }

     $.ajax({
                url: "{{url('/welcome/step2')}}",
                //data: $("#datain").serialize(),
                method: 'get',
                data:_data,
                dataType: 'html',
                success: function (result) {
                    if(data1=="Yes")
                    {
                          var url = "{{url('/si3')}}";
                          $(location).attr('href',url);
                    }
                    else
                    {
                         var url = "{{url('/si4')}}";
                          $(location).attr('href',url);
                    }
                   
                },
            })
}

function backclick()
{
    var url = "{{url('/si1')}}";
     $(location).attr('href',url);
    
}

  </script>


 

</html>
